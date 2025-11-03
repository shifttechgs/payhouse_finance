@extends("layouts.master")
@section("content")


    <!-- End Banner Area -->

    <!-- Start Main Banner Area -->
    <div
        class="main-banner-area overflow-hidden position-relative"
        style="background-image: url('{{ asset('assets/images/hero/hero-image-1.svg') }}');"
    >
        <div class="container-fluid banner-content side-padding pb-100">
            <div class="align-items-center text-center">
                <span class="sub-t">Welcome To PayHouse</span>
                <h1>The Home of Instant Cash Loans</h1>
                <p class="mb-5">Your Fast Track to Quick Approvals and Same-Day Payouts for Workers, SMEs, Pensioners, and More.</p>
                <div class="banner-btn">
                    <a href="" class="default-btn">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                </div>
            </div>
        </div>



        <div class="card-area">
            <div class="container-fluid side-padding">
                <div class="row g-4 justify-content-center" >
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="banner-card part-three bg-color-ffffff radius-30 position-relative">
                            <div class="flex-warp position-relative">
                                <i>
                                    <img src="assets/images/svg/euro.svg" alt="image">
                                </i>
                                <h3>Civil Servants</h3>
                            </div>
                            <div class="banner-image-body">
                                <div class="text-end">
                                    <img class="service-image-3" src="assets/images/service/service-image-3.png" alt="image">
                                </div>
                                <img class="service-image-4" src="assets/images/service/service-image-4.png" alt="image">
                            </div>
                            <i class="flaticon-star-5 star-5 moveHorizontal_reverse"></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="banner-card part-two bg-color-9edd05 radius-30 position-relative">
                            <div class="flex-warp position-relative">
                                <i>
                                    <img src="assets/images/svg/corporation.svg" alt="image">
                                </i>
                                <h3>Salaried Individuals</h3>
                            </div>
                            <p class="mb-0">From personal emergencies to business expansion—we have the right product for your situation.</p>
                            <div class="banner-card-image">
                                <div class="text-end">
                                    <img src="assets/images/service/service-image-2.png" alt="image">
                                </div>
                            </div>

                            <div class="total bg-color-ffffff radius">
                                <h4>Total Balance</h4>
                                <h5>$9,647.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="banner-card part-three bg-color-ffffff radius-30 position-relative">
                            <div class="flex-warp position-relative">
                                <i>
                                    <img src="assets/images/svg/euro.svg" alt="image">
                                </i>
                                <h3>SME'S & Vendors</h3>
                            </div>
                            <div class="banner-image-body">
                                <div class="text-end">
                                    <img class="service-image-3" src="assets/images/service/service-image-3.png" alt="image">
                                </div>
                                <img class="service-image-4" src="assets/images/service/service-image-4.png" alt="image">
                            </div>
                            <i class="flaticon-star-5 star-5 moveHorizontal_reverse"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <!-- End Main Banner Area -->


    <!-- Start Advice Area -->
    <div class="advice-revenue-area mb-5">
        <div class="container-fluid">
            <div class="advice-content">
                <ul>
                    <li>Entrepreneurs & Small Business Owners </li>
                    <li>Civil Servants & Pensioners </li>
                    <li>Parents & Students </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Advice Area -->



    <!-- Start Our Services Area -->
    <div class="our-services-area pb-100 overflow-hidden" id="services">
        <div class="container">
            <div class="row">
                <div class="col-xl-4" data-cues="slideInRight" data-duration="800">
                    <div class="section-heading mb-0">
                        <span class="sub-title two bg-color-9edd05 rounded-pill">OUR KEY SERVICES</span>
                        <h2>Our Financial Services</h2>
                        <p class="mb-5">Empowering Individuals, Entrepreneurs, and Businesses with Fast Access to Finance.</p>
                        <a href="services.html" class="default-btn two">See All Services <i class="ri-arrow-right-up-line"></i></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row g-4" data-cues="slideInUp" data-duration="800">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-services-card bg-color-fffaeb radius-30">
                                <h3>
                                    <a href="service-details.html">Instant Personal Loans</a>
                                </h3>
                                <p>When life happens, we deliver rapid, hassle-free loans to see you through emergencies, health expenses, or family obligations.</p>
                                <div class="flex-warp d-flex align-items-center justify-content-between">
                                    <i class="flaticon-mission mission"></i>
                                    <a href="service-details.html" class="arrow-btn"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-services-card bg-color-fffaeb radius-30">
                                <h3>
                                    <a href="service-details.html">School Fees & Education Loans</a>
                                </h3>
                                <p>We provide flexible loans paid straight to your child’s school, supporting uninterrupted learning.</p>
                                <div class="flex-warp d-flex align-items-center justify-content-between">
                                    <i class="flaticon-online-meeting mission"></i>
                                    <a href="service-details.html" class="arrow-btn"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-services-card bg-color-fffaeb radius-30">
                                <h3>
                                    <a href="service-details.html">SME & Business Loans</a>
                                </h3>
                                <p>Unlock funds to restock, invest, or scale. Our loans empower vendors, start-ups, and established businesses alike.</p>
                                <div class="flex-warp d-flex align-items-center justify-content-between">
                                    <i class="flaticon-corporation mission"></i>
                                    <a href="service-details.html" class="arrow-btn"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-services-card bg-color-fffaeb radius-30">
                                <h3>
                                    <a href="service-details.html">Civil Servant & Pensioner Loans</a>
                                </h3>
                                <p>Exclusive loan offers for those who serve the nation.
                                    We support civil servants and retirees with quick, affordable financial solutions.</p>
                                <div class="flex-warp d-flex align-items-center justify-content-between">
                                    <i class="flaticon-investor mission"></i>
                                    <a href="service-details.html" class="arrow-btn"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services Area -->


    <!-- Start About Us Area -->
    <div class="about-us-area pb-100 overflow-hidden">
        <div class="container">


            <div class="about-info bg-color-edf1ee radius-30">
                <div class="about-top mb-5">
                    <div class="row align-items-center" data-cues="slideInUp" data-duration="800">
                        <div class="col-lg-7 col-md-7">
                            <div class="section-heading mb-0">
                                <span class="sub-title two bg-color-9edd05 rounded-pill">ABOUT US</span>
                                <h2 class="mb-0">Your Growth Partner in Microfinance</h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="content">
                                <p>Building Brighter Futures through Innovation, Integrity, and Community Empowerment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6" data-cues="slideInRight" data-duration="800">
                        <div class="about-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="miss-tab" data-bs-toggle="tab" data-bs-target="#miss-tab-pane" type="button" role="tab" aria-controls="miss-tab-pane" aria-selected="true">Our Mission</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="qua-tab" data-bs-toggle="tab" data-bs-target="#qua-tab-pane" type="button" role="tab" aria-controls="qua-tab-pane" aria-selected="false">Our Quality</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="vis-tab" data-bs-toggle="tab" data-bs-target="#vis-tab-pane" type="button" role="tab" aria-controls="vis-tab-pane" aria-selected="false">Our Vision</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="top-tab" data-bs-toggle="tab" data-bs-target="#top-tab-pane" type="button" role="tab" aria-controls="top-tab-pane" aria-selected="false">Top Security</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="miss-tab-pane" role="tabpanel" aria-labelledby="miss-tab" tabindex="0">
                                    <div class="title">
                                        <h3>Empowering Progress, One Client at a Time</h3>
                                        <p class="mb-0">Driving financial inclusion and prosperity across Zimbabwe..</p>
                                    </div>

                                    <ul class="check">
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Deliver fast, accessible, and reliable loan solutions for individuals and businesses.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Enable communities to take charge of their financial futures.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Support sustainable growth and economic development at every stage.
                                        </li>
                                    </ul>

                                    <a href="about.html" class="default-btn mt-5">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                </div>
                                <div class="tab-pane fade" id="qua-tab-pane" role="tabpanel" aria-labelledby="qua-tab" tabindex="0">

                                    <div class="title">
                                        <h3>Excellence in Every Transaction</h3>
                                        <p class="mb-0">Dedicated to integrity, transparency, and customer-centric service.</p>
                                    </div>

                                    <ul class="check">
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Personalized solutions tailored to each client’s unique needs.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Clear, honest processes—no hidden fees, no surprises.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Friendly, knowledgeable staff committed to guiding you every step of the way.
                                        </li>
                                    </ul>

                                    <a href="about.html" class="default-btn mt-5">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                </div>
                                <div class="tab-pane fade" id="vis-tab-pane" role="tabpanel" aria-labelledby="vis-tab" tabindex="0">
                                    <div class="title">
                                        <h3>Shaping a Brighter Financial Landscape</h3>
                                        <p class="mb-0">Building trust and opportunity for the next generation.</p>
                                    </div>

                                    <ul class="check">
                                        <li>
                                            <i class="ri-check-line"></i>
                                            To become Zimbabwe’s most trusted microfinance partner.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Continuously innovate to offer unmatched convenience and value.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Foster uplifted, thriving communities through responsible finance.
                                        </li>
                                    </ul>

                                    <a href="about.html" class="default-btn mt-5">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                </div>
                                <div class="tab-pane fade" id="top-tab-pane" role="tabpanel" aria-labelledby="top-tab" tabindex="0">
                                    <div class="title">
                                        <h3>Your Protection, Our Priority</h3>
                                        <p class="mb-0">We employ advanced security systems and strict confidentiality so your information and transactions are always safe with us.</p>
                                    </div>

                                    <ul class="check">
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Advanced encryption to safeguard your personal and financial information.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Strict confidentiality protocols for every transaction.
                                        </li>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            Ongoing commitment to privacy, integrity, and secure digital experiences.
                                        </li>
                                    </ul>

                                    <a href="about.html" class="default-btn mt-5">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-cues="slideInLeft" data-duration="800">
                        <div class="about-image bg-color-ffffff radius-30">
                            <img class="about-image-1" src="assets/images/about/about-image-1.jpg" alt="image">
                            <img class="about-image-2" src="assets/images/about/about-image-1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us Area -->

    <!-- Start Why Choose Us Area -->
    <div class="why-choose-us-area mb-5 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12" data-cues="slideInRight" data-duration="800">
                    <div class="choose-image position-relative">
                        <img class="radius-30" src="assets/images/about/about-image-2.jpg" alt="image">
{{--                        <div class="paly-content">--}}
{{--                            <a data-fslightbox="one" href="https://www.youtube.com/watch?v=Y7cpCDlRfV0" class="popup-btn">--}}
{{--                                <i class="flaticon-play-buttton"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-cues="slideInLeft" data-duration="800">
                    <div class="why-choose-us-content">
                        <div class="section-heading mb-0">
                            <span class="sub-title two bg-color-9edd05 rounded-pill">WHY CHOOSE US</span>
                            <h2>Why Thousands Trust Payhouse Finance</h2>
                            <p class="mb-5">We Give More Than Loans, We’re Invested in Your Success.</p>
                            <a href="about-us.html" class="default-btn two">Learn More <i class="ri-arrow-right-up-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->

    <!-- Start Choose Card Area -->
    <div class="choose-card-area pb-100">
        <div class="container">
            <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30">
                        <i class="flaticon-money-5"></i>
                        <h3>Fast & Hassle-Free Loans</h3>
                        <p>From application to disbursement, enjoy same-day speed and efficiency.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30">
                        <i class="flaticon-dollar-symbol-1"></i>
                        <h3>Transparency & Honesty</h3>
                        <p>No hidden costs or confusing terms—what you see is what you get.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30">
                        <i class="flaticon-tablet"></i>
                        <h3>Customer-Centric Support</h3>
                        <p>Friendly, accessible advisors on WhatsApp, phone, and in-branch.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Card Area -->

    <!-- Start How It Works Area -->
    <div class="how-it-works-area bg-color-0c3a30 ptb-120" id="how_it_works">
        <div class="container">
            <div class="about-top mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7" data-cues="slideInRight" data-duration="800">
                        <div class="section-heading mb-0">
                            <span class="sub-title two bg-color-9edd05 rounded-pill">HOW IT WORKS</span>
                            <h2 class="text-white mb-0">Your Path to Financial Empowerment, Step-by-Step</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5" data-cues="slideInLeft" data-duration="800">
                        <div class="content">
                            <p class="text-white">Effortless Financial Solutions for Everyone. Fast, Simple, Secure.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-12">
                    <div class="works-btn">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="crea-tab" data-bs-toggle="tab" data-bs-target="#crea-tab-pane" type="button" role="tab" aria-controls="crea-tab-pane" aria-selected="true">Apply Online or Visit Us <i class="ri-arrow-right-up-line"></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="use-tab" data-bs-toggle="tab" data-bs-target="#use-tab-pane" type="button" role="tab" aria-controls="use-tab-pane" aria-selected="false">Submit Requirements<i class="ri-arrow-right-up-line"></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="enj-tab" data-bs-toggle="tab" data-bs-target="#enj-tab-pane" type="button" role="tab" aria-controls="enj-tab-pane" aria-selected="false">Get Approved <i class="ri-arrow-right-up-line"></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mob-tab" data-bs-toggle="tab" data-bs-target="#mob-tab-pane" type="button" role="tab" aria-controls="mob-tab-pane" aria-selected="false">Receive Your Funds<i class="ri-arrow-right-up-line"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="crea-tab-pane" role="tabpanel" aria-labelledby="crea-tab" tabindex="0">
                            <div class="row g-4" data-cues="slideInUp" data-duration="800">
                                <div class="col-lg-6">
                                    <div class="single-works-image">
                                        <img class="radius-30" src="assets/images/about/about-image-3.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-works-card bg-color-29594b radius-30">
                                        <i class="flaticon-payment-method-1 method"></i>
                                        <h3 class="text-white">Apply Online or Visit Us</h3>
                                        <p class="text-white">Submit your application via our website, WhatsApp, or walk into any of our branches.</p>
                                        <a href="contact.html" class="default-btn two">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="use-tab-pane" role="tabpanel" aria-labelledby="use-tab" tabindex="0">
                            <div class="row" data-cues="slideInUp" data-duration="800">
                                <div class="col-lg-6">
                                    <div class="single-works-image">
                                        <img class="radius-30" src="assets/images/about/about-image-10.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-works-card bg-color-29594b radius-30">
                                        <i class="flaticon-tablet method"></i>
                                        <h3 class="text-white">Submit Requirements</h3>
                                        <p class="text-white">Provide your latest payslip, national ID, and business documents if applicable.</p>
                                        <a href="contact.html" class="default-btn two">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="enj-tab-pane" role="tabpanel" aria-labelledby="enj-tab" tabindex="0">
                            <div class="row" data-cues="slideInUp" data-duration="500">
                                <div class="col-lg-6">
                                    <div class="single-works-image">
                                        <img class="radius-30" src="assets/images/about/about-image-11.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-works-card bg-color-29594b radius-30">
                                        <i class="flaticon-payment-method-2 method"></i>
                                        <h3 class="text-white">Get Approved</h3>
                                        <p class="text-white">We process your application quickly and transparently.</p>
                                        <a href="contact.html" class="default-btn two">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mob-tab-pane" role="tabpanel" aria-labelledby="mob-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-works-image">
                                        <img class="radius-30" src="assets/images/about/about-image-12.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-works-card bg-color-29594b radius-30">
                                        <i class="flaticon-businessman-4 method"></i>
                                        <h3 class="text-white">Receive Your Funds</h3>
                                        <p class="text-white">Enjoy instant disbursement of cash or collection of gadgets—no long waits.</p>
                                        <a href="contact.html" class="default-btn two">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How It Works Area -->


    <!-- Start Team Area -->
    <div class="team-page pt-100" id="team">
        <div class="container">

            <div class="pricing-bg bg-color-edf1ee radius-30">
                <div class="about-top mb-5">
                    <div class="row align-items-center" data-cues="slideInUp" data-duration="800">
                        <div class="col-lg-7 col-md-7">
                            <div class="section-heading mb-0">
                                <span class="sub-title two bg-color-9edd05 rounded-pill">OUR TEAM</span>
                                <h2 class="mb-0">Meet The Amazing Team Behind Payhouse </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="content">
                                <p>By integrating advanced technology with financial expertise we provide a comprehensive suite of services that cater to both individuals and businesses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="800">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-image position-relative">
                                <a href="team-details.html">
                                    <img class="radius-30" src="assets/images/team/team-image-1.jpg" alt="image">
                                </a>
                                <ul>
                                    <li>
                                        <a href="https://facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-x-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-card-body">
                                <h3>
                                    <a href="team-details.html">Mirginia L. Franklin</a>
                                </h3>
                                <span>Investment Strategist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-image position-relative">
                                <a href="team-details.html">
                                    <img class="radius-30" src="assets/images/team/team-image-2.jpg" alt="image">
                                </a>
                                <ul>
                                    <li>
                                        <a href="https://facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-x-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-card-body">
                                <h3>
                                    <a href="team-details.html">Christian B. Salas</a>
                                </h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-card">
                            <div class="team-image position-relative">
                                <a href="team-details.html">
                                    <img class="radius-30" src="assets/images/team/team-image-3.jpg" alt="image">
                                </a>
                                <ul>
                                    <li>
                                        <a href="https://facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-x-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-card-body">
                                <h3>
                                    <a href="team-details.html">Brian S. Harman</a>
                                </h3>
                                <span>Lead Advisor</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- End Our Team Area -->



    <!-- Start Testimonial Area -->
    <div class="testimonial-area ptb-100 overflow-hidden">
        <div class="container">
            <div class="about-top mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7" data-cues="slideInRight" data-duration="800">
                        <div class="section-heading mb-0">
                            <span class="sub-title two bg-color-9edd05 rounded-pill">TESTIMONIALS</span>
                            <h2 class="mb-0">Your Right Path To Smart Financial Decisions</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5" data-cues="slideInLeft" data-duration="800">
                        <div class="content">
                            <p>By integrating advanced technology with financial expertise we provide a comprehensive suite of services that cater to both individuals and businesses</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-6 col-md-12">
                    <div
                        class="testimonial-image radius-30"
                        style="background-image: url('{{asset('assets/images/about/about-image-9.jpg')}}')"

                    >
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="testimonial-said bg-color-0c3a30 radius-30">
                        <h2>“What Our Clients Say”</h2>
                        <div class="testimonial-items position-relative">
                            <div class="swiper testimonial-slide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials-card bg-color-fffaeb radius-30 mb-4">
                                            <ul>
                                                <li>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                </li>
                                            </ul>
                                            <p>“Payhouse Finance saved my business! The SME loan came just when I needed it the most. The process was quick and the staff are so friendly.”</p>

                                            <div class="flex-warp d-flex align-items-center justify-content-between">
                                                <div class="d-flex gap-4 align-items-center">
                                                    <img class="user-image-4 rounded-circle" src="assets/images/user/user-image-4.jpg" alt="image">
                                                    <div>
                                                        <h3>Tendai M., Harare</h3>
                                                        <span>CEO & Founder</span>
                                                    </div>
                                                </div>
                                                <img class="right-quote" src="assets/images/svg/right-quote.svg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-card bg-color-fffaeb radius-30">
                                            <ul>
                                                <li>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                </li>
                                            </ul>
                                            <p>“I never thought getting a loan for my daughter’s school fees could be this easy. Thank you, Payhouse Finance, for making it stress-free!”</p>

                                            <div class="flex-warp d-flex align-items-center justify-content-between">
                                                <div class="d-flex gap-4 align-items-center">
                                                    <img class="user-image-4 rounded-circle" src="assets/images/user/user-image-5.jpg" alt="image">
                                                    <div>
                                                        <h3>Memory R., Marondera</h3>
                                                        <span>Businessman</span>
                                                    </div>
                                                </div>
                                                <img class="right-quote" src="assets/images/svg/right-quote.svg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-card bg-color-fffaeb radius-30 mb-4">
                                            <ul>
                                                <li>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                    <i class="flaticon-star-2"></i>
                                                </li>
                                            </ul>
                                            <p>“Great service and instant approval! I got my gadget loan the same day and upgraded my work laptop with no fuss.”</p>

                                            <div class="flex-warp d-flex align-items-center justify-content-between">
                                                <div class="d-flex gap-4 align-items-center">
                                                    <img class="user-image-4 rounded-circle" src="assets/images/user/user-image-4.jpg" alt="image">
                                                    <div>
                                                        <h3>Blessing K., Chinhoyi</h3>
                                                        <span>CEO & Founder</span>
                                                    </div>
                                                </div>
                                                <img class="right-quote" src="assets/images/svg/right-quote.svg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->



    <!-- Start Advice Area -->
    <div class="advice-revenue-area mb-5">
        <div class="container-fluid">
            <div class="advice-content">
                <ul>
                    <li>Boost Your Business _ Instant SME Loans</li>
                    <li>Empower Your Family _ Easy School Fees Financing</li>
                    <li>Access Cash Fast _ Same-Day Loan Approval</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Advice Area -->

    <!-- Start Advice Area -->
    <div class="advice-revenue-area two">
        <div class="container-fluid">
            <div class="advice-content">
                <ul>
                    <li>Flexible Repayments _ Tailored for Your Needs</li>
                    <li>Secure Transactions _ Top-Level Data Protection</li>
                    <li>Apply Anywhere _ Online, WhatsApp, or Branch</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Advice Area -->


    <!-- Start Faq Area -->
    <div class="faq-area ptb-100 overflow-hidden" id="faq">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 col-md-12" data-cues="slideInRight" data-duration="800">
                    <div class="question-card bg-color-9edd05 radius-30">
                        <div class="section-heading">
                            <span class="sub-title">FAQ</span>
                            <h3>Frequently Asked  Questions</h3>
                            <p>With a robust suite of products ranging from digital banking and payment processing to wealth management and blockchain applications.</p>
                        </div>
                        <img class="radius-30" src="assets/images/blog/blog-image-4.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-cues="slideInLeft" data-duration="800">
                    <div class="faq-content">
                        <div class="accordion" id="accordionFAQ">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBang" aria-expanded="false" aria-controls="collapseBang">
                                    1. What criteria do I need to meet for a loan?
                                </button>
                                <div id="collapseBang" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>Just a valid national ID, your most recent payslip, and for business loans, your company documents.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSunam" aria-expanded="false" aria-controls="collapseSunam">
                                    2. How soon can I get the money?
                                </button>
                                <div id="collapseSunam" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p> Most loans are approved and paid out on the same day once documents are verified.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDinaj" aria-expanded="false" aria-controls="collapseDinaj">
                                    3. Can vendors or informal traders apply?
                                </button>
                                <div id="collapseDinaj" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>Absolutely—vendors, SMEs, and informal traders are welcome.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePage" aria-expanded="false" aria-controls="collapsePage">
                                    4. What loan products do you offer?
                                </button>
                                <div id="collapsePage" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>We provide instant personal loans, school fees financing, gadget loans, and business loans for SMEs, civil servants, and pensioners.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLoan" aria-expanded="false" aria-controls="collapseLoan">
                                    5. How do I apply for a loan?
                                </button>
                                <div id="collapseLoan" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>You can apply online via our website, reach us on WhatsApp, or visit any of our branches for quick assistance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseScore" aria-expanded="false" aria-controls="collapseScore">
                                    6. Is my personal and financial information safe with you?
                                </button>
                                <div id="collapseScore" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>Yes, we use advanced security protocols to safeguard your data and guarantee confidentiality throughout the loan process.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq Area -->


    <!-- Start CTA Area -->
    <div class="app-area two pb-120 overflow-hidden">
        <div class="container">
            <div class="download-area bg-color-edf1ee radius-30">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-md-12" data-cues="slideInRight" data-duration="800">
                        <div class="app-image">
                            <img class="radius-30" src="assets/images/app/app-image-5.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" data-cues="slideInLeft" data-duration="800">
                        <div class="section-heading mb-0 ms-auto">
                            <span class="sub-title two bg-color-9edd05 rounded-pill">Ready to Take the Next Step?</span>
                            <h3>Get your loan processed today. Apply in minutes, get approved in hours.</h3>
                            <p class="mb-5">Access instant loans, flexible payments, and secure financial solutions designed for individuals and businesses like you.</p>

                            <div class="app-btn">
                                <a href="about.html" class="default-btn mt-5">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Area -->



@endsection
