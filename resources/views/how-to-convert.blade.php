@php
$displayFrom = ucfirst(str_replace('-', ' ', $from));
$displayTo = ucfirst(str_replace('-', ' ', $to));
$formattedFactor = rtrim(rtrim(number_format($conversionFactor, 10), '0'), '.');

$popularGuides = [
['from' => 'kilometers', 'to' => 'meters', 'label' => 'Kilometers to Meters'],
['from' => 'miles', 'to' => 'kilometers', 'label' => 'Miles to Kilometers'],
['from' => 'inches', 'to' => 'centimeters', 'label' => 'Inches to Centimeters'],
['from' => 'feet', 'to' => 'meters', 'label' => 'Feet to Meters'],
['from' => 'yards', 'to' => 'meters', 'label' => 'Yards to Meters'],
['from' => 'centimeters', 'to' => 'inches', 'label' => 'Centimeters to Inches'],
['from' => 'millimeters', 'to' => 'centimeters', 'label' => 'Millimeters to Centimeters'],
['from' => 'light-years', 'to' => 'kilometers', 'label' => 'Light Years to Kilometers'],
];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Convert {{ $displayFrom }} to {{ $displayTo }} - Toolnized</title>

    <link rel="shortcut icon" href="{{ asset('img/toolnized-logo.png') }}">
    <meta name="robots" content="index,follow">

    <link rel="canonical" href="https://length.toolnized.com/how-to-convert-{{ $from }}-to-{{ $to }}">

    <meta name="description"
        content="Learn how to convert {{ $from }} to {{ $to }} easily. Discover the formula, steps, and use our quick calculator for accurate length conversions.">
    <meta name="keywords"
        content="how to convert {{ $from }} to {{ $to }}, {{ $from }} to {{ $to }}, length conversion, metric conversion, imperial conversion">
    <meta og property="og:title" content="How to Convert {{ $displayFrom }} to {{ $displayTo }} - Toolnized">
    <meta og property="og:description"
        content="Learn how to convert {{ $from }} to {{ $to }} with accurate mathematical formulas and quick calculator tools.">
    <meta og property="og:image" content="{{ asset('img/toolnized-logo.png') }}">
    <meta og property="og:url" content="https://length.toolnized.com/how-to-convert-{{ $from }}-to-{{ $to }}">

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
              "name": "{{ $displayFrom }} to {{ $displayTo }}",
              "item": "https://length.toolnized.com/how-to-convert-{{ $from }}-to-{{ $to }}"
            }
          ]
        }
    </script>

    <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "WebApplication",
          "name": "How to Convert {{ $displayFrom }} to {{ $displayTo }}",
          "url": "https://length.toolnized.com/how-to-convert-{{ $from }}-to-{{ $to }}",
          "description": "Learn how to convert {{ $from }} to {{ $to }} easily. Discover the formula, steps, and use our quick calculator for accurate length conversions.",
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
            <span class="trail-current">{{ $displayFrom }} to {{ $displayTo }}</span>
        </nav>

        <div class="tlz-ad-slot"></div>

        <div class="tlz-split-layout">

            <article class="tlz-article">

                <div id="guide-container"
                    style="margin-bottom: var(--space-xl); padding-bottom: var(--space-lg); border-bottom: 1px solid var(--border-color);">
                    <h1>How to convert {{ strtolower($displayFrom) }} to {{ strtolower($displayTo) }}?</h1>
                    <p>{{ $displayFrom }} and {{ $displayTo }} are measuring units used to measure lengths.</p>
                    <h3 style="color: var(--soft-teal); margin-bottom: var(--space-md);">To convert from {{
                        strtolower($displayFrom) }} to {{ strtolower($displayTo) }}, multiply the value in {{
                        strtolower($displayFrom) }} by {{ $formattedFactor }}.</h3>

                    <div class="tlz-formula-box">{{ $displayTo }} = {{ $displayFrom }} &times; {{ $formattedFactor }}
                    </div>

                    <h3>How to use the {{ strtolower($displayFrom) }} to {{ strtolower($displayTo) }} conversion
                        calculator</h3>
                    <ol class="tlz-list-answers" style="padding-left: 24px; list-style-type: decimal;">
                        <li>Enter the number of {{ strtolower($displayFrom) }} in the calculator input box.</li>
                        <li>Click on the <strong>"Calculate"</strong> button to process the conversion.</li>
                        <li>You can adjust the <strong>"From"</strong> or <strong>"To"</strong> dropdowns for different
                            measurements.</li>
                    </ol>

                    <table class="tlz-data-table">
                        <thead>
                            <tr>
                                <th>{{ $displayFrom }}</th>
                                <th>Conversion to {{ $displayTo }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach([1, 5, 10, 50, 100] as $val)
                            <tr>
                                <td><a href="/{{ $from }}/{{ $to }}/{{ $val }}">{{ $val }} {{ $from }}</a></td>
                                <td>{{ $val }} {{ $from }} = {{ rtrim(rtrim(number_format($val * $conversionFactor, 10),
                                    '0'), '.') }} {{ $to }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </article>

            <aside class="tlz-sidebar">
                <div style="position: sticky; top: 100px;">

                    <div class="tlz-calculator-surface sidebar-calc">
                        <h4 class="sidebar-widget-title">Quick Converter</h4>
                        <form action="{{ route('length.calculate') }}" method="post" class="calc-engine">
                            @csrf
                            <div class="input-node">
                                <label for="calc-amount">Amount</label>
                                <input type="number" id="calc-amount" name="number" step="any" value="1"
                                    autocomplete="off" required>
                            </div>

                            <div class="input-node">
                                <label for="calc-source">From</label>
                                <div class="select-wrapper">
                                    <select id="calc-source" name="from">
                                        <option value="meters" {{ $from=='meters' ? 'selected' : '' }}>Meters</option>
                                        <option value="kilometers" {{ $from=='kilometers' ? 'selected' : '' }}>
                                            Kilometers
                                        </option>
                                        <option value="decimeters" {{ $from=='decimeters' ? 'selected' : '' }}>
                                            Decimeters
                                        </option>
                                        <option value="centimeters" {{ $from=='centimeters' ? 'selected' : '' }}>
                                            Centimeters
                                        </option>
                                        <option value="millimeters" {{ $from=='millimeters' ? 'selected' : '' }}>
                                            Millimeters
                                        </option>
                                        <option value="micrometers" {{ $from=='micrometers' ? 'selected' : '' }}>
                                            Micrometers
                                        </option>
                                        <option value="nanometers" {{ $from=='nanometers' ? 'selected' : '' }}>
                                            Nanometers
                                        </option>
                                        <option value="miles" {{ $from=='miles' ? 'selected' : '' }}>Miles</option>
                                        <option value="yards" {{ $from=='yards' ? 'selected' : '' }}>Yards</option>
                                        <option value="feet" {{ $from=='feet' ? 'selected' : '' }}>Feet</option>
                                        <option value="inches" {{ $from=='inches' ? 'selected' : '' }}>Inches</option>
                                        <option value="light-years" {{ $from=='light-years' ? 'selected' : '' }}>Light
                                            year
                                        </option>
                                        <option value="astronomical-unit" {{ $from=='astronomical-unit' ? 'selected'
                                            : '' }}>Astronomical unit</option>
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
                                        <option value="centimeters" {{ $to=='centimeters' ? 'selected' : '' }}>
                                            Centimeters
                                        </option>
                                        <option value="millimeters" {{ $to=='millimeters' ? 'selected' : '' }}>
                                            Millimeters
                                        </option>
                                        <option value="micrometers" {{ $to=='micrometers' ? 'selected' : '' }}>
                                            Micrometers
                                        </option>
                                        <option value="nanometers" {{ $to=='nanometers' ? 'selected' : '' }}>Nanometers
                                        </option>
                                        <option value="miles" {{ $to=='miles' ? 'selected' : '' }}>Miles</option>
                                        <option value="yards" {{ $to=='yards' ? 'selected' : '' }}>Yards</option>
                                        <option value="feet" {{ $to=='feet' ? 'selected' : '' }}>Feet</option>
                                        <option value="inches" {{ $to=='inches' ? 'selected' : '' }}>Inches</option>
                                        <option value="light-years" {{ $to=='light-years' ? 'selected' : '' }}>Light
                                            year
                                        </option>
                                        <option value="astronomical-unit" {{ $to=='astronomical-unit' ? 'selected' : ''
                                            }}>
                                            Astronomical unit</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="tlz-trigger-btn">Calculate</button>
                        </form>
                    </div>

                    <div class="tlz-ad-slot" style="margin-bottom: var(--space-md);"></div>

                    <div class="tlz-related-widget">
                        <h4 class="sidebar-widget-title">Other Length Converters</h4>
                        <ul class="tlz-related-list">
                            @foreach($popularGuides as $guide)
                            @if($from !== $guide['from'] || $to !== $guide['to'])
                            <li>
                                <a href="/how-to-convert-{{ $guide['from'] }}-to-{{ $guide['to'] }}">
                                    {{ $guide['label'] }}
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>

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