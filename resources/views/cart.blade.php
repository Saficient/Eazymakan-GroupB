<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - EazyMakan</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
        }

        .cart-header {
            background-color: #0a192f;
            color: white;
            padding: 30px 0;
            margin-bottom: 40px;
        }

        .header-content {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .brand-name {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }

        .page-title {
            font-size: 1.5rem;
            opacity: 0.9;
        }

        .order-item {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .order-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .order-details {
            flex-grow: 1;
        }

        .order-summary {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .order-summary h3 {
            margin-bottom: 20px;
            color: #0a192f;
            font-weight: 600;
        }

        .checkout-btn {
            background-color: #0a192f;
            color: white !important;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            width: 100%;
            margin-top: 20px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #152a4e;
            color: white !important;
            text-decoration: none;
        }

        .status-icon {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
<body>
    <div class="cart-header">
        <div class="container">
            <div class="header-content">
                <h1 class="brand-name">EazyMakan</h1>
                <div class="page-title">Order Details</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @forelse($cart as $index => $item)
                    <div class="order-item">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                        <div class="order-details">
                            <h4>{{ $item['name'] }}</h4>
                            <p>{{ $item['mahallah'] }}</p>
                            <p>Quantity: {{ $item['quantity'] }}</p>
                            <p>RM {{ number_format($item['price'], 2) }}</p>
                        </div>
                        <div class="status">
                            <img src="{{ asset('assets/img/preparing.png') }}" alt="Status" class="status-icon">
                            <p>Preparing</p>
                        </div>
                        <form action="{{ route('cart.remove', $index) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </div>
                @empty
                    <div class="text-center py-5">
                        <h3>Your cart is empty</h3>
                        <a href="{{ route('menu') }}" class="btn btn-primary mt-3">Browse Menu</a>
                    </div>
                @endforelse
            </div>

            <div class="col-md-4">
                <div class="order-summary">
                    <h3>ORDER SUMMARY</h3>
                    @if(count($cart) > 0)
                        @foreach($cart as $item)
                            <div class="d-flex justify-content-between mb-2">
                                <span>{{ $item['name'] }} x{{ $item['quantity'] }}</span>
                                <span>RM {{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                            </div>
                        @endforeach
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <strong>TOTAL</strong>
                            <strong>RM {{ number_format($total, 2) }}</strong>
                        </div>
                        <a href="{{ route('checkout') }}" class="checkout-btn btn d-block text-center text-white text-decoration-none">
                            Proceed to Checkout
                        </a>
                    @else
                        <p class="text-center">Your cart is empty</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
