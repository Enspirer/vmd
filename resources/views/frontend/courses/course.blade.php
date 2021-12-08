@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
<link href="{{ url('css/individual-course.css') }}" rel="stylesheet">
@endpush
@push('after-styles')
<style>
    .leanth-course.go {
        right: 0;
    }
    .video-container iframe{
        max-width: 100%;
    }

</style>
<link rel="stylesheet" href="https://cdn.plyr.io/3.5.3/plyr.css"/>

@endpush

@section('content')

@if($course->course_image == null)
    <div class="container-fluid single-course-banner-container" style="background-image: url('../img/no_image_available.png');">
        <div class="container">
            <!-- banner area -->
            <div class="row">
                <div class="col-md-9 banner-txt-wrapper">
                    <span class="trending-tag">
                        <svg id="baseline-flash_on-24px" xmlns="http://www.w3.org/2000/svg" width="25.545" height="25.545"
                            viewBox="0 0 25.545 25.545">
                            <path id="Path_1638" data-name="Path 1638" d="M0,0H25.545V25.545H0Z" fill="none" />
                            <path id="Path_1639" data-name="Path 1639"
                                d="M7,2V13.708h3.193v9.579l7.451-12.772H13.386L17.644,2Z"
                                transform="translate(0.451 0.129)" />
                        </svg>
                        Trending
                    </span>
                    <h1>{{$course->title}}</h1>
                    <h3 style="overflow: hidden;text-overflow: ellipsis;height: 70px;width: 80%;">{{$course->meta_description}}</h3>
                    <div class="col-6">
                        <i class="fas fa-star gold" aria-hidden="true"></i>
                        <i class="fas fa-star gold" aria-hidden="true"></i>
                        <i class="fas fa-star gold" aria-hidden="true"></i>
                        <i class="fas fa-star gold" aria-hidden="true"></i>
                        <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container-fluid single-course-banner-container" style="background-image: url('{{url('storage/uploads',$course->course_image)}}');">
        <div class="container">
            <!-- banner area -->
            <div class="row">
                <div class="col-md-9 banner-txt-wrapper">
                    @if($course->trending == 1)
                        <span class="trending-tag">
                        <svg id="baseline-flash_on-24px" xmlns="http://www.w3.org/2000/svg" width="25.545" height="25.545"
                             viewBox="0 0 25.545 25.545">
                            <path id="Path_1638" data-name="Path 1638" d="M0,0H25.545V25.545H0Z" fill="none" />
                            <path id="Path_1639" data-name="Path 1639"
                                  d="M7,2V13.708h3.193v9.579l7.451-12.772H13.386L17.644,2Z"
                                  transform="translate(0.451 0.129)" />
                        </svg>
                        Trending
                    </span>
                    @endif

                    <h1>{{$course->title}}</h1>
                    <h3 style="overflow: hidden;text-overflow: ellipsis;height: 70px;width: 80%;">{{$course->meta_description}}</h3>
                    <div class="col-6">
                        @for($i=1; $i<=(int)$course->rating; $i++)
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


<div class="container-fluid main-content-height">
    <div class="container">
        <!-- main content area -->
        <div class="main-content-wrapper">
            <!-- main content -->
            <div class="col-md-8">
                <!-- learn box -->
                <div class="learn-box">
                    <h3>What you'll learn</h3>
                    <div class="course-list-box">
                        <div class="inner-box">
                            <ul>
                                
                                <li>
                                    <span>
                                        {!!$course->description!!}
                                    </span>
                                </li>
                                <!-- <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">Perform Real-World Solution
                                        Architecture on AWS
                                </li>
                                <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">Learn the Serverless Fundamantals
                                        (Lambda, DynamoDB, Cognito, API
                                        Gateway)</span>
                                </li>
                                <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">Understand the Well Architected
                                        Framework, DIsaster Recovery</span>
                                </li>
                                <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">|Secure your entire AWS Cloud using
                                        KMS, IAM, Policies & SSM</span>
                                </li> -->
                            </ul>
                        </div>
                        <!-- <div class="inner-box">
                            <ul>
                                <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">All 600+ slides available as
                                        downloadable PDF</span>
                                </li>
                                <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">Learn the AWS Fundamantals (EC2, ELB,
                                        ASG, RDS, ElastiCache, S3)</span>
                                </li>
                                <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">Analyze 10+ Solution Architectures
                                        (traditional & serverless)</span>
                                </li>
                                <li>
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">Master all the differences of
                                        Databases on AWS</span>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!-- course timeline -->
                @if(count($course_lessons) != 0)
                    <h2>Course Timeline</h2>
                    <ul class="faq-list">
                        
                        @foreach($course_lessons as $lesson)
                            <li class="J_list">
                                <div class="list-header">{{$lesson->title}}</div>
                                <div class="list-content">
                                    <div class="list-content-inner">
                                    {!!$lesson->full_text!!}
                                    </div>
                                </div>
                            </li>
                        @endforeach                        
                        
                    </ul>

                @else
                    <h5 class="p-5">No Any Lessons</h5>    
                @endif
            </div>

            <!-- <div style="padding:0 0 350px 0"></div> -->
            <!-- sidebar -->
            <div class="col-md-4 side-cards">
                <div class="top-card i-course-card">


                    @if($course->mediaVideo && $course->mediavideo->count() > 0)
                            @if($course->mediavideo != "")
                                <div class="course-details-content mt-3">
                                    <div class="video-container mb-5" data-id="{{$course->mediavideo->id}}">
                                        @if($course->mediavideo->type == 'youtube')


                                            <div id="player" class="js-player" data-plyr-provider="youtube"
                                                 data-plyr-embed-id="{{$course->mediavideo->file_name}}"></div>
                                        @elseif($course->mediavideo->type == 'vimeo')
                                            <div id="player" class="js-player" data-plyr-provider="vimeo"
                                                 data-plyr-embed-id="{{$course->mediavideo->file_name}}"></div>
                                        @elseif($course->mediavideo->type == 'upload')
                                            <video poster="" id="player" class="js-player" playsinline controls>
                                                <source src="{{$course->mediavideo->url}}" type="video/mp4"/>
                                            </video>
                                        @elseif($course->mediavideo->type == 'embed')
                                            {!! $course->mediavideo->url !!}
                                        @endif
                                    </div>
                                </div>
                            @endif
                    @endif

                        @php
                            $matched = checkCourseSubscribeOrNot($checkSubcribePlan,$course->id);
                            $courseExpire = courseOrBundleExpire($course->id,'');
                        @endphp

                        @if ($courseExpire==false && !$purchased_course && $matched['matched']==false && $matched['matchedBundle']==false)

                            @if($course->free == 1)

                                <form action="{{ route('cart.getnow') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course->id }}"/>
                                    <input type="hidden" name="amount" value="{{($course->free == 1) ? 0 : $course->price}}"/>
                                    <button class="btn sidebar-btn" style="background-color: green;">Free Get Now</button>

                                </form>
                            @else
                                <form action="{{ route('cart.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course->id }}"/>
                                    <input type="hidden" name="amount" value="{{($course->free == 1) ? 0 : $course->price}}"/>
                                    <button class="btn sidebar-btn white-btn">Buy Now</button>

                                </form>

                                <h3 class="coourse-price" style="color: #0763E5">${{$course->price}}</h3>

                            @endif


                        @else




                            @if($continue_course || !empty($checkSubcribePlan))
                                <a href="{{route('lessons.show',['course_id' => $course->id,'slug'=>$continue_course->model->slug])}}"
                                   class="btn btn-primary">

                                    @lang('labels.frontend.course.continue_course')

                                    <i class="fa fa-arow-right"></i></a>
                            @endif

                        @endif

                    <p style="overflow: hidden;text-overflow: ellipsis;height: 86px;">{{$course->meta_description}}</p>
                    <div class="notification-row row  mb-3 align-items-center">
                        <div class="col-6 border-right">
                            <p><i class="bi bi-layers-fill"
                                    style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i><span
                                    class="fw-bold ms-2 time-and-lessons-small" style="color: #150D6D">{{count($lessons) }} Lessons</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p><i class="fas fa-stopwatch" style="color: #0763E5; font-size: 1.2rem; "
                                    aria-hidden="true"></i><span class="fw-bold ms-2 time-and-lessons-small"
                                    style="color: #150D6D">3
                                    hr 30
                                    min</span></p>
                        </div>
                        <div class="btn-bar">
                            <a href="">Reminder</a>
                            <span class="vertical-line"></span>
                            <a href="">Favorite</a>
                            <span class="vertical-line"></span>
                            <a href="">Share</a>
                        </div>
                    </div>
                </div>
                <div class="review-card i-course-card">
                    <h3>Course Reviews</h3>
                    <div class="review-inner">
                        <div class="rating-number">
                            <h2>4.4 / 5</h2>
                            <h6>58 Ratings</h6>
                        </div>
                        <div class="five-star">
                            <div>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                            </div>
                            <div>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                            </div>
                            <div>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                            </div>
                            <div>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                            </div>
                            <div>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star gold" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="progress-bar-wrapper">
                            <div class="progress">
                                <div class="bar" style="width:35%">
                                    <p class="percent">35%</p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width:35%">
                                    <p class="percent">35%</p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width:35%">
                                    <p class="percent">35%</p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width:35%">
                                    <p class="percent">35%</p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width:35%">
                                    <p class="percent">35%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if($user_details != null)
                    <div class="profile-card i-course-card">
                        <img class="prof-img" src="{{ url('img/frontend/individual_courses/profile.png')}}"
                            alt="add to card">
                        <h3>{{$user_details->first_name}} {{$user_details->last_name}}</h3>
                        <!-- <h4>IT Director at Cognizant</h4> -->
                        <div>
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                        </div>
                    </div>
                @endif
            </div>



        </div>


    </div>
</div>




@endsection
@push('after-scripts')
<script src="https://cdn.plyr.io/3.5.3/plyr.polyfilled.js"></script>

<script>
    const player = new Plyr('#player');

    $(document).on('change', 'input[name="stars"]', function () {
        $('#rating').val($(this).val());
    })
            @if(isset($review))
    var rating = "{{$review->rating}}";
    $('input[value="' + rating + '"]').prop("checked", true);
    $('#rating').val(rating);
    @endif
</script>
@endpush


@push('after-scripts')
<script>
$('.list-header').on('click', function() {
    var $J_li = $(this).parents('.J_list')
    $J_li.hasClass('open') ? $J_li.removeClass('open') : $J_li.addClass('open');
})
</script>

<script>
const video = document.getElementById("video");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
	if (video.paused || video.ended) {
		video.play();
	} else {
		video.pause();
	}
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
	circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
	circlePlayButton.style.opacity = 1;
});


//hide controls
var vids = $("video"); 
$.each(vids, function(){
       this.controls = false; 
}); 
//Loop though all Video tags and set Controls as false

$("video").click(function() {
  //console.log(this); 
  if (this.paused) {
    this.play();
   
  } else {
    this.pause();
    this.controls = true; 
  }
});

</script>

@endpush