
@if(Route::is('index'))
    <nav class="primary-navbar navbar-expand-lg d-flex justify-content-lg-evenly justify-content-md-between">
        <div class="d-flex align-items-center px-1 py-2 text-decoration-none">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo img-fluid me-2">
            <h4 class="m-0 logo-text">GRATUITY</h4>
        </div>

        <div class="px-sm-4 px-lg-0 mt-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse border-2" id="navbarNav">
                @include('components.navlinks')
            </div>
        </div>
    </nav>

    <nav class="d-none secondary-navbar navbar-expand-lg d-flex justify-content-lg-evenly justify-content-md-between">
        <div class="d-flex align-items-center px-1 py-2 text-decoration-none">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo img-fluid me-2">
            <h4 class="m-0 logo-text">GRATUITY</h4>
        </div>

        <div class="px-sm-3 px-lg-0 mt-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-white bg-md-transparent" id="navbarNav">
                @include('components.navlinks')
            </div>
        </div>
    </nav>
@else
    <nav class="secondary-navbar navbar-expand-lg d-flex justify-content-lg-evenly justify-content-md-between">
        <div class="d-flex align-items-center px-1 py-2 text-decoration-none">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo img-fluid me-2">
            <h4 class="m-0 logo-text">GRATUITY</h4>
        </div>

        <div class="px-sm-3 px-lg-0 mt-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-white bg-md-transparent" id="navbarNav">
                @include('components.navlinks')
            </div>
        </div>
    </nav>
@endif