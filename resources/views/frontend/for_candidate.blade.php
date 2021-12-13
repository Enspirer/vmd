@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/for_candidate.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid p-0 banner" style="margin-bottom : 4rem;">
        <img src="{{ url('files/candidate_banner',config('candidate_banner')) }}" alt="" class="img-fluid w-100" style="object-fit: cover; height:500px; margin-bottom : 2rem;">
    </div>


    <div class="container" style="margin-bottom : 5rem;">
        <div class="row position-relative">
            <h1 class="fw-bold text-center">SIMPLE PROCESS WITH VMD</h1>
            <p class="candidate-inner-heading text-center position-absolute" style="opacity: 0.04; top: -0.9rem; font-size: 4rem; line-height: 1.2; z-index: -1; font-weight: 800">SIMPLE PROCESS WITH VMD</p>
        </div>
    </div>


    <div class="container position-relative hidden-xs" style="margin-bottom : 7rem;">
        <div class="row justify-content-end align-items-center" style="margin-bottom: 9rem;">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/candidate/sample_1.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Register with VMD</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row align-items-center" style="margin-bottom: 9rem;">
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Create your profile LMS</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/candidate/sample_2.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-end align-items-center" style="margin-bottom: 9rem;">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/candidate/sample_3.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Get Qualified</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row align-items-center" style="margin-bottom: 9rem;">
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Find a sponsor</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/candidate/sample_4.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-end align-items-center">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/candidate/sample_5.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Apply for job</h5>
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
    
    
    <div class="container visible-xs chart-container">
    <div class="row" style="">
        <div>
            <img src="{{ url('img/frontend/employee/sample_1.png') }}" alt="" class="img-fluid">
        </div>
        <div class="chart-txt">
            <h5 class="fw-bold mb-2">Register with VMD</h5>
            <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.
            </p>
        </div>
    </div>
    <span class="dotted-line"></span>
    <div class="row" style="">
        <div>
        <img src="http://127.0.0.1:8000/img/frontend/candidate/sample_2.png" alt="" class="img-fluid">
        </div>
        <div class="chart-txt">
            <h5 class="fw-bold mb-2">Create your profile LMS</h5>
            <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.
            </p>
        </div>

    </div>
    <span class="dotted-line"></span>
    <div class="row">
        <div>
        <img src="http://127.0.0.1:8000/img/frontend/candidate/sample_3.png" alt="" class="img-fluid">
        </div>
        <div class="chart-txt">
            <h5 class="fw-bold mb-2">Get Qualified</h5>
            <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.
            </p>
        </div>
    </div>
    <span class="dotted-line"></span>
    <div class="row">
        <div>
        <img src="http://127.0.0.1:8000/img/frontend/candidate/sample_4.png" alt="" class="img-fluid">
        </div>
        <div class="chart-txt">
            <h5 class="fw-bold mb-2">Find a sponsor</h5>
            <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.
            </p>
        </div>
    </div>
    <span class="dotted-line"></span>
    <div class="row">
        <div>
        <img src="http://127.0.0.1:8000/img/frontend/candidate/sample_5.png" alt="" class="img-fluid">
        </div>
        <div class="chart-txt">
            <h5 class="fw-bold mb-2">Apply for job</h5>
            <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.
            </p>
        </div>
    </div>


</div>



<div class="container" style="margin-bottom : 4rem;">
    <h1 class="fw-bold text-center mb-5">Why Choose <span class="fw-bolder">VMD</span></h1>

    <div class="row align-items-center">
        <div class="col-5 hidden-xs">
            <img src="{{ url('img/frontend/employee/girl.png') }}" alt="" class="img-fluid w-100"
                style="height: 48rem; object-fit: cover;">
        </div>

        <div class="col-7 col-xs-12">
            @if(count($for_candidate) != 0)
                @foreach($for_candidate as $for_can)
                    <div class="row align-items-center mb-3">
                        <div class="col-1">
                            <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                        </div>
                        <div class="col-11">
                            <h5 class="fw-bold">{{$for_can->title}}</h5>
                        </div>
                        
                        <div class="row justify-content-end">
                            <div class="col-11">
                                <p style="font-size: 0.8rem;">{{$for_can->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h5>No Any Data Here</h5>
            @endif
        </div>
    </div>
</div>


    <div class="container-fluid bottom_banner">
        <div class="container p-5 pb-0 join-banner">
            <div class="row align-items-center">
                <div class="col-6">
                    <h3 class="fw-bold mb-4">Get started with your future progress today</h3>
                    <a href="{{route('frontend.auth.register_candidate')}}" class="btn join">Join Now</a>
                </div>
                <div class="col-6">
                    <img src="{{ url('img/frontend/candidate/bottom_banner.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>


@endsection


@push('after-scripts')
    

@endpush
