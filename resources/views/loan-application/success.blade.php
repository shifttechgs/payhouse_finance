@extends('layouts.master')

{{--@section('title', 'Application Submitted Successfully - Payhouse Finance')--}}

@section('content')
<style>
    .success-container {
        background: linear-gradient(135deg, #ffffff 0%, #f0faf8 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 20px;
    }

    .success-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        max-width: 600px;
        text-align: center;
        padding: 60px 40px;
        animation: slideUp 0.6s ease;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .success-icon {
        width: 100px;
        height: 100px;
        background: #9edd05;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        animation: scaleIn 0.5s ease 0.3s both;
    }

    @keyframes scaleIn {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }

    .success-icon i {
        font-size: 50px;
        color: #0c3a30;
    }

    .success-title {
        font-size: 32px;
        font-weight: 800;
        color: #0c3a30;
        margin-bottom: 15px;
    }

    .success-message {
        font-size: 16px;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .success-details {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        text-align: left;
    }

    .success-details h3 {
        font-size: 18px;
        font-weight: 700;
        color: #0c3a30;
        margin-bottom: 15px;
        text-align: center;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 0;
        border-bottom: 1px solid #dee2e6;
    }

    .detail-item:last-child {
        border-bottom: none;
    }

    .detail-item i {
        font-size: 20px;
        color: #9edd05;
        min-width: 20px;
    }

    .detail-item span {
        font-size: 14px;
        color: #495057;
        line-height: 1.5;
    }

    .btn-home {
        background: #9edd05;
        color: #0c3a30;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(158, 221, 5, 0.3);
    }

    .btn-home:hover {
        background: #8acc04;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(158, 221, 5, 0.4);
        color: #0c3a30;
    }

    @media (max-width: 768px) {
        .success-card {
            padding: 40px 25px;
        }

        .success-title {
            font-size: 24px;
        }

        .success-message {
            font-size: 14px;
        }
    }
</style>

<!-- Start Page Banner Area -->
<div
    class="page-banner-area position-relative overflow-hidden"
    style="background-image: url('{{ asset('assets/images/hero/hero-image-1.svg') }}');"
>
    <div class="container">
        <div class="page-banner-content">
            <h1>Loan Application Form</h1>
            <ul>
                <li>Application Submitted Successfully - Payhouse Finance</li>
            </ul>
        </div>
    </div>

    {{--        <div class="shape-image">--}}
    {{--            <img class="page-banner-shape-1 moveHorizontal_reverse" src="assets/images/shape/page-banner-shape-1.png" alt="shape">--}}
    {{--            <img class="page-banner-shape-2 moveVertical" src="assets/images/shape/page-banner-shape-2.png" alt="shape">--}}
    {{--        </div>--}}
</div>
<!-- End Page Banner Area -->

<div class="success-container">
    <div class="success-card">
        <div class="success-icon">
            <i class="ri-checkbox-circle-fill"></i>
        </div>

        <h1 class="success-title">Application Submitted!</h1>
        <p class="success-message">
            Thank you for submitting your loan application. We have received your details and will review your application shortly.
        </p>

        <div class="success-details">
            <h3>What Happens Next?</h3>
            <div class="detail-item">
                <i class="ri-mail-send-line"></i>
                <span>You will receive a confirmation email with your application reference number.</span>
            </div>
            <div class="detail-item">
                <i class="ri-time-line"></i>
                <span>Our team will review your application within 24-48 hours.</span>
            </div>
            <div class="detail-item">
                <i class="ri-phone-line"></i>
                <span>We will contact you via phone or email for any additional information needed.</span>
            </div>
            <div class="detail-item">
                <i class="ri-check-double-line"></i>
                <span>Once approved, your loan will be disbursed to your provided bank account.</span>
            </div>
        </div>

        <a href="{{ url('/') }}" class="btn-home">
            <i class="ri-home-4-line"></i> Return to Home
        </a>

        <p style="margin-top: 25px; font-size: 14px; color: #6c757d;">
            Need help? Call us at <strong style="color: #0c3a30;">+263 777 229 401</strong>
        </p>
    </div>
</div>

@endsection
