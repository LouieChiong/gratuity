@extends('components.layout')
@section('content')
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="caption">
                            <h1>FOUNDATIONAL</h1>
                            <small>Services - publishing</small>
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

<div class="d-flex text-center justify-content-center align-items-center row my-3 p-2">
    <div class="col-lg-8 col-md-8 gap-2">
        <p style="text-align: justify;">
            Our most economical <b>FOUNDATIONAL </b> program is equipped with all the essentials for an efficient international publication. It also gives you the freedom and flexibility to choose add on services you’d like to get at anytime in the publication process.
        </p>
        <div class="d-flex text-center justify-content-start align-items-start">
            <ul class="custom-list">
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Cover and Interior Customization
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    ISBN Assignment
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Paperback Availability
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    ePub/eBook Availability
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Global Distribution
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Library of Congress Control Number
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Copyright Registration
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Unlimited Color/ Black and White Image Insertions
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Amazon “ Look Inside” and Google Preview
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    Barnes and Noble “ Read Instantly” Feature
                </li>
                <li class="custom-list-item d-flex" style="font-size: 17px">
                    <i class="bi-check custom-text-box-icon me-2"></i>
                    5 Free Paperback Copies
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection