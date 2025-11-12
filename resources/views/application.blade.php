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
                    <li>Apply For Loan</li>
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
    <div class="contact-form-area ptb-100">
        <div class="container">
            <div class="section-title" style="max-width: 665px;">
                <span class="sub-title two bg-color-9edd05 rounded-pill">GET IN TOUCH</span>
                <h2>Let’s Start the Conversation</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-12" data-cues="slideInUp" data-duration="800">
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


            </div>
        </div>
    </div>
    <!-- End Contact Form Area -->




@endsection
