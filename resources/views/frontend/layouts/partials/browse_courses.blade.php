@push('after-styles')
<link href="{{ url('css/courses.css') }}" rel="stylesheet">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush



<div class="container">
    <h2 style="margin-top: 20px;">Development Courses</h2>
    <!-- featured courses -->
    <h4 style="padding-top: 40px;padding-bottom: 40px;">Featured course</h4>
    <div class="row">
        @if(count($feature_courses) != 0 )
        @foreach($feature_courses as $fea_courses)
        <div class="col-md-6 col-xs-12">
            <a style="text-decoration: none;" href="{{ route('courses.show',$fea_courses->slug) }}">
                <div class="featured-card">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="featured-img" src="{{ asset('storage/uploads/'.$fea_courses->course_image) }}"
                                alt="featured image">
                        </div>
                        <div class="col-md-7">
                            <div class="featured-text-box" >
                                <h2>{{$fea_courses->title}}</h2>
                                <p style="overflow: hidden;text-overflow: ellipsis;height: 119px;">{{ strip_tags($fea_courses->description) }}
                                </p>
                                <div class="col-6 star-bar">
                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                                </div>
                                <div class="lessons-time">
                                    <div class="lesson-time-box">
                                        <span class="lesson-time-box-logo">
                                            <i class="bi bi-layers-fill"
                                                style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i>
                                        </span>

                                        <span class="lesson-time-box-content">
                                            {{\App\Models\Lesson::where('course_id',$fea_courses->id)->count()}}
                                             Lessons
                                        </span>
                                    </div>

                                    <span class="vertical-line"></span>

                                    <div class="lesson-time-box">
                                        <span class="lesson-time-box-logo">
                                            <i class="fas fa-calender" style="color: #0763E5; font-size: 1.2rem; "
                                                aria-hidden="true"></i>
                                        </span>
                                        <span class="lesson-time-box-content">EXP:  {{$fea_courses->expire_at}} </span>

                                    </div>
                                </div>
                                <div class="price-enroll-box">
                                    <span class="enroll-price">
                                        ${{$fea_courses->price}}
                                    </span>
                                    <span class="enroll-btn-area">
                                        <button type="button" class="btn btn-light enroll-btn">Enroll Now</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        @endforeach
        @endif

    </div>



    <!-- courses most popular and trending -->
    <div class="container">
        <h4 style="padding-top: 40px;padding-bottom: 40px;">Courses to get you started</h4>

        <div class="course-category-wrapper">
            <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#most-popular" role="tab">Most Popular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#trending" role="tab">Trending</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="most-popular" role="tabpanel">
                <!-- Swiper -->
                <div class="swipper-outer">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- single slide start here -->

                            @if(count($popular_courses) != 0 )
                            @foreach($popular_courses as $pop_courses)
                            <div class="swiper-slide">
                                <div class="slide-inner-wrapper">
                                    <div class="card-img-area">
                                        <img src="{{ asset('storage/uploads/'.$pop_courses->course_image) }}" alt="">
                                    </div>
                                    <div class="card-content-area">
                                        <div class="card p-4 slider-card">

                                            <h5 class="fw-bold mb-2 card-title" style="color: #150D6D">
                                                {{$pop_courses->title}}</h5>

                                            <div
                                                style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                <p class="mb-3" style="font-size: 0.7rem;">
                                                    {{$pop_courses->meta_description}}</p>
                                            </div>

                                            <div class="row mb-3 align-items-center">
                                                <div class="col-6">
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-6">
                                                    <div class="notification-box">
                                                        <div class="student-count">
                                                            <p>
                                                                <i class="far fa-user" aria-hidden="true"></i>
                                                                <span class="fw-bold ms-2 top-notification"
                                                                    style="color: #150D6D">01</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-count">
                                                            <p><i class="bi bi-chat-left-text"></i><span
                                                                    class="fw-bold ms-2 top-notification"
                                                                    style="color: #150D6D">00</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row  mb-3 align-items-center">
                                                <div class="col-6 border-right">
                                                    <p><i class="bi bi-layers-fill"
                                                            style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i><span
                                                            class="fw-bold ms-2 time-and-lessons-small"
                                                            style="color: #150D6D">{{\App\Models\Lesson::where('course_id',$pop_courses->id)->count()}} Lessons</span></p>
                                                </div>
                                                <div class="col-6">
                                                    <p><span
                                                            class="fw-bold ms-2 time-and-lessons-small"
                                                            style="color: #150D6D">EXP:  {{$fea_courses->expire_at}} </span></p>
                                                </div>
                                            </div>

                                            <div class=" price-enroll-box  card-box">

                                                    @if($pop_courses->free == 1)
                                                        <h3 class="fw-bold mb-3 course-price-card" style="color: #0763E5"> Free</h3>
                                                    @else
                                                        <h3 class="fw-bold mb-3 course-price-card" style="color: #0763E5"> ${{$pop_courses->price}}</h3>
                                                    @endif

                                                <form action="{{ route('courses.show',$pop_courses->slug) }}" method="get">
                                                    <button type="submit" class="card-enroll-btn">Enroll Now</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="hover-card-popup">
                                        <h5 class="fw-bold mb-2 card-title" style="color: #150D6D">
                                            {{$pop_courses->title}}</h5>
                                        <p class="mb-1 card-instructor ">Rozel | Teacher</p>
                                        <p class="mb-3 " style="font-size: 0.8rem; overflow: hidden;
   text-overflow: ellipsis; height: 100px;">{{$pop_courses->meta_description}}</p>

                                        <a href="{{ route('courses.show',$pop_courses->slug) }}" class="btn enroll-blue-btn">Entroll Now</a>
                                    </div>


                                </div>

                            </div>

                            @endforeach
                            @endif

                            <!-- single slide ends here -->

                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-next card-slider-next">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                        <div class="swiper-button-prev card-slider-prev"><i class="fas fa-chevron-circle-left"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="trending" role="tabpanel">
            <div class="swipper-outer">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- single slide start here -->

                            @if(count($trending_courses) != 0 )
                            @foreach($trending_courses as $trend_courses)
                            <div class="swiper-slide">
                                <div class="slide-inner-wrapper">
                                    <div class="card-img-area">
                                        <img src="{{ asset('storage/uploads/'.$trend_courses->course_image) }}" alt="">
                                    </div>
                                    <div class="card-content-area">
                                        <div class="card p-4 slider-card">
                                            <p class="mb-1 card-instructor ">Rozel | Teacher</p>

                                            <h5 class="fw-bold mb-2 card-title" style="color: #150D6D">
                                                {{$trend_courses->title}}</h5>

                                            <div
                                                style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                <p class="mb-3" style="font-size: 0.7rem;">
                                                    {!!$trend_courses->description!!}</p>
                                            </div>

                                            <div class="row mb-3 align-items-center">
                                                <div class="col-6">
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star gold" aria-hidden="true"></i>
                                                    <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-6">
                                                    <div class="notification-box">
                                                        <div class="student-count">
                                                            <p>
                                                                <i class="far fa-user" aria-hidden="true"></i>
                                                                <span class="fw-bold ms-2 top-notification"
                                                                    style="color: #150D6D">01</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-count">
                                                            <p><i class="bi bi-chat-left-text"></i><span
                                                                    class="fw-bold ms-2 top-notification"
                                                                    style="color: #150D6D">00</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row  mb-3 align-items-center">
                                                <div class="col-6 border-right">
                                                    <p><i class="bi bi-layers-fill"
                                                            style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i><span
                                                            class="fw-bold ms-2 time-and-lessons-small"
                                                            style="color: #150D6D">12 Lessons</span></p>
                                                </div>
                                                <div class="col-6">
                                                    <p><i class="fas fa-stopwatch"
                                                            style="color: #0763E5; font-size: 1.2rem; "
                                                            aria-hidden="true"></i><span
                                                            class="fw-bold ms-2 time-and-lessons-small"
                                                            style="color: #150D6D">3
                                                            hr 30
                                                            min</span></p>
                                                </div>
                                            </div>

                                            <div class=" price-enroll-box  card-box">
                                                @if($trend_courses->free == 1)
                                                    <h3 class="fw-bold mb-3 course-price-card" style="color: #0763E5">Free</h3>
                                                @else
                                                    <h3 class="fw-bold mb-3 course-price-card" style="color: #0763E5">${{$trend_courses->price}}</h3>
                                                @endif

                                                <button class="card-enroll-btn">Enroll Now</button>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="hover-card-popup">
                                        <h5 class="fw-bold mb-2 card-title" style="color: #150D6D">
                                            {{$trend_courses->title}}</h5>
                                        <p class="mb-1 card-instructor ">Rozel | Teacher</p>
                                        <p class="mb-3 " style="font-size: 0.8rem;">{!!$trend_courses->description!!}</p>
                                        <ul class="card-popup-list">
                                            <li><span><i class="fas fa-check"></i></span>Build websites and webapps</li>
                                            <li><span><i class="fas fa-check"></i></span>Build HTML-based mobile apps
                                            </li>
                                            <li><span><i class="fas fa-check"></i></span>Get a job as a junior web
                                                developer</li>
                                        </ul>
                                        <button class="btn enroll-blue-btn">Entroll Now</button>
                                    </div>


                                </div>

                            </div>

                            @endforeach
                            @endif

                            <!-- single slide ends here -->

                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-next card-slider-next">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                        <div class="swiper-button-prev card-slider-prev"><i class="fas fa-chevron-circle-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <!-- multiple image slider start here -->






        <!-- multiple image slider ends here -->



        <!-- courses list -->
        <h4 style="padding-top: 40px;padding-bottom: 40px;">Courses to get you started</h4>
        <div class="course-list">

            @if(count($all_courses) != 0 )
            @foreach($all_courses as $all)
            <!--single card-->
            <div class="row">
                <div class="col-md-4">
                    <img class="featured-img" src="{{ asset('storage/uploads/'.$all->course_image) }}"
                        alt="featured image">
                </div>
                <div class="col-md-6">
                    <div class="course-list-item-details">
                        <h2>{{$all->title}}</h2>
                        <p style=" overflow: hidden;text-overflow: ellipsis;height: 100px;">{{$all->meta_description}}</p>
                        <div class="star-bar star-bar-left">
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star gold" aria-hidden="true"></i>
                            <i class="fas fa-star-half-alt gold" aria-hidden="true"></i>
                        </div>
                        <div class="course-list-item-content-details">
                            <span>63.5 total hours</span>-
                            <span>612 lectures</span>-
                            <span>All Levels</span>
                        </div>
                        <button class="btn enroll-blue-btn">Entroll Now</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <span class="course-list-item-price">${{$all->price}}</span>
                </div>
            </div>

            <hr>
            @endforeach
            @endif


        </div>

        <!-- pagination area -->
        <div class="course-pagination">
            <a class="active" href="">01</a>
            <a href="">02</a>
            <a href="">03</a>
            <a href="">04</a>
            <a href="">05</a>
            <a href=""><i class="fas fa-chevron-right"></i></a>
        </div>
    </div>

    @push('after-scripts')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 10,
        slidesPerGroup: 1,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    mySwiper.realIndex(2);
    </script>
    <script>
    $(".nav-tabs li.nav-item a.nav-link").click(function() {
        $(".nav-tabs li.nav-item a.nav-link").removeClass('active');
    });
    </script>

    <!-- <script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            placement: 'top',
            trigger: 'hover'
        });
    });
</script> -->
    @endpush


    <!-- <div class="" style="background-image: url('{{url('img/couse_dummy.png')}}');height: 2000px"></div> -->