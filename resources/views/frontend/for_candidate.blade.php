@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/for_candidate.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid p-0 banner" style="margin-bottom : 4rem;">
        <img src="{{ url('img/frontend/candidate/banner.png') }}" alt="" class="img-fluid w-100">
    </div>


    <div class="container" style="margin-bottom : 5rem;">
        <div class="row position-relative">
            <h1 class="fw-bold text-center">SIMPLE PROCESS WITH VMD</h1>
            <p class="text-center position-absolute" style="opacity: 0.04; top: -0.9rem; font-size: 4rem; line-height: 1.2; z-index: -1; font-weight: 800">SIMPLE PROCESS WITH VMD</p>
        </div>
    </div>


    <div class="container">
  <div class="row">
    <div class="col">
      <div class="main-timeline">
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2018</span>
            <div class="timeline-icon">
              <i class="fa fa-rocket" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">Web Development</h3>
              <p class="description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017</span>
            <div class="timeline-icon">
              <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">JavaScript</h3>
              <p class="description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017</span>
            <div class="timeline-icon">
              <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">Mongo DB</h3>
              <p class="description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017</span>
            <div class="timeline-icon">
              <i class="fa fa-heart" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">BlackPearl</h3>
              <p class="description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017</span>
            <div class="timeline-icon">
              <i class="fa fa-globe" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">Angular</h3>
              <p class="description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017</span>
            <div class="timeline-icon">
              <i class="fa fa-apple" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">Laravel</h3>
              <p class="description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
          </a>
        </div>
        <div class="timeline">
          <a href="#" class="timeline-content">
            <span class="timeline-year">2017</span>
            <div class="timeline-icon">
              <i class="fa fa-edit" aria-hidden="true"></i>
            </div>
            <div class="content">
              <h3 class="title">Creapure</h3>
              <p class="description">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>    


@endsection


@push('after-scripts')
    

@endpush
