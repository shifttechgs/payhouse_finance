@extends("layouts.master")
@section("content")

    <!-- Start Page Banner Area -->
    <div class="page-banner-area position-relative overflow-hidden" style="background-image: url('{{ asset('assets/images/hero/hero-image-1.svg') }}');">
        <div class="container">
            <div class="page-banner-content text-center">
                <h1 class="mb-3">Personal Salary Based Loans</h1>
                <p class="hero-description mb-4" style="color: #082720; font-size: 1.2rem;">Quick Cash Loans for Public Sector, Private Sector & Pensioners</p>
                <ul class="d-flex justify-content-center">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Personal Loans</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Personal Loan Overview -->

    <div class="service-details-page pt-100">
        <div class="container">
            <div class="row g-4 d-flex align-items-start mb-5">
                <!-- Text Column -->
                <div class="col-lg-6" data-cues="slideInRight" data-duration="800">
                    <div class="service-details-content section-heading">
                        <span class="sub-title two bg-color-9edd05 rounded-pill">PERSONAL FINANCING</span>
                        <h2 class="mt-3 mb-4">Get Cash Today with Our Salary-Based Loans</h2>
                        <p class="mb-4">Our personal loans are designed for employees and pensioners who need quick access to cash. Whether you're a public sector employee, selected private sector worker, or a Government of Zimbabwe pensioner, we've got you covered with same-day approval and flexible disbursement options.</p>

                        <div class="offering-card bg-color-0c3a30 radius-20 p-4 mb-4">
                            <p class="text-white text-center mb-0">"No collateral required. Same-day approval. Get cash, Ecocash, or bank transfer instantly!"</p>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="feature-box bg-color-fffaeb radius-20 p-4">
                                    <i class="ri-shield-check-line" style="font-size: 2rem; color: #0c3a30;"></i>
                                    <h4 class="mt-3 mb-2">No Collateral</h4>
                                    <p class="mb-0">No assets required.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box bg-color-fffaeb radius-20 p-4">
                                    <i class="ri-flashlight-line" style="font-size: 2rem; color: #0c3a30;"></i>
                                    <h4 class="mt-3 mb-2">Same Day Approval</h4>
                                    <p class="mb-0">Get approved today.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="col-lg-6 d-flex align-items-start" data-cues="slideInLeft" data-duration="800">
                    <div class="sidebar w-100">
                        <img class="service-image-9 radius-30 w-100" src="{{ asset('assets/images/about/meeting.png') }}" alt="Business Loans">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Personal Loan Overview -->


    <div class="why-choose-us-area pb-100 overflow-hidden">
        <div class="container">
            <div class="section-heading text-center mb-5" data-cues="slideInUp" data-duration="800">
                <span class="sub-title two bg-color-9edd05 rounded-pill">KEY FEATURES</span>
                <h2 class="mt-3">Why Choose Our Personal Loans</h2>
                <p class="mt-3">Fast, flexible, and designed for your convenience</p>
            </div>

            <div class="row g-4" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-shield-cross-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">No Collateral Required</h3>
                        <p>No need to pledge assets or property. Your salary is your security.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-timer-flash-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Same Day Approval</h3>
                        <p>Apply today and get approved the same day. No long waiting periods.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-money-dollar-circle-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Flexible Disbursement</h3>
                        <p>Choose cash, Ecocash, or bank transfer. Whatever works best for you.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-line-chart-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Salary-Based Limits</h3>
                        <p>Loan amounts from $100 up to a limit based on your net salary.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Key Features -->

    <!-- Start Loan Details -->
    <div class="service-details-page pb-100 bg-color-edf1ee">
        <div class="container">
            <div class="row g-5">
                <!-- Image Column -->
                <div class="col-lg-6 d-flex" data-cues="slideInRight" data-duration="800">
                    <img class="radius-30 w-100 align-self-start mt-3" src="{{ asset('assets/images/app/visit.png') }}" alt="Loan Details">
                </div>

                <!-- Text Column -->
                <div class="col-lg-6 d-flex align-items-start" data-cues="slideInLeft" data-duration="800">
                    <div class="service-details-content section-heading">
                        <span class="sub-title two bg-color-9edd05 rounded-pill">LOAN DETAILS</span>
                        <h2 class="mt-3 mb-4">How Our Personal Loans Work</h2>

                        <div class="mb-4">
                            <h3 class="h4 mb-3">Loan Amount</h3>
                            <ul class="check">
                                <li><i class="ri-check-line"></i> <strong>Minimum:</strong> $100</li>
                                <li><i class="ri-check-line"></i> <strong>Maximum:</strong> Depends on your net salary</li>
                                <li><i class="ri-check-line"></i> We assess your affordability based on your take-home pay</li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h3 class="h4 mb-3">Disbursement Options</h3>
                            <ul class="check">
                                <li><i class="ri-check-line"></i> <strong>Cash:</strong> Collect from any branch</li>
                                <li><i class="ri-check-line"></i> <strong>Ecocash:</strong> Instant mobile money transfer</li>
                                <li><i class="ri-check-line"></i> <strong>Bank Transfer:</strong> Direct to your account</li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h3 class="h4 mb-3">Processing Time</h3>
                            <ul class="check">
                                <li><i class="ri-check-line"></i> <strong>Application Review:</strong> Within hours</li>
                                <li><i class="ri-check-line"></i> <strong>Approval:</strong> Same day for qualifying applicants</li>
                                <li><i class="ri-check-line"></i> <strong>Disbursement:</strong> Same day upon approval</li>
                            </ul>
                        </div>

                        <a href="{{ route('loan.apply') }}" class="default-btn">Apply For Personal Loan <i class="ri-arrow-right-up-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Loan Details -->


    <!-- Start Requirements -->
    <div class="service-details-page ptb-100">
        <div class="container">
            <div class="section-heading text-center mb-5" data-cues="slideInUp" data-duration="800">
                <span class="sub-title two bg-color-9edd05 rounded-pill">REQUIREMENTS</span>
                <h2 class="mt-3">What You Need to Apply</h2>
                <p class="mt-3">Simple documentation for quick processing</p>
            </div>

            <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-file-list-3-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Payslip</h3>
                        <p>Your most recent payslip showing your current salary details.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-id-card-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">National ID</h3>
                        <p>Valid national identification card for verification purposes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-bank-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Bank Statement</h3>
                        <p>Recent bank statement showing your salary payments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-home-4-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Proof of Residence</h3>
                        <p>Utility bill or any document confirming your address.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Requirements -->

    <!-- Start How to Apply -->
    <div class="how-it-works-area bg-color-0c3a30 ptb-100">
        <div class="container">
            <div class="section-heading text-center mb-5" data-cues="slideInUp" data-duration="800">
                <span class="sub-title two bg-color-9edd05 rounded-pill">APPLICATION PROCESS</span>
                <h2 class="text-white mt-3">How to Apply for a Personal Loan</h2>
                <p class="text-white mt-3">Four simple steps to get your cash today</p>
            </div>

            <div class="row g-4" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">1</div>--}}
                        <i class="flaticon-global-connection method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Submit Application</h3>
                        <p class="text-white">Fill out our simple online form or visit our branch with your documents.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">2</div>--}}
                        <i class="flaticon-tablet method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Submit Documents</h3>
                        <p class="text-white">Provide payslip, ID, bank statement, and proof of residence.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">3</div>--}}
                        <i class="flaticon-payment-method-2 method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Get Approved</h3>
                        <p class="text-white">Same-day approval for qualifying applicants. No long waits!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">4</div>--}}
                        <i class="flaticon-agreement-1 method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Receive Your Money</h3>
                        <p class="text-white">Choose cash, Ecocash, or bank transfer. Get your funds today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How to Apply -->

    <!-- Start Success Stories -->
    <div class="testimonial-area ptb-100 overflow-hidden">
        <div class="container">
            <div class="section-heading text-center mb-5" data-cues="slideInUp" data-duration="800">
                <span class="sub-title two bg-color-9edd05 rounded-pill">SUCCESS STORIES</span>
                <h2 class="mt-3">What Our Customers Say</h2>
                <p class="mt-3">Real experiences from people just like you</p>
            </div>

            <div class="row g-4" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonials-card bg-color-fffaeb radius-30 h-100">
                        <ul class="mb-3">
                            <li>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                            </li>
                        </ul>
                        <p class="mb-4">"I needed emergency cash for medical bills. Payhouse approved my loan the same day and sent it via Ecocash. Absolutely amazing service!"</p>
                        <div class="flex-warp d-flex align-items-center justify-content-between">
                            <div>
                                <h3>Grace M.</h3>
                                <span>Public Sector Teacher</span>
                            </div>
                            <img class="right-quote" src="{{ asset('assets/images/svg/right-quote.svg') }}" alt="quote">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonials-card bg-color-fffaeb radius-30 h-100">
                        <ul class="mb-3">
                            <li>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                            </li>
                        </ul>
                        <p class="mb-4">"As a pensioner, I thought getting a loan would be difficult. Payhouse made it so easy! Got my money in cash the same day."</p>
                        <div class="flex-warp d-flex align-items-center justify-content-between">
                            <div>
                                <h3>Mr. Moyo</h3>
                                <span>GoZ Pensioner</span>
                            </div>
                            <img class="right-quote" src="{{ asset('assets/images/svg/right-quote.svg') }}" alt="quote">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonials-card bg-color-fffaeb radius-30 h-100">
                        <ul class="mb-3">
                            <li>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                                <i class="flaticon-star-2"></i>
                            </li>
                        </ul>
                        <p class="mb-4">"Quick, professional, and hassle-free! I got my loan approved in hours with just my payslip and ID. Highly recommend Payhouse Finance!"</p>
                        <div class="flex-warp d-flex align-items-center justify-content-between">
                            <div>
                                <h3>Tafadzwa N.</h3>
                                <span>Private Sector Employee</span>
                            </div>
                            <img class="right-quote" src="{{ asset('assets/images/svg/right-quote.svg') }}" alt="quote">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Success Stories -->

    <!-- Start FAQ Section -->
    <div class="faq-area ptb-100 overflow-hidden bg-color-edf1ee">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6" data-cues="slideInRight" data-duration="800">
                    <div class="section-heading mb-5">
                        <span class="sub-title two bg-color-9edd05 rounded-pill">FAQ</span>
                        <h2 class="mt-3 mb-4">Frequently Asked Questions</h2>
                        <p>Got questions about our personal loans? We've got answers.</p>
                    </div>
                    <img class="radius-30 w-100" src="{{ asset('assets/images/blog/faq.png') }}" alt="FAQ">
                </div>
                <div class="col-lg-6" data-cues="slideInLeft" data-duration="800">
                    <div class="faq-content">
                        <div class="accordion" id="accordionPersonalFAQ">
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal1" aria-expanded="true" aria-controls="collapsePersonal1">
                                    Who can apply for a personal loan?
                                </button>
                                <div id="collapsePersonal1" class="accordion-collapse collapse show" data-bs-parent="#accordionPersonalFAQ">
                                    <div class="accordion-body">
                                        <p>Public sector employees, selected private sector employees, and all Government of Zimbabwe pensioners are eligible to apply for our personal salary-based loans.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal2" aria-expanded="false" aria-controls="collapsePersonal2">
                                    Do I need collateral for a personal loan?
                                </button>
                                <div id="collapsePersonal2" class="accordion-collapse collapse" data-bs-parent="#accordionPersonalFAQ">
                                    <div class="accordion-body">
                                        <p>No, our personal salary-based loans do not require any collateral. Your employment and salary are sufficient security.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal3" aria-expanded="false" aria-controls="collapsePersonal3">
                                    How quickly will I get my loan?
                                </button>
                                <div id="collapsePersonal3" class="accordion-collapse collapse" data-bs-parent="#accordionPersonalFAQ">
                                    <div class="accordion-body">
                                        <p>We offer same-day approval for qualifying applicants. Once approved, you can receive your funds immediately via cash, Ecocash, or bank transfer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal4" aria-expanded="false" aria-controls="collapsePersonal4">
                                    What is the minimum and maximum loan amount?
                                </button>
                                <div id="collapsePersonal4" class="accordion-collapse collapse" data-bs-parent="#accordionPersonalFAQ">
                                    <div class="accordion-body">
                                        <p>The minimum loan amount is $100. The maximum loan limit depends on your net salary. We assess your affordability to determine how much you can borrow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal5" aria-expanded="false" aria-controls="collapsePersonal5">
                                    What documents do I need to apply?
                                </button>
                                <div id="collapsePersonal5" class="accordion-collapse collapse" data-bs-parent="#accordionPersonalFAQ">
                                    <div class="accordion-body">
                                        <p>You need your latest payslip, national ID, bank statement, and proof of residence. That's all!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersonal6" aria-expanded="false" aria-controls="collapsePersonal6">
                                    What are my disbursement options?
                                </button>
                                <div id="collapsePersonal6" class="accordion-collapse collapse" data-bs-parent="#accordionPersonalFAQ">
                                    <div class="accordion-body">
                                        <p>You can choose to receive your loan via cash (collect from branch), Ecocash (instant mobile money), or bank transfer (direct to your account).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Section -->



    <!-- Start CTA Area -->
    <div class="app-area two ptb-100 overflow-hidden">
        <div class="container">
            <div class="download-area bg-color-edf1ee radius-30">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-md-12" data-cues="slideInRight" data-duration="800">
                        <div class="app-image">
                            <img class="radius-30 w-100" src="{{ asset('assets/images/app/apply.png') }}" alt="Apply Now">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" data-cues="slideInLeft" data-duration="800">
                        <div class="section-heading mb-0 ms-auto px-4">
                            <span class="sub-title two bg-color-9edd05 rounded-pill">NEED CASH TODAY?</span>
                            <h2 class="mt-3 mb-4">Apply for Your Personal Loan Now</h2>
                            <p class="mb-4">Join thousands of satisfied customers who trust Payhouse Finance for quick, hassle-free personal loans. Same-day approval, no collateral required!</p>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-checkbox-circle-line text-success me-2" style="font-size: 1.5rem;"></i>
                                        <span>No collateral required</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-checkbox-circle-line text-success me-2" style="font-size: 1.5rem;"></i>
                                        <span>Same-day approval</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-checkbox-circle-line text-success me-2" style="font-size: 1.5rem;"></i>
                                        <span>From $100 minimum</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-checkbox-circle-line text-success me-2" style="font-size: 1.5rem;"></i>
                                        <span>Cash, Ecocash, or transfer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="app-btn">
                                <a href="{{ route('loan.apply') }}" class="default-btn">Apply For Personal Loan <i class="ri-arrow-right-up-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Area -->

@endsection
