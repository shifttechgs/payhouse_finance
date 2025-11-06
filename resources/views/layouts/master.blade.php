<!DOCTYPE html>
<html lang="en-ZW">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1a73e8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Primary SEO Meta -->
    <title>@yield('title', 'Payhouse Finance - Quick Loans for Civil Servants, Pensioners & Salaried Workers in Zimbabwe')</title>
    <meta name="description" content="@yield('description', 'Get fast, affordable loans in Zimbabwe. Payhouse Finance serves Civil Servants, Government Pensions, Salaried Individuals, SMEs & Informal Traders in Harare, Marondera & Chinhoyi. Apply today!')">
    <meta name="keywords" content="loans Zimbabwe, civil servant loans, pension loans Zimbabwe, salary loans Harare, quick loans Marondera, loans Chinhoyi, government employee loans, parastatal loans, SME loans Zimbabwe, informal trader finance, microfinance Zimbabwe, personal loans Harare, Payhouse Finance">
    <meta name="author" content="Payhouse Finance">

    <!-- Geo-Targeting Meta Tags -->
    <meta name="geo.region" content="ZW">
    <meta name="geo.placename" content="Zimbabwe">
    <meta name="geo.position" content="-17.8252;31.0335">
    <meta name="ICBM" content="-17.8252, 31.0335">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Payhouse Finance - Quick Loans for Civil Servants & Pensioners in Zimbabwe')">
    <meta property="og:description" content="@yield('og_description', 'Trusted loan provider for Civil Servants, Government Pensions, SMEs & Salaried Workers in Harare, Marondera & Chinhoyi. Fast approval, competitive rates.')">
    <meta property="og:image" content="{{ asset('assets/images/social-preview.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Payhouse Finance">
    <meta property="og:locale" content="en_ZW">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Payhouse Finance - Quick Loans in Zimbabwe')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Fast loans for Civil Servants, Pensioners, SMEs & Salaried Workers. Serving Harare, Marondera & Chinhoyi.')">
    <meta name="twitter:image" content="{{ asset('assets/images/social-preview.jpg') }}">
    <meta name="twitter:creator" content="@payhousefinance">
    <meta name="twitter:site" content="@payhousefinance">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <!-- Essential CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_finto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/logo-custom.css') }}">

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

{{--    <!-- Structured Data (JSON-LD) -->--}}
{{--    <script type="application/ld+json">--}}
{{--    @json([--}}
{{--        '@context' => 'https://schema.org',--}}
{{--        '@type' => 'FinancialService',--}}
{{--        'name' => 'Payhouse Finance',--}}
{{--        'image' => asset('assets/images/logo.png'),--}}
{{--        'logo' => asset('assets/images/logo.png'),--}}
{{--        '@id' => url('/'),--}}
{{--        'url' => url('/'),--}}
{{--        'telephone' => '+263-XXX-XXXX',--}}
{{--        'priceRange' => '$$',--}}
{{--        'address' => [--}}
{{--            '@type' => 'PostalAddress',--}}
{{--            'streetAddress' => 'Your Street Address',--}}
{{--            'addressLocality' => 'Harare',--}}
{{--            'addressRegion' => 'Harare Province',--}}
{{--            'postalCode' => '00000',--}}
{{--            'addressCountry' => 'ZW'--}}
{{--        ],--}}
{{--        'geo' => [--}}
{{--            '@type' => 'GeoCoordinates',--}}
{{--            'latitude' => -17.8252,--}}
{{--            'longitude' => 31.0335--}}
{{--        ],--}}
{{--        'areaServed' => [--}}
{{--            [--}}
{{--                '@type' => 'City',--}}
{{--                'name' => 'Harare',--}}
{{--                'address' => [--}}
{{--                    '@type' => 'PostalAddress',--}}
{{--                    'addressCountry' => 'ZW'--}}
{{--                ]--}}
{{--            ],--}}
{{--            [--}}
{{--                '@type' => 'City',--}}
{{--                'name' => 'Marondera',--}}
{{--                'address' => [--}}
{{--                    '@type' => 'PostalAddress',--}}
{{--                    'addressCountry' => 'ZW'--}}
{{--                ]--}}
{{--            ],--}}
{{--            [--}}
{{--                '@type' => 'City',--}}
{{--                'name' => 'Chinhoyi',--}}
{{--                'address' => [--}}
{{--                    '@type' => 'PostalAddress',--}}
{{--                    'addressCountry' => 'ZW'--}}
{{--                ]--}}
{{--            ]--}}
{{--        ],--}}
{{--        'description' => 'Payhouse Finance provides quick and affordable loans to Civil Servants, Government Pensioners, Salaried Individuals, SMEs, Informal Traders, and Selected Parastatal Employees in Zimbabwe.',--}}
{{--        'serviceType' => ['Personal Loans', 'Pension Loans', 'Civil Servant Loans', 'SME Financing', 'Microfinance'],--}}
{{--        'knowsAbout' => ['Personal Loans', 'Government Pension Loans', 'Civil Service Loans', 'Parastatal Employee Loans', 'SME Financing', 'Informal Trader Loans'],--}}
{{--        'sameAs' => [--}}
{{--            'https://www.facebook.com/payhousefinance',--}}
{{--            'https://twitter.com/payhousefinance',--}}
{{--            'https://www.linkedin.com/company/payhousefinance'--}}
{{--        ]--}}
{{--    ])--}}
{{--    </script>--}}

{{--    <script type="application/ld+json">--}}
{{--    @json([--}}
{{--        '@context' => 'https://schema.org',--}}
{{--        '@type' => 'Organization',--}}
{{--        'name' => 'Payhouse Finance',--}}
{{--        'url' => url('/'),--}}
{{--        'logo' => asset('assets/images/logo.png'),--}}
{{--        'contactPoint' => [--}}
{{--            '@type' => 'ContactPoint',--}}
{{--            'telephone' => '+263-XXX-XXXX',--}}
{{--            'contactType' => 'Customer Service',--}}
{{--            'areaServed' => 'ZW',--}}
{{--            'availableLanguage' => ['English', 'Shona', 'Ndebele']--}}
{{--        ],--}}
{{--        'address' => [--}}
{{--            '@type' => 'PostalAddress',--}}
{{--            'addressLocality' => 'Harare',--}}
{{--            'addressCountry' => 'ZW'--}}
{{--        ]--}}
{{--    ])--}}
{{--    </script>--}}

{{--    <script type="application/ld+json">--}}
{{--    @json([--}}
{{--        '@context' => 'https://schema.org',--}}
{{--        '@type' => 'WebSite',--}}
{{--        'name' => 'Payhouse Finance',--}}
{{--        'url' => url('/'),--}}
{{--        'potentialAction' => [--}}
{{--            '@type' => 'SearchAction',--}}
{{--            'target' => [--}}
{{--                '@type' => 'EntryPoint',--}}
{{--                'urlTemplate' => url('/') . '/search?q={search_term_string}'--}}
{{--            ],--}}
{{--            'query-input' => 'required name=search_term_string'--}}
{{--        ]--}}
{{--    ])--}}
{{--    </script>--}}

</head>
<body>
@include("partials.header")
@yield('content')
@include("partials.footer")
<!-- JS Files -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/fslightbox.min.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/scrollCue.min.js"></script>
<script src="assets/js/script.js"></script>


<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Toastr Flash Message -->
<script>
    @if (session('success'))
    toastr.success("{{ session('success') }}");
    @elseif (session('error'))
    toastr.error("{{ session('error') }}");
    @elseif (session('warning'))
    toastr.warning("{{ session('warning') }}");
    @elseif (session('info'))
    toastr.info("{{ session('info') }}");
    @endif
</script>


<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (window.location.pathname === "/") {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

</script>
</body>

</html>

