@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/index.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="div container-fluid p-0 mb-4">
        <img src="{{ url('img/frontend/index/banner.png') }}" alt="" class="img-fluid">
    </div>


    <div class="container" style="margin-bottom: 6rem;">
        <div class="row justify-content-center">
            <div class="col-9 text-center">
                <h2 class="mb-3">Immigration and Recruitments <span class="fw-bolder">-All in 1 platform</span></h2>
                <p>SKILLJOBS.UK offers the accurate and expertise of your dreams which can come
                    true in real life. Are you seeking an opportunity to start a career in the UK or are you
                    an employer who is seeking to fill gaps in human capital workforce, you are at the
                    right place to fulfil your prospects.</p>
            </div>
        </div>
    </div>


    <div class="container emp-can" style="margin-bottom: 9rem;">
        <div class="row">
            <div class="col-6 col-xs-12 position-relative">
                <p class="position-absolute large-title large-design-title" style="opacity: 0.05;z-index: -1;">Employers</p>
                <h4><span class="h2 fw-bolder">Employers</span></h4>
                <img src="{{ url('img/frontend/index/employer.png') }}" alt="" class="img-fluid w-100" style="height: 20rem; object-fit: cover;">

                <div class="card p-3">
                    <h6 class="fw-bold mb-3" style="line-height: 1.5rem;">Largest pool of trained & Experienced Hospitality staff</h6>

                    <a href="{{route('frontend.for_employee')}}" class="btn now">Hire Now</a>
                </div>
            </div>
            <div class="col-6 col-xs-12 position-relative">
                <p class="position-absolute large-title large-design-title" style="opacity: 0.05;  z-index: -1;">Candidates</p>
                <h4><span class="h2 fw-bolder">Candidates</span></h4>
                <img src="{{ url('img/frontend/index/employer.png') }}" alt="" class="img-fluid w-100" style="height: 20rem; object-fit: cover;">

                <div class="card p-3">
                    <h6 class="fw-bold mb-3" style="line-height: 1.5rem;">Get qualified & land the best job with a sponsorship</h6>

                    <a href="{{route('frontend.for_candidate')}}" class="btn now">Register Now</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid p-0 position-relative" style="margin-bottom: 8rem;">
        <h2 class="text-center mb-4">Get Qualified with <span class="fw-bolder">VMD</span></h2>


        <div class="col-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('img/frontend/index/slider_1.png'); height: 35rem; background-repeat: no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row home-card">
                                <div class="col-4 col-xs-12 padding-reduce">
                                    <div class="card p-4 slider-card">
                                        <p class="mb-1 text-center">Rozel | Teacher</p>

                                        <h5 class="fw-bold mb-2 text-center" style="color: #150D6D">Hospitality Management</h5>

                                        <p class="mb-3 text-center" style="font-size: 0.8rem;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur qui quaerat illum eaque praesentium laboriosam, placeat at delectus ducimus accusamus saepe non libero harum impedit omnis quas rem nostrum voluptatibus? Maiores possimus dicta laudantium velit unde voluptas ea.</p>

                                        <div class="row mb-3 align-items-center">
                                            <div class="col-6">
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star-half-alt gold"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-10">
                                                        <div class="row align-items-center">
                                                            <div class="col-6">
                                                                <p><i class="far fa-user"></i><span class="fw-bold ms-2" style="color: #150D6D">01</span></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p><i class="bi bi-chat-left-text"></i><span class="fw-bold ms-2" style="color: #150D6D">00</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row text-center mb-3 align-items-center">
                                            <div class="col-6 border-end">
                                                <p><i class="bi bi-layers-fill" style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i><span class="fw-bold ms-2" style="color: #150D6D">12 Lessons</span></p>
                                            </div>
                                            <div class="col-6">
                                                <p><i class="fas fa-stopwatch" style="color: #0763E5; font-size: 1.2rem; "></i><span class="fw-bold ms-2" style="color: #150D6D">3 hr 30 min</span></p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <h3 class="fw-bold mb-3" style="color: #0763E5">$250.00</h3>

                                            <a href="{{'course/morbi-fermentum-sit-amet-libero-vel-ullamcorper'}}" class="btn enroll w-75">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" style="background-image: url('img/frontend/index/slider_1.png'); height: 35rem; background-repeat: no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row" class="home-card">
                                <div class="col-4 col-xs-12 padding-reduce">
                                    <div class="card p-4 slider-card">
                                        <p class="mb-1 text-center">Rozel | Teacher</p>

                                        <h5 class="fw-bold mb-2 text-center" style="color: #150D6D">Hospitality Management</h5>

                                        <p class="mb-3 text-center" style="font-size: 0.8rem;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur qui quaerat illum eaque praesentium laboriosam, placeat at delectus ducimus accusamus saepe non libero harum impedit omnis quas rem nostrum voluptatibus? Maiores possimus dicta laudantium velit unde voluptas ea.</p>

                                        <div class="row mb-3 align-items-center">
                                            <div class="col-6">
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star-half-alt gold"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-10">
                                                        <div class="row align-items-center">
                                                            <div class="col-6">
                                                                <p><i class="far fa-user"></i><span class="fw-bold ms-2" style="color: #150D6D">01</span></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p><i class="bi bi-chat-left-text"></i><span class="fw-bold ms-2" style="color: #150D6D">00</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row text-center mb-3 align-items-center">
                                            <div class="col-6 border-end">
                                                <p><i class="bi bi-layers-fill" style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i><span class="fw-bold ms-2" style="color: #150D6D">12 Lessons</span></p>
                                            </div>
                                            <div class="col-6">
                                                <p><i class="fas fa-stopwatch" style="color: #0763E5; font-size: 1.2rem; "></i><span class="fw-bold ms-2" style="color: #150D6D">3 hr 30 min</span></p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <h3 class="fw-bold mb-3" style="color: #0763E5">$250.00</h3>

                                            <button class="btn enroll w-75">Enroll Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="background-image: url('img/frontend/index/slider_1.png'); height: 35rem; background-repeat: no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row" class="home-card">
                                <div class="col-4 col-xs-12 padding-reduce">
                                    <div class="card p-4 slider-card">
                                        <p class="mb-1 text-center">Rozel | Teacher</p>

                                        <h5 class="fw-bold mb-2 text-center" style="color: #150D6D">Hospitality Management</h5>

                                        <p class="mb-3 text-center" style="font-size: 0.8rem;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur qui quaerat illum eaque praesentium laboriosam, placeat at delectus ducimus accusamus saepe non libero harum impedit omnis quas rem nostrum voluptatibus? Maiores possimus dicta laudantium velit unde voluptas ea.</p>

                                        <div class="row mb-3 align-items-center">
                                            <div class="col-6">
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star gold"></i>
                                                <i class="fas fa-star-half-alt gold"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-10">
                                                        <div class="row align-items-center">
                                                            <div class="col-6">
                                                                <p><i class="far fa-user"></i><span class="fw-bold ms-2" style="color: #150D6D">01</span></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p><i class="bi bi-chat-left-text"></i><span class="fw-bold ms-2" style="color: #150D6D">00</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row text-center mb-3 align-items-center">
                                            <div class="col-6 border-end">
                                                <p><i class="bi bi-layers-fill" style="color: #0763E5; font-size: 1.2rem; vertical-align: middle"></i><span class="fw-bold ms-2" style="color: #150D6D">12 Lessons</span></p>
                                            </div>
                                            <div class="col-6">
                                                <p><i class="fas fa-stopwatch" style="color: #0763E5; font-size: 1.2rem; "></i><span class="fw-bold ms-2" style="color: #150D6D">3 hr 30 min</span></p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <h3 class="fw-bold mb-3" style="color: #0763E5">$250.00</h3>

                                            <button class="btn enroll w-75">Enroll Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div class="container all-service" style="margin-bottom: 7rem;">

        <h2 class="text-center mb-5">All services in <span class="fw-bolder">One</span></h2>

        <div class="row">
            <div class="col-4 col-xs-12">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <img src="{{ url('img/frontend/index/service_1.png') }}" alt="" srcset="" class="img-fluid w-100" style="height: 23rem; object-fit:cover;"/>

                            <div class="carousel-caption">
                                <h3 class="fw-bolder mb-2">IMMIGRATION</h3>
                                <p style="font-size: 0.9rem; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">We can help you to obtain Skilled worker visa sponsorship licences, encounter the
                                    sponsorship compliance and provide expertise advice to recruit successful migrant
                                    workforce.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 col-xs-12">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <img src="{{ url('img/frontend/index/service_2.png') }}" alt="" srcset="" class="img-fluid w-100" style="height: 23rem; object-fit:cover;"/>

                            <div class="carousel-caption">
                                <h3 class="fw-bolder mb-2">STAFFING</h3>
                                <p style="font-size: 0.9rem; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">Recruitment services will enable to search for the best talented highly skilled migrant
                                    workforce for your organisation in a shorter period of time to save your finances.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 col-xs-12">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <img src="{{ url('img/frontend/index/service_3.png') }}" alt="" srcset="" class="img-fluid w-100" style="height: 23rem; object-fit:cover;"/>

                            <div class="carousel-caption">
                                <h3 class="fw-bolder mb-2">TRAINING</h3>
                                <p style="font-size: 0.9rem; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">We know the positive impact for employers, employees and the wider economy. This
                                    investment in your people and their skills makes your business more efficient and
                                    profitable, and ensures your people improve their life chances.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="container" style="margin-bottom: 7rem;">

        <h2 class="text-center mb-5">Why choose <span class="fw-bolder">VMD Consultants</span></h2>

        <div class="row">
            <div class="col-4 col-xs-12">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="{{ url('img/frontend/index/consultant_1.png') }}" alt="" class="img-fluid shadow w-100 p-2" style="border-radius: 6px; height: 4rem;">
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold mb-2">Presales Questions</h6>
                        <p class="mb-1" style="font-size: 0.9rem;">Have any question about Rocket LMS?</p>
                        <p class="fw-bold" style="font-size: 0.75rem; color: #AB67BF">Ask a Presale Question</p>
                    </div>
                </div>
            </div>

            <div class="col-4 col-xs-12">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="{{ url('img/frontend/index/consultant_2.png') }}" alt="" class="img-fluid shadow w-100 p-2" style="border-radius: 6px; height: 4rem;">
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold mb-2">Support</h6>
                        <p class="mb-1" style="font-size: 0.9rem;">Need help with the product and functionalities?</p>
                        <p class="fw-bold" style="font-size: 0.75rem; color: #F05B68">Send a Support Ticket</p>
                    </div>
                </div>
            </div>

            <div class="col-4 col-xs-12">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="{{ url('img/frontend/index/consultant_3.png') }}" alt="" class="img-fluid shadow w-100 p-2" style="border-radius: 6px; height: 4rem;">
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold mb-2">Reports & Suggestions</h6>
                        <p class="mb-1" style="font-size: 0.9rem;">Need a new feature or find a bug? We are here?</p>
                        <p class="fw-bold" style="font-size: 0.75rem; color: #305EDF">Contact Support</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection


@push('after-scripts')
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>



    <script>
        $('.all-service .swiper .swiper-slide').hover(function() {
            $(this).find('.carousel-caption').addClass('trans-caption');
        }, function() {
            $(this).find('.carousel-caption').removeClass('trans-caption');
        });
    </script>


@endpush
