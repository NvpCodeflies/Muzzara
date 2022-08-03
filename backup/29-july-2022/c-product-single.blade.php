<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muzzara | Welcome</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />

    <!-- Slick slider -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick-theme.min.css') }}" />

    <!-- Fontawesome 5 -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/all.min.css') }}" />

    <!-- Lightgallery  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lightgallery.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lg-zoom.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lg-thumbnail.min.css"
    />

    <!-- Jquery UI  -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/jqueryui.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css') }}" />
  </head>
  <body>
    <!-- Single Product Section Start -->

    <section class="single-product_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="single-product_images-wrapper">
              <div class="single_product-gallery">
                <div>
                  <a
                    href="{{ asset('public/assets/img/product-main.png') }}"
                    class="single_product-gallery-item"
                  >
                    <img src="{{ asset('public/assets/img/product-main.png') }}" alt="" />
                  </a>
                </div>
                <div>
                  <a
                    href="{{ asset('public/assets/img/products-slider-4.png') }}"
                    class="single_product-gallery-item"
                  >
                    <img src="{{ asset('public/assets/img/products-slider-4.png') }}" alt="" />
                  </a>
                </div>
                <div>
                  <a
                    href="{{ asset('public/assets/img/products-slider-3.png') }}"
                    class="single_product-gallery-item"
                  >
                    <img src="{{ asset('public/assets/img/products-slider-3.png') }}" alt="" />
                  </a>
                </div>

                <div>
                  <a
                    href="{{ asset('public/assets/img/product-slider.png') }}"
                    class="single_product-gallery-item"
                  >
                    <img src="{{ asset('public/assets/img/product-slider.png') }}" alt="" />
                  </a>
                </div>

                <div>
                  <a
                    href="{{ asset('public/assets/img/product-slider2.png') }}"
                    class="single_product-gallery-item"
                  >
                    <img src="{{ asset('public/assets/img/product-slider2.png') }}" alt="" />
                  </a>
                </div>
              </div>
              <div class="single-product_slider">
                <img src="{{ asset('public/assets/img/product-main.png') }}" alt="" />
                <img src="{{ asset('public/assets/img/products-slider-4.png') }}" alt="" />
                <img src="{{ asset('public/assets/img/products-slider-3.png') }}" alt="" />
                <img src="{{ asset('public/assets/img/product-slider.png') }}" alt="" />
                <img src="{{ asset('public/assets/img/product-slider2.png') }}" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="single-product_details">
              <h3 class="single_product-name">PUMA</h3>
              <p class="single_product-description">
                Men High Risk Red & Black Solid Retaliate 2 SoftFoam Running
                Shoes
              </p>

              <div class="timer_wrapper">
                <h5 class="timer_title">
                  <img src="{{ asset('public/assets/icons/confetti.png') }}" alt="" /> Limited time
                  offer
                </h5>
                <div class="timer_content">
                  <p class="time-text">Grab it before someone else does</p>
                  <p class="time_left">05:12:45</p>
                </div>
              </div>

              <p class="single_product-old-price">$ 71.52</p>
              <div class="single_product-discount">(20% OFF)</div>

              <div class="single_product-price-row">
                <h5 class="single_product-price">$57.21</h5>
                <span class="single_product-free">(Shipping Free)</span>
              </div>

              <div class="single_product-size-wrapper">
                <div
                  class="d-flex align-items-center justify-content-between single_product-size-row"
                >
                  <h6 class="h-18-600">Size</h6>
                  <div class="custom_sm-select">
                    <select name="" id="">
                      <option value="">US</option>
                      <option value="">UK</option>
                    </select>
                  </div>
                </div>
                <ul class="single_product-size-list">
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size4"
                    />
                    <label for="product-size4"> 4 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size5"
                    />
                    <label for="product-size5"> 5 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size6"
                    />
                    <label for="product-size6"> 6 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size7"
                    />
                    <label for="product-size7"> 7 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size8"
                    />
                    <label for="product-size8"> 8 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size9"
                    />
                    <label for="product-size9"> 9 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size10"
                    />
                    <label for="product-size10"> 10 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size11"
                    />
                    <label for="product-size11"> 11 </label>
                  </li>
                  <li>
                    <input
                      type="radio"
                      class="theme-d-none"
                      name="product-size"
                      id="product-size12"
                    />
                    <label for="product-size12"> 12 </label>
                  </li>
                </ul>
              </div>

              <div class="single_product-total-wrapper">
                <h5>Total</h5>
                <h5>$57.21</h5>
              </div>
              <div class="single_product-btn">
                <a href="#" class="theme_btn theme_btn-primary"
                  >Pay Now $57.21</a
                >
                <a href="#" class="theme_btn theme_btn-secondary"
                  >Decline This Offer</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Single Product Section End -->

    <!-- jQuery -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

    <!-- Slick js -->
    <script src="{{ asset('public/assets/js/slick.min.js') }}"></script>

    <!-- Lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/plugins/zoom/lg-zoom.min.js"></script>

    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
  </body>
</html>
