@extends('components.layout')
@section('content')
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="caption d-flex flex-column align-items-md-center align-items-lg-start w-75">
                            <h1>Marketing</h1>
                            <h5 class="text-white">Services</h5>
                        </div>
                        <div class="carousel-item active">
                            <div class="carousel-overlay"></div> <!-- Overlay -->
                            <img src="{{ Vite::asset('resources/images/marketing.png') }}" class="carousel-image img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding" id="">
    <div class="container ">
        <div class="row p-3">
            <div class="d-flex align-items-start">
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/ads.png') }}" height="100" width="auto" alt="">
                </div>
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>ADVERTISING</strong></p>
                    <p >
                        This service is dedicated to helping established authors create and plan various forms of promotion and marketing that best suit their needs.
                    </p>
                    <p >
                        We provide tailored advertising strategies to increase visibility and attract new readers across multiple platforms — including social media, digital banners, and sponsored content. Our team works closely with clients to craft compelling campaigns that reflect their brand and speak directly to their audience.
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="d-flex ">
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>BOOK EXHIBITS</strong></p>
                    <p >
                        Word Art Publishing helps you promote your book by participating in book shows and book fairs. Participating in book exhibits may be one of many forms of traditional marketing, however, it’s also the most effective way.
                    </p>
                    <p >
                        Through these events, your work gains exposure to readers, librarians, bookstore owners, literary agents, and other publishing professionals. We handle the logistics — from booth design to promotional material — so you can focus on what matters most: connecting with readers.
                    </p>
                </div>
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/book_ex.png') }}" height="100" width="auto" alt="">
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="d-flex align-items-start">
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/audio-book.png') }}" height="100" width="auto" alt="">
                </div>
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>AUDIO BOOK AND FORMATS</strong></p>
                    <p >
                        Offers you a different approach and way of enjoying your book by converting text into audiobook formats. These narrations will be catered by professional voice-over actors and other voice talent experts in their specific field of genres.
                    </p>
                    <p>
                        From dramatic fiction to insightful nonfiction, our audio production team ensures that each word is delivered with clarity, emotion, and impact — making your story accessible to a broader, on-the-go audience.
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="d-flex ">
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>BOOK REVIEWS</strong></p>
                    <p >
                        Helps you establish credibility — an essential attribute that a book review can provide. Getting favourable evaluation from well-renowned publicists and high-standard literary agents gives your book a good score and quality (which is something that every author wants).
                    </p>
                    <p>
                        Whether you're looking to build momentum for a new release or give fresh life to an existing title, reviews can make a lasting impact on your book’s success. We assist with both editorial reviews and reader-based feedback across platforms like Amazon, Goodreads, and literary blogs.
                    </p>
                </div>
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/book_review.png') }}" height="100" width="auto" alt="">
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="d-flex align-items-start">
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/email_campaign.png') }}" height="100" width="auto" alt="">
                </div>
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>EMAIL CAMPAIGNS</strong></p>
                    <p>
                        Our email campaigns are designed to put your book directly into the inboxes of readers, reviewers, bookstores, and literary influencers. Through targeted messaging and carefully curated mailing lists, we help you build awareness, generate buzz, and drive engagement.
                    </p>
                    <p>
                        We craft professional email newsletters that highlight your book’s strengths, include direct purchase links, and encourage social sharing. Whether you're announcing a new release, promoting a sale, or offering a sneak peek, email marketing remains one of the most effective tools for author visibility and audience growth.
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="d-flex ">
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>HOLLYWOOD BOOK-TO-SCREEN</strong></p>
                    <p >
                        We will help you transform your book into motion pictures. We open opportunities for our authors who dream of seeing their books come to life on the silver screen!
                    </p>
                    <p>
                        From screenplay development to pitching your story to producers and studios, we open doors to cinematic opportunities and industry exposure. Whether it’s a feature film, TV series, or streaming adaptation, our team works to align your narrative with the visual storytelling that captivates audiences.
                    </p>
                </div>
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/hollywood.png') }}" height="100" width="auto" alt="">
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="d-flex align-items-start">
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/campaign.png') }}" height="100" width="auto" alt="">
                </div>
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>PUBLICITY CAMPAIGNS</strong></p>
                    <p>
                        Public appearances are a powerful way to build your presence and connect directly with your audience. We assist authors in organizing book readings, signings, and attending literary events and conferences — all aimed at increasing visibility, engaging readers, and boosting book sales.
                    </p>
                    <p>
                        These campaigns help position you as a credible, approachable author and generate meaningful buzz around your work.
                    </p>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="d-flex">
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>PRESS RELEASE SERVICES</strong></p>
                    <p>
                        Our press release services help spread the word about your book to a wide audience of journalists, bloggers, reviewers, and media outlets. We craft compelling announcements and distribute them through trusted channels to maximize reach and spark interest.
                    </p>
                    <p>
                        A well-written press release not only boosts visibility but also opens doors to interviews, features, and media coverage.
                    </p>
                </div>
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/press.png') }}" height="100" width="auto" alt="">
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="d-flex align-items-start">
                <div class="me-3 text-center d-flex align-items-center justify-content-center h-100">
                    <img src="{{ Vite::asset('resources/images/icons/radio.png') }}" height="100" width="auto" alt="">
                </div>
                <div class="p-3 pe-5" style="text-align: justify">
                    <p class="featured-block-text my-1"><strong>RADIO INTERVIEWS</strong></p>
                    <p>
                        Radio remains a strong platform for reaching diverse and engaged audiences. We help authors secure guest spots on relevant radio shows and podcasts to promote their books, share their stories, and build their personal brand.
                    </p>
                    <p>
                        With professional guidance on talking points and interview preparation, you'll be ready to make a lasting impression on the airwaves.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection