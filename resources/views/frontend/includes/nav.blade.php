<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('frontend.index') }}"><img src="{{ url('img/frontend/logo.png') }}" alt="" class="img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark {{ Request::segment(1) == '' ? 'active' : null }}" aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark {{ Request::segment(1) == 'about-us' ? 'active' : null }}" href="{{ route('frontend.about_us') }}">About Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark" href="#">Courses</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark" href="#">Services</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark" href="#">Sponsorships</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark {{ Request::segment(1) == 'contact-us' ? 'active' : null }}" href="{{ route('frontend.contact_us') }}">Contact Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark" href="{{ route('frontend.auth.login') }}">Log In</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link p-0 btn register-btn px-3 py-2" type="button" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>