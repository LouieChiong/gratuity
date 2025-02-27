<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" href="{{ Vite::asset('resources/images/logo.ico')}}">
        <title>Gratuity - Digital Marketing and Top Tier Literary Promotions </title>
        <meta name="description" content="Empower authors, from aspiring writers to seasoned wordsmiths, by providing a comprehensive and collaborative platform for the creation, publication, and promotion of their literary works."/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Gratuity - Digital Marketing and Top Tier Literary Promotions" />
        <meta name="keywords" content="author, publishing, gratuity, marketing, success, advertising">
        <meta property="og:description" content="Empower authors, from aspiring writers to seasoned wordsmiths, by providing a comprehensive and collaborative platform for the creation, publication, and promotion of their literary works." />
        <meta property="og:image" content="{{ Vite::asset('resources/images/logo.png') }}" />

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha512-SFaNb3xC08k/Wf6CRM1J+O/vv4YWyrPBSdy0o+1nqKzf+uLrIBnaeo8aYoAAOd31nMNHwX8zwVwTMbbCJjA8Kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @vite([
            'resources/css/bootstrap.min.css',
            'resources/css/bootstrap-icons.css',
            'resources/css/template.css',
        ])
    </head>

    <body id="section_1">
        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="images/logo.png" class="logo img-fluid">
                    <span>
                        GRATUITY
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/#section_2">Our Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/#section_3">Who we are</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/#section_4">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">PUBLISHING</h2>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/virtuoso.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"><strong>FOUNDATIONAL</strong> </p>
                                </a>
                                <p style="text-align: justify;">
                                    Whether you need a digital book or a softcover, the Austen bundle incorporates all the essential tools required for your
                                    publishing venture including spread and inside customization, picture inclusions, online appropriation, and more
                                </p>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/virtuoso.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"><strong>COMPETENT</strong> </p>
                                </a>
                                <p style="text-align: justify;">
                                    Hardcover publishing with all the most well-known administrations and more showcasing muscle that focuses on the colorful sides of the book covers and interior designs.
                                    A gigantic worth stuck with next-level additional items that will make your book sparkle.
                                </p>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/virtuoso.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"><strong>VIRTUOSO</strong> </p>
                                </a>
                                <p style="text-align: justify;">
                                    Whether you need a digital book or a softcover, the Austen bundle incorporates all the essential tools required for your publishing venture including spread and inside customization, picture inclusions, online appropriation,
                                    and more
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer" id="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="list">
                            <li class="list-group-item text-sm text-white">
                                <a href="/#section_6" class="btn link">Payment</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 text-end">
                        <!-- Adding the 'text-end' class to align content to the right -->
                        <h5 class="site-footer-title mb-3 text-white">Contact Information</h5>
                        <p class="text-white mb-2">
                            <i class="bi-envelope me-2"></i>
                            <span>info@gratuityglobal.org</span>
                        </p>
                        <p class="text-white mb-2">
                            <i class="bi-telephone-forward me-2"></i>
                            <span>Toll Free Number</span>
                            <br>
                            <span>1-888-279-9742</span>
                        </p>
                        <p class="text-white mt-3">
                            <i class="bi-geo-alt me-2"></i>
                            312 W. 2nd St #1099
                            <br>
                            Casper, WY 82601
                            <br>
                            United States
                        </p>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © 2020 <a href="index.html">Gratuity</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        @vite([
            'resources/js/jquery.sticky.js',
            'resources/js/click-scroll.js',
            'resources/js/counter.js',
            'resources/js/custom.js',
        ])
    </body>
</html>