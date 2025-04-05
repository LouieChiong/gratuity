@extends('components.layout')
@section('content')
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
@endsection