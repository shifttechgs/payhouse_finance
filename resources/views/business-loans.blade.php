@extends("layouts.master")
@section("content")

    <!-- Start Page Banner Area -->
    <div class="page-banner-area position-relative overflow-hidden" style="background-image: url('{{ asset('assets/images/hero/hero-image-1.svg') }}');">
        <div class="container">
            <div class="page-banner-content text-center">
                <h1 class="mb-3">Business Loans</h1>
                <p class="hero-description mb-4" style="color: #082720; font-size: 1.2rem;">Fuel Your SME Growth with Flexible Financing Solutions</p>
                <ul class="d-flex justify-content-center">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Business Loans</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Business Loan Overview -->
    <div class="service-details-page pt-100">
        <div class="container">
            <div class="row g-4 d-flex align-items-start mb-5">
                <!-- Text Column -->
                <div class="col-lg-6" data-cues="slideInRight" data-duration="800">
                    <div class="service-details-content section-heading">
                        <span class="sub-title two bg-color-9edd05 rounded-pill">BUSINESS FINANCING</span>
                        <h2 class="mt-3 mb-4">Empower Your SME with Quick Access to Capital</h2>
                        <p class="mb-4">Our business loans are specifically designed for Small and Medium Enterprises (SMEs) across Zimbabwe. Whether you need working capital, order financing, or invoice discounting, we provide flexible solutions tailored to your business cash flow.</p>

                        <div class="offering-card bg-color-0c3a30 radius-20 p-4 mb-4">
                            <p class="text-white text-center mb-0">"Targeting SMEs with flexible repayment terms and financing solutions based on your actual business cash flows."</p>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6 d-flex">
                                <div class="feature-box bg-color-fffaeb radius-20 p-4 w-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-time-line" style="font-size: 2rem; color: #0c3a30;"></i>
                                        <h4 class="mt-3 mb-2">Up to 6 Months</h4>
                                        <p class="mb-0">Flexible repayment period.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex">
                                <div class="feature-box bg-color-fffaeb radius-20 p-4 w-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-line-chart-line" style="font-size: 2rem; color: #0c3a30;"></i>
                                        <h4 class="mt-3 mb-2">Cash Flow Based</h4>
                                        <p class="mb-0">Loan amount depends on your business cash flow</p>
                                    </div>
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
    <!-- End Business Loan Overview -->



    <!-- Start Key Features -->
    <div class="why-choose-us-area pb-100 overflow-hidden">
        <div class="container">
            <div class="section-heading text-center mb-5" data-cues="slideInUp" data-duration="800">
                <span class="sub-title two bg-color-9edd05 rounded-pill">KEY FEATURES</span>
                <h2 class="mt-3">Why SMEs Choose Payhouse Finance</h2>
                <p class="mt-3">We understand the unique challenges SMEs face and provide solutions that work</p>
            </div>

            <div class="row g-4" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-building-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">SME Focused</h3>
                        <p>Specifically targeting Small and Medium Enterprises with tailored solutions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-calendar-check-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">6 Months Repayment</h3>
                        <p>Flexible repayment terms of up to 6 months to ease your cash flow burden.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-funds-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Cash Flow Based</h3>
                        <p>Loan amounts determined by your actual business cash flows, not arbitrary limits.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choose-card bg-color-fffaeb radius-30 text-center h-100">
                        <i class="ri-shield-check-line" style="font-size: 3rem; "></i>
                        <h3 class="mt-4 mb-3">Flexible Collateral</h3>
                        <p>Collateral may be requested for large amounts, but we work with your situation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Key Features -->

    <div class="service-details-page pb-80 bg-color-edf1ee">
        <div class="container">
            <div class="row g-5 d-flex">
                <!-- Image Column -->
                <div class="col-lg-6 d-flex align-items-start" data-cues="slideInRight" data-duration="800">
                    <img class="radius-30 w-100"
                         src="{{ asset('assets/images/app/visit.png') }}"
                         alt="Eligibility Requirements">
                </div>

                <!-- Text Column -->
                <div class="col-lg-6" data-cues="slideInLeft" data-duration="800">
                    <div class="service-details-content section-heading">
                        <span class="sub-title two bg-color-9edd05 rounded-pill">REQUIREMENTS</span>
                        <h2 class="mt-3 mb-4">What You Need to Apply</h2>
                        <p class="mb-4">We've made it simple for SMEs to access financing. Here's what you need to get started:</p>

                        <h3 class="h4 mb-3">Required Documents</h3>
                        <ul class="check mb-4">
                            <li><i class="ri-check-line"></i> Company registration certificate</li>
                            <li><i class="ri-check-line"></i> Business bank statements (3-6 months)</li>
                            <li><i class="ri-check-line"></i> Cash flow statements/projections</li>
                            <li><i class="ri-check-line"></i> Director's national ID</li>
                            <li><i class="ri-check-line"></i> Tax clearance certificate</li>
                            <li><i class="ri-check-line"></i> Proof of business address</li>
                            <li><i class="ri-check-line"></i> Trading licenses (where applicable)</li>
                        </ul>

                        <h3 class="h4 mb-3">Additional for Specific Products</h3>
                        <ul class="check mb-5">
                            <li><i class="ri-check-line"></i> <strong>Order Financing:</strong> Purchase orders from verified clients</li>
                            <li><i class="ri-check-line"></i> <strong>Invoice Discounting:</strong> Outstanding invoices from credit-worthy customers</li>
                            <li><i class="ri-check-line"></i> <strong>Large Amounts:</strong> Collateral documentation as required</li>
                        </ul>

                        <a href="{{ route('loan.apply') }}" class="default-btn">
                            Apply For Business Loan <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start How to Apply -->
    <div class="how-it-works-area bg-color-0c3a30 ptb-120">
        <div class="container">
            <div class="section-heading text-center mb-5" data-cues="slideInUp" data-duration="800">
                <span class="sub-title two bg-color-9edd05 rounded-pill">APPLICATION PROCESS</span>
                <h2 class="text-white mt-3">How to Apply for a Business Loan</h2>
                <p class="text-white mt-3">Four simple steps to get your SME funded</p>
            </div>

            <div class="row g-4" data-cues="slideInUp" data-duration="800">
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">1</div>--}}
                        <i class="flaticon-global-connection method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Submit Application</h3>
                        <p class="text-white">Fill out our business loan application form online or visit our branch.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">2</div>--}}
                        <i class="flaticon-tablet method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Submit Documents</h3>
                        <p class="text-white">Provide all relevant company documents and cash flow statements.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">3</div>--}}
                        <i class="flaticon-payment-method-2 method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Assessment & Approval</h3>
                        <p class="text-white">We review your cash flows and determine your loan amount eligibility.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-works-card bg-color-29594b radius-30 text-center h-100">
{{--                        <div class="step-number bg-color-9edd05 rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">4</div>--}}
                        <i class="flaticon-agreement-1 method mb-3" style="font-size: 3rem;"></i>
                        <h3 class="text-white mb-3">Receive Funds</h3>
                        <p class="text-white">Get your business financing and start growing your SME.</p>
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
                <h2 class="mt-3">How SMEs Thrive with Payhouse Finance</h2>
                <p class="mt-3">Real stories from real business owners across Zimbabwe</p>
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
                        <p class="mb-4">"The order financing helped me fulfill a major contract without worrying about supplier payments. My business grew by 150% in just 3 months!"</p>
                        <div class="flex-warp d-flex align-items-center justify-content-between">
                            <div>
                                <h3>Tendai M.</h3>
                                <span>Manufacturing SME Owner</span>
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
                        <p class="mb-4">"Invoice discounting solved our cash flow problems. We no longer wait 90 days for payment and can keep operations running smoothly!"</p>
                        <div class="flex-warp d-flex align-items-center justify-content-between">
                            <div>
                                <h3>Rudo K.</h3>
                                <span>Wholesale Distribution Business</span>
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
                        <p class="mb-4">"The 6-month repayment term was perfect for my construction business. It aligned with my project timelines and cash flow cycle!"</p>
                        <div class="flex-warp d-flex align-items-center justify-content-between">
                            <div>
                                <h3>Joseph N.</h3>
                                <span>Construction SME</span>
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
                        <p>Got questions about our business loans? We've got answers.</p>
                    </div>
                    <img class="radius-30 w-100" src="{{ asset('assets/images/blog/faq.png') }}" alt="FAQ">
                </div>
                <div class="col-lg-6" data-cues="slideInLeft" data-duration="800">
                    <div class="faq-content">
                        <div class="accordion" id="accordionBusinessFAQ">
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px" >
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBiz1" aria-expanded="true" aria-controls="collapseBiz1">
                                    Who can apply for business loans?
                                </button>
                                <div id="collapseBiz1" class="accordion-collapse collapse show" data-bs-parent="#accordionBusinessFAQ">
                                    <div class="accordion-body">
                                        <p>Our business loans are specifically designed for Small and Medium Enterprises (SMEs) operating in Zimbabwe with verifiable business operations and cash flows.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBiz2" aria-expanded="false" aria-controls="collapseBiz2">
                                    How is the loan amount determined?
                                </button>
                                <div id="collapseBiz2" class="accordion-collapse collapse" data-bs-parent="#accordionBusinessFAQ">
                                    <div class="accordion-body">
                                        <p>Loan amounts depend on your presented cash flows. We assess your business financials to determine an appropriate loan size that you can comfortably repay.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBiz3" aria-expanded="false" aria-controls="collapseBiz3">
                                    What is the repayment period?
                                </button>
                                <div id="collapseBiz3" class="accordion-collapse collapse" data-bs-parent="#accordionBusinessFAQ">
                                    <div class="accordion-body">
                                        <p>We offer flexible repayment terms of up to 6 months, allowing you to manage your cash flow effectively while repaying the loan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBiz4" aria-expanded="false" aria-controls="collapseBiz4">
                                    Do I need collateral for a business loan?
                                </button>
                                <div id="collapseBiz4" class="accordion-collapse collapse" data-bs-parent="#accordionBusinessFAQ">
                                    <div class="accordion-body">
                                        <p>Collateral may be requested for large amounts. For smaller loans based on strong cash flows, we may not require collateral.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBiz5" aria-expanded="false" aria-controls="collapseBiz5">
                                    What documents do I need to provide?
                                </button>
                                <div id="collapseBiz5" class="accordion-collapse collapse" data-bs-parent="#accordionBusinessFAQ">
                                    <div class="accordion-body">
                                        <p>All relevant company documents are required, including registration certificates, bank statements, cash flow statements, tax clearance, and director's identification.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="background-color: #ffffff; border-radius: 20px">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBiz6" aria-expanded="false" aria-controls="collapseBiz6">
                                    What types of business loans do you offer?
                                </button>
                                <div id="collapseBiz6" class="accordion-collapse collapse" data-bs-parent="#accordionBusinessFAQ">
                                    <div class="accordion-body">
                                        <p>We offer short term loans for working capital, order financing for fulfilling large orders, and invoice discounting to convert outstanding invoices to immediate cash.</p>
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

    <!-- Start Advice Area -->
    <div class="advice-revenue-area my-5">
        <div class="container-fluid">
            <div class="advice-content">
                <ul>
                    <li>Boost Your Business _ Instant SME Loans</li>
                    <li>Access Cash Fast _ Same-Day Loan Approval</li>
                    <li>Flexible Repayments _ Tailored for Your Needs</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Advice Area -->


    <!-- Start CTA Area -->
    <div class="app-area two pb-120 overflow-hidden">
        <div class="container">
            <div class="download-area bg-color-edf1ee radius-30">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-md-12" data-cues="slideInRight" data-duration="800">
                        <div class="app-image">
                            <img class="radius-30" src="assets/images/app/apply.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" data-cues="slideInLeft" data-duration="800">
                        <div class="section-heading mb-0 ms-auto">
                            <span class="sub-title two bg-color-9edd05 rounded-pill">Ready to Take the Next Step?</span>
                            <h3>Get your loan processed today. Apply in minutes, get approved in hours.</h3>
                            <p class="mb-5">Access instant loans, flexible payments, and secure financial solutions designed for individuals and businesses like you.</p>

                            <div class="app-btn">
                                <a href="{{url('/apply-for-loan')}}" class="default-btn mt-5">Apply For Business Loan Today <i class="ri-arrow-right-up-line"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Area -->


@endsection
