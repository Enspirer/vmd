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
                <img src="{{ url('img/frontend/about_us/about.png') }}" alt="" class="img-fluid w-100" style="height: 25rem; object-fit: cover">
            </div>
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus mollitia dolores cumque ut officiis suscipit inventore, perspiciatis, libero saepe quaerat corporis cupiditate dolore ea molestiae perferendis tempore accusamus possimus laudantium provident sed minima harum animi. Totam quaerat repudiandae voluptatem laborum? Distinctio nulla, dolores quos natus architecto quaerat facilis. Totam ea quas ducimus sapiente, corporis quod rerum a dicta placeat dolorum ratione blanditiis impedit nulla doloribus consectetur repellendus? Culpa nulla temporibus laudantium corrupti vel qui natus quasi, odit vero illum eaque recusandae suscipit a, voluptatibus molestiae ullam commodi, voluptatem fuga nihil. Repellat molestiae aliquam ipsa voluptas culpa. Aliquid accusantium pariatur natus ipsa accusamus architecto praesentium doloremque explicabo. Praesentium expedita est perferendis non maiores quasi. Dignissimos veniam maiores maxime soluta, sequi delectus non modi facilis, quia provident quae aperiam nisi, commodi pariatur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis nesciunt molestiae maxime sit veritatis libero illo? Vel maiores accusantium repellendus libero possimus quas, illo itaque magnam natus provident aliquam quam!</p>
            </div>
        </div>
    </div>


    <div class="container" style="margin-bottom : 6rem;">
        <div class="row">
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

            <div class="col-4 position-relative">
                <img src="{{ url('img/frontend/about_us/vision_2.png') }}" alt="" class="img-fluid w-100" style="height: 30rem;">
                <div class="row content justify-content-center text-center">
                    <div class="col-9">
                        <h4 class="fw-bold mb-2" style="color: #0763E5">Our Vision</h4>
                        <p style="font-size: 0.85rem">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, illum. Delectus inventore ad ex recusandae velit explicabo sint fuga. Maxime qui, unde doloribus itaque dolores nemo laborum temporibus ducimus. Adipisci!</p>
                    </div>
                </div>
            </div>
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
