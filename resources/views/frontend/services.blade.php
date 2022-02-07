@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
@endpush


@section('content')

<section class="section-applications" id="section-applications">
    <div class="container">
        <div class="title">Homecare</div>
        <div class="table-container">
        <div class="row thead">
            <div class="col">Name</div>
            <div class="col">Position Applied</div>
            <div class="col">Experiance</div>
            <div class="col">Actions</div>
        </div>
        <div class="row tbody">
            <div class="col">
                <div class="name">Kamal Perera</div>
                <div class="age">28 yrs, <span class="gender">Male</span></div>
            </div>
            <div class="col">Homecare</div>
            <div class="col">3 Years</div>
            <div class="col">
                <a href="" class="view-btn">View Profile</a>
            </div>
        </div>
        <div class="row tbody">
            <div class="col">
                <div class="name">Kamal Perera</div>
                <div class="age">28 yrs, <span class="gender">Male</span></div>
            </div>
            <div class="col">Homecare</div>
            <div class="col">3 Years</div>
            <div class="col">
                <a href="" class="view-btn">View Profile</a>
            </div>
        </div>
        <div class="row tbody">
            <div class="col">
                <div class="name">Kamal Perera</div>
                <div class="age">28 yrs, <span class="gender">Male</span></div>
            </div>
            <div class="col">Homecare</div>
            <div class="col">3 Years</div>
            <div class="col">
                <a href="" class="view-btn">View Profile</a>
            </div>
        </div>
        <div class="row tbody">
            <div class="col">
                <div class="name">Kamal Perera</div>
                <div class="age">28 yrs, <span class="gender">Male</span></div>
            </div>
            <div class="col">Homecare</div>
            <div class="col">3 Years</div>
            <div class="col">
                <a href="" class="view-btn">View Profile</a>
            </div>
        </div>
        <div class="row tbody">
            <div class="col">
                <div class="name">Kamal Perera</div>
                <div class="age">28 yrs, <span class="gender">Male</span></div>
            </div>
            <div class="col">Homecare</div>
            <div class="col">3 Years</div>
            <div class="col">
                <a href="" class="view-btn">View Profile</a>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection


@push('after-scripts')

@endpush