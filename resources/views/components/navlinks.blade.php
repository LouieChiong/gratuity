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
            <a class="nav-link click-scroll" href="#">Bookstore</a>
        </li>
        <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
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
            <a class="nav-link" href="/#section_3">Who we are</a>
        </li>

        <li class="nav-item">
            <a class="nav-link click-scroll" href="/#section_4">Reviews</a>
        </li>

        <li class="nav-item">
            <a class="nav-link click-scroll" href="/#section_5">Contact Us</a>
        </li>
    </ul>
@endif