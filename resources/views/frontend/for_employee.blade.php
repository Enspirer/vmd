@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/for_employee.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid banner" style="margin-bottom : 2rem;">
        <div class="container p-5">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 class="fw-bold mb-4" style="color: #4E6BC8">The smartest way to Recruit Overseas </h1>
                    <button class="btn inquire">Inquire Now</button>
                </div>
                <div class="col-6">
                    <img src="{{ url('img/frontend/employee/banner.png') }}" style="object-fit: cover" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 6rem;">
        <div class="row justify-content-center">
            <div class="col-9 text-center">
                <h2 class="mb-3">The Integrated <span class="fw-bolder" style="font-size: 2.5rem;">Recruitment Solution</span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quaerat magni eaque error reprehenderit assumenda tempora unde asperiores ut delectus. Consectetur necessitatibus, libero eveniet cupiditate distinctio hic ipsum ex aliquid vitae fugiat laudantium consequatur ut aperiam doloremque quisquam possimus enim ducimus quas adipisci ad. Odio!</p>
            </div>
        </div>
    </div>

    <div class="container cards" style="margin-bottom: 6rem;">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="card p-5 text-center">
                            <h4 class="fw-bold mb-4">Post your Jobs</h4>

                            <div class="text-center">
                                <a href="{{url('register-employee')}}" class="btn btn-primary">Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="card p-5 text-center">
                            <h4 class="fw-bold mb-4">View Candidates</h4>

                            <div class="text-center">
                                <a href="{{route('frontend.auth.login')}}" class="btn btn-primary">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-bottom : 5rem;">
        <div class="row position-relative">
            <h1 class="fw-bold text-center">SIMPLE AND EFFECTIVE PROCESS WITH VMD</h1>
            <p class="text-center position-absolute" style="opacity: 0.04; top: -0.2rem; font-size: 3rem; line-height: 1.2; z-index: -1; font-weight: 800">SIMPLE AND EFFECTIVE PROCESS WITH VMD</p>
        </div>
    </div>


    <div class="container position-relative" style="margin-bottom : 7rem;">
        <div class="row justify-content-end align-items-center" style="margin-bottom: 9rem;">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_1.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Register with VMD</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row align-items-center" style="margin-bottom: 9rem;">
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">View candidate profile</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_2.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-end align-items-center" style="margin-bottom: 9rem;">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_3.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Post a job</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row align-items-center" style="margin-bottom: 9rem;">
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Arrange Interview</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_4.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-end align-items-center">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_5.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">License  application process</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-6 vl_1"></div>
        </div>
        <div class="row">
            <div class="col-6 vl_2"></div>
        </div>
        <div class="row">
            <div class="col-6 vl_3"></div>
        </div>
        <div class="row">
            <div class="col-6 vl_4"></div>
        </div>
    </div>    


    <div class="container" style="margin-bottom : 4rem;">
        <h1 class="fw-bold text-center mb-5">Why Choose<span class="fw-bolder">VMD</span></h1>

        <div class="row align-items-center">
            <div class="col-5">
                <img src="{{ url('img/frontend/employee/girl.png') }}" alt="" class="img-fluid w-100" style="height: 48rem; object-fit: cover;">
            </div>

            <div class="col-7">
                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@push('after-scripts')
    

@endpush
