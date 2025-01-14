<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EazyMakan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .logout-btn {
        background: transparent;
        border: none;
        color: white;
        cursor: pointer;
        font-family: inherit;
        font-size: inherit;
        padding: 0;
        margin: 0;
        text-decoration: none;
    }

    .logout-btn:hover {
        color: #dc3545;
    }

    .cart-wrapper {
        position: relative;
    }

    .cart-preview {
        position: absolute;
        top: 100%;
        right: 0;
        width: 300px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        display: none;
        z-index: 1000;
    }

    .cart-wrapper:hover .cart-preview {
        display: block;
    }

    .cart-preview-header {
        padding: 10px 15px;
        border-bottom: 1px solid #eee;
    }

    .cart-preview-header h6 {
        margin: 0;
        color: #0a192f;
        font-weight: 600;
    }

    .cart-preview-items {
        max-height: 300px;
        overflow-y: auto;
    }

    .cart-preview-item {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-bottom: 1px solid #eee;
    }

    .cart-preview-item img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 4px;
        margin-right: 10px;
    }

    .item-details {
        flex-grow: 1;
    }

    .item-name {
        margin: 0;
        font-size: 0.9rem;
        color: #0a192f;
    }

    .item-price {
        margin: 0;
        font-size: 0.8rem;
        color: #6c757d;
    }

    .cart-preview-footer {
        padding: 10px 15px;
        text-align: center;
    }

    .view-cart-btn {
        display: inline-block;
        background: #0a192f;
        color: white;
        padding: 5px 15px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 0.9rem;
    }

    .view-cart-btn:hover {
        background: #152a4e;
        color: white;
    }

    .empty-cart {
        padding: 15px;
        text-align: center;
        color: #6c757d;
        margin: 0;
    }

    .navmenu ul {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .navmenu ul li {
        position: relative;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">EazyMakan</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="/menu" class="{{ Request::is('menu') ? 'active' : '' }}">Menu</a></li>
          <li><a href="#events" class="{{ Request::is('events') ? 'active' : '' }}">Restaurant</a></li>
          <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>

          @guest
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li>
                  <a href="{{ route('profile') }}" class="profile-link">
                      <img src="{{ asset('assets/img/profile.png') }}" alt="Profile" style="width: 30px; height: 30px; border-radius: 50%;">
                  </a>
              </li>
              <li>
                  <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                      @csrf
                      <button type="submit" class="logout-btn">Logout</button>
                  </form>
              </li>
          @endguest

          <li class="nav-item cart-wrapper">
              <a href="{{ route('cart.index') }}" class="nav-link position-relative">
                  <i class="bi bi-cart3 fs-5"></i>
                  @if(Session::has('cart') && count(Session::get('cart')) > 0)
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          {{ count(Session::get('cart')) }}
                      </span>
                  @endif
              </a>
              <!-- Cart Preview -->
              <div class="cart-preview">
                  <div class="cart-preview-header">
                      <h6>Cart Items</h6>
                  </div>
                  <div class="cart-preview-items">
                      @if(Session::has('cart') && count(Session::get('cart')) > 0)
                          @foreach(Session::get('cart') as $item)
                              <div class="cart-preview-item">
                                  <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                  <div class="item-details">
                                      <p class="item-name">{{ $item['name'] }}</p>
                                      <p class="item-price">RM {{ number_format($item['price'], 2) }} x {{ $item['quantity'] }}</p>
                                  </div>
                              </div>
                          @endforeach
                          <div class="cart-preview-footer">
                              <a href="{{ route('cart.index') }}" class="view-cart-btn">View Cart</a>
                          </div>
                      @else
                          <p class="empty-cart">Your cart is empty</p>
                      @endif
                  </div>
              </div>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="btn-getstarted" href="#book-a-table">Book a Table</a> --}}
      <a class="btn-getstarted" href="{{ route('ordering') }}">Place an Order</a>

    </div>
  </header>

<main>

@yield('content')

</main>


  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>International Islamic University Malaysia</p>
            <p>P.O.Box 10,50728 Kuala Lumpur</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Contact</h4>
              <p>
                <strong>Phone:</strong> <span>(+603) 6421 6421</span><br>
                <strong>Email:</strong> <span>webmaster@iium.edu.my</span><br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Fri:</strong> <span>8:00AM - 4:30PM</span><br>
                <strong>Saturday,Sunday</strong>: <span>Closed</span>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">IIUM</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Add this JavaScript for smooth hover behavior -->
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          let timeout;
          const cartWrapper = document.querySelector('.cart-wrapper');
          const cartPreview = document.querySelector('.cart-preview');

          cartWrapper.addEventListener('mouseenter', function() {
              clearTimeout(timeout);
              cartPreview.style.display = 'block';
          });

          cartWrapper.addEventListener('mouseleave', function() {
              timeout = setTimeout(() => {
                  cartPreview.style.display = 'none';
              }, 200);
          });
      });
  </script>

</body>

</html>
