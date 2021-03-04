
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agung Permana</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

        <!-- JS -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
    </head>
    <body>
        <div class="site" id="page">
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="{{ asset('assets/images/agung.jpg') }}" alt="Hero section image">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                    <h2 class="title__heading">
                                        <span>Agung Permana</span>
                                    </h2>
                                    <div class="title__description">Saya adalah Mahasiswa STMIK BANDUNG, saya seorang Freelance dan Web Developer.</div>

                                    <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                    <div class="title__action"><a href="https://themewagon.com/themes/free-html5-splash-screen-template/" class="btn btn-primary"><strong>Follow Me!</strong></a></div>
                                </div> <!-- .title-01 -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- JS -->
        <script src="{{ asset('assets/js/plugins/animate-headline.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
