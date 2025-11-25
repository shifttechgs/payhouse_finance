<!DOCTYPE html>
<html lang="en-ZW" prefix="og: https://ogp.me/ns#">
<head>
    <!-- CORE META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Performance & Security -->
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="format-detection" content="telephone=yes">
    <meta name="theme-color" content="#1a73e8" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0d47a1" media="(prefers-color-scheme: dark)">

    <!-- DNS Prefetch & Preconnect -->
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>

    <!-- Preload Assets -->
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/js/script.js') }}" as="script">

    <!-- SEO META -->
    <title>@yield('title', 'Payhouse Finance - Quick Loans for Civil Servants, Pensioners & Salaried Workers in Zimbabwe')</title>
    <meta name="description" content="@yield('description', 'Get fast, affordable loans in Zimbabwe. Payhouse Finance serves Civil Servants, Government Pensions, Salaried Individuals, SMEs & Informal Traders in Harare, Marondera & Chinhoyi. Apply today!')">
    <meta name="keywords" content="@yield('keywords', 'loans Zimbabwe, civil servant loans, pension loans Zimbabwe, salary loans Harare, quick loans Marondera, loans Chinhoyi, government employee loans, parastatal loans, SME loans Zimbabwe, informal trader finance, microfinance Zimbabwe, personal loans Harare, Payhouse Finance, fast loan approval Zimbabwe, affordable interest rates, secured loans, unsecured loans Zimbabwe')">
    <meta name="author" content="Payhouse Finance">
    <meta name="publisher" content="Payhouse Finance">
    <meta name="copyright" content="Copyright © {{ date('Y') }} Payhouse Finance. All rights reserved.">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

    <!-- Canonical & Alternate -->
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-zw" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Payhouse Finance - Quick Loans for Civil Servants & Pensioners in Zimbabwe')">
    <meta property="og:description" content="@yield('og_description', 'Trusted loan provider for Civil Servants, Government Pensions, SMEs & Salaried Workers in Harare, Marondera & Chinhoyi. Fast approval, competitive rates.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/social-preview.jpg'))">
    <meta property="og:image:secure_url" content="@yield('og_image', asset('assets/images/social-preview.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Payhouse Finance - Trusted Loan Provider in Zimbabwe">
    <meta property="og:site_name" content="Payhouse Finance">
    <meta property="og:locale" content="en_ZW">
    <meta property="fb:app_id" content="@yield('fb_app_id', '')">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@payhousefinance">
    <meta name="twitter:creator" content="@payhousefinance">
    <meta name="twitter:title" content="@yield('twitter_title', 'Payhouse Finance - Quick Loans in Zimbabwe')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Fast loans for Civil Servants, Pensioners, SMEs & Salaried Workers. Serving Harare, Marondera & Chinhoyi.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/images/social-preview.jpg'))">
    <meta name="twitter:image:alt" content="Payhouse Finance Zimbabwe">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#1a73e8">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_finto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/logo-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hero-custom.css') }}">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        rel="stylesheet"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >

    @stack('head-scripts')
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')

<!-- JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/js/fslightbox.min.js') }}" defer></script>
<script src="{{ asset('assets/js/smooth-scroll.js') }}" defer></script>
<script src="{{ asset('assets/js/scrollCue.min.js') }}" defer></script>
<script src="{{ asset('assets/js/script.js') }}" defer></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    defer
></script>

<!-- Toastr Session Flash -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof toastr !== 'undefined') {
            @if (session('success'))
            toastr.success("{{ session('success') }}");
            @elseif (session('error'))
            toastr.error("{{ session('error') }}");
            @elseif (session('warning'))
            toastr.warning("{{ session('warning') }}");
            @elseif (session('info'))
            toastr.info("{{ session('info') }}");
            @endif
        }
    });
</script>

<!-- Smooth Scroll -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#' && document.querySelector(href)) {
                    e.preventDefault();
                    document.querySelector(href).scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    });
</script>

<!-- Loan Calculator -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loanSlider = document.getElementById('loanAmount');
        const amountDisplay = document.getElementById('loanAmountDisplay');
        const repaymentInfo = document.getElementById('repaymentInfo');

        if (loanSlider && amountDisplay && repaymentInfo) {
            const updateCalculator = () => {
                const amount = parseInt(loanSlider.value);
                const formattedAmount = '$' + amount.toLocaleString();
                amountDisplay.textContent = formattedAmount;

                const monthlyRate = 0.15 / 12;
                const months = 12;
                const monthlyPayment = (amount * monthlyRate * Math.pow(1 + monthlyRate, months)) /
                    (Math.pow(1 + monthlyRate, months) - 1);
                repaymentInfo.textContent = 'Repay as low as $' + Math.round(monthlyPayment).toLocaleString() + '/month';
            };

            loanSlider.addEventListener('input', updateCalculator);
            updateCalculator();
        }
    });
</script>

</body>
</html>
