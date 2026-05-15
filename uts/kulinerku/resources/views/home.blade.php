<!DOCTYPE html>
<html>
<head>

    <title>Kulinerku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

.custom-bg {

    background:
    linear-gradient(
        rgba(0,0,0,0.35),
        rgba(0,0,0,0.35)
    ),

    url('{{ asset('images/bg.png') }}');

    background-size: cover;

    background-position: center;

    background-attachment: fixed;

    min-height: 100vh;
}

/* CARD MAKANAN */

.card {

    background: rgba(92, 64, 51, 0.78);

    border: 1px solid rgba(255,255,255,0.08);

    border-radius: 20px;

    overflow: hidden;

    backdrop-filter: blur(8px);

    box-shadow:
        0 8px 25px rgba(0,0,0,0.35);

    transition: 0.3s;
}

/* EFEK HOVER */

.card:hover {

    transform: translateY(-8px);

    box-shadow:
        0 15px 35px rgba(0,0,0,0.45);
}

/* JUDUL WEBSITE */

h1 {

    color: #fff;

    font-weight: bold;

    text-shadow:
        2px 2px 15px rgba(0,0,0,0.9);

    letter-spacing: 3px;
}

/* TEKS DI CARD */

.card h4 {

    color: #fff;

    font-weight: bold;
}

.card p {

    color: #f5e6d3;

    font-size: 18px;
}

.card b {

    color: #ffe0b2;
}

/* TOMBOL */

.btn-primary {

    background: rgba(60, 35, 20, 0.85);

    border: none;

    border-radius: 12px;

    padding: 10px 22px;

    font-weight: bold;

    transition: 0.3s;
}

/* HOVER TOMBOL */

.btn-primary:hover {

    background: rgba(35, 20, 10, 0.95);

    transform: scale(1.05);
}

</style>

</head>

<body class="custom-bg">

<div class="container py-5">

    <h1 class="mb-5 text-center">
        CHICKEN KULINER
    </h1>

    <div class="row">

        @foreach($foods as $food)

        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow">

                <img
                    src="{{ $food->image }}"
                    class="card-img-top"
                    style="height:250px; object-fit:cover;"
                >

                <div class="card-body">

                    <h4>
                        {{ $food->name }}
                    </h4>

                    <p>
                        <b>Kategori:</b>
                        {{ $food->category }}
                    </p>

                    <p>
                        <b>Area:</b>
                        {{ $food->area }}
                    </p>

                    <a
                        href="/food/{{ $food->id }}"
                        class="btn btn-primary"
                    >
                        Detail
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>