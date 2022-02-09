@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')

<style>
    /* Popup container */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    /* The actual popup (appears on top) */
    .popup .popuptext {
        visibility: hidden;
        width: 470px;
        background-color: #303030;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 14px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 15%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class when clicking on the popup container (hide and show the popup) */
    .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 0.8s;
        animation: fadeIn 0.8s
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;}
    }
</style>
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
                    @if(App\Models\Auth\User::where('id',auth()->user()->id)->where('profile_type','!=','employee_account')->first())
                        <div class="personal-info">
                            <div class="popup mt-3 text-danger" onclick="myFunction()"><b>More Info! <i class="fas fa-info-circle"></i></b>
                                <span class="popuptext" id="myPopup">If you want more details <a href="{{route('frontend.for_employee')}}" style="text-decoration:none; color:#66CCFF;">Register as an Employer</a></span>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="personal-info">
                        <div class="popup mt-3 text-danger" onclick="myFunction()"><b>More Info! <i class="fas fa-info-circle"></i></b>
                            <span class="popuptext" id="myPopup">If you want more details <a href="{{route('frontend.auth.register_employee')}}" style="text-decoration:none; color:#66CCFF;">Register as an Employer</a></span>
                        </div>
                    </div>
                @endif

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
<script>
    function myFunction() {
    var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
</script>
@endpush