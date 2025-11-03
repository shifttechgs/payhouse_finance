@extends("layouts.master")
@section("content")


    <!-- Start Page Banner Area -->
    <div
        class="page-banner-area position-relative overflow-hidden"
        style="background-image: url('{{ asset('assets/images/hero/hero-image-1.svg') }}');"
    >
        <div class="container">
            <div class="page-banner-content">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>

{{--        <div class="shape-image">--}}
{{--            <img class="page-banner-shape-1 moveHorizontal_reverse" src="assets/images/shape/page-banner-shape-1.png" alt="shape">--}}
{{--            <img class="page-banner-shape-2 moveVertical" src="assets/images/shape/page-banner-shape-2.png" alt="shape">--}}
{{--        </div>--}}
    </div>
    <!-- End Page Banner Area -->



    <!-- Start Contact Form Area -->
    <div class="contact-form-area ptb-120">
        <div class="container">
            <div class="section-title" style="max-width: 665px;">
                <span class="sub-title two bg-color-9edd05 rounded-pill">GET IN TOUCH</span>
                <h2>Let’s Start the Conversation</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-8 col-md-12" data-cues="slideInUp" data-duration="800">
                    <form class="contact-form bg-color-fffaeb radius-30 p-4"
                          method="POST" action="{{ url('/contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-3">
                                <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            </div>

                            <!-- Fixed Dropdown -->
                            <div class="col-lg-6 col-md-6 mb-3 position-relative">
                                <select name="loanType" class="form-select form-control" required>
                                    <option value="" disabled selected>Select Loan Interested In*</option>
                                    <option value="Civil Servants">Civil Servants</option>
                                    <option value="Government Pensions">Government Pensions</option>
                                    <option value="Salaried Individuals">Salaried Individuals</option>
                                    <option value="SME's/Informal Traders/ Vendors">SME's/Informal Traders/ Vendors</option>
                                </select>
                                <i class="ph-bold ph-money position-absolute"
                                   style="right: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                            </div>

                            <div class="col-lg-12 col-md-12 mb-3">
                                <textarea class="form-control textarea" name="message" placeholder="Write A Message" rows="5" required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="default-btn">
                            Send Message <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </form>
                </div>

                <div class="col-lg-4 col-md-12" data-cues="slideInDown" data-duration="800">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.7468391196694!2d28.047837875258907!3d-26.107181460029416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9573f9169eefff%3A0x3f62aac7901a896f!2sLonrho!5e0!3m2!1sen!2szw!4v1762160439218!5m2!1sen!2szw"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Form Area -->


    {{--    <!-- Start Contact Address Area -->--}}
{{--    <div class="contact-address-area pb-100 overflow-hidden">--}}
{{--        <div class="container">--}}
{{--            <div class="address-container bg-color-0c3a30 radius-20">--}}
{{--                <div class="contact-warp d-flex align-items-center justify-content-between" data-cues="slideInDown" data-duration="700">--}}
{{--                    <div class="location position-relative">--}}
{{--                        <i class="flaticon-phone-call call-icon"></i>--}}
{{--                        <span>Phone Number</span>--}}
{{--                        <a href="tel:263777229401">+263 (777) 229 401</a>--}}
{{--                    </div>--}}
{{--                    <div class="location position-relative">--}}
{{--                        <i class="flaticon-email-1 call-icon"></i>--}}
{{--                        <span>Email Address</span>--}}
{{--                        <a href=""><span class="__cf_email__" data-cfemail="0e666b6262614e6867607a61206d6163"> info@payhousefinance.com</span></a>--}}
{{--                    </div>--}}
{{--                    <div class="location position-relative">--}}
{{--                        <i class="flaticon-maps-and-flags call-icon"></i>--}}
{{--                        <span>Visit Our Office</span>--}}
{{--                        <a href="https://www.google.com/maps/place/90+Greene+St,+New+York,+NY+10012,+USA/@40.7240112,-74.0026355,17z/data=!3m1!4b1!4m6!3m5!1s0x89c2598ea38acb7f:0x409e2155ddf4e393!8m2!3d40.7240072!4d-74.0000606!16s%2Fg%2F11c5p_8lws?entry=ttu&amp;g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Suite EF05-09 Lonrho Building, 90 Nelson Mandela Avenue</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Contact Address Area -->--}}

@endsection
