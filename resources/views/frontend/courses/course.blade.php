@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
<link href="{{ url('css/individual-course.css') }}" rel="stylesheet">
@endpush


@section('content')

<div class="container-fluid single-course-banner-container">
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
                <h1>Ultimate AWS Certified Solutions Architect <br />
                    Associate 2021</h1>
                <h3>Pass the AWS Certified Solutions Architect Associate Certification SAA-C02. Complete <br />Amazon
                    Web Services Cloud training!</h3>
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
                                    <span><img class="check-icon"
                                            src="{{ url('img/frontend/individual_courses/checked.png')}}"
                                            alt=""></span><span class="learn-task">FULLY UPDATED FOR SAA-CO2:Pass the
                                        AWS Certified Solutions
                                        Architect Associate Certification</span>
                                </li>
                                <li>
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
                                </li>
                            </ul>
                        </div>
                        <div class="inner-box">
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
                        </div>
                    </div>
                </div>
                <!-- course timeline -->
                <h2>Course Timeline</h2>
                <ul class="faq-list">
                    <li class="J_list">
                        <div class="list-header">Introduction</div>
                        <div class="list-content">
                            <div class="list-content-inner">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum
                                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.

                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </li>
                    <li class="J_list">
                        <div class="list-header">1st Chapter</div>
                        <div class="list-content">
                            <div class="list-content-inner">
                                Files or folders in your Dropbox folder can be shared, instantly. All you have to do is
                                select the file and then select Share link from the Dropbox menu. Once you do, you can
                                send the link to anyone over email, instant message, text message...you name it. People
                                who click the link will get a preview of the file or folder on the Dropbox website.
                                They'll also have the option to download a copy of the file. If the person you share the
                                link with already has the file or folder saved in their Dropbox, they will be taken
                                directly to that file or folder's location.
                                <br /> Note: If you share a link to a video, the recipient will be able to watch up to
                                15 minutes of it on the preview page on the Dropbox website. For a longer video, the
                                recipient will need to download the file or watch from the Dropbox mobile app to see all
                                of it.
                                <br /> If you're a Dropbox Pro or Dropbox for Business user, you can control who
                                accesses your links and for how long by setting passwords and expirations for them.
                                Alternatively, you can use view-only permissions for shared folders. Links are ideal for
                                replacing email attachments, whereas view-only permissions for shared folders are useful
                                for keeping collaborators continuously up to date without giving them the ability to
                                change files.
                            </div>
                        </div>
                    </li>
                    <li class="J_list">
                        <div class="list-header">2nd Chapter</div>
                        <div class="list-content">
                            <div class="list-content-inner">
                                There are two ways to share the files or folders in your Dropbox with others. If instead
                                you'd like to collect files from people, read more about the file requests feature.
                            </div>
                        </div>
                    </li>
                    <li class="J_list">
                        <div class="list-header">3rd Chapter</div>
                        <div class="list-content">
                            <div class="list-content-inner">
                                File requests allows you to collect and receive files—big or small — from anyone, right
                                into your Dropbox. File requests are ideal for receiving a large file or collection of
                                files, collecting photos after a special event, and requesting submissions from
                                coworkers and clients.
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- sidebar -->
            <div class="col-md-4 side-cards">
                <div class="top-card i-course-card">
                    <div class="video-wrapper">
                        <video id="video" style="border-top-left-radius: 20px; border-top-right-radius: 20px;" width="100%"
                            height="100%" poster="{{ url('img/frontend/individual_courses/video-banner.jpg')}}"
                            controls>
                            <source src="{{ url('video/frontend/individual_course/computer_science.mp4') }}"
                                type="video/mp4">
                        </video>
                        <!-- <span class="play-btn"><img src="{{ url('img/frontend/individual_courses/play.png') }}" alt=""> -->
                        <div class="play-button-wrapper">
                            <div title="Play video" class="play-gif" id="circle-play-b">
                                <!-- SVG Play Button -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                </svg>
                            </div>
                        </div>
                        </span>
                    </div>



                    <h3 class="coourse-price" style="color: #0763E5">$11.99</h3>
                    <button class="btn sidebar-btn">Entroll Now</button>
                    <button class="btn sidebar-btn white-btn">Buy Now</button>
                    <p>Pass the AWS Certified Solutions Architect Associate Certification SAA-C02. Complete Amazon Web
                        Services Cloud training!</p>
                    <div class="notification-row row  mb-3 align-items-center">
                        <div class="col-6 border-right">
                            <p><i class="bi bi-layers-fill"
                                    style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i><span
                                    class="fw-bold ms-2 time-and-lessons-small" style="color: #150D6D">12 Lessons</span>
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
                <div class="profile-card i-course-card">
                    <img class="prof-img" src="{{ url('img/frontend/individual_courses/profile.png')}}"
                        alt="add to card">
                    <h3>Elina Roshita</h3>
                    <h4>IT Director at Cognizant</h4>
                    <div>
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
</div>




@endsection


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