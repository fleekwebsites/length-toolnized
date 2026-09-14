<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results for "{{ $query }}" | Toolnized</title>

    <link rel="shortcut icon" href="{{ asset('img/toolnized-logo.png') }}">

    <meta name="robots" content="noindex,follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="tlz-ecosystem">

    @include('partials.header')

    <main class="tlz-core-interface tlz-bounds">

        <nav class="tlz-trail" aria-label="breadcrumb">
            <a href="https://toolnized.com/">Home</a>
            <span class="trail-divider">/</span>
            <span class="trail-current">Search Results</span>
        </nav>

        <section class="tlz-article" style="margin-top: var(--space-md);">
            {{-- <h1 style="margin-bottom: var(--space-lg);">Search Results for "{{ $query }}"</h1> --}}

            <script async src="https://cse.google.com/cse.js?cx=46fb04f9578394dfb"></script>

            <div class="gcse-searchresults-only"></div>
        </section>

    </main>

    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const primaryNav = document.querySelector('.tlz-primary-nav');
            menuToggle.addEventListener('click', function() {
                primaryNav.classList.toggle('is-open');
            });
        });
    </script>
</body>

</html>