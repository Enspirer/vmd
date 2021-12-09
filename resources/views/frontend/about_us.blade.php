@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/about_us.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container" style="margin-top: 4rem; margin-bottom : 5rem;">
        <div class="row position-relative">
            <h1 class="fw-bold text-center">ABOUT US</h1>
            <p class="text-center position-absolute large-design-title-about" style="opacity: 0.04; z-index: -1; font-weight: 800">ABOUT US</p>
        </div>
    </div>


    <div class="container" style="margin-bottom : 7rem;">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="{{ url('files/about_us',config('about_us_image')) }}" alt="" class="img-fluid w-100" style="height: 30rem; object-fit: cover">
            </div>
            <div class="col-6 mt">
                {!! config('about_us_description') !!}
            </div>
        </div>
    </div>


    <div class="container" style="margin-bottom : 6rem;">
        <div class="row" style="justify-content: center;">
            <div class="col-4 position-relative col-sm-6">
                <img src="{{ url('img/frontend/about_us/mission.png') }}" alt="" class="img-fluid w-100 vision-height">
                <div class="row content justify-content-center text-center mobile-fix-row">
                    <div class="col-9">
                        <h4 class="fw-bold mb-2" style="color: #0763E5">Our Mission</h4>
                        <p style="font-size: 0.85rem">{{config('our_mision')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-4 position-relative col-sm-6">
                <img src="{{ url('img/frontend/about_us/vision_1.png') }}" alt="" class="img-fluid w-100" style="height: 30rem;">
                <div class="row content justify-content-center text-center mobile-fix-row">
                    <div class="col-9">
                        <h4 class="fw-bold mb-2" style="color: #0763E5">Our Vision</h4>
                        <p style="font-size: 0.85rem">{{config('our_vision')}}</p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-4 position-relative">
                <img src="{{ url('img/frontend/about_us/vision_2.png') }}" alt="" class="img-fluid w-100" style="height: 30rem;">
                <div class="row content justify-content-center text-center">
                    <div class="col-9">
                        <h4 class="fw-bold mb-2" style="color: #0763E5">Our Vision</h4>
                        <p style="font-size: 0.85rem">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, illum. Delectus inventore ad ex recusandae velit explicabo sint fuga. Maxime qui, unde doloribus itaque dolores nemo laborum temporibus ducimus. Adipisci!</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>


    <div class="container" style="margin-bottom: 7rem;">
        <div class="row">
            <div class="col-12">
                <h3 class="fw-bold text-center">Why choose us?</h3>

                <div class="row">

                    @if(count($why_choose_us) != 0)
                        @foreach($why_choose_us as $key => $why_choose)
                            <div class="col-4 col-xs-12 mt-5 col-sm-6">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ url('files/why_choose_us',$why_choose->icon) }}" alt="" class="img-fluid shadow w-100 p-2" style="border-radius: 6px; height: 4rem;">
                                    </div>
                                    <div class="col-9">
                                        <h6 class="fw-bold mb-2">{{$why_choose->title}}</h6>
                                        <p class="mb-1" style="font-size: 0.9rem;">{{$why_choose->text}}</p>
                                        <p class="fw-bold" style="font-size: 0.75rem; color: #AB67BF">{{$why_choose->short_text}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h3>No Any Data Here</h3>
                    @endif     

                </div>
            </div>
            
        </div>
    </div>


@endsection


@push('after-scripts')
    

@endpush
