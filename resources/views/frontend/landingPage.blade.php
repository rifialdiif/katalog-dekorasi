<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Bemvote">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Bemvote">
    <meta property="og:description" content="Bemvote">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('theme/images/favicon.svg') }}">

    <!-- Title -->
    <title>Wedding Katalog</title>

    <!-- Animated css -->
    <link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="{{ asset('theme/fonts/bootstrap/bootstrap-icons.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('theme/css/main.min.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/datatables/dataTables.bs5.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/vendor/datatables/dataTables.bs5-custom.css') }}" />

    <!-- Date Range CSS -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/daterange/daterange.css') }}">

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/calendar/css/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/vendor/calendar/css/custom.css') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Landing Page CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/landingPageStyle.css') }}">

</head>

<body>

    <div class="container-xl">

        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Katalog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">contact</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        {{-- ACTIVE PAGE --}}
        <div class="container text-center section active-page">
            <div class="row align-items-center">
              <div class="col-7 text-start">
                <h1 class="heading">ethereal elegance weddings</h1>
                <h5 class="sub-heading">membuat kisah cinta anda bersinar dalam kemegahan eteris</h5>
                <p class="body-text">Dalam setiap pernikahan, ada keinginan untuk menciptakan momen yang abadi, indah, dan tak terlupakan. Di Ethereal Elegance Weddings, kami percaya bahwa pernikahan adalah tentang lebih dari sekadar acara; itu adalah tentang merayakan kisah cinta yang unik dan mengabadikannya dalam keanggunan yang abadi.</p>
                <button class="katalog-button">contact us</button>
                <div class="social-media">
                    <ul class="d-flex">
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
              </div>
              <div class="col-5 style-wedding align-items-center">
                <div class="layer"></div>
              </div>
            </div>
        </div>

        {{-- ABOUT PAGE --}}
        <div class="container text-center section about-page">
            <div class="row align-items-center">
                <div class="col-5">
                    <img src="" alt="">
                </div>
                <div class="col-7 text-start">
                    <h1 class="heading">about us</h1>
                    <h5 class="sub-heading">wedding organizer</h5>
                    <p class="body-text">Kami adalah mitra yang penuh dedikasi dan bersemangat, siap membantu Anda melangkah ke dalam bab baru kehidupan Anda dengan percaya diri dan ketenangan pikiran. Dengan pengalaman kami yang mendalam dalam industri pernikahan dan keahlian kami dalam merancang acara yang tak terlupakan, Ethereal Elegance Weddings siap mengantar Anda dalam perjalanan menuju hari yang paling penting dalam hidup Anda.</p>
                    <p class="body-text">Bersama Ethereal Elegance Weddings, biarkan cerita cinta Anda bersinar dalam kemegahan eternitas.</p>
                </div>
            </div>
        </div>

        {{-- SERVICES PAGE --}}
        <div class="container text-center section services-page">
            <h1 class="heading">our services</h1>

            <div class="card-group">
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title heading">Card title</h5>
                    <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title heading">Card title</h5>
                    <p class="card-text body-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title heading">Card title</h5>
                    <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                </div>
            </div>
        </div>

        {{-- PRODUCT PAGE --}}
        <div class="container text-center section product-page">
            <h1 class="heading">Our Products</h1>

            <div class="card-group">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title heading">Card title</h5>
                            <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="col-4">
                            <button class="katalog-button"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title heading">Card title</h5>
                            <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="col-4">
                            <button class="katalog-button"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title heading">Card title</h5>
                            <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="col-4">
                            <button class="katalog-button"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-group">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title heading">Card title</h5>
                            <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="col-4">
                            <button class="katalog-button"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title heading">Card title</h5>
                            <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="col-4">
                            <button class="katalog-button"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title heading">Card title</h5>
                            <p class="card-text body-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="col-4">
                            <button class="katalog-button"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CONTACT PAGE --}}
        <div class="container text-center section contact-page">
            <div class="style-contact">
                <h1 class="heading">Contact</h1>
                <p class="body-text">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.”
                </p>

                <div class="social-media justify-content-center">
                    <ul class="d-flex">
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>

                <button class="katalog-button">contact us</button>

            </div>
        </div>

        {{-- FOOTER --}}
        <footer class="text-center">
            <h4 class="heading">ethereal elegance weddings <span>wedding organizer</span></h4>
        </footer>
    </div>


    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/js/modernizr.js') }}"></script>
    <script src="{{ asset('theme/js/moment.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('theme/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ asset('theme/vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset('theme/vendor/datatables/custom/custom-datatables.js') }}"></script>

    @yield('scripts')

    <!-- Main Js Required -->
    <script src="{{ asset('theme/js/main.js') }}"></script>


</body>

</html>
