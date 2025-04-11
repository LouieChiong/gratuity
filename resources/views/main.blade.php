@extends('components.layout')
@section('content')
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="caption">
                                <h1>Turning Ideas Into Ink</h1>
                                <small class="text-white">Your Story, Our Canvas – Publishing Success, Marketing Brilliance!</small>

                                <div class="mt-3 d-flex">
                                    <button type="button" class="btn contact-btn">Contact Us</button>
                                </div>
                            </div>

                            <div class="carousel-item active">
                                <div class="carousel-overlay"></div> <!-- Overlay -->
                                <img src="{{ Vite::asset('resources/images/background/book1.jpg') }}" class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-overlay"></div> <!-- Overlay -->
                                <img src="{{ Vite::asset('resources/images/background/book4.jpg') }}" class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-overlay"></div> <!-- Overlay -->
                                <img src="{{ Vite::asset('resources/images/background/book2.jpg') }}" class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-overlay"></div> <!-- Overlay -->
                                <img src="{{ Vite::asset('resources/images/background/book3.jpg') }}" class="carousel-image img-fluid" alt="...">
                            </div>
    {{--
                            <div class="">
                                <div style="position:absolute; background-color: rgba(122, 14, 164, 0.5); padding:20px 50px 20px 50px; color: white; bottom:20px; right:40px; ">
                                    <h1 class="texst-white">Turning Ideas Into Ink</h1>
                                    <p> <span class="text-white">Your Story, Our Canvas – Publishing Success, Marketing Brilliance!</span></p>
                                </div>

                                <img src="{{ Vite::asset('resources/images/slide/image_2.jpg') }}" class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <div style="position:absolute; background-color: rgba(122, 14, 164, 0.5); padding:20px 50px 20px 50px; color: white; bottom:20px; right:40px; ">
                                    <h1>Turning Ideas Into Ink</h1>
                                    <p> <span class="text-white">Your Story, Our Canvas – Publishing Success, Marketing Brilliance!</span></p>
                                </div>
                                <img src="{{ Vite::asset('resources/images/background/book4.jpg') }}" class="carousel-image img-fluid" alt="...">
                            </div>

                            <div class="carousel-item">
                                <div style="position:absolute; background-color: rgba(122, 14, 164, 0.5); padding:20px 50px 20px 50px; color: white; bottom:20px; right:40px; ">
                                    <h1>Turning Ideas Into Ink</h1>
                                    <p> <span class="text-white">Your Story, Our Canvas – Publishing Success, Marketing Brilliance!</span></p>
                                </div>
                                <img src="{{ Vite::asset('resources/images/slide/image_4.jpg') }}" class="carousel-image img-fluid" alt="...">                                    </div>
                        </div>--}}

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">We help you with</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4 ">
                    <div class="featured-block d-flex flex-column justify-content-center align-items-center">
                        <div class="overlay-block">
                            <p>We provide top-quality publishing services, helping you share your stories, articles, and books with the world.</p>
                        </div>
                        <img src="{{ Vite::asset('resources/images/publishing.jpg') }}" class="featured-block-image img-fluid"/>
                    </div>
                    <a href="{{ route('publishing') }}" class="d-block text-center">
                        <p class="featured-block-text"><strong>PUBLISHING</strong> </p>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4 ">
                    <div class="featured-block d-flex flex-column justify-content-center align-items-center">
                        <div class="overlay-block">
                            <p>We provide top-tier marketing solutions to boost your brand’s visibility and drive conversions.</p>
                        </div>
                        <img src="{{ Vite::asset('resources/images/marketing.png') }}" class="featured-block-image img-fluid"/>
                    </div>
                    <a href="{{ route('marketing') }}" class="d-block text-center">
                        <p class="featured-block-text"><strong>MARKETING</strong> </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding section-bg col-sm-12" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-4 text-md-start text-sm-center">About us</h2>
                        <div class="row">
                            <div class="col-md-5 d-sm-none d-md-flex">
                                <img src="{{ Vite::asset('resources/images/about.jpg') }}" class="featured-block-image img-fluid h-full" alt="">
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div>
                                    <p style="font-size: 18px;">
                                        <span style="color:#7c35ba; font-weight: bold">GRATUITY</span>,
                                        leveraging three decades of unwavering commitment and expertise in the realm of books, stands as a beacon of excellence in the provision of comprehensive publishing solutions. Our mission is to empower individuals and businesses by imparting publishing wisdom, facilitating informed decisions, and cultivating a path towards sustainable prosperity.
                                        Dedicated to the art and precision of literary management, Gratuity thrives on its foundational principles of integrity, accuracy, and client-centricity.
                                    </p>
                                </div>
                                <div class="mt-4">
                                    <p style="font-size: 18px"><b style="color:#7c35ba; font-weight: bold">Our mission</b> is to empower authors, from aspiring writers to seasoned wordsmiths, by providing a comprehensive and collaborative platform for the
                                        creation, publication, and promotion of their literary works. We believe in the transformative power of
                                        stories and aim to amplify diverse voices that resonate with readers across genres.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0 " style="padding-bottom: 110px;">
                                <h2 class="counter-text">Mission</h2>
                                <p style="text-align: justify;">Our mission is to empower authors, from aspiring writers to seasoned wordsmiths, by providing a comprehensive and collaborative platform for the
                                    creation, publication, and promotion of their literary works. We believe in the transformative power of
                                    stories and aim to amplify diverse voices that resonate with readers across genres.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb">
                                    <h2 class="counter-text">What Sets Us Apart:</h2>

                                    <ul class="custom-list">
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Tailored Publishing Solutions
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Strategic Marketing Expertise
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Global Reach
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Author-Centric Approach
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Title Revival
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Agency submission
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="review-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active d-flex flex-row gap-5 justify-content-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="d-flex flex-row mb-3">
                                        <img src="{{ Vite::asset('resources/images/reviewer/candice.jpg') }}" width="150" height="150" class="bg-light shadow-lg rounded" alt="">
                                        <div class="d-flex flex-column ms-4">
                                            <h2 class="mb-0">Candicee Childs</h2>
                                            <p class="fw-bold"><b>Author:</b> <i>Lemons, Lemonade, & the Lemonade Stand</i></p>
                                            <div class="d-flex flex-row gap-3">
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-wrap">
                                        <i>
                                            They have excellent designers, customer service, and support
                                            "I loved working with GRATUITY because as a new author, they had everything organized and easy to follow.
                                            <br> <br>
                                            They helped me understand the process and were great at helping me with making my dreams come true.
                                            They have excellent designers, customer service, and support. I would highly recommend this company to anyone!"
                                        </i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item d-flex flex-row gap-5 justify-content-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="d-flex flex-row mb-3">
                                        <img src="{{ Vite::asset('resources/images/reviewer/howard.png') }}" width="150" height="200" class="bg-light shadow-lg rounded" alt="">
                                        <div class="d-flex flex-column ms-4">
                                            <h2 class="mb-0">Howard S. Bush MD</h2>
                                            <p class="fw-bold"><b>Author:</b> <i>Doctor-Patient Communication Skills</i></p>
                                            <div class="d-flex flex-row gap-3">
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-wrap">
                                        <i>
                                            “Communication was excellent. There were no surprises. I was updated every step of the way. Very responsive. Seamless”
                                        </i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item d-flex flex-row gap-5 justify-content-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="d-flex flex-row mb-3">
                                        <img src="{{ Vite::asset('resources/images/reviewer/deniz.jpeg') }}" width="150" height="150" class="bg-light shadow-lg rounded" alt="">
                                        <div class="d-flex flex-column ms-4">
                                            <h2 class="mb-0">Deniz Kayadelen</h2>
                                            <p class="fw-bold"><b>Author:</b> <i>Out Of Comfort Zone</i></p>
                                            <div class="d-flex flex-row gap-3">
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-wrap">
                                        <i>
                                            "I wanted to ensure professionalism and visibility of my book. GRATUITY  supported me in editing, structuring, design, cover page design and marketing. In all phases I never felt alone and it was a great support! Can't believe that my book is number #1 and so happy to made this choice to get support from this experienced great team!. Thank you so much for the great collaboration!
                                        </i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item  d-flex flex-row gap-5 justify-content-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="d-flex flex-row mb-3">
                                        <img src="{{ Vite::asset('resources/images/reviewer/tim.png') }}" width="150" height="150" class="bg-light shadow-lg rounded" alt="">
                                        <div class="d-flex flex-column ms-4">
                                            <h2 class="mb-0">Timothy Gocke</h2>
                                            <p class="fw-bold"><b>Author:</b> <i>At the Very Heart and Soul: A Common-Sense Guide to Appreciation and Gratitude for Couple Relationships</i></p>
                                            <div class="d-flex flex-row gap-3">
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-wrap">
                                        <i>
                                            I approve my galley. It has the best cover I’ve ever seen and goes so well with the theme of Heart and Soul. I am very appreciative and so
                                            excited about this book that I just received and so surprised how quickly I received it.
                                        </i>
                                            <br>
                                            <br>
                                        <i>
                                            I want to thank you again and your whole team  for such a great experience and a job well-done.
                                            The professionalism in your company is what makes you so unique.
                                            Your dedication to each author is certainly a key to your success
                                        </i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item d-flex flex-row gap-5 justify-content-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="d-flex flex-row mb-3">
                                        <img src="{{ Vite::asset('resources/images/reviewer/clint.png') }}" width="150" height="150" class="bg-light shadow-lg rounded" alt="">
                                        <div class="d-flex flex-column ms-4">
                                            <h2 class="mb-0">Clint Goodwin</h2>
                                            <p class="fw-bold"><b>Author:</b> <i>Leather to Steel</i></p>
                                            <div class="d-flex flex-row gap-3">
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-wrap">
                                        <i>
                                        I want you to know my first experience with your company was outstanding.
                                        Your company produced positive results in a reasonable a mount of time to market.
                                        </i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item d-flex flex-row gap-5 justify-content-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="d-flex flex-row mb-3">
                                        <img src="{{ Vite::asset('resources/images/reviewer/elwood.png') }}" width="150" height="150" class="bg-light shadow-lg rounded" alt="">
                                        <div class="d-flex flex-column ms-4">
                                            <h2 class="mb-0">Gene Elwood</h2>
                                            <p class="fw-bold"><b>Author:</b> <i>Syncopated Love Dreams</i></p>
                                            <div class="d-flex flex-row gap-3">
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star-fill text-secondary"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <p><i>“I received fantastic and wonderful assistance. I greatly appreciate GRATUITY .”</i></p>
                                    <p class="text-wrap">
                                        Elwood Gene-Mishmah is a retired educator and administrator who now spends his time writing, publishing, and traveling. Syncopated Love Dreams is his sixteenth self-published book. Currently, he resides in Palm Coast, Florida.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#review-slide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#review-slide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row row-cols-5 gy-5">
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/adlibris.png') }}" width="90" height="auto" class="bookstore-icons" title="Adlibris" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/agapea.png') }}" width="90" height="auto" class="bookstore-icons" title="Agapea" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/ALS-1.png') }}" width="90" height="auto" class="bookstore-icons" title="ALS Library" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/Amazon.png') }}" width="90" height="auto" class="bookstore-icons" title="Amazon" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/BarnesAndNoble.png') }}" width="90" height="auto" class="bookstore-icons" title="Barnse and Noble" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/bertrams.png') }}" width="90" height="auto" class="bookstore-icons" title="Bertrams" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/book-depository.png') }}" width="90" height="auto" class="bookstore-icons" title="Book Depository" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/blackwell.png') }}" width="90" height="auto" class="bookstore-icons" title="Blackwell" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/BooksExpress.png') }}" width="90" height="auto" class="bookstore-icons" title="Books Express" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/Booktopia.png') }}" width="90" height="auto" class="bookstore-icons" title="Booktopia" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/chapters.png') }}" width="90" height="auto" class="bookstore-icons" title="Charpters" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/eden.png') }}" width="90" height="auto" class="bookstore-icons" title="Eden" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/fishpond.png') }}" width="90" height="auto" class="bookstore-icons" title="Adlibris" data-bs-toggle="fishpond"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/foyles.png') }}" width="90" height="auto" class="bookstore-icons" title="Foyles" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/gardners.png') }}" width="90" height="auto" class="bookstore-icons" title="Gardners" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/Ingram.png') }}" width="90" height="auto" class="bookstore-icons" title="Ingram" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/jamesBennett.png') }}" width="90" height="auto" class="bookstore-icons" title="James Bennett" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/Kobo.png') }}" width="90" height="auto" class="bookstore-icons" title="Kobo" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/mallory.png') }}" width="90" height="auto" class="bookstore-icons" title="Mallory" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/PBS.png') }}" width="90" height="auto" class="bookstore-icons" title="PBS" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/peterpal.png') }}" width="90" height="auto" class="bookstore-icons" title="Peterpal" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/super-book.png') }}" width="90" height="auto" class="bookstore-icons" title="Super books deals" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/target.png') }}" width="90" height="auto" class="bookstore-icons" title="Target" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/the-nile.png') }}" width="90" height="auto" class="bookstore-icons" title="The nile" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/trust-media.png') }}" width="90" height="auto" class="bookstore-icons" title="Trust Media" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/walmart.png') }}" width="90" height="auto" class="bookstore-icons" title="Walmart" data-bs-toggle="tooltip"  alt="">
                        </div>
                        <div class="col">
                            <img src="{{ Vite::asset('resources/images/bookstore/waterstone.png') }}" width="90" height="auto" class="bookstore-icons" title="Waterstones" data-bs-toggle="tooltip"  alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function setCookie(name, value, days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/";
        }

        function getCookie(name) {
            let cookies = document.cookie.split("; ");
            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].split("=");
                if (cookie[0] === name) {
                    return cookie[1];
                }
            }
            return null;
        }

        function acceptCookies() {
            document.getElementById("cookie-banner").classList.add("d-none");
            setCookie("cookiesAccepted", "true", 7);
        }

        window.onload = function() {
            if (getCookie("cookiesAccepted") === "true") {
                document.getElementById("cookie-banner").classList.add("d-none");
            }
        };

        document.addEventListener("DOMContentLoaded", function () {
            let lastScrollTop = 0;
            const scrollOffset = 120; // Offset before secondary navbar fades in/out
            const primaryNavbar = document.querySelector(".primary-navbar");
            const secondaryNavbar = document.querySelector(".secondary-navbar");

            window.addEventListener("scroll", function () {
                let scrollTop = window.scrollY || document.documentElement.scrollTop;

                if (scrollTop > scrollOffset) {
                    // Scrolling past offset: Fade out primary, fade in secondary
                    primaryNavbar.style.opacity = "0";
                    secondaryNavbar.classList.remove("d-none");
                    secondaryNavbar.style.opacity = "1";
                } else {
                    // Scroll back to 100px or less: Fade out secondary, fade in primary
                    primaryNavbar.style.opacity = "1";
                    secondaryNavbar.style.opacity = "0";
                    setTimeout(() => {
                        if (scrollTop <= scrollOffset) {
                            secondaryNavbar.classList.add("d-none");
                        }
                    }, 300); // Delay to prevent flickering
                }

                lastScrollTop = scrollTop;
            });
        });
    </script>
@endsection