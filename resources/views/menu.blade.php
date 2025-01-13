@extends('master.layout')
@section('content')

  <!-- Menu Section -->
  <section id="menu" class="menu section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Menu</h2>
      <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
    </div><!-- End Section Title -->

    <div class="container">

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
            <h4>Starters</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Breakfast</h4>
          </a><!-- End tab nav item -->

        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>Lunch</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
            <h4>Dinner</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

        <div class="tab-pane fade active show" id="menu-starters">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Starters</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/Nasilemak.jpg" class="glightbox"><img src="assets/img/menu/Nasilemak.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Nasi Lemak Ayam Goreng</h4>
              <p class="ingredients">
                Rice, sardine, peanuts, egg, Fried Chicken and a spicy sauce
              </p>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Chicken Mix</h4>
              <p class="ingredients">
                Chicken, egg, potato and sauce
              </p>
              <p class="price">
                RM 5
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma</h4>
              <p class="ingredients">
                Pita Bread, chicken, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 7
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Beef Shawarma</h4>
              <p class="ingredients">
                Pita Bread, Beef, Fries, Garlic sauce and salad
              </p>
              <p class="price">
                RM 8
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma Large</h4>
              <p class="ingredients">
                Pita Bread, chicken, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 10
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Beef Shawarma Large</h4>
              <p class="ingredients">
                Pita Bread, Beef, Fries, Garlic sauce and salad
              </p>
              <p class="price">
                RM 11
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Starter Menu Content -->

        <div class="tab-pane fade" id="menu-breakfast">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Breakfast</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Nasi Lemak Ayam Goreng</h4>
              <p class="ingredients">
                Rice, sardine, peanuts, egg, Fried Chicken and a spicy sauce
              </p>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Chicken Mix</h4>
              <p class="ingredients">
                Chicken, egg, potato and sauce
              </p>
              <p class="price">
                RM 5
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma</h4>
              <p class="ingredients">
                Pita Bread, chicken, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Beef Shawarma</h4>
              <p class="ingredients">
                Pita Bread, Beef, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 8
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma Large</h4>
              <p class="ingredients">
                Pita Bread, chicken, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 10
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Beef Shawarma Large</h4>
              <p class="ingredients">
                Pita Bread, Beef, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 11
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Breakfast Menu Content -->

        <div class="tab-pane fade" id="menu-lunch">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Lunch</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Nasi Lemak Ayam Goreng</h4>
              <p class="ingredients">
                Rice, sardine, peanuts, egg, Fried Chicken and a spicy sauce
              </p>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Chicken Mix</h4>
              <p class="ingredients">
                Chicken, egg, potato and sauce
              </p>
              <p class="price">
                RM 5
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma</h4>
              <p class="ingredients">
                Pita Bread, chicken, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 7
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Beef Shawarma</h4>
              <p class="ingredients">
                Pita Bread, Beef, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 8
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma Large</h4>
              <p class="ingredients">
                Pita Bread, chicken, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 10
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Beef Shawarma Large</h4>
              <p class="ingredients">
                Pita Bread, Beef, fries, garlic sauce and salad
              </p>
              <p class="price">
                RM 8
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Lunch Menu Content -->

        <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Dinner</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Lemak Ayam Goreng</h4>
                <p class="ingredients">
                  Rice, sardine, peanuts, egg, Fried Chicken and a spicy sauce
                </p>
                <p class="price">
                  RM 6
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chicken Mix</h4>
                <p class="ingredients">
                  Chicken, egg, potato and sauce
                </p>
                <p class="price">
                  RM 5
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Shawarma</h4>
                <p class="ingredients">
                  Pita Bread, chicken, fries, garlic sauce and salad
                </p>
                <p class="price">
                  RM 7
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Beef Shawarma</h4>
                <p class="ingredients">
                  Pita Bread, Beef, fries, garlic sauce and salad
                </p>
                <p class="price">
                  RM 8
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Shawarma Large</h4>
                <p class="ingredients">
                  Pita Bread, chicken, fries, garlic sauce and salad
                </p>
                <p class="price">
                  RM 10
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Beef Shawarma Large</h4>
                <p class="ingredients">
                  Pita Bread, Beef, fries, garlic sauce and salad
                </p>
                <p class="price">
                  RM 8
                </p>
              </div><!-- Menu Item -->

          </div>
        </div><!-- End Dinner Menu Content -->

      </div>

    </div>

  </section><!-- /Menu Section -->

  @endsection
