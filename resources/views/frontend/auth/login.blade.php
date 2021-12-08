@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
<link href="{{ url('css/login.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container login" style="margin-bottom: 5rem;">
    <div class="row align-items-center reverse-row-xs">
        <div class="col-6 col-xs-12 p-0-xs">
            <h3 class="text-center mb-2 pb-20-xs">Login to your account.</h3>
            @if($errors->any())

                <div class="reg-error" style="background: darkred;color: white;">{{ implode('', $errors->all(':message')) }}</div>
            @endif
            {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
            <div class="mb-3">
                <label for="email" class="form-label mb-0 me-3 form-label">Email Address</label>
                {{ html()->email('email')
                        ->class('form-control text-white')
                        ->attribute('maxlength', 191)
                        ->required() }}
            </div>

            <div class="mb-3">
                <label for="password" class="form-label mb-0 me-3 form-label">Password</label>
                {{ html()->password('password')
                        ->class('form-control text-white')
                        ->required() }}
            </div>

            <div class="row mb-4">
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio">
                        <label class="form-check-label" for="flexRadioDefault1">Remember Me</label>
                    </div>
                </div>

                <div class="col-6 text-end">
                    <a href="{{ route('frontend.auth.password.reset') }}" class="text-decoration-none text-dark"
                        style="font-size: 0.8rem;">Forgot Your Password?</a>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <button type="submit" class="btn login-btn w-100">Login</button>
                </div>
            </div>

            {{ html()->form()->close() }}

            <div class="row mb-3">
                <div class="col-12 text-center">
                    <p style="font-size: 0.8rem;">No account? <a href="{{ route('frontend.auth.register_employee') }}"
                            class="text-decoration-none" style="color: #00A3FE; font-size: 0.8rem;">Create one here.</a>
                    </p>
                </div>
            </div>

            <div class="row align-items-center mb-3">
                <div class="col pe-0">
                    <hr>
                </div>
                <div class="col-1 p-0 text-center">
                    <p>or</p>
                </div>
                <div class="col ps-0">
                    <hr>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 col-xs-12">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="row align-items-center bg-white p-2 shadow">
                            <div class="col-4">
                                <img src="{{ url('img/frontend/auth/facebook.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p style="font-size: 0.9rem">Facebook</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-1"></div>

                <div class="col-4 col-xs-12">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="row align-items-center bg-white p-2 shadow">
                            <div class="col-4">
                                <img src="{{ url('img/frontend/auth/google-logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p style="font-size: 0.9rem">Google</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-xs-12">
            <img src="{{ url('img/frontend/auth/login.png') }}" alt="" class="img-fluid w-100"
                style="height: 35rem; object-fit: cover;">
        </div>
    </div>
</div>

@endsection

@push('after-scripts')
@if(config('access.captcha.login'))
@captchaScripts
@endif


<script>
$('#email').focus(function() {
    $(this).siblings('label').addClass('click-input');
 });
 $('#email').focusout(function() {
   if($(this).val() == '' ) {
       $(this).siblings('label').removeClass('click-input');
    }
 });

$('#password').focus(function() {
    $(this).siblings('label').addClass('click-input');
 });

$('#password').focusout(function() {
   if ($(this).val() == '') {
        $(this).siblings('label').removeClass('click-input');
  }
});


$('#email, #password')
    .each(function(element, i) {
        if ((element.value !== undefined && element.value.length > 0) || $(this).attr('placeholder') !== null) {
            $(this).siblings('label').addClass('click-input');
        } else {
            $(this).siblings('label').removeClass('click-input');
        }
    });
</script>
@endpush