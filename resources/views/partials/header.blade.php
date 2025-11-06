<div class="top-header-info">
    <!-- Start Top Header Area -->
    <div class="top-header-area bg-color-0c3a30">
        <div class="container-fluid side-padding">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <ul class="left-side">
                        <li><span>Smart Loans For Financial Needs</span></li>
                        <li><a href="tel:+263777229401"><i class="flaticon-phone-call"></i> <b>Call:</b> +263 (777) 229 401</a></li>
{{--                        <li><a href="tel:+263777229401"><i class="flaticon-phone-call"></i> <b>Call:</b> +263 (242) 708 908</a></li>--}}
                        <li><a href=""><i class="flaticon-email-1"></i> <b>Mail:</b> <span class="" data-cfemail="">info@payhousefinance.com</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="right-side">
                        <li><a href="#">Support</a></li>

                        <li>
                            <div class="flag position-relative">
                                <img class="rounded-circle" src="{{ asset('assets/images/svg/flag.svg') }}" alt="Zimbabwe Flag">
                                <select class="form-select" aria-label="Select Language">
                                    <option selected>English</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <nav class="navbar navbar-expand-lg bg-color-ffffff" id="navbar">
        <div class="container-fluid side-padding position-relative">
            <a class="navbar-brand logo-brand p-0" href="{{ url('/') }}">
                <img
                    src="{{ asset('assets/images/payhouse.png') }}"
                    alt="Payhouse Finance - Loans in Zimbabwe"
                    class="payhouse-logo"
                    loading="eager"
                >
            </a>

            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
               aria-controls="navbarOffcanvas">
                        <span class="burger-menu">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </span>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link  active" href="{{ url('/') }}"
                           >
                            Home
                        </a>


                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/')}}#services">
                            Services
                        </a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/') }}#how_it_works">
                           How it works
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/') }}#team">
                           Team
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/') }}#faq">
                            FAQ
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{  url('/contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <div class="others-options">
                <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled">

                    <li>
                        <a href="{{url('/contact')}}" class="default-btn">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar Area -->
</div>

<!-- Start Mobile Navbar Area -->
<div class="mobile-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="{{ url('/') }}" class="logo d-inline-block">
            <img
                src="{{ asset('assets/images/payhouse.png') }}"
                class="payhouse-logo-mobile"
                alt="Payhouse Finance - Loans in Zimbabwe"
                loading="eager">
        </a>

        <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="close">
            <i class="ri-close-fill"></i>
        </button>
    </div>

    <div class="offcanvas-body">
        <ul class="mobile-menu">
            <li class="mobile-menu-list without-icon active">
                <a href="{{ url('/') }}" class="nav-link">
                    Home
                </a>
            </li>
            <li class="mobile-menu-list without-icon">
                <a href="{{ url('/') }}#services" class="nav-link">
                    Services
                </a>
            </li>
            <li class="mobile-menu-list without-icon">
                <a href="{{ url('/') }}#how_it_works" class="nav-link">
                    How it works
                </a>
            </li>
            <li class="mobile-menu-list without-icon">
                <a href="{{ url('/') }}#team" class="nav-link">
                    Team
                </a>
            </li>
            <li class="mobile-menu-list without-icon">
                <a href="{{ url('/') }}#faq" class="nav-link">
                    FAQ
                </a>
            </li>
            <li class="mobile-menu-list without-icon">
                <a href="{{ url('/contact') }}" class="nav-link">
                    Contact
                </a>
            </li>
        </ul>

        <!-- Others options -->
        <div class="others-options">
            <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled">

                <li>
                    <a href="{{url('/contact')}}" class="default-btn">Apply For Loan Today <i class="ri-arrow-right-up-line"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Mobile Navbar Area -->

<!-- Search Modal -->
<div class="search-modal modal fade" id="exampleModal" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header position-relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <form class="popup-form">
                    <input type="text" class="form-control" placeholder="Search here">
                    <button type="submit" class="popup-btn">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
