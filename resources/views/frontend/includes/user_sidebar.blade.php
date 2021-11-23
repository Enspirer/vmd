<div class="">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->segment(2) == 'dashboard' ? 'active' : '' }}" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Dashboard
                </a>
            </li>



                <li class="nav-item ">
                    <a class="nav-link {{ request()->segment(2) == 'messages' ? 'active' : '' }}"  href="{{ route('admin.messages') }}">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                        Message
                    </a>
                </li>
            <li class="nav-item">
                <a href="{{ route('admin.invoices.index') }}" class="nav-link {{ request()->segment(2) == 'invoices' ? 'active' : '' }}">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Invoices
                </a>
            </li>
            <li>
                <a href="{{ route('admin.certificates.index') }}" class="nav-link {{ request()->segment(2) == 'certificates' ? 'active' : '' }}">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Certificates
                </a>
            </li>
            <li>
                <a href="{{ route('admin.subscriptions') }}" class="nav-link {{ request()->segment(2) == 'subscriptions' ? 'active' : '' }}">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Subscriptions
                </a>
            </li>
            <li>
                <a href="{{url('user/wishlist')}}" class="nav-link {{ request()->segment(2) == 'wishlist' ? 'active' : '' }}">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Wishlist
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{auth()->user()->picture}}" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="{{route('admin.account')}}">Settings</a></li>
                <li><a class="dropdown-item" href="{{route('frontend.auth.logout')}}">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>



@if((!$logged_in_user->hasRole('student')) && ($logged_in_user->hasRole('teacher') || $logged_in_user->isAdmin() || $logged_in_user->hasAnyPermission(['course_access','lesson_access','test_access','question_access','bundle_access'])))
    {{--@if($logged_in_user->hasRole('teacher') || $logged_in_user->isAdmin() || $logged_in_user->hasAnyPermission(['course_access','lesson_access','test_access','question_access','bundle_access']))--}}

    <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern(['user/courses*','user/lessons*','user/tests*','user/questions*','user/live-lessons*','user/live-lesson-slots*']), 'open') }}">
        <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/*')) }}"
           href="#">
            <i class="nav-icon icon-puzzle"></i> @lang('menus.backend.sidebar.courses.management')


        </a>

        <ul class="nav-dropdown-items">

            @can('course_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'courses' ? 'active' : '' }}"
                       href="{{ route('admin.courses.index') }}">
                        <span class="title">@lang('menus.backend.sidebar.courses.title')</span>
                    </a>
                </li>
            @endcan

            @can('lesson_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'lessons' ? 'active' : '' }}"
                       href="{{ route('admin.lessons.index') }}">
                        <span class="title">@lang('menus.backend.sidebar.lessons.title')</span>
                    </a>
                </li>
            @endcan

            @can('test_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'tests' ? 'active' : '' }}"
                       href="{{ route('admin.tests.index') }}">
                        <span class="title">@lang('menus.backend.sidebar.tests.title')</span>
                    </a>
                </li>
            @endcan


            @can('question_access')
                <li class="nav-item">
                    <a class="nav-link {{ $request->segment(2) == 'questions' ? 'active' : '' }}"
                       href="{{ route('admin.questions.index') }}">
                        <span class="title">@lang('menus.backend.sidebar.questions.title')</span>
                    </a>
                </li>
            @endcan


            @can('live_lesson_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'live-lessons' ? 'active' : '' }}"
                       href="{{ route('admin.live-lessons.index') }}">
                        <span class="title">@lang('menus.backend.sidebar.live_lessons.title')</span>
                    </a>
                </li>
            @endcan

            @can('live_lesson_slot_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'live-lesson-slots' ? 'active' : '' }}"
                       href="{{ route('admin.live-lesson-slots.index') }}">
                        <span class="title">@lang('menus.backend.sidebar.live_lesson_slots.title')</span>
                    </a>
                </li>
            @endcan

        </ul>
    </li>
    @can('bundle_access')
        <li class="nav-item ">
            <a class="nav-link {{ $request->segment(2) == 'bundles' ? 'active' : '' }}"
               href="{{ route('admin.bundles.index') }}">
                <i class="nav-icon icon-layers"></i>
                <span class="title">@lang('menus.backend.sidebar.bundles.title')</span>
            </a>
        </li>
    @endcan
    @if($logged_in_user->hasRole('teacher') || $logged_in_user->isAdmin())
        <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern(['user/reports*']), 'open') }}">
            <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/*')) }}"
               href="#">
                <i class="nav-icon icon-pie-chart"></i>@lang('menus.backend.sidebar.reports.title')

            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(1) == 'sales' ? 'active' : '' }}"
                       href="{{ route('admin.reports.sales') }}">
                        @lang('menus.backend.sidebar.reports.sales')
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(1) == 'students' ? 'active' : '' }}"
                       href="{{ route('admin.reports.students') }}">@lang('menus.backend.sidebar.reports.students')
                    </a>
                </li>
            </ul>
        </li>
    @endif
@endif