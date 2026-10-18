<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'TRAILFORM: Sewa Perlengkapan Ekspedisi dan Outdoor')</title>
    <meta name="description" content="@yield('meta_description', 'Layanan penyewaan alat camping dan perlengkapan outdoor berkualitas tinggi di TRAILFORM. Tenda, tas carrier, sleeping bag, dan peralatan ekspedisi terawat siap pakai.')">

    <!-- Google Fonts: Space Grotesk, Geist, JetBrains Mono (Alpenwild Tactical Editorial) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Local Bootstrap 5.3.3 CSS -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <!-- Alpenwild Tactical Editorial Design System -->
    <style>
        :root {
            --tf-bg-lowest: #0d0e11;
            --tf-bg-main: #121316;
            --tf-bg-card: #1b1b1f;
            --tf-bg-card-hover: #22242a;
            --tf-bg-surface: #1f1f23;
            --tf-accent: #d92d20; /* Tactical Crimson */
            --tf-accent-hover: #b42318;
            --tf-accent-subtle: rgba(217, 45, 32, 0.15);
            --tf-border: #22242a;
            --tf-border-subtle: #1a1c20;
            --tf-border-focus: #f5f5f7;
            --tf-text-primary: #f5f5f7;
            --tf-text-secondary: #a3a3a8; /* > 5.5:1 contrast against dark bg */
            --tf-text-muted: #8a8f9e;     /* > 4.6:1 contrast (WCAG AA compliant) */
            --tf-font-display: 'Space Grotesk', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --tf-font-body: 'Geist', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --tf-font-mono: 'JetBrains Mono', SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        }

        /* Base & Global Typography */
        body {
            font-family: var(--tf-font-body);
            background-color: var(--tf-bg-main);
            color: var(--tf-text-primary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            letter-spacing: -0.01em;
            -webkit-font-smoothing: antialiased;
        }

        main {
            flex: 1 0 auto;
        }

        /* Strict Sharp Alpine Geometry: roundedness 0 */
        *, *::before, *::after {
            border-radius: 0 !important;
        }

        /* Keyboard Accessibility: High-Contrast Focus Rings */
        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        select:focus-visible,
        textarea:focus-visible {
            outline: 2px solid var(--tf-border-focus) !important;
            outline-offset: 2px !important;
        }

        /* Display & Technical Typography Utility Classes */
        .tf-brand-text,
        .font-display {
            font-family: var(--tf-font-display);
            font-weight: 700;
            letter-spacing: -0.02em;
            text-transform: uppercase;
        }

        .font-mono-tech,
        .tf-mono {
            font-family: var(--tf-font-mono);
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        /* Technical Badges: Monospaced, 0px Radius, Precision Hairlines */
        .tf-badge-category {
            background-color: var(--tf-bg-lowest);
            color: var(--tf-text-primary);
            border: 1px solid var(--tf-border);
            font-family: var(--tf-font-mono);
            font-size: 0.6875rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.3rem 0.65rem;
            display: inline-flex;
            align-items: center;
        }

        .tf-badge-stock {
            background-color: var(--tf-bg-surface);
            color: var(--tf-text-secondary);
            border: 1px solid var(--tf-border);
            font-family: var(--tf-font-mono);
            font-size: 0.6875rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            padding: 0.25rem 0.55rem;
        }

        .tf-badge-tag {
            background-color: var(--tf-accent);
            color: #ffffff;
            font-family: var(--tf-font-mono);
            font-size: 0.6875rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.25rem 0.55rem;
        }

        /* Navbar: Precision Expedition Topbar */
        .tf-navbar {
            background-color: rgba(13, 14, 17, 0.95);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--tf-border);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .tf-navbar .nav-link {
            color: var(--tf-text-secondary);
            font-family: var(--tf-font-mono);
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.5rem 1rem;
            transition: color 0.15s ease;
        }

        .tf-navbar .nav-link:hover,
        .tf-navbar .nav-link.active {
            color: #ffffff;
        }

        /* Button System: Tactical Crimson & Utilitarian Hairlines */
        .btn-tf-primary {
            background-color: var(--tf-accent);
            border: 1px solid var(--tf-accent);
            color: #ffffff;
            font-family: var(--tf-font-mono);
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            padding: 0.75rem 1.6rem;
            transition: background-color 0.15s ease, border-color 0.15s ease;
        }

        .btn-tf-primary:hover,
        .btn-tf-primary:focus {
            background-color: var(--tf-accent-hover);
            border-color: var(--tf-accent-hover);
            color: #ffffff;
        }

        .btn-tf-outline {
            background-color: transparent;
            border: 1px solid var(--tf-border);
            color: var(--tf-text-primary);
            font-family: var(--tf-font-mono);
            font-size: 0.78rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.75rem 1.6rem;
            transition: border-color 0.15s ease, background-color 0.15s ease, color 0.15s ease;
        }

        .btn-tf-outline:hover {
            border-color: var(--tf-border-focus);
            background-color: rgba(245, 245, 247, 0.05);
            color: #ffffff;
        }

        /* Modular Planar Product Card */
        .tf-card {
            background-color: var(--tf-bg-card);
            border: 1px solid var(--tf-border);
            overflow: hidden;
            transition: border-color 0.2s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .tf-card:hover {
            border-color: var(--tf-border-focus);
        }

        .tf-card-img-wrapper {
            position: relative;
            aspect-ratio: 4/5;
            overflow: hidden;
            background-color: var(--tf-bg-lowest);
        }

        .tf-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease-out;
        }

        .tf-card:hover .tf-card-img {
            transform: scale(1.04);
        }

        .tf-card-body {
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            border-top: 1px solid var(--tf-border);
        }

        .tf-price {
            font-family: var(--tf-font-display);
            font-size: 1.35rem;
            font-weight: 700;
            letter-spacing: -0.01em;
            color: #ffffff;
        }

        .tf-price-period {
            font-family: var(--tf-font-mono);
            font-size: 0.7rem;
            font-weight: 500;
            color: var(--tf-text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        /* Footer: Clean Planar Architecture */
        .tf-footer {
            background-color: var(--tf-bg-lowest);
            border-top: 1px solid var(--tf-border);
            padding: 4rem 0 2.5rem;
            margin-top: 4rem;
            color: var(--tf-text-secondary);
            font-size: 0.88rem;
        }

        .tf-footer a {
            color: var(--tf-text-secondary);
            text-decoration: none;
            transition: color 0.15s ease;
        }

        .tf-footer a:hover {
            color: #ffffff;
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar Component -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('partials.footer')

    <!-- Local Bootstrap 5.3.3 JS Bundle -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>
</html>
