<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travello template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/styles/responsive.css">
</head>

<body>

    <div class="super_container">
        @include('layouts.menu')

        <!-- Home -->

        <div class="home">

            <!-- Home Slider -->
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url({{ asset("images/about.jpg") }})">
                        </div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_title">
                                                <h2>Mari Kita Membaca</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_title">
                                                <h2>Mari Kita Membaca</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_title">
                                                <h2>Mari Kita Membaca</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- <div class="home_page_nav">
                            <ul class="d-flex flex-column align-items-end justify-content-end">
                                <li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
                                <li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
                                <li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
                            </ul>
                        </div> --}}
            </div>
        </div>

        <!-- Search -->

        <div class="home_search">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_search_container">
                            <div class="home_search_title">Pencarian Novel </div>
                            <div class="home_search_content">
                                <form action="{{ route('welcome') }}" method="HEAD" class="home_search_form"
                                    id="home_search_form">
                                    {{ csrf_field() }}
                                    <div
                                        class="d-flex flex-lg-rowf lex-column align-items-start justify-content-lg-between justify-content-start">
                                        <input type="text" class="search_input form-control mr-3" name="cari"
                                            placeholder="telusuri novel" required="required">
                                        <button type="submit" class="home_search_button">telusuri</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
        <!-- Footer -->

        <footer class="footer bg-dark">
            <div class="col text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This web is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
                by <a href="https://colorlib.com" target="_blank">Helna Kurniawati</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </footer>
    </div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="/plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="/plugins/easing/easing.js"></script>
    <script src="/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="/js/custom.js"></script>
</body>

</html>