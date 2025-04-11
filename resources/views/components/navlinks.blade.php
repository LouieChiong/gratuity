@if(Request::is('/'))
    <ul class="navbar-nav ms-auto gap-5">
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
            <a class="nav-link click-scroll {{ Route::is('contact') ? 'active' : '' }}" href="/contact_us">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link click-scroll {{ Route::is('bookstore') ? 'active' : '' }}" href="/bookstore">Bookstore</a>
        </li>
    </ul>
@else
    <ul class="navbar-nav ms-auto gap-5">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/#section_2">Our Services</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/#section_3 {{ Request::is('#section_3') ? 'active' : '' }}">Who we are</a>
        </li>

        <li class="nav-item">
            <a class="nav-link click-scroll {{ Route::is('contact') ? 'active' : '' }}" href="/contact_us">Contact Us</a>
        </li>

        <li class="nav-item">
            <a class="nav-link click-scroll {{ Route::is('bookstore') ? 'active' : '' }}" href="/bookstore">Bookstore</a>
        </li>
    </ul>
@endif