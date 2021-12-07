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
            <p class="text-center position-absolute" style="opacity: 0.04; top: -2.1rem; font-size: 6rem; line-height: 1.2; z-index: -1; font-weight: 800">ABOUT US</p>
        </div>
    </div>


    <div class="container" style="margin-bottom : 7rem;">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="{{ url('img/frontend/about_us/about.png') }}" alt="" class="img-fluid w-100" style="height: 30rem; object-fit: cover">
            </div>
            <div class="col-6 mt">
                <p>Our main aim is to provide the right position to the right person. We believe, if you
                    meet the required standards we will be able to provide you the role no matter what
                    background or what country you come from.</p> <br>

                <h5>Start your desired life in the UK :</h5> <br>

                <p>Our promise to you is to provide a superior employment experience whether you are
                    a candidate or we are engaging with your organization. While our competitors think
                    recruiting is a business, we believe it is one of the most important services in the
                    world. We believe we can make people’s lives better with correct recruitment.</p>
                <br>

                <p>For Candidates(Applicants) : If you have the right Qualifications, experience, talent
                    and more than anything else, you have the commitment and drive to pursue your
                    dreams, we are at your service to provide you with the opportunity to achieve your
                    goals. Nothing else matters to us. We will lead you to the career life you deserve.</p>
                <br>

                <p>For Clients (Employers) : We understand the importance of recruiting the suitable
                    candidate to a company. We dedicate much time, and energy to provide best
                    suitable &amp; most importantly the candidates which we think have the utter
                    commitment and dedication to work for you. We want our candidates to be a part of
                    the organisation family and make a positive different.</p>
            </div>
        </div>
    </div>


    <div class="container" style="margin-bottom : 6rem;">
        <div class="row" style="justify-content: center;">
            <div class="col-4 position-relative">
                <img src="{{ url('img/frontend/about_us/mission.png') }}" alt="" class="img-fluid w-100" style="height: 30rem;">
                <div class="row content justify-content-center text-center">
                    <div class="col-9">
                        <h4 class="fw-bold mb-2" style="color: #0763E5">Our Mission</h4>
                        <p style="font-size: 0.85rem">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, illum. Delectus inventore ad ex recusandae velit explicabo sint fuga. Maxime qui, unde doloribus itaque dolores nemo laborum temporibus ducimus. Adipisci!</p>
                    </div>
                </div>
            </div>

            <div class="col-4 position-relative">
                <img src="{{ url('img/frontend/about_us/vision_1.png') }}" alt="" class="img-fluid w-100" style="height: 30rem;">
                <div class="row content justify-content-center text-center">
                    <div class="col-9">
                        <h4 class="fw-bold mb-2" style="color: #0763E5">Our Vision</h4>
                        <p style="font-size: 0.85rem">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, illum. Delectus inventore ad ex recusandae velit explicabo sint fuga. Maxime qui, unde doloribus itaque dolores nemo laborum temporibus ducimus. Adipisci!</p>
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
                <h3 class="fw-bold text-center mb-3">Why choose us?</h3>

                <p style="line-height: 1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nesciunt dolores maiores? Odio, cum ducimus eligendi rerum dignissimos doloribus. Unde error esse aspernatur voluptates nobis, quod neque doloribus laborum mollitia natus, quia, dignissimos facere. Alias assumenda non amet consectetur dolore ex debitis, asperiores et dolorum eveniet, quod voluptates? Iure quas voluptates hic vero aliquid beatae laudantium iusto impedit ex? Vitae cumque itaque perspiciatis rem praesentium dolorum, magni ex similique doloremque maiores ducimus accusantium totam natus sapiente obcaecati nesciunt quasi beatae officiis minima asperiores. Odio porro est iure? Explicabo rerum hic neque deserunt non, minus, temporibus fuga, error placeat odio perspiciatis?</p>
            </div>
            
        </div>
    </div>


@endsection


@push('after-scripts')
    

@endpush
