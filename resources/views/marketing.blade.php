<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" href="{{ Vite::asset('resources/images/logo.ico')}}">
        <title>Gratuity - Digital Marketing and Pulishing</title>
        <meta name="description" content="Empower authors, from aspiring writers to seasoned wordsmiths, by providing a comprehensive and collaborative platform for the creation, publication, and promotion of their literary works."/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Gratuity - Digital Marketing and Publishing" />
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
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo img-fluid">
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
                            <h2 class="mb-5">MARKETING</h2>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/ads.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"><strong>ADVERTISING</strong> </p>
                                </a>
                                <p style="text-align: justify;">
                                    This service is dedicated to help established authors create and plan different forms of promotion and marketing that best suit their needs.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 ">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/book_ex.png') }}"  class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>BOOK EXHIBITS</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    Word Art Publishing helps you promote your book by participating in book shows and book fairs. Participating in book exhibits may be one of many forms of traditional marketing, however, it’s also the most effective way.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/audio-book.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>AUDIO BOOK AND FORMATS</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    Offers you a different approach and way of enjoying your book by converting text into audiobook formats. These narrations will be catered by professional voice-over actors and other voice talent experts in their specific field of genres.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center mt-3" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img  src="{{ Vite::asset('resources/images/icons/book_review.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>BOOK REVIEWS</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    Helps you establish credibility — an essential attribute that a book review can provide. Getting favourable evaluation from well-renowned publicists and high-standard literary agents gives your book a good score and quality (which is something that every author wants).
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center mt-3" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/email_campaign.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>EMAIL CAMPAIGNS</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    We help authors contact every significant distributor worldwide with Publisher’s Weekly – the business’ periodical of record. It has been the essential hotspot for book news and surveys, interfacing distributors, book shops, specialists, writers, and administrators.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center mt-3" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/hollywood.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>HOLLYWOOD BOOK-TO-SCREEN</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    We will help you transform your book into motion pictures. We open opportunities for our authors who dream of seeing their books come to life on the silver screen!
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center mt-3" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/campaign.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>PUBLICITY CAMPAIGNS</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    Not only does meeting in the public make yourself more accessible to your audience, it also helps you hold book readings and book signings, attend conferences to increase the awareness of your book, and sell copies of your book to help establish yourself as an author.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center mt-3" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/press.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>PRESS RELEASE SERVICES</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    Distribute press releases to reporters, a large targeted audience of journalists, bloggers, and all types of media outlets that will help your book promote publicity.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center mt-3" style="height: 400px !important;">
                                <a href="#" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/radio.png') }}" class="featured-block-image img-fluid" alt="" style="height: 80px !important;">
                                    <p class="featured-block-text"> <strong>RADIO INTERVIEW</strong></p>
                                </a>
                                <p style="text-align: justify;">
                                    We can help you make your voice available in the airwaves to promote your book and build your author reputation.
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
                        <!-- Content for the first column goes here -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 text-end">
                        <!-- Adding the 'text-end' class to align content to the right -->
                        <h5 class="site-footer-title mb-3 text-white">Contact Information</h5>
                        <p class="text-white mb-2">
                            <i class="bi-envelope me-2"></i>
                            <span>info@gratuityglobal.org</span>
                        </p>
                        <p class="text-white mb-2">
                            <i class="bi-telephone me-2"></i>
                            <span> (888) 290-0987</span>
                        </p>
                        <p class="text-white mb-2">
                            <i class="bi-telephone-forward me-2"></i>
                            <span> 372-712-1136</span>
                        </p>
                        <p class="text-white mt-3">
                            <i class="bi-geo-alt me-2"></i>
                            9350 Wilshire Blvd, Suite 203, <br>
                            Beverly Hills, CA 90212
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