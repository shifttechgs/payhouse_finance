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
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Contact Form & Info Area -->
    <div class="contact-form-area pt-80 pb-50">
        <div class="container">
            <div class="section-title text-center mb-5" data-cues="slideInUp" data-duration="800">
                <span style="color: white" class="sub-title two bg-color-009328 rounded-pill">GET IN TOUCH</span>
                <h3 style="width: 100%;">Let's Start the Conversation</h3>
                <p style="max-width: 700px; margin: 0 auto;">
                    Fill out the form below and our team will get back to you within 24 hours.
                </p>
            </div>


            <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                    <div class="d-flex align-items-center">
                        <i class="ri-checkbox-circle-line me-2" style="font-size: 1.5rem;"></i>
                        <div>
                            <strong>Success!</strong> {{ session('success') }}
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                    <div class="d-flex align-items-center">
                        <i class="ri-error-warning-line me-2" style="font-size: 1.5rem;"></i>
                        <div>
                            <strong>Error!</strong> {{ session('error') }}
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                    <div class="d-flex align-items-start">
                        <i class="ri-error-warning-line me-2" style="font-size: 1.5rem;"></i>
                        <div>
                            <strong>Please fix the following errors:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row g-4">
                <!-- Contact Form Column -->
                <div class="col-lg-7 col-md-12" data-cues="slideInUp" data-duration="800">
                    <div class="contact-form-wrapper bg-color-fffaeb radius-30 p-4 p-md-5 h-100">
                        <h3 class="mb-4" style="color: #0c3a30; font-weight: 700;">Send Us a Message</h3>
                        <form method="POST" action="{{ url('/contact') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <label for="fullname" class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('fullname') is-invalid @enderror"
                                           id="fullname"
                                           name="fullname"
                                           placeholder="Enter your full name"
                                           value="{{ old('fullname') }}"
                                           required>
                                    @error('fullname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 mb-4">
                                    <label for="email" class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                                    <input type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           placeholder="your.email@example.com"
                                           value="{{ old('email') }}"
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 mb-4">
                                    <label for="phone" class="form-label fw-semibold">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone"
                                           placeholder="+263 777 123 456"
                                           value="{{ old('phone') }}"
                                           required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 mb-4">
                                    <label for="loanType" class="form-label fw-semibold">Loan Type <span class="text-danger">*</span></label>
                                    <select name="loanType"
                                            id="loanType"
                                            class="form-select form-control @error('loanType') is-invalid @enderror"
                                            required>
                                        <option value="" disabled {{ old('loanType') ? '' : 'selected' }}>Select Loan Type</option>
                                        <option value="Business Loans" {{ old('loanType') == 'Business Loans' ? 'selected' : '' }}>Business Loans</option>
                                        <option value="Salaried Individuals" {{ old('loanType') == 'Salaried Individuals' ? 'selected' : '' }}>Salaried Individuals</option>
                                    </select>
                                    @error('loanType')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12 col-md-12 mb-4">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea class="form-control textarea @error('message') is-invalid @enderror"
                                              id="message"
                                              name="message"
                                              placeholder="Tell us how we can help you..."
                                              rows="4">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <p class="mb-0 text-muted"><small>Fields marked with <span class="text-danger">*</span> are required</small></p>
                                <button type="submit" class="default-btn" id="contactSubmitBtn">
                                    <span class="btn-text">Send Message</span>
                                    <span class="btn-loading" style="display: none;">
                                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                        Sending...
                                    </span>
                                    <i class="ri-arrow-right-up-line btn-icon"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Details Column -->
                <div class="col-lg-5 col-md-12" data-cues="slideInUp" data-duration="800">
                    <div class="contact-details-wrapper h-100">
                        <div class="contact-details-card bg-color-0c3a30 radius-30 p-4 p-md-5 h-100">
                            <h3 class="mb-4" style="color: #ffffff; font-weight: 700;">Contact Information</h3>
                            <p class="mb-5" style="color: #e8e8e8; line-height: 1.7;">
                                Have questions? Need assistance? Our dedicated team is ready to provide you with the support you need.
                            </p>

                            <!-- Phone -->
                            <div class="contact-detail-item mb-4 pb-4" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="contact-icon-box" style="background: rgba(158, 221, 5, 0.15); width: 50px; height: 50px; border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="flaticon-phone-call" style="font-size: 1.5rem; color: #009328;"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: #009328; font-weight: 600; margin-bottom: 8px; font-size: 16px;">Call Us</h5>
                                        <p class="mb-2" style="color: #d0d0d0; font-size: 14px; line-height: 1.5;">Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 1:00 PM</p>
                                        <a href="tel:+263777229401" style="color: #ffffff; text-decoration: none; font-weight: 600; font-size: 15px; transition: color 0.3s;" onmouseover="this.style.color='#009328'" onmouseout="this.style.color='#ffffff'">
                                            +263 (777) 229 401
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="contact-detail-item mb-4 pb-4" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="contact-icon-box" style="background: rgba(158, 221, 5, 0.15); width: 50px; height: 50px; border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="flaticon-email-1" style="font-size: 1.5rem; color: #009328;"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: #009328; font-weight: 600; margin-bottom: 8px; font-size: 16px;">Email Us</h5>
                                        <p class="mb-2" style="color: #d0d0d0; font-size: 14px; line-height: 1.5;">Get a response within 24 hours<br>We're always happy to help</p>
                                        <a href="mailto:info@payhousefinance.com" style="color: #ffffff; text-decoration: none; font-weight: 600; font-size: 15px; transition: color 0.3s; word-break: break-all;" onmouseover="this.style.color='#009328'" onmouseout="this.style.color='#ffffff'">
                                            info@payhousefinance.com
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="contact-detail-item">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="contact-icon-box" style="background: rgba(158, 221, 5, 0.15); width: 50px; height: 50px; border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="flaticon-maps-and-flags" style="font-size: 1.5rem; color: #009328;"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: #009328; font-weight: 600; margin-bottom: 8px; font-size: 16px;">Visit Our Office</h5>
                                        <p class="mb-2" style="color: #d0d0d0; font-size: 14px; line-height: 1.7;">
                                            Suite EF05-09 Lonrho Building<br>
                                            90 Nelson Mandela Avenue
                                        </p>
                                        <a href="https://www.google.com/maps/place/Lonrho" target="_blank" style="color: #ffffff; text-decoration: none; font-weight: 600; font-size: 15px; transition: color 0.3s; display: inline-flex; align-items: center; gap: 5px;" onmouseover="this.style.color='#009328'" onmouseout="this.style.color='#ffffff'">
                                            Get Directions <i class="ri-arrow-right-up-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links or Additional Info (Optional) -->
                            <div class="mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.1);">
                                <p style="color: #d0d0d0; font-size: 13px; margin-bottom: 0; line-height: 1.6;">
                                    <i class="ri-time-line" style="color: #009328; margin-right: 5px;"></i>
                                    Quick response time guaranteed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Form & Info Area -->

    <!-- Start Map Area -->
    <div class="contact-map-area ptb-100">
        <div class="container">
{{--            <div class="section-title text-center mb-5" data-cues="slideInUp" data-duration="800">--}}
{{--                <span class="sub-title two bg-color-009328 rounded-pill">FIND US</span>--}}
{{--                <h2>Our Location</h2>--}}
{{--                <p style="max-width: 700px; margin: 0 auto;">Visit us at our office in the heart of the business district.</p>--}}
{{--            </div>--}}
            <div class="map-wrapper" data-cues="slideInUp" data-duration="800">
                <div class="contact-map radius-30" style="height: 500px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.7468391196694!2d28.047837875258907!3d-26.107181460029416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9573f9169eefff%3A0x3f62aac7901a896f!2sLonrho!5e0!3m2!1sen!2szw!4v1762160439218!5m2!1sen!2szw"
                        width="100%"
                        height="100%"
                        style="border:0; border-radius: 30px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map Area -->


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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('form[action="{{ url('/contact') }}"]');
    const submitBtn = document.getElementById('contactSubmitBtn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');
    const btnIcon = submitBtn.querySelector('.btn-icon');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Show loading state
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnIcon.style.display = 'none';
            btnLoading.style.display = 'inline-block';
        });
    }
});
</script>
@endpush
