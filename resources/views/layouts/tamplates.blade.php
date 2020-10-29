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