@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link href="{{ url('css/login.css') }}" rel="stylesheet">
<style>
    .p-10-xs {
        padding: 10px !important;
    }

    input[type=date]:required:invalid::-webkit-datetime-edit {
        color: transparent;
    }
    input[type=date]:focus::-webkit-datetime-edit {
        color: black !important;
    }  

    /* Registration form */

    /* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
    display: none;
    height: 300px;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 12px;
  width: 12px;
  background-color: #ccc;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #207CD8;
  opacity: 1;
}

#prevBtn, #nextBtn {
    width: 100px;
    border: 1px solid #207CD8;
    padding: 0.5rem 0;
    border-radius: 0.3rem;
}

#prevBtn {
    background-color: #fff;
    color: #207CD8;
}

#nextBtn {
    background-color: #207CD8;
    color: #fff;
}

#profilePic {
    border: 1px solid #b2b2b2;
}

#personalProfile {
    background-attachment: local;
    background-image: linear-gradient(to right, white 10px, transparent 10px), linear-gradient(to left, white 10px, transparent 10px), repeating-linear-gradient(white, white 30px, #b2b2b2 30px, #b2b2b2 32px, white 31px);
    line-height: 64px;
    padding: 0;
    border-bottom: none;
    resize: none;
}

@media screen and (max-width:767px) {
    .tab{
        height: auto !important;
    }

    .row {
        --bs-gutter-x: 0 !important;
    }
}

@media only screen and (max-width: 500px) {
.recaptcha-col {
    padding-left: 0!important;
    padding-right: 0!important;
    padding-bottom: 0!important;
}
}

@media screen and (max-width: 375px) {

    .col-lg-7.col-xs-12.mb-5 {
        padding: 0 !important;
    }
    
}

</style>

@endpush

@section('content')
<div class="container login" style="margin-top: 3rem; margin-bottom: 5rem;">
    <div class="row align-items-center">
        <div class="col-lg-7 col-xs-12 mb-5">
            <h3 class="text-center mb-5">Register as a Candidate.</h3>
            <!-- {{ html()->form('POST', route('frontend.auth.login.post'))->open() }} -->

            @if($errors->any())

            <div class="reg-error"
                style="background: darkred;color: white;padding:15px;margin-bottom:30px;margin-top:30px;">
                {{ implode('', $errors->all(':message')) }}</div>
            @endif

            <form enctype="multipart/form-data" action="{{route('frontend.auth.register.post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="profile_type" value="candidate_account">

                <div class="tab">
                <div class="row mb-3">
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="first_name" class="form-label mb-0 me-3 form-label">First Name</label>
                        <input type="text" class="form-control text-white" id="first_name" name="first_name" required>
                    </div>

                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="last_name" class="form-label mb-0 me-3 form-label">Last Name</label>
                        <input type="text" class="form-control text-white" id="last_name" name="last_name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="contact" class="form-label mb-0 me-3 form-label">Contact</label>
                        <input type="text" class="form-control text-white" id="contact" name="contact_number" required>
                    </div>
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="tel" class="form-label mb-0 me-3 form-label">Mobile</label>
                        <input type="text" class="form-control text-white" id="tel" name="tel" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="dob" class="form-label mb-0 me-3 form-label">Birthday</label>
                        <input type="date" class="form-control text-white" id="dob" name="dob" required>
                    </div>
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="gender" class="form-label mb-0 me-3 form-label">Gender</label>
                        <select id="gender" class="form-control" name="gender" required>
                            <option value="" selected disabled hidden></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>                    
                </div>
                </div>

                <div class="tab">
                <div class="row mb-3">                    
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="address" class="form-label mb-0 me-3 form-label">Address</label>
                        <input type="text" class="form-control text-white" id="address" name="address" required>
                    </div>
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="type" class="form-label mb-0 me-3 form-label">Type</label>
                        <select id="type" class="form-control" name="type" required>
                            <option value="" selected disabled hidden></option>
                            @foreach(App\Models\Models\CandidateCategory::where('status','Enabled')->get() as $key=> $candidate_category)
                                <option value="{{$candidate_category->id}}">{{$candidate_category->name}}</option>
                            @endforeach
                        </select>
                    </div> 
                </div>

                <div class="row mb-3">
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="email" class="form-label mb-0 me-3 form-label">Email</label>
                        <input type="email" class="form-control text-white" id="email" name="email" required>
                    </div>
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="country" class="form-label mb-0 me-3 font-weight-bold">Country</label>
                        <select id="country" class="form-control" name="country" required>
                            <option value="" selected disabled hidden></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote DIvoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="India">India</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="password" class="form-label mb-0 me-3 form-label">Password</label>
                        <input type="password" class="form-control text-white" id="password" name="password" required>
                    </div>
                    <div class="col-6 col-xs-12 p-10-xs">
                        <label for="confirm_password" class="form-label mb-0 me-3 form-label">Confirm Password</label>
                        <input type="password" class="form-control text-white" id="password_confirmation"
                            name="password_confirmation" required>
                    </div>
                </div>
                </div>

                <div class="tab">
                <div class="row mb-3">
                    <div class="col-12 col-xs-12 p-10-xs">
                        <label for="qualification" class="form-label me-3 form-label">Educational Qualification</label>
                        <!-- <input type="text" class="form-control text-white" id="qualification" name="education_qulification" required> -->
                        
                        <div class="form-group">
                            <div id="inputFormRow">
                                <div class="input-group mb-3">
                                            
                                    <input type="text" name="education_qulification[]" class="form-control m-input" autocomplete="off" required>
                                            
                                    <div class="input-group-append">                
                                        <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div id="newRow"></div>
                            <button id="addRow" type="button" class="btn btn-info">Add Row</button>                                                            
                        </div> 

                    </div>
                </div>
                </div>
                <div class="tab">
                <div class="row mb-3">
                    <div class="col-12 col-xs-12 p-10-xs">
                        <label for="professional_background" class="form-label me-3 form-label">Professional Background</label>
                        <!-- <input type="text" class="form-control text-white" id="professional_background" name="professional_background" required> -->
                        
                        <div class="form-group">
                            <div id="inputFormRowTwo">
                                <div class="input-group mb-3">
                                            
                                    <input type="text" name="professional_background[]" class="form-control m-input" autocomplete="off" required>
                                            
                                    <div class="input-group-append">                
                                        <button id="removeRowTwo" type="button" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div id="newRowTwo"></div>
                            <button id="addRowTwo" type="button" class="btn btn-info">Add Row</button>                                                            
                        </div> 

                    </div>
                </div>
                </div>

                <div class="tab">
                <div class="row mb-3">
                    <div class="col col-xs-12 p-10-xs">
                        <label for="profilePic" class="form-label">Choose a profile picture</label>
                        <input class="form-control" type="file" id="profilePic" name="profile_picture">
                        <p class="mt-1" style="font-size: 0.7rem;">JPG, PNG, GIF (5 MB)</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-xs-12 p-10-xs">
                        <label for="personalProfile" class="form-label">Personal Profile</label>
                        <textarea class="form-control" id="personalProfile"  name="descrption"></textarea>
                    </div>
                </div>
                </div>

                <div class="tab">
                <div class="row align-items-center my-4">

                    <div class="col-6 col-xs-12 p-10-xs">
                        <p class="" class="form-label mb-0 me-3">Resume</p>
                        <p class="mb-2" style="font-size: 0.8rem;">Please include a resume</p>
                        <label for="upload-resume" class="upload px-3 py-2">Upload Resume</label>
                        <input type="file" name="cv" id="upload-resume" />
                        <p class="mt-1" style="font-size: 0.7rem;">DOC, DOCX, PDF (5 MB)</p>
                    </div>

                    <div class="col-6 col-xs-12 recaptcha-col">
                        <div class="g-recaptcha d-inline" data-callback="checked"
                            data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-6 col-xs-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox" required>
                            <label class="form-check-label" for="checkbox" style="font-size: 0.75rem;">I agree
                                to the Terms of Use/ Privacy Policy</label>
                        </div>

                        <div>
                            <button type="submit" class="btn login-btn w-100 p-3" id="submit-btn"
                                disabled>Register</button>
                        </div>
                    </div>
                    </div>
                </div>

                <div style="text-align:center;margin-top:40px;margin-bottom:20px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>


                <div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

                
            </form>


        </div>



        <div class="col-lg-5 col-xs-12">
            <img src="{{ url('img/frontend/auth/candidate.png') }}" alt="" class="img-fluid w-100"
                style="height: 35rem; object-fit: cover;">
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


<!-- <script>
$('input').focus(function() {
    $(this).siblings('label').addClass('click-input');
});

$('#country').focus(function() {
    $(this).siblings('label').addClass('country-input');
});

$('#gender').focus(function() {
    $(this).siblings('label').addClass('gender-input');
});

$('#type').focus(function() {
    $(this).siblings('label').addClass('type-input');
});

$('input').focusout(function() {
    if ($(this).val() == '') {
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
</script> -->


    <script type="text/javascript">
        
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="education_qulification[]" class="form-control m-input" autocomplete="off" required>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

    
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>

    <script type="text/javascript">
        
        $("#addRowTwo").click(function () {
            var html = '';
            html += '<div id="inputFormRowTwo">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="professional_background[]" class="form-control m-input" autocomplete="off" required>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRowTwo" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRowTwo').append(html);
        });

    
        $(document).on('click', '#removeRowTwo', function () {
            $(this).closest('#inputFormRowTwo').remove();
        });
    </script>


<!-- Registration Form -->

<script type="text/javascript">

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
  } else  {
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

</script>

@endpush