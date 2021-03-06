

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('frontend.index') }}"><img src="{{ url('img/frontend/logo.png') }}"
                alt="" class="img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark {{ Request::segment(1) == '' ? 'active' : null }}"
                        aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark {{ Request::segment(1) == 'about-us' ? 'active' : null }}"
                        href="{{ route('frontend.about_us') }}">About Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark  {{ Request::segment(1) == 'courses' ? 'active' : null }}"
                        href="{{route('courses.all')}}">Courses</a>
                </li>
               
                <li class="nav-item px-3 drop-list">
                    <a class="nav-link p-0 text-dark" href="#">Services <i class="drop-icon fa fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ route('frontend.for_employee') }}">Employers</a></li>
                        <!-- <li><a href="{{ route('frontend.for_candidate')}}">Candidates</a></li> -->
                        <li class="nav-item drop-list">
                            <a class="nav-link p-0 text-dark" href="#">Candidates <i class="drop-icon fa fa-caret-right"></i></a>
                            <ul class="dropdown" style="left:170px; top:8px; background-color: #E8E8E8;">
                                <li><a href="{{ route('frontend.for_candidate')}}">The Process</a></li>
                                @auth
                                    @foreach(App\Models\Models\CandidateCategory::where('status','Enabled')->orderBy('order','asc')->get() as $key=> $candidate_category)
                                        <li><a href="{{ route('frontend.services',$candidate_category->slug)}}">{{$candidate_category->name}}</a></li>
                                    @endforeach
                                @else

                                @endauth
                             
                            </ul>
                         </li>


                    </ul>
                </li>

                <!-- <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
                    <li class="dropdown-submenu ">
                        <a tabindex="-1" class="dropdown-toggle topLevel" data-toggle="dropdown" href="#">
                            News
                            <i class="icon icon-caret-right"></i>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">A & E Passer</a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Elementary</a></li>
                            <li><a href="#">Secondary</a></li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                </ul> -->

                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark" href="#">Sponsorships</a>

                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark {{ Request::segment(1) == 'contact-us' ? 'active' : null }}"
                        href="{{ route('frontend.contact_us') }}">Contact Us</a>
                </li>
                @auth
                <!-- <li class="nav-item px-3"
                    style="background: #e7e7e7;padding-top: 6px;padding-bottom: 6px;border-radius: 10px;">
                    <a class="nav-link p-0 text-dark" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li> -->

                <li class="nav-item px-3 drop-list" style="background: #e7e7e7;padding-top: 6px;padding-bottom: 6px;border-radius: 10px;">
                    <a class="nav-link p-0 text-dark" href="#">Dashboard <i class="drop-icon fa fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{route('frontend.auth.logout')}}">Logout</a></li>
                    </ul>
                </li>

                @else
                <li class="nav-item px-3">
                    <a class="nav-link p-0 text-dark" href="{{ route('frontend.auth.login') }}">Log In</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link p-0 btn register-btn px-3 py-2" type="button"
                        href="{{ route('frontend.auth.register_candidate') }}">Register</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>