<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - EazyMakan</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
        }

        .checkout-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        .order-details, .payment-section {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .order-item {
            border-bottom: 1px solid #eee;
            padding: 15px 0;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .total {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #0a192f;
        }

        .payment-option {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .payment-option:hover {
            border-color: #0a192f;
        }

        .payment-option.selected {
            border-color: #0a192f;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="checkout-container">
        <div class="row">
            <div class="col-md-7">
                <div class="order-details">
                    <h2 class="mb-4">Order Details</h2>
                    @foreach($cart as $item)
                        <div class="order-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1">{{ $item['name'] }}</h5>
                                    <p class="text-muted mb-0">{{ $item['mahallah'] }}</p>
                                    <p class="mb-0">Quantity: {{ $item['quantity'] }}</p>
                                </div>
                                <div>
                                    <h5>RM {{ number_format($item['price'] * $item['quantity'], 2) }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="total">
                        <div class="d-flex justify-content-between">
                            <h4>Total</h4>
                            <h4>RM {{ number_format($total, 2) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="payment-section">
                    <h2 class="mb-4">Payment Method</h2>
                    <div class="payment-option selected">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-cash me-3"></i>
                            <div>
                                <h5 class="mb-0">Cash on Delivery</h5>
                                <small class="text-muted">Pay when you receive your order</small>
                            </div>
                        </div>
                    </div>
                    <div class="payment-option">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-credit-card me-3"></i>
                            <div>
                                <h5 class="mb-0">Online Banking</h5>
                                <small class="text-muted">Pay using online banking</small>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 mt-4" style="background-color: #0a192f;">
                        Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
