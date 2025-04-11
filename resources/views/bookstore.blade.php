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
                                    <img src="{{ Vite::asset('resources/images/authors/summerfield.jpg') }}" class="d-flex" height="340" alt="...">
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
                                    <img src="{{ Vite::asset('resources/images/authors/return_of_summerfields.jpg') }}" class="d-flex" height="340" alt="...">
                                </div>
                                <div class="col-md-7 d-flex flex-column align-items-start justify-content-start book-details">
                                    <h1 class="text-center book-title">Summerfield</h1>
                                    <small class="text-start">By:  Dianne H. Lundy </small>

                                    <p class="book-description mt-3">
                                        The ladies of Summerfield are back with new and exciting stories. Luci Carlito Clark returns to Summerfield after learning that her "Mr. Perfect" might not be as perfect as she believed when she left Summerfield after marrying him twelve years ago. Her return results in confusion, excitement, and danger as she deals with both her husband and a former boyfriend from her high school days.
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

<section class="section-padding section-bg">
    <div class="container" id="bookstore">
        <div class="row flex g-3">
            <div class="col-md-6 col-lg-4 flex p-3" style="height: 580px">
                <div class="card book-item h-100">
                    <div class="card-body d-flex flex-column">
                        <div>
                            <img class="card-img-top object-fit-contain" height="350" src="{{ Vite::asset('resources/images/authors/nip_n_tuck.jpg') }}" alt="THE GIRL FROM NIP ‘N’ TUCK PART II">
                            <p class="card-title mt-2">THE GIRL FROM NIP ‘N’ TUCK PART II</p>
                            <small class="book-author p-0">By: Dianne H. Lundy </small>
                        </div>
                        <div class="mt-auto d-flex w-100 flex-wrap gap-2 pt-2">
                            <a target="_blank" class="bookstore-btn me-3" href="https://www.amazon.com/Girl-Nip-Tuck-Part-II-ebook/dp/B0DNWYR2HJ/ref=sr_1_1?crid=1RV3GKO7DU51U&dib=eyJ2IjoiMSJ9.J3p3lf1r_3FP8ZjgvSQ2qQON8xo1eLR1HJ64X3brozUU-GewIEbpOMYfvIZq732_Hr9R_e-lbBJsMMpkgxdlvuC1ApCwdKP55C2qCNY3G74Bq_mQNGJWnzxu2wqEDB9hcOj2ijXf0NKV_Zg7B-0uuw.-VEWkXKZgA7HHuJA39ziowswtaUiVYw3A71DUZL_YQw&dib_tag=se&keywords=dianne+h+lundy&qid=1741279653&sprefix=dianne+h+lundy%2Caps%2C335&sr=8-1" >
                                <img src="{{ Vite::asset('resources/images/bookstore/Amazon.png') }}" width="90" height="auto" class="" title="Amazon" alt="">
                            </a>
                            <a target="_blank" class="bookstore-btn" href="https://www.google.com/url?q=https://www.barnesandnoble.com/w/the-girl-from-nip-n-tuck-part-ii-dianne-h-lundy/1144403158&source=gmail&ust=1744124362037000&usg=AOvVaw2I0Dg7A3KldpgP6zTBJ9hT">
                                <img src="{{ Vite::asset('resources/images/bookstore/BarnesAndNoble.png') }}" width="90" height="auto" class="" title="Amazon" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 p-3" style="height: 580px">
                <div class="card book-item h-100">
                    <div class="card-body d-flex flex-column">
                        <!-- Content at the top -->
                        <div>
                            <img class="card-img-top object-fit-contain" height="350"
                                    src="{{ Vite::asset('resources/images/authors/summerfield.jpg') }}"
                                    alt="Summerfield">
                            <p class="card-title mt-2">Summerfield</p>
                            <small class="book-author p-0">By: Dianne H. Lundy </small>
                        </div>

                        <!-- Buttons at the bottom -->
                        <div class="mt-auto d-flex w-100 flex-wrap gap-2 pt-2">
                            <a target="_blank" class="bookstore-btn me-3" href="https://www.amazon.com/Summerfield-Dianne-H-Lundy-ebook/dp/B0DJBXGQ86">
                                <img src="{{ Vite::asset('resources/images/bookstore/Amazon.png') }}" width="90" height="auto" title="Amazon" alt="">
                            </a>
                            <a target="_blank" class="bookstore-btn" href="https://www.barnesandnoble.com/w/summerfield-dianne-h-lundy/1126976811">
                                <img src="{{ Vite::asset('resources/images/bookstore/BarnesAndNoble.png') }}"  width="90" height="auto" title="Amazon" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 p-3" style="height: 580px">
                <div class="card book-item h-100">
                    <div class="card-body d-flex flex-column">
                        <!-- Content at the top -->
                        <div>
                            <img class="card-img-top object-fit-contain" height="350"
                                    src="{{ Vite::asset('resources/images/authors/return_of_summerfields.jpg') }}"
                                    alt="Return to Summerfield">
                            <p class="card-title mt-2">Return to Summerfield</p>
                            <small class="book-author p-0">By: Dianne H. Lundy </small>
                        </div>

                        <!-- Buttons at the bottom -->
                        <div class="mt-auto d-flex w-100 flex-wrap gap-2 pt-2">
                            <a target="_blank" class="bookstore-btn me-3" href="https://www.amazon.com/Return-Summerfield-Dianne-H-Lundy/dp/1965386067">
                                <img src="{{ Vite::asset('resources/images/bookstore/Amazon.png') }}" width="90" height="auto" title="Amazon" alt="">
                            </a>
                            <a target="_blank" class="bookstore-btn" href="https://www.barnesandnoble.com/w/return-to-summerfield-dianne-h-lundy/1131458967">
                                <img src="{{ Vite::asset('resources/images/bookstore/BarnesAndNoble.png') }}"  width="90" height="auto" title="Amazon" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row flex g-3">
            <div class="col-md-6 col-lg-4 p-3" style="height: 580px">
                <div class="card book-item h-100">
                    <div class="card-body d-flex flex-column">
                        <!-- Content at the top -->
                        <div>
                            <img class="card-img-top object-fit-contain" height="350" src="{{ Vite::asset('resources/images/authors/dreams_of_the_fathers.jpg') }}" alt="Dreams From Our Fathers">
                            <p class="card-title mt-2">Dreams From Our Fathers</p>
                            <small class="book-author p-0">By: Dana James</small>
                        </div>

                        <!-- Buttons at the bottom -->
                        <div class="mt-auto d-flex w-100 flex-wrap gap-2 pt-2">
                            <a target="_blank" class="bookstore-btn me-3" href="https://www.amazon.com/Dreams-Our-Fathers-Dana-James/dp/1965386040">
                                <img src="{{ Vite::asset('resources/images/bookstore/Amazon.png') }}" width="90" height="auto" title="Amazon" alt="">
                            </a>
                            <a target="_blank" class="bookstore-btn" href="https://www.barnesandnoble.com/w/dreams-from-our-fathers-dana-james/11123826791">
                                <img src="{{ Vite::asset('resources/images/bookstore/BarnesAndNoble.png') }}"  width="90" height="auto" title="Amazon" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 p-3" style="height: 580px">
                <div class="card book-item h-100">
                    <div class="card-body d-flex flex-column">
                        <!-- Content at the top -->
                        <div>
                            <img class="card-img-top object-fit-contain" height="350" src="{{ Vite::asset('resources/images/authors/bound_providence.jpg') }}" alt="Bound by Providence">
                            <p class="card-title mt-2">Bound by Providence</p>
                            <small class="book-author p-0">By: Carol Alford</small>
                        </div>

                        <!-- Buttons at the bottom -->
                        <div class="mt-auto d-flex w-100 flex-wrap gap-2 pt-2">
                            <a target="_blank" class="bookstore-btn me-3" href="https://www.amazon.com/Bound-Providence-unforeseen-happening-influences-ebook/dp/B0CX8GSPDL">
                                <img src="{{ Vite::asset('resources/images/bookstore/Amazon.png') }}" width="90" height="auto" title="Amazon" alt="">
                            </a>
                            <a target="_blank" class="bookstore-btn" href="https://www.barnesandnoble.com/w/bound-by-providence-carol-alford/1144074468">
                                <img src="{{ Vite::asset('resources/images/bookstore/BarnesAndNoble.png') }}"  width="90" height="auto" title="Amazon" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>
@endsection