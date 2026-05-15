<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Support\Facades\Http;

class FoodController extends Controller
{
    public function index()
    {
        $response = Http::withoutVerifying()->get(
            'https://www.themealdb.com/api/json/v1/1/search.php?s=chicken'
        );

        $foods = $response->json();

        if (isset($foods['meals'])) {
            foreach ($foods['meals'] as $item) {
                Food::updateOrCreate(
                    ['name' => $item['strMeal']],
                    [
                        'image' => $item['strMealThumb'],
                        'category' => $item['strCategory'],
                        'area' => $item['strArea'],
                        'instructions' => $item['strInstructions'],
                        'youtube' => $item['strYoutube']
                    ]
                );
            }
        }

        $data = Food::all();

        return view('home', [
            'foods' => $data
        ]);
    }

    public function show($id)
    {
        $food = Food::findOrFail($id);

        return view('show', [
            'food' => $food
        ]);
    }
}