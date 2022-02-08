@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')

@endpush


@section('content')

<section class="section-applicant-profile" id="section-applicant-profile">
    <div class="container">
        <div class="row g-5 mb-4">
            <div class="col-lg-4">
                @if($user->profile_picture != null)
                    <img src="{{url('files/profile_picture',$user->profile_picture)}}" alt="" class="profile-picture">
                @else
                    <img src="{{url('img/no_image_available.png')}}" alt="" class="profile-picture">
                @endif
            </div>
            <div class="col-lg-8 about">
                <div class="applicant-name">{{$user->first_name}} {{$user->last_name}}</div>
                <p class="personal-profile">{{$user->description}}</p>
                <div class="personal-info">
                    <strong>Age:</strong>
                    {{\Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}} old
                </div>
                <div class="personal-info">
                    <strong>Gender</strong>
                    {{$user->gender}}
                </div>
                @if(!empty( auth()->user()->id) === true)
                    @if(App\Models\Auth\User::where('id',auth()->user()->id)->where('profile_type','employee_account')->first())
                        <div class="personal-info">
                            <strong>Address:</strong>
                            {{$user->address}}
                        </div>
                        <div class="personal-info">
                            <strong>Contact Number:</strong>
                            {{$user->contact_number}}
                        </div>
                        <div class="personal-info">
                            <strong>Email:</strong>
                            {{$user->email}}
                        </div>
                        <div class="personal-info">
                            <strong>Country:</strong>
                            {{$user->country}}
                        </div>
                        <div class="personal-info">
                            <strong>DOB:</strong>
                            {{$user->dob}}
                        </div>
                    @endif
                @endif
            </div>
        </div>
        @if(json_decode($user->education_qulification) != null)
            <div class="row">
                <div class="col education-qualification">
                    <div class="title">Education Qualification</div>
                    <ul>
                        @foreach(json_decode($user->education_qulification) as $key => $education)
                            <li>{{$education->education}}</li>
                        @endforeach
                        <!-- <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis adipisci, eum et, dolorum accusamus natus a veritatis ut nesciunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repudiandae culpa labore.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis adipisci, eum et, dolorum accusamus natus a veritatis ut nesciunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repudiandae culpa labore.</li> -->
                    </ul>
                </div>
            </div>
        @endif
        @if(json_decode($user->professional_background) != null)
            <div class="row">
                <div class="col professional-background">
                    <div class="title">Professional Background</div>
                        @foreach(json_decode($user->professional_background) as $key => $professinal)
                            <p class="mb-2">{{$professinal->professional}}</p>
                        @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@endsection


@push('after-scripts')

@endpush