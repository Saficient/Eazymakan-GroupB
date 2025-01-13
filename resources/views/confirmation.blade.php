<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<style>
    .col-md-6{
        background: rgb(172, 209, 237);
        border-radius: 20px
        /* padding: 5px; */
    }
    .reminder{
        /* position: relative; */
        margin: 8px 120px
    }
    .img2{
        height: 290px;
        width: 320px;
    }
</style>
<body>
    <div class="container text-center my-5">
        <h1>Your order has been successfully placed!</h1>
        <p>Thank you for your order. We will process it shortly.</p>
        {{-- <a href="/" class="btn btn-primary">Go Back</a> --}}
        <a href="{{ route('ordering') }}" class="btn btn-primary">Go Back to Ordering Page</a>
        {{-- <a href="{{ route('ordering') }}" class="btn btn-primary">Go Back</a> --}}
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/bankqr.jpg" class="img-fluid animated" alt="">
                <h4>
                    UIA FOOD <br>
                    Maybank <br>
                    16260000555
                </h4><br>
                <h5>
                    Wanna pay online??<br>
                    <h3 class="reminder">
                        Reminder
                    </h3>
                    "Please keep the receipt and show it to the runner."
                </h5>

            </div>
            <div class="col-md-6">
                <img class="img2" src="assets/img/telegram.jpg" class="img-fluid animated" alt="">
                <h5>
                    Telegram Group
                </h5><br>
              <h4>
                https://t.me/+F_J-M0706bxiZmI9
              </h4><br>

              <h5>
                Pay CASH to the rider
              </h5>

            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
