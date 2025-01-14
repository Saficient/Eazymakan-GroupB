<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EazyMakan - Menu</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
        }

        .menu-header {
            background-color: #0a192f;
            color: white;
            padding: 20px 0;
            margin-bottom: 40px;
        }

        .menu-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .menu-subtitle {
            font-size: 1.2rem;
            color: #ccc;
        }

        .mahallah-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 0 50px;
            margin-bottom: 50px;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .back-btn:hover {
            color: #ccc;
        }

        .mahallah-card {
            display: block;
            text-decoration: none;
            background-color: #e9ecef;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .mahallah-card:hover {
            transform: translateY(-5px);
            text-decoration: none;
        }

        .mahallah-logo {
            width: 150px;
            height: 150px;
            margin-bottom: 15px;
            border-radius: 50%;
        }

        .mahallah-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="menu-header text-center">
        <a href="/" class="back-btn">
            <i class="bi bi-arrow-left"></i> Back to Home
        </a>
        <h1 class="menu-title">MENU</h1>
        <p class="menu-subtitle">Please choose which Mahallah cafeteria's food that you would like to order</p>
    </div>

    <div class="container">
        <div class="mahallah-grid">
            <!-- Mahallah Aminah -->
            <a href="{{ route('mahallah.menu', 'aminah') }}" class="mahallah-card">
                <img src="{{ asset('assets/img/mahallah-placeholder.jpg') }}" alt="Mahallah Aminah" class="mahallah-logo">
                <h3 class="mahallah-name">Mahallah Aminah</h3>
            </a>

            <!-- Mahallah Hafsa -->
            <a href="{{ route('mahallah.menu', 'hafsa') }}" class="mahallah-card">
                <img src="{{ asset('assets/img/mahallah-placeholder.jpg') }}" alt="Mahallah Hafsa" class="mahallah-logo">
                <h3 class="mahallah-name">Mahallah Hafsa</h3>
            </a>

            <!-- Mahallah Nusaibah -->
            <a href="{{ route('mahallah.menu', 'nusaibah') }}" class="mahallah-card">
                <img src="{{ asset('assets/img/mahallah-placeholder.jpg') }}" alt="Mahallah Nusaibah" class="mahallah-logo">
                <h3 class="mahallah-name">Mahallah Nusaibah</h3>
            </a>

            <!-- Mahallah Salahuddin -->
            <a href="{{ route('mahallah.menu', 'salahuddin') }}" class="mahallah-card">
                <img src="{{ asset('assets/img/mahallah-placeholder.jpg') }}" alt="Mahallah Salahuddin" class="mahallah-logo">
                <h3 class="mahallah-name">Mahallah Salahuddin</h3>
            </a>

            <!-- Mahallah Zubair -->
            <a href="{{ route('mahallah.menu', 'zubair') }}" class="mahallah-card">
                <img src="{{ asset('assets/img/mahallah-placeholder.jpg') }}" alt="Mahallah Zubair" class="mahallah-logo">
                <h3 class="mahallah-name">Mahallah Zubair</h3>
            </a>

            <!-- Mahallah Ali -->
            <a href="{{ route('mahallah.menu', 'ali') }}" class="mahallah-card">
                <img src="{{ asset('assets/img/mahallah-placeholder.jpg') }}" alt="Mahallah Ali" class="mahallah-logo">
                <h3 class="mahallah-name">Mahallah Ali</h3>
            </a>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
