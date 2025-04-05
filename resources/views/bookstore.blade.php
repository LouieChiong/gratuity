@extends('components.layout')
@section('content')
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex align-items-center justify-content-center row">
                            <div class="flex row book-item">
                                <div class="col-md-5 d-flex justify-content-end">
                                    <img src="{{ Vite::asset('resources/images/authors/nip_n_tuck.jpg') }}" class="d-flex" height="340" alt="...">
                                </div>
                                <div class="col-md-7 d-flex flex-column align-items-start justify-content-start book-details">
                                    <h1 class="text-center book-title">The Girl from Nip 'n' Tuck Part II</h1>
                                    <small class="text-start">By: Dianne H. Lundy</small>

                                    <p class="book-description mt-3">
                                        Dianne H. Lundy has finally achieved her two dreams in life: finding the perfect man and obtaining the ideal job--or has she? She enters Pineville High School, the final school of her teaching career, but will the student body of over 1,000 students prove too much for her? She rises to meet the challenge with some humorous and sometimes outlandish situations. Her journey in her home life continues as she becomes a mother and brings up a son, whose antics sometimes try her patience. Her faith is tested as she deals with aging parents and unexpected pets, retires, and endures several years of treatment for cancer, which brings her back to God in one of her happiest moments.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item d-flex align-items-center justify-content-center row">
                            <div class="flex row book-item">
                                <div class="col-md-5 d-flex justify-content-end">
                                    <img src="{{ Vite::asset('resources/images/authors/bound_providence.jpg') }}" class="d-flex" height="340" alt="...">
                                </div>
                                <div class="col-md-7 d-flex flex-column align-items-start justify-content-start book-details">
                                    <h1 class="text-center book-title">Bound by Providence</h1>
                                    <small class="text-start">By: Carol Alford </small>

                                    <p class="book-description mt-3">
                                        Monica, Conchita, Mel, and Racine are bound to each other as they face a twist in life beyond their control when men in their lives
                                        fly from Colorado to Colombia on an emerald-mine expedition. Nearing Colombia, all communication with the men is lost, and attempts to
                                        learn of their fate is futile. Five years later, much turmoil ensues as the women receive news that the men are hostages and may be alive.
                                        A jumble of joy and uncertainty confront the four friends who have gone on with their lives. Will the men return and if they do, how can changed
                                        lives reconnect?
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item d-flex align-items-center justify-content-center row">
                            <div class="flex row book-item">
                                <div class="col-md-5 d-flex justify-content-end">
                                    <img src="{{ Vite::asset('resources/images/authors/return_summerfield.jpg') }}" class="d-flex" height="340" alt="...">
                                </div>
                                <div class="col-md-7 d-flex flex-column align-items-start justify-content-start book-details">
                                    <h1 class="text-center book-title">Summerfield</h1>
                                    <small class="text-start">By:  Dianne H. Lundy </small>

                                    <p class="book-description mt-3">
                                        What do a new teacher, a college dropout, a recently widowed woman with a young daughter, and an overweight college co-ed have in common? They all find themselves in the small, quiet town of Summerfield where nothing exciting ever seems to happen--at least not until they arrive. They are all seeking the same things in life--a satisfying career, a sense of accomplishment, and stability in their love life. They soon find themselves in the middle of adventures they never dreamed would happen. Each woman's life is touched by someone who has an unexpected influence on her, whether for better or worse. Their heart-warming stories provide entertainment for all readers who appreciate a good story about romance, adventure, and humorous situations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item d-flex align-items-center justify-content-center row">
                            <div class="flex row book-item">
                                <div class="col-md-5 d-flex justify-content-end">
                                    <img src="{{ Vite::asset('resources/images/authors/dreams_of_the_fathers.jpg') }}" class="d-flex" height="340" alt="...">
                                </div>
                                <div class="col-md-7 d-flex flex-column align-items-start justify-content-start book-details">
                                    <h1 class="text-center book-title">Dreams From Our Fathers</h1>
                                    <small class="text-start">By: Dana James </small>

                                    <p class="book-description mt-3">
                                        All about "God given Rights & Freedom. Contrasting the Founders vision of government vs government of today in America. The importance of supporting Israel. Warning the American people not to allow efforts from radical politicians to "fundamentally transform America" into a nation espousing Socialism/Communist style of government undoing our Constitution and capitalism, and our God given Rights of Religion and freedom of speech, and right to bear arms, and basically all the rights "Natures God" affirms us.
                                    </p>
                                </div>
                            </div>
                        </div>
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

<section class="section-padding">
    <div class="container" id="bookstore">
        <div class="row flex">
            <div class="col flex">
                <div class="card book-item">
                    <img class="card-img-top" height="300" src="{{ Vite::asset('resources/images/authors/nip_n_tuck.jpg') }}" alt="THE GIRL FROM NIP ‘N’ TUCK PART II">
                    <div class="card-body">
                        <h5 class="card-title">THE GIRL FROM NIP ‘N’ TUCK PART II</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                2 of 2
            </div>
        </div>
    </div>
</section>
@endsection