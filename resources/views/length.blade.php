<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert {{ $amount }} {{ $from }} to {{ $to }} - Toolnized</title>

    <link rel="shortcut icon" href="{{ asset('img/toolnized-logo.png') }}">
    <meta name="robots" content="index,follow">

    <link rel="canonical" href="{{ $canonicalUrl }}">

    <meta name="description"
        content="Convert {{ $amount }} {{ $from }} to {{ $to }}. A comprehensive list of length units and their conversions.">
    <meta name="keywords"
        content="{{ $from }}, {{ $to }}, length conversion, {{ $amount }} {{ $from }} to {{ $to }}, metric conversion, imperial conversion">
    <meta og property="og:title" content="Convert {{ $amount }} {{ $from }} to {{ $to }} - Toolnized">
    <meta og property="og:description"
        content="Convert {{ $amount }} {{ $from }} to {{ $to }}. A comprehensive list of length units and their conversions.">
    <meta og property="og:image" content="{{ asset('img/length-conversion.png') }}">

    <meta og property="og:url" content="{{ $canonicalUrl }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script type="application/ld+json">
        {
      "@@context": "https://schema.org",
      "@@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://toolnized.com/"
        },
        {
          "@@type": "ListItem",
          "position": 2,
          "name": "Length Conversion",
          "item": "https://length.toolnized.com/"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "{{ $amount }} {{ ucfirst(str_replace('-', ' ', $from)) }} to {{ ucfirst(str_replace('-', ' ', $to)) }}",
          "item": "{{ $canonicalUrl }}"
        }
      ]
    }
    </script>

    <script type="application/ld+json">
        {
      "@@context": "https://schema.org",
      "@@type": "WebApplication",
      "name": "Convert {{ $amount }} {{ ucfirst(str_replace('-', ' ', $from)) }} to {{ ucfirst(str_replace('-', ' ', $to)) }}",
      "url": "{{ $canonicalUrl }}",
      "description": "Convert {{ $amount }} {{ $from }} to {{ $to }}. A comprehensive list of length units and their conversions.",
      "applicationCategory": "UtilitiesApplication",
      "operatingSystem": "All",
      "author": {
        "@@type": "Organization",
        "name": "Toolnized",
        "url": "https://toolnized.com/"
      }
    }
    </script>
</head>

<body class="tlz-ecosystem">

    @include('partials.header')

    <main class="tlz-core-interface tlz-bounds">

        <nav class="tlz-trail" aria-label="breadcrumb">
            <a href="https://toolnized.com/">Home</a>
            <span class="trail-divider">/</span>
            <a href="/">Length Conversion</a>
            <span class="trail-divider">/</span>
            <span class="trail-current">{{ $amount }} {{ $from }} to {{ $to }}</span>
        </nav>

        <div class="tlz-ad-slot"></div>

        <div class="tlz-split-layout">

            <article class="tlz-article">
                <h1>{{ $amount }} {{ ucfirst(str_replace('-', ' ', $from)) }} to {{ ucfirst(str_replace('-', ' ', $to))
                    }}</h1>

                <p>How many {{ str_replace('-', ' ', $to) }} are in {{ $amount }} {{ str_replace('-', ' ', $from) }}? {{
                    $amount }} {{ str_replace('-', ' ', $from) }} is equal to <strong>{{
                        rtrim(rtrim(number_format($result, 10), '0'), '.') }} {{ str_replace('-', ' ', $to) }}</strong>.
                </p>
                <p>This is a clear and accurate way to convert {{ str_replace('-', ' ', $from) }} to {{ str_replace('-',
                    ' ', $to) }} using a standard metric conversion factor.</p>

                <ul class="tlz-list-answers">
                    <li>{{ $amount }} {{ rtrim($from, 's') }} = {{ rtrim(rtrim(number_format($result, 10), '0'), '.') }}
                        {{ rtrim($to, 's') }}</li>
                    <li><a href="/{{ $to }}/{{ $from }}/{{ $amount }}">How many {{ str_replace('-', ' ', $from) }} in {{
                            $amount }} {{ str_replace('-', ' ', $to) }}?</a> — {{ $amount }} {{ rtrim($to, 's') }} = {{
                        rtrim(rtrim(number_format($amount * $reverseFactor, 10), '0'), '.') }} {{ rtrim($from, 's') }}
                    </li>
                </ul>

                <div class="tlz-ad-slot"></div>

                <h2>How to Convert {{ $amount }} {{ ucfirst(str_replace('-', ' ', $from)) }} to {{
                    ucfirst(str_replace('-', ' ', $to)) }}</h2>
                <p>To convert {{ $amount }} {{ str_replace('-', ' ', $from) }} into {{ str_replace('-', ' ', $to) }},
                    use the standard metric conversion relationship.</p>
                <p>We know that:<br><strong>1 {{ rtrim($from, 's') }} = {{ rtrim(rtrim(number_format($conversionFactor,
                        10), '0'), '.') }} {{ str_replace('-', ' ', $to) }}</strong></p>
                <p>To find the value in {{ str_replace('-', ' ', $to) }}, multiply the number of {{ str_replace('-', '
                    ', $from) }} by {{ rtrim(rtrim(number_format($conversionFactor, 10), '0'), '.') }}:</p>

                <div class="tlz-formula-box">
                    {{ $amount }} {{ rtrim($from, 's') }} = {{ $amount }} &times; {{
                    rtrim(rtrim(number_format($conversionFactor, 10), '0'), '.') }} {{ rtrim($to, 's') }}<br>
                    {{ $amount }} {{ rtrim($from, 's') }} = {{ rtrim(rtrim(number_format($result, 10), '0'), '.') }} {{
                    rtrim($to, 's') }}
                </div>

                <h3>Therefore, {{ $amount }} {{ str_replace('-', ' ', $from) }} is equal to {{
                    rtrim(rtrim(number_format($result, 10), '0'), '.') }} {{ str_replace('-', ' ', $to) }}.</h3>

                <table class="tlz-data-table">
                    <thead>
                        <tr>
                            <th>{{ ucfirst(str_replace('-', ' ', $from)) }}</th>
                            <th>Conversion of {{ ucfirst($from) }} to {{ ucfirst($to) }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/{{ $from }}/{{ $to }}/{{ $amount * 0.99 }}">{{ $amount * 0.99 }} {{ $from
                                    }}</a></td>
                            <td>{{ $amount * 0.99 }} {{ $from }} = {{ rtrim(rtrim(number_format(($amount * 0.99) *
                                $conversionFactor, 10), '0'), '.') }} {{ $to }}</td>
                        </tr>
                        <tr>
                            <td><a href="/{{ $from }}/{{ $to }}/{{ $amount * 0.9 }}">{{ $amount * 0.9 }} {{ $from }}</a>
                            </td>
                            <td>{{ $amount * 0.9 }} {{ $from }} = {{ rtrim(rtrim(number_format(($amount * 0.9) *
                                $conversionFactor, 10), '0'), '.') }} {{ $to }}</td>
                        </tr>
                        <tr>
                            <td><a href="/{{ $from }}/{{ $to }}/{{ $amount }}">{{ $amount }} {{ $from }}</a></td>
                            <td>{{ $amount }} {{ $from }} = {{ rtrim(rtrim(number_format($result, 10), '0'), '.') }} {{
                                $to }}</td>
                        </tr>
                        <tr>
                            <td><a href="/{{ $from }}/{{ $to }}/{{ $amount * 2 }}">{{ $amount * 2 }} {{ $from }}</a>
                            </td>
                            <td>{{ $amount * 2 }} {{ $from }} = {{ rtrim(rtrim(number_format(($amount * 2) *
                                $conversionFactor, 10), '0'), '.') }} {{ $to }}</td>
                        </tr>
                    </tbody>
                </table>
            </article>

            <aside class="tlz-sidebar">

                <div class="tlz-calculator-surface sidebar-calc">
                    <h4 class="sidebar-widget-title">Quick Converter</h4>
                    <form action="{{ route('length.calculate') }}" method="post" class="calc-engine">
                        @csrf
                        <div class="input-node">
                            <label for="calc-amount">Amount</label>
                            <input type="number" id="calc-amount" name="number" step="any" value="{{ $amount }}"
                                autocomplete="off" required>
                        </div>

                        <div class="input-node">
                            <label for="calc-source">From</label>
                            <div class="select-wrapper">
                                <select id="calc-source" name="from">
                                    <option value="meters" {{ $from=='meters' ? 'selected' : '' }}>Meters</option>
                                    <option value="kilometers" {{ $from=='kilometers' ? 'selected' : '' }}>Kilometers
                                    </option>
                                    <option value="decimeters" {{ $from=='decimeters' ? 'selected' : '' }}>Decimeters
                                    </option>
                                    <option value="centimeters" {{ $from=='centimeters' ? 'selected' : '' }}>Centimeters
                                    </option>
                                    <option value="millimeters" {{ $from=='millimeters' ? 'selected' : '' }}>Millimeters
                                    </option>
                                    <option value="micrometers" {{ $from=='micrometers' ? 'selected' : '' }}>Micrometers
                                    </option>
                                    <option value="nanometers" {{ $from=='nanometers' ? 'selected' : '' }}>Nanometers
                                    </option>
                                    <option value="miles" {{ $from=='miles' ? 'selected' : '' }}>Miles</option>
                                    <option value="yards" {{ $from=='yards' ? 'selected' : '' }}>Yards</option>
                                    <option value="feet" {{ $from=='feet' ? 'selected' : '' }}>Feet</option>
                                    <option value="inches" {{ $from=='inches' ? 'selected' : '' }}>Inches</option>
                                    <option value="light-years" {{ $from=='light-years' ? 'selected' : '' }}>Light year
                                    </option>
                                    <option value="astronomical-unit" {{ $from=='astronomical-unit' ? 'selected' : ''
                                        }}>Astronomical unit</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-node">
                            <label for="calc-target">To</label>
                            <div class="select-wrapper">
                                <select id="calc-target" name="to">
                                    <option value="meters" {{ $to=='meters' ? 'selected' : '' }}>Meters</option>
                                    <option value="kilometers" {{ $to=='kilometers' ? 'selected' : '' }}>Kilometers
                                    </option>
                                    <option value="decimeters" {{ $to=='decimeters' ? 'selected' : '' }}>Decimeters
                                    </option>
                                    <option value="centimeters" {{ $to=='centimeters' ? 'selected' : '' }}>Centimeters
                                    </option>
                                    <option value="millimeters" {{ $to=='millimeters' ? 'selected' : '' }}>Millimeters
                                    </option>
                                    <option value="micrometers" {{ $to=='micrometers' ? 'selected' : '' }}>Micrometers
                                    </option>
                                    <option value="nanometers" {{ $to=='nanometers' ? 'selected' : '' }}>Nanometers
                                    </option>
                                    <option value="miles" {{ $to=='miles' ? 'selected' : '' }}>Miles</option>
                                    <option value="yards" {{ $to=='yards' ? 'selected' : '' }}>Yards</option>
                                    <option value="feet" {{ $to=='feet' ? 'selected' : '' }}>Feet</option>
                                    <option value="inches" {{ $to=='inches' ? 'selected' : '' }}>Inches</option>
                                    <option value="light-years" {{ $to=='light-years' ? 'selected' : '' }}>Light year
                                    </option>
                                    <option value="astronomical-unit" {{ $to=='astronomical-unit' ? 'selected' : '' }}>
                                        Astronomical unit</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="tlz-trigger-btn">Calculate</button>
                    </form>
                </div>

                <div class="tlz-ad-slot"></div>

                <div class="tlz-related-widget">
                    <h4 class="sidebar-widget-title">Related Conversions</h4>
                    <ul class="tlz-related-list">
                        <li><a href="/{{ $from }}/meters/{{ $amount }}">{{ $amount }} {{ $from }} in meters</a></li>
                        <li><a href="/{{ $from }}/kilometers/{{ $amount }}">{{ $amount }} {{ $from }} in kilometers</a>
                        </li>
                        <li><a href="/{{ $from }}/millimeters/{{ $amount }}">{{ $amount }} {{ $from }} in
                                millimeters</a></li>
                        <li><a href="/{{ $from }}/yards/{{ $amount }}">{{ $amount }} {{ $from }} in yards</a></li>
                        <li><a href="/{{ $from }}/feet/{{ $amount }}">{{ $amount }} {{ $from }} in feet</a></li>
                        <li><a href="/{{ $from }}/inches/{{ $amount }}">{{ $amount }} {{ $from }} in inches</a></li>
                    </ul>
                </div>

            </aside>
        </div>
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