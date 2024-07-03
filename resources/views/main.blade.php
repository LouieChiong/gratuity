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

    <body id="section_1 position-relative">

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
                            <a class="nav-link click-scroll" href="#top">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Our Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Who we are</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Payment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div style="position:absolute; background-color: rgba(122, 14, 164, 0.5); padding:20px 50px 20px 50px; color: white; bottom:20px; right:40px; ">
                                            <h1>Turning Ideas Into Ink</h1>
                                            <p> <span class="text-white">Your Story, Our Canvas – Publishing Success, Marketing Brilliance!</span></p>
                                        </div>
                                        <img src="{{ Vite::asset('resources/images/slide/image_1.jpg') }}" class="carousel-image img-fluid" alt="...">
                                    </div>

                                    <div class="carousel-item">
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
                                        <img src="{{ Vite::asset('resources/images/slide/image_3.jpg') }}" class="carousel-image img-fluid" alt="...">                                    </div>

                                    <div class="carousel-item">
                                        <div style="position:absolute; background-color: rgba(122, 14, 164, 0.5); padding:20px 50px 20px 50px; color: white; bottom:20px; right:40px; ">
                                            <h1>Turning Ideas Into Ink</h1>
                                            <p> <span class="text-white">Your Story, Our Canvas – Publishing Success, Marketing Brilliance!</span></p>
                                        </div>
                                        <img src="{{ Vite::asset('resources/images/slide/image_4.jpg') }}" class="carousel-image img-fluid" alt="...">                                    </div>
                                </div>

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
                                <a href="{{ route('publishing') }}" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/publishing.png') }}" class="featured-block-image img-fluid" alt="" style="height: 150px !important;">

                                    <p class="featured-block-text"><strong>PUBLISHING</strong> </p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4 ">
                            <div class="featured-block d-flex flex-column justify-content-center align-items-center">
                                <a href="{{ route('marketing') }}" class="d-block">
                                    <img src="{{ Vite::asset('resources/images/icons/marketing_1.png')}}" class="featured-block-image img-fluid" alt="" style="height: 150px !important;">
                                    <p class="featured-block-text"><strong>MARKETING</strong> </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-padding section-bg" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2">Who we are</h2>

                                <p class="mb-0" style="text-align: justify;">
                                    <span style="color:#7c35ba; font-weight: bold;">GRATUITY</span>,
                                    leveraging three decades of unwavering commitment and expertise in the realm of books, stands as a beacon of excellence in the provision of comprehensive publishing solutions. Our mission is to empower individuals and businesses by imparting publishing wisdom, facilitating informed decisions, and cultivating a path towards sustainable prosperity.
                                    Dedicated to the art and precision of literary management, Gratuity thrives on its foundational principles of integrity, accuracy, and client-centricity.
                                </div>

                            <div class="row">
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
                            </div>
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
                        <div class="col-lg-6 col-12 mx-auto">
                            @if (session('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong> {{ session('message') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong> {{ session('error') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <form class="custom-form contact-form bg-white" action="{{ route('email')}}" method="post">
                                @csrf
                                <h2>Contact Us</h2>
                                <p class="mb-4">You can just send an email</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="first_name" id="first_name" class="form-control" style="background: #f0f8ff" placeholder="First Name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="last_name" id="last_name" class="form-control"  style="background: #f0f8ff" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input type="text" name="contact_number" id="contact_number" class="form-control"  style="background: #f0f8ff" placeholder="Contact Number" required>
                                    </div>
                                </div>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"  style="background: #f0f8ff" placeholder="Your email address" required>
                                <textarea name="message" rows="5" class="form-control" style="background: #f0f8ff" id="message" placeholder="What can we help you?"></textarea>

                                <button type="submit" class="form-control">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-padding" id="section_6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 mx-auto">
                            @if (session('message-paypal'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong> {{ session('message-paypal') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session('error-paypal'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong> {{ session('error-paypal') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <form class="custom-form contact-form bg-white" action="{{ route('processTransaction')}}" method="post">
                                @csrf
                                <h2>Pay Invoice</h2>
                                <p class="mb-4">You can pay you invoice thru paypal</p>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input type="text" name="invoice" class="form-control" style="background: #f0f8ff" placeholder="Invoice Number" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input type="number" name="amount" class="form-control"  style="background: #f0f8ff" placeholder="Amount" required>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: center; align-items: center; width: 100%">
                                    <button type="submit" class="form-control text-center" style="width: 380px">
                                        <img src="{{ Vite::asset('resources/images/icons/paypal.png') }}" width="90" height="auto">
                                    </button>
                                </div>
                            </form>
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