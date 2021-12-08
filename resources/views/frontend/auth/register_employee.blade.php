@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/login.css') }}" rel="stylesheet">
    <link href="{{ url('css/register.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container login" style="margin-bottom: 5rem;">
        <div class="row align-items-center">
            <div class="col-7 col-xs-12">
                <h3 class="text-center mb-2 p-topic-10-xs register-title">Register as a Employer</h3>
{{--                {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}--}}

                @if($errors->any())

                  <div style="background: darkred;color: white;">{{ implode('', $errors->all(':message')) }}</div>
                @endif

                <form method="post" action="{{route('frontend.auth.register.post')}}">
                    {{csrf_field()}}

                    <div class="row mb-12">
                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="employee_name" class="form-label mb-0 me-3 form-label">First Name</label>
                            <input type="text" class="form-control text-white" id="employee_name" name="first_name" required>
                        </div>
                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="employee_name" class="form-label mb-0 me-3 form-label">Last Name</label>
                            <input type="text" class="form-control text-white" id="employee_name" name="last_name" required>
                        </div>
                    </div>

                    <div class="row mb-12">
                        <div class="col-12 col-xs-12 p-10-xs p-20-md">
                            <label for="company_name" class="form-label mb-0 me-3 form-label">Company Name</label>
                            <input type="text" class="form-control text-white" id="company_name" name="company_name" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="contact" class="form-label mb-0 me-3 form-label">Contact</label>
                            <input type="text" class="form-control text-white" id="contact" name="contact_number" required>
                        </div>

                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="email" class="form-label mb-0 me-3 form-label">Email</label>
                            <input type="email" class="form-control text-white" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="password" class="form-label mb-0 me-3 form-label">Password</label>
                            <input type="password" class="form-control text-white" id="password" name="password" required>
                        </div>

                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="confirm_password" class="form-label mb-0 me-3 form-label">Confirm Password</label>
                            <input type="password" class="form-control text-white" id="confirm_password" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="position" class="form-label mb-0 me-3 form-label">The position vacant</label>
                            <input type="text" class="form-control text-white" id="position" name="position" required>
                        </div>

                        <div class="col-6 col-xs-12 p-10-xs p-20-md">
                            <label for="comment" class="form-label mb-0 me-3 form-label">Comments</label>
                            <input type="text" class="form-control text-white" id="comment" name="comment" required>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox">
                                <label class="form-check-label" for="flexRadioDefault1" style="font-size: 0.75rem;">I agree to the Terms of Use/ Privacy Policy</label>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center mobile-fix-row">
                        <div class="col-6 col-xs-12 p-10-xs">
                            <div class="g-recaptcha d-inline" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                        </div>

                        <div class="col-6 col-xs-12 p-10-xs">
                            <button type="submit" class="btn login-btn w-100 p-3" id="submit-btn" disabled>Register</button>
                        </div>
                    </div>

                </form>


            </div>

            <div class="col-5 col-xs-12">
                <img src="{{ url('img/frontend/auth/employer.png') }}" alt="" class="img-fluid w-100" style="height: 35rem; object-fit: cover;">
            </div>
        </div>
    </div>

@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function checked() {
            $('#submit-btn').removeAttr('disabled');
        };
    </script>


    <script>
        $('input').focus(function() {
            $(this).siblings('label').addClass('click-input');
        });

        $('input').focusout(function() {
            if($(this).val() == '' ) {
                $(this).siblings('label').removeClass('click-input');
            }
        });


        $('input')
    .each(function(element, i) {
        if ((element.value !== undefined && element.value.length > 0) || $(this).attr('placeholder') !== null) {
            $(this).siblings('label').addClass('click-input');
        } else {
            $(this).siblings('label').removeClass('click-input');
        }
    });
    </script>
@endpush
