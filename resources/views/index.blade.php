<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Units Conversion | Toolnized</title>

    <link rel="shortcut icon" href="{{ asset('img/toolnized-logo.png') }}">
    <meta name="robots" content="index,follow">
    <meta name="description"
        content="Convert meters, kilometers, miles, feet, inches, yards, centimeters, millimeters, dm, nm, µm, light-years & AU. Fast online length converter.">
    <meta name="keywords" content="length conversion, meters, kilometers, miles, feet, inches, online converter">
    <meta name="author" content="Toolnized">
    <link rel="canonical" href="https://length.toolnized.com/">
    <meta og property="og:title" content="Length Units Conversion | Toolnized">
    <meta og property="og:description"
        content="Convert meters, kilometers, miles, feet, inches, yards, centimeters, millimeters, dm, nm, µm, light-years & AU. Fast online length converter.">
    <meta og property="og:image" content="{{ asset('img/toolnized-logo.png') }}">
    <meta og property="og:url" content="https://length.toolnized.com/">

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
        }
      ]
    }
    </script>

    <script type="application/ld+json">
        {
      "@@context": "https://schema.org",
      "@@type": "WebApplication",
      "name": "Length Units Conversion Tool",
      "url": "https://length.toolnized.com/",
      "description": "Convert meters, kilometers, miles, feet, inches, yards, centimeters, millimeters, dm, nm, µm, light-years & AU. Fast online length converter.",
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
            <span class="trail-current">Length Conversion</span>
        </nav>

        <section class="tlz-command-module">
            <div class="module-intro">
                <h1 class="module-title">Length Units Conversion</h1>
                <p class="module-subtitle">A comprehensive list of length units and their conversions.</p>
            </div>

            <div class="tlz-calculator-surface">
                <form action="{{ route('length.calculate') }}" method="post" class="calc-engine">
                    @csrf
                    <div class="input-node">
                        <label for="calc-amount">Amount</label>
                        <input type="number" id="calc-amount" name="number" step="any" value="1" autocomplete="off"
                            required>
                    </div>

                    <div class="input-node">
                        <label for="calc-source">From</label>
                        <div class="select-wrapper">
                            <select id="calc-source" name="from">
                                <option value="meters">Meters</option>
                                <option value="kilometers">Kilometers</option>
                                <option value="decimeters">Decimeters</option>
                                <option value="centimeters" selected>Centimeters</option>
                                <option value="millimeters">Millimeters</option>
                                <option value="micrometers">Micrometers</option>
                                <option value="nanometers">Nanometers</option>
                                <option value="miles">Miles</option>
                                <option value="yards">Yards</option>
                                <option value="feet">Feet</option>
                                <option value="inches">Inches</option>
                                <option value="light-years">Light Years</option>
                                <option value="astronomical-unit">Astronomical Unit</option>
                            </select>
                        </div>
                    </div>

                    <div class="node-divider">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>

                    <div class="input-node">
                        <label for="calc-target">To</label>
                        <div class="select-wrapper">
                            <select id="calc-target" name="to">
                                <option value="meters">Meters</option>
                                <option value="kilometers">Kilometers</option>
                                <option value="decimeters">Decimeters</option>
                                <option value="centimeters">Centimeters</option>
                                <option value="millimeters">Millimeters</option>
                                <option value="micrometers">Micrometers</option>
                                <option value="nanometers">Nanometers</option>
                                <option value="miles">Miles</option>
                                <option value="yards">Yards</option>
                                <option value="feet">Feet</option>
                                <option value="inches" selected>Inches</option>
                                <option value="light-years">Light Years</option>
                                <option value="astronomical-unit">Astronomical Unit</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="tlz-trigger-btn">Calculate</button>
                </form>
            </div>
        </section>

        <section class="tlz-data-landscape">
            <h2 class="section-heading">Base Unit: 1 Meter [m]</h2>

            <div class="metrics-grid">
                <article class="metric-card">
                    <div class="metric-header">
                        <span class="metric-name">Kilometer</span>
                        <span class="metric-symbol">km</span>
                    </div>
                    <div class="metric-value">0.001</div>
                    <div class="metric-actions">
                        <a href="/kilometers/meters/1" class="action-pill">km → m</a>
                        <a href="/meters/kilometers/1" class="action-pill">m → km</a>
                    </div>
                </article>

                <article class="metric-card">
                    <div class="metric-header">
                        <span class="metric-name">Centimeter</span>
                        <span class="metric-symbol">cm</span>
                    </div>
                    <div class="metric-value">100</div>
                    <div class="metric-actions">
                        <a href="/centimeters/meters/1" class="action-pill">cm → m</a>
                        <a href="/meters/centimeters/1" class="action-pill">m → cm</a>
                    </div>
                </article>

                <article class="metric-card">
                    <div class="metric-header">
                        <span class="metric-name">Millimeter</span>
                        <span class="metric-symbol">mm</span>
                    </div>
                    <div class="metric-value">1,000</div>
                    <div class="metric-actions">
                        <a href="/millimeters/meters/1" class="action-pill">mm → m</a>
                        <a href="/meters/millimeters/1" class="action-pill">m → mm</a>
                    </div>
                </article>

                <article class="metric-card">
                    <div class="metric-header">
                        <span class="metric-name">Mile</span>
                        <span class="metric-symbol">mi</span>
                    </div>
                    <div class="metric-value">0.000621</div>
                    <div class="metric-actions">
                        <a href="/miles/meters/1" class="action-pill">mi → m</a>
                        <a href="/meters/miles/1" class="action-pill">m → mi</a>
                    </div>
                </article>

                <article class="metric-card">
                    <div class="metric-header">
                        <span class="metric-name">Yard</span>
                        <span class="metric-symbol">yd</span>
                    </div>
                    <div class="metric-value">1.09361</div>
                    <div class="metric-actions">
                        <a href="/yards/meters/1" class="action-pill">yd → m</a>
                        <a href="/meters/yards/1" class="action-pill">m → yd</a>
                    </div>
                </article>

                <article class="metric-card">
                    <div class="metric-header">
                        <span class="metric-name">Foot</span>
                        <span class="metric-symbol">ft</span>
                    </div>
                    <div class="metric-value">3.28084</div>
                    <div class="metric-actions">
                        <a href="/feet/meters/1" class="action-pill">ft → m</a>
                        <a href="/meters/feet/1" class="action-pill">m → ft</a>
                    </div>
                </article>

                <article class="metric-card">
                    <div class="metric-header">
                        <span class="metric-name">Inch</span>
                        <span class="metric-symbol">in</span>
                    </div>
                    <div class="metric-value">39.3701</div>
                    <div class="metric-actions">
                        <a href="/inches/meters/1" class="action-pill">in → m</a>
                        <a href="/meters/inches/1" class="action-pill">m → in</a>
                    </div>
                </article>

                <article class="metric-card highlight-card">
                    <div class="metric-header">
                        <span class="metric-name">Light Year</span>
                        <span class="metric-symbol">ly</span>
                    </div>
                    <div class="metric-value">1.057e-16</div>
                    <div class="metric-actions">
                        <a href="/light-years/meters/1" class="action-pill">ly → m</a>
                        <a href="/meters/light-years/1" class="action-pill">m → ly</a>
                    </div>
                </article>
            </div>
        </section>

        <style>
            .grid-4-cols {
                display: grid;
                gap: 12px;
                grid-template-columns: 1fr;
            }

            @media (min-width: 600px) {
                .grid-4-cols {
                    grid-template-columns: repeat(2, 1fr);
                }

            }

            @media (min-width: 992px) {
                .grid-4-cols {
                    grid-template-columns: repeat(4, 1fr);
                }
            }
        </style>

        <section class="tlz-toolkit-expansion"
            style="border-top: none; padding-top: var(--space-lg); padding-bottom: var(--space-lg);">
            <h3 class="toolkit-title">Popular Conversion Guides</h3>
            <div class="grid-4-cols">
                <a href="/how-to-convert-kilometers-to-meters" class="tool-node">
                    <div class="node-data">
                        <strong>Kilometers to Meters</strong>
                        <span>Learn how to convert km to m</span>
                    </div>
                </a>
                <a href="/how-to-convert-miles-to-kilometers" class="tool-node">
                    <div class="node-data">
                        <strong>Miles to Kilometers</strong>
                        <span>Learn how to convert mi to km</span>
                    </div>
                </a>
                <a href="/how-to-convert-inches-to-centimeters" class="tool-node">
                    <div class="node-data">
                        <strong>Inches to Centimeters</strong>
                        <span>Learn how to convert in to cm</span>
                    </div>
                </a>
                <a href="/how-to-convert-feet-to-meters" class="tool-node">
                    <div class="node-data">
                        <strong>Feet to Meters</strong>
                        <span>Learn how to convert ft to m</span>
                    </div>
                </a>
                <a href="/how-to-convert-yards-to-meters" class="tool-node">
                    <div class="node-data">
                        <strong>Yards to Meters</strong>
                        <span>Learn how to convert yd to m</span>
                    </div>
                </a>
                <a href="/how-to-convert-centimeters-to-inches" class="tool-node">
                    <div class="node-data">
                        <strong>Centimeters to Inches</strong>
                        <span>Learn how to convert cm to in</span>
                    </div>
                </a>
                <a href="/how-to-convert-millimeters-to-centimeters" class="tool-node">
                    <div class="node-data">
                        <strong>Millimeters to Centimeters</strong>
                        <span>Learn how to convert mm to cm</span>
                    </div>
                </a>
                <a href="/how-to-convert-light-years-to-kilometers" class="tool-node">
                    <div class="node-data">
                        <strong>Light Years to Kilometers</strong>
                        <span>Learn how to convert ly to km</span>
                    </div>
                </a>
            </div>
        </section>

        <section class="tlz-toolkit-expansion">
            <h3 class="toolkit-title">Online Versatile Web Tools</h3>
            <div class="toolkit-grid">
                <a href="https://toolnized.com/cv-generator/v1/" class="tool-node">
                    <div class="node-data">
                        <strong>CV Generator</strong>
                        <span>Build your professional CV in minutes</span>
                    </div>
                </a>
                <a href="https://toolnized.com/seo-checker/v1/" class="tool-node">
                    <div class="node-data">
                        <strong>SEO Checker</strong>
                        <span>Boost your website’s performance</span>
                    </div>
                </a>
                <a href="https://toolnized.com/video-converter/v1/" class="tool-node">
                    <div class="node-data">
                        <strong>Video Converter</strong>
                        <span>Transform formats like MP4, AVI, MKV</span>
                    </div>
                </a>
                <a href="https://toolnized.com/document-converter/v1/" class="tool-node">
                    <div class="node-data">
                        <strong>Document Converter</strong>
                        <span>Change files between PDF, DOCX, TXT</span>
                    </div>
                </a>
            </div>
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