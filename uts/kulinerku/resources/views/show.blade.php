<!DOCTYPE html>
<html>

<head>

    <title>{{ $food->name }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>

        body {

            font-family: 'Poppins', sans-serif;
        }

        /* BACKGROUND */

        .custom-bg {

            background:
            linear-gradient(
                rgba(0,0,0,0.45),
                rgba(0,0,0,0.45)
            ),

            url('{{ asset('images/bg.png') }}');

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            min-height: 100vh;

            padding: 50px 0;
        }

        /* CARD */

        .detail-card {

            background: rgba(92, 64, 51, 0.80);

            border-radius: 25px;

            overflow: hidden;

            backdrop-filter: blur(10px);

            box-shadow:
                0 10px 35px rgba(0,0,0,0.45);

            border: 1px solid rgba(255,255,255,0.08);
        }

        /* GAMBAR */

        .detail-image {

            width: 100%;

            height: 500px;

            object-fit: cover;
        }

        /* KONTEN */

        .content {

            padding: 35px;
        }

        h1 {

            color: white;

            font-weight: bold;

            margin-bottom: 25px;
        }

        p {

            color: #f5e6d3;

            font-size: 18px;

            line-height: 1.8;
        }

        b {

            color: #ffe0b2;
        }

        h3 {

            color: white;

            margin-top: 35px;

            margin-bottom: 20px;
        }

        /* TOMBOL */

        .custom-btn {

            background: rgba(45, 25, 15, 0.92);

            color: white;

            border: none;

            border-radius: 14px;

            padding: 12px 24px;

            font-weight: bold;

            transition: 0.3s;

            text-decoration: none;

            display: inline-block;
        }

        .custom-btn:hover {

            background: rgba(25, 12, 5, 0.95);

            transform: scale(1.05);

            color: white;
        }

    </style>

</head>

<body class="custom-bg">

<div class="container">

    <!-- TOMBOL KEMBALI -->

    <a href="/" class="custom-btn mb-4">

        Kembali

    </a>

    <!-- CARD DETAIL -->

    <div class="detail-card">

        <img
            src="{{ $food->image }}"
            class="detail-image"
        >

        <div class="content">

            <h1>

                {{ $food->name }}

            </h1>

            <p>

                <b>Kategori:</b>
                {{ $food->category }}

            </p>

            <p>

                <b>Area:</b>
                {{ $food->area }}

            </p>

            <h3>
                Instruksi Memasak
            </h3>

            <p>

                {{ $food->instructions }}

            </p>

            <a
                href="{{ $food->youtube }}"
                target="_blank"
                class="custom-btn mt-3"
            >

                Tonton Tutorial

            </a>

        </div>

    </div>

</div>

</body>
</html>