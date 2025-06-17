@extends('components.layout')
@section('content')
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="caption d-flex flex-column align-items-md-center align-items-lg-start w-75">
                            <h1>Publishing</h1>
                            <h5 class="text-white">Services</h5>
                        </div>
                        <div class="carousel-item active">
                            <div class="carousel-overlay"></div> <!-- Overlay -->
                            <img src="{{ Vite::asset('resources/images/background/image4.jpg') }}" class="carousel-image img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding " id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="d-flex flex-column service-block">
                    <div class="d-flex flex-column">
                        <img src="{{ Vite::asset('resources/images/icons/virtuoso.png') }}" class="service-image" alt="">
                        <p class="featured-block-text"><strong>FOUNDATIONAL</strong> </p>

                        <p>
                            Whether you need a digital book or a softcover, the Austen bundle incorporates all the essential tools required for your publishing venture including spread and inside customization, picture inclusions, online appropriation, and More
                        </p>
                    </div>

                    <div class="mt-auto d-flex w-100">
                        <a href="{{ route('publishing.foundational') }}" class="p-2 secondary-color mb-5 service-btn">+ Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center service-block">
                    <div class="d-flex flex-column">
                        <img src="{{ Vite::asset('resources/images/icons/virtuoso.png') }}" class="service-image" alt="">
                        <p class="featured-block-text"><strong>COMPETENT</strong> </p>

                        <p>
                            Hardcover publishing with all the most well-known administrations and more showcasing muscle that focuses on the colorful sides of the book covers and interior designs. A gigantic worth stuck with next-level additional items that will make your book sparkle.
                        </p>
                    </div>
                    <div class="mt-auto d-flex w-100">
                        <a href="{{ route('publishing.competent') }}" class="p-2 secondary-color mb-5 service-btn">+ Learn More</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center service-block">
                    <div class="d-flex flex-column">
                        <img src="{{ Vite::asset('resources/images/icons/virtuoso.png') }}" class="service-image" alt="">
                        <p class="featured-block-text"><strong>VIRTUOSO</strong> </p>

                        <p>
                            Whether you need a digital book or a softcover, the Austen bundle incorporates all the essential tools required for your publishing venture including spread and inside customization, picture inclusions, online appropriation, and more
                        </p>
                    </div>
                    <div class="mt-auto d-flex w-100">
                        <a href="{{ route('publishing.virtouso') }}" class=" p-2 secondary-color mb-5 service-btn">+ Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection