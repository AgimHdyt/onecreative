<!DOCTYPE html>
<html lang="en">
  <!--<< Header Area >>-->
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="a_gimhdyt" />
    <meta name="keywords" content="pembuatan website, jasa website, landing page, redesign website, social media management, iklan Google Ads, desain grafis, desain digital, SEO, optimasi mesin pencari, pemasaran konten">
    <meta name="description" content="Kami adalah solusi lengkap untuk kebutuhan digital Anda. Layanan kami mencakup pembuatan website profesional, desain grafis kreatif, manajemen media sosial, iklan Google Ads, dan optimasi mesin pencari (SEO). Dapatkan layanan berkualitas tinggi dengan harga terjangkau untuk memperkuat kehadiran online Anda dan meningkatkan bisnis Anda.">

    <!-- ======== Page title ============ -->
    <title>ONE CREATIVE - Home</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/icon.png" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text-preloader="I" class="letters-loading"> O </span>
          <span data-text-preloader="O" class="letters-loading"> O </span>
          <span data-text-preloader="N" class="letters-loading"> N </span>
          <span data-text-preloader="E" class="letters-loading"> E </span>
          <span data-text-preloader="C" class="letters-loading"> C </span>
          <span data-text-preloader="R" class="letters-loading"> R </span>
          <span data-text-preloader="E" class="letters-loading"> E </span>
          <span data-text-preloader="A" class="letters-loading"> A </span>
          <span data-text-preloader="T" class="letters-loading"> T </span>
          <span data-text-preloader="I" class="letters-loading"> I </span>
          <span data-text-preloader="V" class="letters-loading"> V </span>
          <span data-text-preloader="E" class="letters-loading"> E </span>
        </div>
        <p class="text-center">Loading</p>
      </div>
      <div class="loader">
        <div class="row">
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
        </div>
      </div>
    </div>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Offcanvas Area Start -->
    <div class="fix-area">
      <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
          <div class="offcanvas__content">
            <div
              class="offcanvas__top mb-5 d-flex justify-content-between align-items-center"
            >
              <div class="offcanvas__logo">
                <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="logo-img" />
                </a>
              </div>
              <div class="offcanvas__close">
                <button>
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="mobile-menu fix mb-3"></div>
            <div class="offcanvas__contact">
              <h4>Contact Info</h4>
              <ul>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon">
                    <i class="fal fa-map-marker-alt"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a target="_blank" href="#"
                      >Sukaraja, Bogor, Jawa Barat</a
                    >
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="mailto:info@azent.com"
                      ><span class="mailto:info@example.com"
                        >onecreative.id@gmail.com</span
                      ></a
                    >
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="far fa-phone"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="https://wa.me/6285715007620">0857-1500-7620</a>
                  </div>
                </li>
              </ul>
              <div class="header-button mt-4">
                {{-- <a href="contact.html" class="theme-btn text-center">
                  <span
                    >get A Quote<i class="fa-solid fa-arrow-right-long"></i
                  ></span>
                </a> --}}
              </div>
              <div class="social-icon d-flex align-items-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas__overlay"></div>



    <x-header></x-header>
    
        {{$slot}}
    <!--<< Footer Section Start >>-->
    <footer class="footer-section footer-bg">
      <div class="footer-shape-4">
        <img src="assets/img/footer-shape-4.png" alt="shape-img" />
      </div>
      <div class="shape-2">
        <img src="assets/img/footer-shape-3.png" alt="shape-img" />
      </div>
      <div class="footer-widgets-wrapper">
        <div class="container">
          <div class="row">
            <div
              class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
              data-wow-delay=".3s"
              style="
                visibility: visible;
                animation-delay: 0.3s;
                animation-name: fadeInUp;
              "
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <h3>Tentang Kami</h3>
                </div>
                <div class="footer-content">
                  <p>
                    OneCreative.id merupakan partner terbaik untuk menghadapi
                    persaingan pada Era Digital. Mulai online kan bisnis Anda
                    sekarang.
                  </p>
                  <div class="social-icon d-flex align-items-center">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp"
              data-wow-delay=".5s"
              style="
                visibility: visible;
                animation-delay: 0.5s;
                animation-name: fadeInUp;
              "
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <h3>Quick Links</h3>
                </div>
                <ul class="list-area">
                  <li>
                    <a href="/#home">
                      <i class="fa-solid fa-chevron-right"></i>
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="/#about">
                      <i class="fa-solid fa-chevron-right"></i>
                      About
                    </a>
                  </li>
                  <li>
                    <a href="/#biaya">
                      <i class="fa-solid fa-chevron-right"></i>
                      Biaya
                    </a>
                  </li>
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Cara Pesan
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp"
              data-wow-delay=".5s"
              style="
                visibility: visible;
                animation-delay: 0.5s;
                animation-name: fadeInUp;
              "
            >
              <div class="single-footer-widget style-margin">
                <div class="widget-head">
                  <h3>IT Solution</h3>
                </div>
                <ul class="list-area">
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Web Landingpage
                    </a>
                  </li>
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Web Custom
                    </a>
                  </li>
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Web UMKM
                    </a>
                  </li>
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Perbaikan Website
                    </a>
                  </li>
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Jasa Iklan Online
                    </a>
                  </li>
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Jasa SEO Website
                    </a>
                  </li>
                  <li>
                    <a href="/#cara-pesan">
                      <i class="fa-solid fa-chevron-right"></i>
                      Pengelolaan Sosial Media
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
              data-wow-delay=".7s"
              style="
                visibility: visible;
                animation-delay: 0.7s;
                animation-name: fadeInUp;
              "
            >
              <div class="single-footer-widget style-margin">
                <div class="widget-head">
                  <h3>Newsletter</h3>
                </div>
                <div class="footer-content">
                  <p>
                    Sign up to seargin weekly newsletter to get the latest
                    updates.
                  </p>
                  <div class="footer-input">
                    <input
                      type="email"
                      id="email2"
                      placeholder="Enter Email Address"
                    />
                    <button class="newsletter-btn" type="submit">
                      <i class="fab fa-telegram-plane"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom style-3">
        <div class="container">
          <div
            class="footer-wrapper d-flex align-items-center justify-content-between"
          >
            <div
              class="footer-logo wow fadeInLeft"
              data-wow-delay=".3s"
              style="
                visibility: visible;
                animation-delay: 0.3s;
                animation-name: fadeInLeft;
              "
            >
              <a href="index.html">
                <img src="assets/img/logo/logo1.png" width="198" height="38" alt="logo-img" />
              </a>
            </div>
            <p
              class="wow fadeInRight color-2"
              data-wow-delay=".5s"
              style="
                visibility: visible;
                animation-delay: 0.5s;
                animation-name: fadeInRight;
              "
            >
              © All Copyright 2024 by <a href="index.html">OneCreative.id</a>
            </p>
          </div>
        </div>
        <a href="#" id="scrollUp" class="scroll-icon">
          <i class="far fa-arrow-up"></i>
        </a>
      </div>
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
