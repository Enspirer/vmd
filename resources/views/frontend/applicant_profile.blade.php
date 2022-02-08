@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')

@endpush


@section('content')

<section class="section-applicant-profile" id="section-applicant-profile">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <img src="{{url('img/frontend/profile/profile.png')}}" alt="" class="profile-picture">
            </div>
            <div class="col-lg-8 about">
                <div class="applicant-name">Ashen Silva Dasanayeke</div>
                <p class="personal-profile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eius odit rem minus qui nobis facilis nesciunt reprehenderit deserunt velit ullam officia mollitia praesentium, natus est eveniet aliquid quasi repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, facilis? Corrupti nostrum voluptates unde rerum ducimus earum in ut fugiat, ullam suscipit reiciendis aut recusandae fuga saepe autem iusto amet!</p>
                <div class="personal-info">
                    <strong>Age:</strong>
                    28 years old
                </div>
                <div class="personal-info">
                    <strong>Gender</strong>
                    Male
                </div>
                <div class="personal-info">
                    <strong>Address:</strong>
                    54/B, Nawala Road, Colombo 5, Sri Lanka
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col education-qualification">
                <div class="title">Education Qualification</div>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis adipisci, eum et, dolorum accusamus natus a veritatis ut nesciunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repudiandae culpa labore.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis adipisci, eum et, dolorum accusamus natus a veritatis ut nesciunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repudiandae culpa labore.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis adipisci, eum et, dolorum accusamus natus a veritatis ut nesciunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repudiandae culpa labore.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col professional-background">
                <div class="title">Professional Background</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repudiandae culpa labore. Architecto, obcaecati. Aspernatur exercitationem corrupti possimus esse vel enim, magnam, aliquam quibusdam corporis itaque placeat eum totam iure! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione quia placeat facere officiis adipisci hic, qui modi ducimus obcaecati quaerat ipsam, aspernatur rerum dignissimos fugiat ullam, iste porro similique illum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam nesciunt ipsam quas nobis suscipit corrupti laudantium, distinctio nulla quasi error, voluptates ipsum ducimus iusto! Autem aliquam est soluta perferendis ipsum?</p>
            </div>
        </div>
    </div>
</section>

@endsection


@push('after-scripts')

@endpush