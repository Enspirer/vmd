<section class="container-fluid pt-4 pt-md-5 pb-3 text-white footer" style="background: #0557A5">
    <div class="container">
        <div class="row">
            <div class="col-3 col-xs-12">
                <a href="{{ route('frontend.index') }}"><img src="{{ url('img/frontend/footer_logo.png') }}" alt="" class="img-fluid"></a>

                <p class="text-white mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>

                <div class="row align-items-center mb-2">
                    <div class="col-2 pe-0">
                        <i class="bi bi-telephone-fill text-white"></i>
                    </div>
                    <div class="col-10 ps-0">
                        <p class="text-white">+94 777000000</p>
                    </div>
                </div>

                <div class="row align-items-center mb-2">
                    <div class="col-2 pe-0">
                        <i class="bi bi-envelope-fill text-white"></i>
                    </div>
                    <div class="col-10 ps-0">
                        <p class="text-white">info@eduknow.com</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-2 pe-0">
                        <i class="bi bi-geo-alt-fill text-white"></i>
                    </div>
                    <div class="col-10 ps-0">
                        <p class="text-white">518/ B C Avenue, London.</p>
                    </div>
                </div>
               
            </div>

            <div class="col-3 links ps-5 col-xs-12">
                <h6 class="mt-2 mb-4">Additional Links</h6>
                <a href="" class="mb-2 text-decoration-none text-white">Login your account</a> <br>
                <a href="" class="mb-2 text-decoration-none text-white">Register with new account</a> <br>
                <a href="" class="mb-2 text-decoration-none text-white">Power Tools</a> <br>
                <a href="" class="mb-2 text-decoration-none text-white">Marketing Service</a>
            </div>
            <div class="col-3 col-xs-12 pe-5 social">
                <h6 class="text-white mt-2 mb-4">Newsletter</h6>
                <p>You can trust us. we only send promo offers, not a single spam.</p>

                <form class="mb-4" action="" method="POST">
                    {{csrf_field()}}
                    <div class="input-group mt-4 mb-3 p-1" style="background-color: white; border: 1px solid white; border-radius: 50px">
                        <input type="email" class="form-control border-0" placeholder="Type your email" aria-label="email" aria-describedby="email" name="email" id="email" style="background: border-box; border-radius: 50px; color: white; height: 26px;">
                        <button class="btn rounded-0 text-light border-0" type="submit" style="background-color: #207CD8; border-radius: 50px!important; font-size: 0.7rem;" id="subscribe-btn">SUBSCRIBE</button>
                    </div>
                </form>

                <h6 class="mb-2">Follow Us</h6>

                <div class="row">
                    <div class="col-12">
                        <a href="" class="me-3" target="_blank"><i class="fab fa-facebook-square text-white"></i></a>

                        <a href="" target="_blank" class="me-3"><i class="fab fa-instagram text-white"></i></a>

                        <a href="" class="me-3"><i class="fab fa-linkedin text-white"></i></a>

                        <a href="" target="_blank" class="me-3"><i class="fab fa-youtube-square text-white"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-3 social col-xs-12">
                <h6 class="mt-2 mb-4">About Us</h6>

                <div class="row">
                    <div class="col-12">
                        <p>Our main aim is to provide the right position to the right person. We believe, if you
                            meet the required standards we will be able to provide you the role no matter what
                            background or what country you come from.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container copyright-footer">
        <hr>
        <div class="row align-items-center">
            <div class="col-6">
                <p class="text-white mb-0">COPYRIGHT &copy;2021 ALL RIGHTS RESERVED</p>
            </div>
            <div class="col-6 text-end">
                <p class="text-white mb-0">POWERED BY <a href="https://www.enspirer.com" class="text-white text-decoration-none" target="_blank">ENSPIRER</a></p>
            </div>
        </div>
    </div>
</section>
