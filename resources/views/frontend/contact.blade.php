@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
<link href="{{ url('css/contact_us.css') }}" rel="stylesheet">
@endpush


@section('content')

<div class="container" style="margin-top: 4rem; margin-bottom : 5rem;">
    <div class="row position-relative">
        <h1 class="fw-bold text-center">CONTACT US</h1>
        <p class="text-center position-absolute"
            style="opacity: 0.04; top: -2.1rem; font-size: 6rem; line-height: 1.2; z-index: -1; font-weight: 800">
            CONTACT US</p>
    </div>
</div>


<div class="container" style="margin-bottom : 7rem;">
    <div class="row align-items-center">
        <div class="col-6">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Central%20road,%20pottuvil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://www.whatismyip-address.com/divi-discount/"></a><br>
                    <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 100%;
                    }
                    </style><a href="https://www.embedgooglemap.net">embed map in email</a>
                    <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 100%;
                    }
                    </style>
                </div>
            </div>
        </div>

        <div class="col-6">
            <h6 class="mb-3">Want to get ahead?</h6>
            <h4 class="fw-bold mb-3" style="color: #0090FF">Contact Information</h4>

            <p class="mb-3" style="font-size: 0.8rem;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores
                quod earum voluptates consequatur. Aspernatur perspiciatis.</p>


            <div class="row mt-4">
                <div class="col-12 mb-3">
                    <h6 class="fw-bolder">Main Central Office</h6>
                </div>

                <div class="col-12 main-office ms-3 mb-5">
                    <div class="row mb-3">
                        <div style="display: flex; " class="col-1 pe-0">
                            <i style="padding-top:5px;" class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-11 ps-0">
                            <h6 class="fw-bolder mb-2 pl-10-xs">VMD Consultant</h6>
                            <p class="pl-10-xs" style="line-height: 1.4rem; font-weight: 600">45/a 1st Avenue, <br> London, <br> USA</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-1 pe-0">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="col-11 ps-0">
                            <p class="pl-10-xs">0094 11 2942952 / 11 5022832</p>
                        </div>
                    </div>

                    <div class="row align-items-center mb-3">
                        <div class="col-1 pe-0">
                            <img src="{{url('img/frontend/contact_us/fax.png')}}" alt=""
                                style="height: 1rem; width: 1rem;">
                        </div>
                        <div class="col-11 ps-0">
                            <p class="pl-10-xs">0094 11 5526575</p>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-1 pe-0">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="col-11 ps-0">
                            <p class="pl-10-xs">info@anur.com</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-12" style="margin-bottom: 2.85rem;">
                    <h6 class="fw-bolder mb-2">VMD Consultant</h6>
                    <p style="line-height: 1.4rem; font-weight: 600">45/a 1st Avenue, <br> London, <br> USA</p>
                </div> -->
            </div>
        </div>
    </div>
</div>


<div class="container" style="margin-top: 4rem; margin-bottom : 5rem;">
    <div class="row position-relative">
        <h1 class="fw-bold text-center">GET IN TOUCH</h1>
        <p class="text-center position-absolute"
            style="opacity: 0.04; top: -2.1rem; font-size: 6rem; line-height: 1.2; z-index: -1; font-weight: 800">GET IN
            TOUCH</p>
    </div>
</div>


<div class="container" style="margin-bottom: 7rem;">
    <div class="row">
        <div class="col-6">
            <div class="contact-form p-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <h4 class="fw-bold mb-1">Let Us Call You!</h4>
                    <h6 class="fw-bold mb-4">To help you choose your property</h6>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control rounded-0" name="name" id="name"
                                    placeholder="Your Name" required>
                            </div>

                            <div class="col-6 ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select class="form-select" aria-label="country_code" id="country_code"
                                            name="agent_type" required>
                                            <option value="+94">+94</option>
                                            <option value="+95">+95</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control rounded-0" name="phone" id="phone"
                                        placeholder="Your Number" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control rounded-0" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control rounded-0" name="message" rows="4"
                            placeholder="Tell us about desired property" required></textarea>
                    </div>

                    <div>
                        <p class="mb-1">Consent</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ms-2" for="flexCheckDefault">
                                Acceptance * <br>
                                I would like to receive information & updates from Trace Solutions in relation to my
                                enquiry.
                                I understand that Trace will never share my information.
                            </label>
                        </div>
                    </div>


                    <div class="row align-items-center mt-4">
                        <div class="col-6">
                            <div class="g-recaptcha d-inline" data-callback="checked"
                                data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                        </div>

                        <div class="col-6 text-end submit-btn-area">
                            <button type="submit" class="btn submit-btn w-75" disabled>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-6">
            <img src="{{ url('img/frontend/contact_us/contact.png') }}" alt="" class="img-fluid w-100"
                style="height: 35rem; object-fit: cover;">
        </div>
    </div>
</div>




@endsection


@push('after-scripts')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
function checked() {
    $('.submit-btn').removeAttr('disabled');
};
</script>

@endpush