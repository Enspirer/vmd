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

            @if(count($users) == 0)
                @include('frontend.includes.not_found',[
                    'not_found_title' => 'data not found',
                    'not_found_description' => null,
                    'not_found_button_caption' => null
                ])

            @else
                <div class="table-container">
                    <div class="row thead">
                        <div class="col">Name</div>
                        <div class="col">Position Applied</div>
                        <div class="col">Gender</div>
                        <div class="col">Actions</div>
                    </div>
                    @foreach($users as $key => $user)
                        <div class="row tbody">
                            <div class="col">
                                <div class="name">{{$user->first_name}} {{$user->last_name}}</div>
                                <div class="age">{{\Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}} old, <span class="gender">{{$user->gender}}</span></div>
                            </div>
                            <div class="col">{{$cadidate_category->name}}</div>
                            <div class="col">{{$user->gender}}</div>
                            <div class="col">
                                <a href="{{url('services/applicant-profile',$user->id)}}" class="view-btn">View Profile</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</section>

@endsection


@push('after-scripts')

@endpush