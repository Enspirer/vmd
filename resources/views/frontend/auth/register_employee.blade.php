@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/login.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container login" style="margin-bottom: 5rem;">
        <div class="row align-items-center">
            <div class="col-7">
                <h3 class="text-center mb-2">Register as a Employer.</h3>
                <!-- {{ html()->form('POST', route('frontend.auth.login.post'))->open() }} -->

                <div class="row mb-3">
                    <div class="col-6">
                        <label for="company_name" class="form-label mb-0 me-3 form-label">Company Name</label> 
                        <input type="text" class="form-control text-white" id="company_name" name="company_name" required>
                    </div>

                    <div class="col-6">
                        <label for="employee_name" class="form-label mb-0 me-3 form-label">Employee Name</label> 
                        <input type="text" class="form-control text-white" id="employee_name" name="employee_name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label for="contact" class="form-label mb-0 me-3 form-label">Contact</label>                                    
                        <input type="text" class="form-control text-white" id="contact" name="contact" required> 
                    </div>

                    <div class="col-6">
                        <label for="email" class="form-label mb-0 me-3 form-label">Email</label>                                    
                        <input type="email" class="form-control text-white" id="email" name="email" required> 
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label for="password" class="form-label mb-0 me-3 form-label">Password</label>                                    
                        <input type="password" class="form-control text-white" id="password" name="password" required> 
                    </div>

                    <div class="col-6">
                        <label for="confirm_password" class="form-label mb-0 me-3 form-label">Confirm Password</label>                                    
                        <input type="password" class="form-control text-white" id="confirm_password" name="confirm_password" required> 
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label for="position" class="form-label mb-0 me-3 form-label">The position vacant</label>                                    
                        <input type="text" class="form-control text-white" id="position" name="position" required> 
                    </div>

                    <div class="col-6">
                        <label for="comment" class="form-label mb-0 me-3 form-label">Comments</label>                                    
                        <input type="text" class="form-control text-white" id="comment" name="comment" required> 

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox">
                            <label class="form-check-label" for="flexRadioDefault1" style="font-size: 0.75rem;">I agree to the Terms of Use/ Privacy Policy</label>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-4">
                    <div class="col-6">
                        <div class="g-recaptcha d-inline" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                    </div>

                    <div class="col-6">
                        <button type="submit" class="btn login-btn w-100 p-3" id="submit-btn" disabled>Register</button>
                    </div>
                </div>
            </div>

            <div class="col-5">
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
    </script>
@endpush