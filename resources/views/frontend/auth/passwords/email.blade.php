@extends('frontend'.(session()->get('display_type') == "rtl"?"-rtl":"").'.layouts.app'.config('theme_layout'))

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@push('after-styles')
<style>
.min-height {
    min-height: 300px;
    padding-top: 50px;
    text-align: center;
}
</style>
@endpush

@section('content')
<div class="container">
    <section id="about-page" class="min-height about-page-section pb-0">
        <div class="row justify-content-center align-items-center">
            <div class="col col-md-4 align-self-center">
                <div class="card border-0">
                    <h2 class="breadcrumb-head black bold">{{__('labels.frontend.passwords.reset_password_box_title')}}
                    </h2>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-inline list-style-none mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required()
                                        ->autofocus() }}
                                </div>
                                <!--form-group-->
                            </div>
                            <!--col-->
                        </div>
                        <!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    <div class="text-center  text-capitalize">
                                        <button style="margin-top: 15px;" type="submit" class="nws-button btn-info btn "
                                            value="Submit">{{__('labels.frontend.passwords.send_password_reset_link_button')}}</button>
                                    </div>
                                </div>
                                <!--form-group-->
                            </div>
                            <!--col-->
                        </div>
                        <!--row-->
                        {{ html()->form()->close() }}
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </section>
</div>
@endsection