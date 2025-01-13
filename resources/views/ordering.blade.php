<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering Page</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Place Your Order</h1>
    </header>
    <main class="container my-5">
        <form action="{{ route('order.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="item" class="form-label">Select Item</label>
                <select class="form-select" id="item" name="item" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="item1">Nasi Lemak Ayam Goreng</option>
                    <option value="item2">Chicken Mix</option>
                    <option value="item3">Chicken Shawarma S</option>
                    <option value="item3">Chicken Shawarma L</option>
                    <option value="item3">Beef Shawarma S</option>
                    <option value="item3">Beef Shawarma L</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Delivery Address + Phone Number</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Order</button>
        </form>
        <div class="mt-3">
            <a href="{{ route('order.history') }}" class="btn btn-secondary">View Order History</a>
            {{-- <a href="/" class="btn btn-primary float-end">Go to Main Page</a> --}}
            {{-- <a href="/" class="btn btn-primary">Go Back</a> --}}
        </div>

    </main>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
