<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $mahallah }} Menu - EazyMakan</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
        }

        .hero-section {
            background-color: #0a192f;
            color: white;
            padding: 60px 0;
            margin-bottom: 40px;
        }

        .menu-category {
            margin-bottom: 40px;
        }

        .category-title {
            color: #0a192f;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #0a192f;
        }

        .menu-item {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .menu-item h4 {
            color: #0a192f;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .menu-item .price {
            color: #dc3545;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .menu-item .description {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .order-btn {
            background-color: #0a192f;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .order-btn:hover {
            background-color: #152a4e;
        }

        .back-btn {
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .back-btn:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <a href="{{ route('menu') }}" class="back-btn mb-4">
                <i class="bi bi-arrow-left"></i> Back to Mahallah Selection
            </a>
            <h1 class="display-4">{{ $mahallah }} Menu</h1>
            <p class="lead">Explore our delicious offerings at {{ $mahallah }} cafeteria</p>
        </div>
    </div>

    <!-- Menu Content -->
    <div class="container">
        <!-- Breakfast Section -->
        <div class="menu-category">
            <h2 class="category-title">Breakfast</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu/breakfast-1.jpg') }}" alt="Breakfast Item">
                        <h4>Nasi Lemak</h4>
                        <p class="description">Coconut rice served with sambal, anchovies, peanuts, and cucumber</p>
                        <p class="price">RM 5.00</p>
                        <button class="order-btn" onclick="addToCart({
                            id: '1',
                            name: 'Nasi Lemak',
                            price: 5.00,
                            mahallah: '{{ $mahallah }}',
                            image: '{{ asset('assets/img/menu/breakfast-1.jpg') }}'
                        })">Add to Cart</button>
                    </div>
                </div>
                <!-- Add more breakfast items -->
            </div>
        </div>

        <!-- Lunch Section -->
        <div class="menu-category">
            <h2 class="category-title">Lunch</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu/lunch-1.jpg') }}" alt="Lunch Item">
                        <h4>Nasi Goreng Ayam</h4>
                        <p class="description">Fried rice with chicken, vegetables, and fried egg</p>
                        <p class="price">RM 7.00</p>
                        <button class="order-btn" onclick="addToCart({
                            id: '2',
                            name: 'Nasi Goreng Ayam',
                            price: 7.00,
                            mahallah: '{{ $mahallah }}',
                            image: '{{ asset('assets/img/menu/lunch-1.jpg') }}'
                        })">Add to Cart</button>
                    </div>
                </div>
                <!-- Add more lunch items -->
            </div>
        </div>

        <!-- Dinner Section -->
        <div class="menu-category">
            <h2 class="category-title">Dinner</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu/dinner-1.jpg') }}" alt="Dinner Item">
                        <h4>Chicken Shawarma</h4>
                        <p class="description">Grilled chicken wrap with garlic sauce and vegetables</p>
                        <p class="price">RM 8.00</p>
                        <button class="order-btn" onclick="addToCart({
                            id: '3',
                            name: 'Chicken Shawarma',
                            price: 8.00,
                            mahallah: '{{ $mahallah }}',
                            image: '{{ asset('assets/img/menu/dinner-1.jpg') }}'
                        })">Add to Cart</button>
                    </div>
                </div>
                <!-- Add more dinner items -->
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
    function addToCart(item) {
        fetch('{{ route('cart.add') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                id: item.id,
                name: item.name,
                price: item.price,
                quantity: 1,
                mahallah: item.mahallah,
                image: item.image
            })
        })
        .then(response => response.json())
        .then(data => {
            // Update cart count in navigation
            const cartBadge = document.querySelector('.badge');
            if (cartBadge) {
                cartBadge.textContent = data.cart_count;
            }
            alert('Item added to cart successfully!');
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to add item to cart');
        });
    }
    </script>
</body>
</html>
