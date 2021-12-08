@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
    <link href="{{ url('css/for_employee.css') }}" rel="stylesheet">
@endpush

@section('content')

@if ( session()->has('message') )

    <div class="container" style="background-color: #98FB98; padding-top:5px; margin-top:50px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

        <h1 style="margin-top:70px;" class="fs-1">Thank You!</h1><br>
        <p class="lead mb-3"><h4>One of our member will get back in touch with you soon!<br><br> Have a great day!</h4></p>
        <br><hr><br>    
        <p class="lead">
            <a class="btn btn-success btn-md mt-3 mb-3" href="{{url('for-employee')}}" role="button">Go Back</a>
        </p>
        <br>
    </div>

@else

    <div class="container-fluid banner" style="margin-bottom : 2rem;">
        <div class="container p-5">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 class="fw-bold mb-4" style="color: #4E6BC8">The smartest way to Recruit Overseas </h1>
                    <a href="{{url('contact-us')}}" class="btn inquire">Inquire Now</a>
                </div>
                <div class="col-6">
                    <img src="{{ url('img/frontend/employee/banner.png') }}" style="object-fit: cover" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 6rem;">
        <div class="row justify-content-center">
            <div class="col-9 text-center">
                <h2 class="mb-3">The Integrated <span class="fw-bolder" style="font-size: 2.5rem;">Recruitment Solution</span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quaerat magni eaque error reprehenderit assumenda tempora unde asperiores ut delectus. Consectetur necessitatibus, libero eveniet cupiditate distinctio hic ipsum ex aliquid vitae fugiat laudantium consequatur ut aperiam doloremque quisquam possimus enim ducimus quas adipisci ad. Odio!</p>
            </div>
        </div>
    </div>

    <div class="container cards" style="margin-bottom: 6rem;">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="card p-5 text-center">
                            <h4 class="fw-bold mb-4">Post your Jobs</h4>

                            <div class="text-center">
                                <!-- <a href="{{url('register-employee')}}" class="btn btn-primary">Register</a> -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#post_job" class="btn btn-primary">Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="card p-5 text-center">
                            <h4 class="fw-bold mb-4">Find Candidates</h4>

                            <div class="text-center">
                                <!-- <a href="{{route('frontend.auth.login')}}" class="btn btn-primary">Contact us</a> -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#candidates" class="btn btn-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-bottom : 5rem;">
        <div class="row position-relative">
            <h1 class="fw-bold text-center">SIMPLE AND EFFECTIVE PROCESS WITH VMD</h1>
            <p class="text-center position-absolute" style="opacity: 0.04; top: -0.2rem; font-size: 3rem; line-height: 1.2; z-index: -1; font-weight: 800">SIMPLE AND EFFECTIVE PROCESS WITH VMD</p>
        </div>
    </div>


    <div class="container position-relative" style="margin-bottom : 7rem;">
        <div class="row justify-content-end align-items-center" style="margin-bottom: 9rem;">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_1.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Register with VMD</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row align-items-center" style="margin-bottom: 9rem;">
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">View candidate profile</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_2.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-end align-items-center" style="margin-bottom: 9rem;">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_3.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Post a job</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row align-items-center" style="margin-bottom: 9rem;">
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">Arrange Interview</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_4.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row justify-content-end align-items-center">
            <div class="col-2 text-center">
                <img src="{{ url('img/frontend/employee/sample_5.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-5 text-center">
                <h5 class="fw-bold mb-2">License  application process</h5>
                <p>This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-6 vl_1"></div>
        </div>
        <div class="row">
            <div class="col-6 vl_2"></div>
        </div>
        <div class="row">
            <div class="col-6 vl_3"></div>
        </div>
        <div class="row">
            <div class="col-6 vl_4"></div>
        </div>
    </div>    


    <div class="container" style="margin-bottom : 4rem;">
        <h1 class="fw-bold text-center mb-5">Why Choose<span class="fw-bolder">VMD</span></h1>

        <div class="row align-items-center">
            <div class="col-5">
                <img src="{{ url('img/frontend/employee/girl.png') }}" alt="" class="img-fluid w-100" style="height: 48rem; object-fit: cover;">
            </div>

            <div class="col-7">
                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-1">
                        <img src="{{ url('img/frontend/employee/tick.png') }}" alt="" class="img-fluid w-100" style="height: 2.2rem;">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold">Sample text here</h5>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-11">
                            <p style="font-size: 0.8rem;">This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines.  This course is CPD accredited. It meets accepted Continuing Professional Development (CPD) guidelines. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="post_job" tabindex="-1" aria-labelledby="inquireLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

            <form action="{{route('frontend.post_job')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="modal-header text-white" style="background-color: #1D5001;">
                  <h6 class="modal-title" id="inquire-modal">Post Your Job</h6>
                </div>
                <div class="modal-body">
                    
                    <div class="mb-2">
                      <label for="first-name" class="form-label"><p>First Name <span class="text-danger">*</span></p></label>
                      <input type="text" class="form-control" name="first_name" required>
                    </div>
                    <div class="mb-2">
                      <label for="last-name" class="form-label"><p>Last Name <span class="text-danger">*</span></p></label>
                      <input type="text" class="form-control" name="last_name" required>
                    </div>
                    <div class="mb-2">
                      <label for="company_name" class="form-label"><p>Company Name <span class="text-danger">*</span></p></label>
                      <input type="text" class="form-control" name="company_name" required>
                    </div>
                    <div class="mb-2">
                      <label for="contact-number" class="form-label"><p>Contact Number <span class="text-danger">*</span></p></label>
                      <input type="number" class="form-control" name="contact_number" required>
                    </div>
                    <div class="mb-2">
                      <label for="email" class="form-label"><p>Email Address <span class="text-danger">*</span></p></label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-2">
                      <label for="attached_file" class="form-label"><p>Attached File <span class="text-danger">*</span></p></label>
                      <input type="file" class="form-control" name="attached_file" required>
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label"><p>Message <span class="text-danger">*</span></p></label>
                      <textarea class="form-control" name="message" cols="30" rows="3" required></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
                  <input type="submit" class="submit-btn btn text-white px-5" style="background-color: #68AE42;" value="Send"/>
                </div>
            </form>  
          </div>
        </div>
      </div>

      <div class="modal fade" id="candidates" tabindex="-1" aria-labelledby="inquireLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

            <form action="{{route('frontend.find_canidates')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="modal-header text-white" style="background-color: #1D5001;">
                  <h6 class="modal-title" id="inquire-modal">Find Candidates</h6>
                </div>
                <div class="modal-body">
                    
                    <div class="mb-2">
                      <label for="first-name" class="form-label"><p>First Name <span class="text-danger">*</span></p></label>
                      <input type="text" class="form-control" name="first_name" required>
                    </div>
                    <div class="mb-2">
                      <label for="last-name" class="form-label"><p>Last Name <span class="text-danger">*</span></p></label>
                      <input type="text" class="form-control" name="last_name" required>
                    </div>
                    <div class="mb-2">
                      <label for="company_name" class="form-label"><p>Company Name <span class="text-danger">*</span></p></label>
                      <input type="text" class="form-control" name="company_name" required>
                    </div>
                    <div class="mb-2">
                      <label for="contact-number" class="form-label"><p>Contact Number <span class="text-danger">*</span></p></label>
                      <input type="number" class="form-control" name="contact_number" required>
                    </div>
                    <div class="mb-2">
                      <label for="email" class="form-label"><p>Email Address <span class="text-danger">*</span></p></label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label"><p>Message <span class="text-danger">*</span></p></label>
                      <textarea class="form-control" name="message" cols="30" rows="3" required></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
                  <input type="submit" class="submit-btn btn text-white px-5" style="background-color: #68AE42;" value="Send"/>
                </div>
            </form>  
          </div>
        </div>
      </div>

@endif

@endsection

@push('after-scripts')
    

@endpush
