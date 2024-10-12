<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

           /* Basic styling for header, logo, and navbar */


.logo img {
    width: 70px;
    height: 70px;
}



.auth-buttons {
    display: flex;
    gap: 10px;
}

.btn-login,
.btn-register {
    display: inline-block;
    padding: 10px 20px;
    width: auto; /* Automatic width on larger screens */
}

/* Media Query for Small Devices */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar-list {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    .google-ads {
        display: block; /* Ensure Google Ads is visible */
        width: 100%; /* Allow it to take full width */
        margin-top: 10px; /* Space above the Google Ads */
        text-align: left; /* Align text properly */
    }

    .auth-buttons {
        flex-direction: column; /* Change buttons to vertical layout */
        width: 100%; /* Full width for buttons */
        margin-top: 10px; /* Space above buttons */
    }

    .btn-login,
    .btn-register {
        width: 100%; /* Full width for buttons */
        padding: 8px 10px; /* Adjust padding */
        margin-bottom: 10px; /* Space between buttons */
    }

    .btn-register {
        margin-bottom: 0; /* Remove bottom margin from the last button */
    }
}

/* Media Query for Extra Small Devices (e.g. Mobile Phones) */
@media (max-width: 480px) {
    .auth-buttons {
        flex-direction: column; /* Ensure buttons remain vertical */
        justify-content: flex-start; /* Align to the start */
        width: 100%;
    }

    .logo img {
        width: 80px; /* Adjust the logo size on small screens */
        height: 80px;
    }

    .google-ads {
        display: block; /* Keep Google Ads visible */
        width: 100%; /* Full width for proper display */
        font-size: 14px; /* Reduce text size for better fit */
        text-align: left;
    }

    .btn-login,
    .btn-register {
        width: 100%; /* Full width for buttons */
        padding: 6px 8px; /* Further reduce padding */
        font-size: 14px; /* Reduce font size for buttons */
    }
}



        </style>
    </head>
    <body class="antialiased">
        <header class="header" data-header>
            <div class="container">
                <a href="#" class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" width="100px" height="100px" alt="Cryptex logo">
                </a>

                <nav class="navbar">
                    <ul class="navbar-list ">
                        <li class="navbar-item">
                            <div class="google-ads">
                                <p>Your Google Ads Here</p>
                            </div>
                        </li>
                    </ul>
                </nav>

                @if (Route::has('login'))
                    <div class="auth-buttons">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline btn-register  btn-login">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline btn-register  btn-register">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </header>


                    <!-- Additional content can go here -->
                    <main>
                        <article>

                          <!--
                            - #HERO
                          -->

                          <section class="section hero" aria-label="hero">
                            <div class="container">

                              <div class="hero-content">

                                <h1 class="h1 hero-title">Buy & Sell Digital Assets In The CrypTicker</h1>

                                <p class="hero-text">
                                  Coin CrypTicker is the easiest, safest, and fastest way to buy & sell crypto asset exchange.
                                </p>

                                <a href="{{ route('register') }}" class="btn btn-primary">Get started now</a>


                              </div>

                              <figure class="hero-banner">
                                <img src="./assets/images/hero-banner.png" width="570" height="448" alt="hero banner" class="w-100">
                              </figure>

                            </div>
                          </section>


                          <!--
                            - #MARKET
                          -->

                          <section class="section market" aria-label="market update" >
                            <div class="container">

                              <div class="title-wrapper">
                                <h2 class="h2 section-title">Market Update</h2>

                                <a href="#" class="btn-link">See All Coins</a>
                              </div>

                              <div class="market-tab">

                                <ul class="tab-nav">

                                  <li>
                                    <button class="tab-btn active">View All</button>
                                  </li>

                                  <li>
                                    <button class="tab-btn">Metaverse</button>
                                  </li>

                                  <li>
                                    <button class="tab-btn">Entertainment</button>
                                  </li>

                                  <li>
                                    <button class="tab-btn">Energy</button>
                                  </li>

                                  <li>
                                    <button class="tab-btn">NFT</button>
                                  </li>

                                  <li>
                                    <button class="tab-btn">Gaming</button>
                                  </li>

                                  <li>
                                    <button class="tab-btn">Music</button>
                                  </li>

                                </ul>

                                <table class="market-table">

                                  <thead class="table-head">

                                    <tr class="table-row table-title">

                                      <th class="table-heading"></th>

                                      <th class="table-heading" scope="col">#</th>

                                      <th class="table-heading" scope="col">Name</th>

                                      <th class="table-heading" scope="col">Last Price</th>

                                      <th class="table-heading" scope="col">24h %</th>

                                      <th class="table-heading" scope="col">Market Cap</th>

                                      <th class="table-heading" scope="col">Last 7 Days</th>

                                      <th class="table-heading"></th>

                                    </tr>

                                  </thead>

                                  <tbody class="table-body">

                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">1</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update green">+1.45%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                    </tr>

                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">2</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update red">-5.12%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                    </tr>

                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">3</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update green">+1.45%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                    </tr>

                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">4</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update red">-3.75%%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                    </tr>

                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">5</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update green">+1.45%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                    </tr>

                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">6</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update red">-2.22%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                    </tr>



                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">7</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update green">+0.8%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                      <tbody class="table-body">

                                        <tr class="table-row">

                                          <td class="table-data">
                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                            </button>
                                          </td>

                                          <th class="table-data rank" scope="row">8</th>

                                          <td class="table-data">
                                            <div class="wrapper">
                                              <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                              <h3>
                                                <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                              </h3>
                                            </div>
                                          </td>

                                          <td class="table-data last-price">$56,623.54</td>

                                          <td class="table-data last-update green">+1.45%</td>

                                          <td class="table-data market-cap">$880,423,640,582</td>

                                          <td class="table-data">
                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                          </td>

                                          <td class="table-data">
                                            <button class="btn btn-outline">Trade</button>
                                          </td>

                                        </tr>

                                        <tr class="table-row">

                                          <td class="table-data">
                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                            </button>
                                          </td>

                                          <th class="table-data rank" scope="row">9</th>

                                          <td class="table-data">
                                            <div class="wrapper">
                                              <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                              <h3>
                                                <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                              </h3>
                                            </div>
                                          </td>

                                          <td class="table-data last-price">$56,623.54</td>

                                          <td class="table-data last-update red">-5.12%</td>

                                          <td class="table-data market-cap">$880,423,640,582</td>

                                          <td class="table-data">
                                            <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                          </td>

                                          <td class="table-data">
                                            <button class="btn btn-outline">Trade</button>
                                          </td>

                                        </tr>

                                        <tr class="table-row">

                                          <td class="table-data">
                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                            </button>
                                          </td>

                                          <th class="table-data rank" scope="row">10</th>

                                          <td class="table-data">
                                            <div class="wrapper">
                                              <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                              <h3>
                                                <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                              </h3>
                                            </div>
                                          </td>

                                          <td class="table-data last-price">$56,623.54</td>

                                          <td class="table-data last-update green">+1.45%</td>

                                          <td class="table-data market-cap">$880,423,640,582</td>

                                          <td class="table-data">
                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                          </td>

                                          <td class="table-data">
                                            <button class="btn btn-outline">Trade</button>
                                          </td>

                                        </tr>

                                        <tr class="table-row">

                                          <td class="table-data">
                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                            </button>
                                          </td>

                                          <th class="table-data rank" scope="row">11</th>

                                          <td class="table-data">
                                            <div class="wrapper">
                                              <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                              <h3>
                                                <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                              </h3>
                                            </div>
                                          </td>

                                          <td class="table-data last-price">$56,623.54</td>

                                          <td class="table-data last-update red">-3.75%%</td>

                                          <td class="table-data market-cap">$880,423,640,582</td>

                                          <td class="table-data">
                                            <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                          </td>

                                          <td class="table-data">
                                            <button class="btn btn-outline">Trade</button>
                                          </td>

                                        </tr>

                                        <tr class="table-row">

                                          <td class="table-data">
                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                            </button>
                                          </td>

                                          <th class="table-data rank" scope="row">12</th>

                                          <td class="table-data">
                                            <div class="wrapper">
                                              <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                              <h3>
                                                <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                              </h3>
                                            </div>
                                          </td>

                                          <td class="table-data last-price">$56,623.54</td>

                                          <td class="table-data last-update green">+1.45%</td>

                                          <td class="table-data market-cap">$880,423,640,582</td>

                                          <td class="table-data">
                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                          </td>

                                          <td class="table-data">
                                            <button class="btn btn-outline">Trade</button>
                                          </td>

                                        </tr>

                                        <tr class="table-row">

                                          <td class="table-data">
                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                            </button>
                                          </td>

                                          <th class="table-data rank" scope="row">13</th>

                                          <td class="table-data">
                                            <div class="wrapper">
                                              <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                              <h3>
                                                <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                              </h3>
                                            </div>
                                          </td>

                                          <td class="table-data last-price">$56,623.54</td>

                                          <td class="table-data last-update red">-2.22%</td>

                                          <td class="table-data market-cap">$880,423,640,582</td>

                                          <td class="table-data">
                                            <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                          </td>

                                          <td class="table-data">
                                            <button class="btn btn-outline">Trade</button>
                                          </td>

                                        </tr>



                                        <tr class="table-row">

                                          <td class="table-data">
                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                            </button>
                                          </td>

                                          <th class="table-data rank" scope="row">14</th>

                                          <td class="table-data">
                                            <div class="wrapper">
                                              <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                              <h3>
                                                <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                              </h3>
                                            </div>
                                          </td>

                                          <td class="table-data last-price">$56,623.54</td>

                                          <td class="table-data last-update green">+0.8%</td>

                                          <td class="table-data market-cap">$880,423,640,582</td>

                                          <td class="table-data">
                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                          </td>

                                          <td class="table-data">
                                            <button class="btn btn-outline">Trade</button>
                                          </td>

                                          <tbody class="table-body">

                                            <tr class="table-row">

                                              <td class="table-data">
                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                </button>
                                              </td>

                                              <th class="table-data rank" scope="row">15</th>

                                              <td class="table-data">
                                                <div class="wrapper">
                                                  <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                                  <h3>
                                                    <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                                  </h3>
                                                </div>
                                              </td>

                                              <td class="table-data last-price">$56,623.54</td>

                                              <td class="table-data last-update green">+1.45%</td>

                                              <td class="table-data market-cap">$880,423,640,582</td>

                                              <td class="table-data">
                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                              </td>

                                              <td class="table-data">
                                                <button class="btn btn-outline">Trade</button>
                                              </td>

                                            </tr>

                                            <tr class="table-row">

                                              <td class="table-data">
                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                </button>
                                              </td>

                                              <th class="table-data rank" scope="row">16</th>

                                              <td class="table-data">
                                                <div class="wrapper">
                                                  <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                                  <h3>
                                                    <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                                  </h3>
                                                </div>
                                              </td>

                                              <td class="table-data last-price">$56,623.54</td>

                                              <td class="table-data last-update red">-5.12%</td>

                                              <td class="table-data market-cap">$880,423,640,582</td>

                                              <td class="table-data">
                                                <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                              </td>

                                              <td class="table-data">
                                                <button class="btn btn-outline">Trade</button>
                                              </td>

                                            </tr>

                                            <tr class="table-row">

                                              <td class="table-data">
                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                </button>
                                              </td>

                                              <th class="table-data rank" scope="row">17</th>

                                              <td class="table-data">
                                                <div class="wrapper">
                                                  <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                                  <h3>
                                                    <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                                  </h3>
                                                </div>
                                              </td>

                                              <td class="table-data last-price">$56,623.54</td>

                                              <td class="table-data last-update green">+1.45%</td>

                                              <td class="table-data market-cap">$880,423,640,582</td>

                                              <td class="table-data">
                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                              </td>

                                              <td class="table-data">
                                                <button class="btn btn-outline">Trade</button>
                                              </td>

                                            </tr>

                                            <tr class="table-row">

                                              <td class="table-data">
                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                </button>
                                              </td>

                                              <th class="table-data rank" scope="row">18</th>

                                              <td class="table-data">
                                                <div class="wrapper">
                                                  <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                                  <h3>
                                                    <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                                  </h3>
                                                </div>
                                              </td>

                                              <td class="table-data last-price">$56,623.54</td>

                                              <td class="table-data last-update red">-3.75%%</td>

                                              <td class="table-data market-cap">$880,423,640,582</td>

                                              <td class="table-data">
                                                <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                              </td>

                                              <td class="table-data">
                                                <button class="btn btn-outline">Trade</button>
                                              </td>

                                            </tr>

                                            <tr class="table-row">

                                              <td class="table-data">
                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                </button>
                                              </td>

                                              <th class="table-data rank" scope="row">19</th>

                                              <td class="table-data">
                                                <div class="wrapper">
                                                  <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                                  <h3>
                                                    <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                                  </h3>
                                                </div>
                                              </td>

                                              <td class="table-data last-price">$56,623.54</td>

                                              <td class="table-data last-update green">+1.45%</td>

                                              <td class="table-data market-cap">$880,423,640,582</td>

                                              <td class="table-data">
                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                              </td>

                                              <td class="table-data">
                                                <button class="btn btn-outline">Trade</button>
                                              </td>

                                            </tr>

                                            <tr class="table-row">

                                              <td class="table-data">
                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                </button>
                                              </td>

                                              <th class="table-data rank" scope="row">20</th>

                                              <td class="table-data">
                                                <div class="wrapper">
                                                  <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                                  <h3>
                                                    <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                                  </h3>
                                                </div>
                                              </td>

                                              <td class="table-data last-price">$56,623.54</td>

                                              <td class="table-data last-update red">-2.22%</td>

                                              <td class="table-data market-cap">$880,423,640,582</td>

                                              <td class="table-data">
                                                <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                              </td>

                                              <td class="table-data">
                                                <button class="btn btn-outline">Trade</button>
                                              </td>

                                            </tr>



                                            <tr class="table-row">

                                              <td class="table-data">
                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                </button>
                                              </td>

                                              <th class="table-data rank" scope="row">21</th>

                                              <td class="table-data">
                                                <div class="wrapper">
                                                  <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                                  <h3>
                                                    <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                                  </h3>
                                                </div>
                                              </td>

                                              <td class="table-data last-price">$56,623.54</td>

                                              <td class="table-data last-update green">+0.8%</td>

                                              <td class="table-data market-cap">$880,423,640,582</td>

                                              <td class="table-data">
                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                              </td>

                                              <td class="table-data">
                                                <button class="btn btn-outline">Trade</button>
                                              </td>

                                              <tbody class="table-body">

                                                <tr class="table-row">

                                                  <td class="table-data">
                                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                    </button>
                                                  </td>

                                                  <th class="table-data rank" scope="row">22</th>

                                                  <td class="table-data">
                                                    <div class="wrapper">
                                                      <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                                      <h3>
                                                        <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                                      </h3>
                                                    </div>
                                                  </td>

                                                  <td class="table-data last-price">$56,623.54</td>

                                                  <td class="table-data last-update green">+1.45%</td>

                                                  <td class="table-data market-cap">$880,423,640,582</td>

                                                  <td class="table-data">
                                                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                  </td>

                                                  <td class="table-data">
                                                    <button class="btn btn-outline">Trade</button>
                                                  </td>

                                                </tr>

                                                <tr class="table-row">

                                                  <td class="table-data">
                                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                    </button>
                                                  </td>

                                                  <th class="table-data rank" scope="row">23</th>

                                                  <td class="table-data">
                                                    <div class="wrapper">
                                                      <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                                      <h3>
                                                        <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                                      </h3>
                                                    </div>
                                                  </td>

                                                  <td class="table-data last-price">$56,623.54</td>

                                                  <td class="table-data last-update red">-5.12%</td>

                                                  <td class="table-data market-cap">$880,423,640,582</td>

                                                  <td class="table-data">
                                                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                  </td>

                                                  <td class="table-data">
                                                    <button class="btn btn-outline">Trade</button>
                                                  </td>

                                                </tr>

                                                <tr class="table-row">

                                                  <td class="table-data">
                                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                    </button>
                                                  </td>

                                                  <th class="table-data rank" scope="row">24</th>

                                                  <td class="table-data">
                                                    <div class="wrapper">
                                                      <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                                      <h3>
                                                        <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                                      </h3>
                                                    </div>
                                                  </td>

                                                  <td class="table-data last-price">$56,623.54</td>

                                                  <td class="table-data last-update green">+1.45%</td>

                                                  <td class="table-data market-cap">$880,423,640,582</td>

                                                  <td class="table-data">
                                                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                  </td>

                                                  <td class="table-data">
                                                    <button class="btn btn-outline">Trade</button>
                                                  </td>

                                                </tr>

                                                <tr class="table-row">

                                                  <td class="table-data">
                                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                    </button>
                                                  </td>

                                                  <th class="table-data rank" scope="row">25</th>

                                                  <td class="table-data">
                                                    <div class="wrapper">
                                                      <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                                      <h3>
                                                        <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                                      </h3>
                                                    </div>
                                                  </td>

                                                  <td class="table-data last-price">$56,623.54</td>

                                                  <td class="table-data last-update red">-3.75%%</td>

                                                  <td class="table-data market-cap">$880,423,640,582</td>

                                                  <td class="table-data">
                                                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                  </td>

                                                  <td class="table-data">
                                                    <button class="btn btn-outline">Trade</button>
                                                  </td>

                                                </tr>

                                                <tr class="table-row">

                                                  <td class="table-data">
                                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                    </button>
                                                  </td>

                                                  <th class="table-data rank" scope="row">26</th>

                                                  <td class="table-data">
                                                    <div class="wrapper">
                                                      <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                                      <h3>
                                                        <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                                      </h3>
                                                    </div>
                                                  </td>

                                                  <td class="table-data last-price">$56,623.54</td>

                                                  <td class="table-data last-update green">+1.45%</td>

                                                  <td class="table-data market-cap">$880,423,640,582</td>

                                                  <td class="table-data">
                                                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                  </td>

                                                  <td class="table-data">
                                                    <button class="btn btn-outline">Trade</button>
                                                  </td>

                                                </tr>

                                                <tr class="table-row">

                                                  <td class="table-data">
                                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                    </button>
                                                  </td>

                                                  <th class="table-data rank" scope="row">27</th>

                                                  <td class="table-data">
                                                    <div class="wrapper">
                                                      <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                                      <h3>
                                                        <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                                      </h3>
                                                    </div>
                                                  </td>

                                                  <td class="table-data last-price">$56,623.54</td>

                                                  <td class="table-data last-update red">-2.22%</td>

                                                  <td class="table-data market-cap">$880,423,640,582</td>

                                                  <td class="table-data">
                                                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                  </td>

                                                  <td class="table-data">
                                                    <button class="btn btn-outline">Trade</button>
                                                  </td>

                                                </tr>



                                                <tr class="table-row">

                                                  <td class="table-data">
                                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                    </button>
                                                  </td>

                                                  <th class="table-data rank" scope="row">28</th>

                                                  <td class="table-data">
                                                    <div class="wrapper">
                                                      <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                                      <h3>
                                                        <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                                      </h3>
                                                    </div>
                                                  </td>

                                                  <td class="table-data last-price">$56,623.54</td>

                                                  <td class="table-data last-update green">+0.8%</td>

                                                  <td class="table-data market-cap">$880,423,640,582</td>

                                                  <td class="table-data">
                                                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                  </td>

                                                  <td class="table-data">
                                                    <button class="btn btn-outline">Trade</button>
                                                  </td>

                                                  <tbody class="table-body">

                                                    <tr class="table-row">

                                                      <td class="table-data">
                                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                        </button>
                                                      </td>

                                                      <th class="table-data rank" scope="row">29</th>

                                                      <td class="table-data">
                                                        <div class="wrapper">
                                                          <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                                          <h3>
                                                            <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                                          </h3>
                                                        </div>
                                                      </td>

                                                      <td class="table-data last-price">$56,623.54</td>

                                                      <td class="table-data last-update green">+1.45%</td>

                                                      <td class="table-data market-cap">$880,423,640,582</td>

                                                      <td class="table-data">
                                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                      </td>

                                                      <td class="table-data">
                                                        <button class="btn btn-outline">Trade</button>
                                                      </td>

                                                    </tr>

                                                    <tr class="table-row">

                                                      <td class="table-data">
                                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                        </button>
                                                      </td>

                                                      <th class="table-data rank" scope="row">30</th>

                                                      <td class="table-data">
                                                        <div class="wrapper">
                                                          <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                                          <h3>
                                                            <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                                          </h3>
                                                        </div>
                                                      </td>

                                                      <td class="table-data last-price">$56,623.54</td>

                                                      <td class="table-data last-update red">-5.12%</td>

                                                      <td class="table-data market-cap">$880,423,640,582</td>

                                                      <td class="table-data">
                                                        <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                      </td>

                                                      <td class="table-data">
                                                        <button class="btn btn-outline">Trade</button>
                                                      </td>

                                                    </tr>

                                                    <tr class="table-row">

                                                      <td class="table-data">
                                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                        </button>
                                                      </td>

                                                      <th class="table-data rank" scope="row">31</th>

                                                      <td class="table-data">
                                                        <div class="wrapper">
                                                          <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                                          <h3>
                                                            <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                                          </h3>
                                                        </div>
                                                      </td>

                                                      <td class="table-data last-price">$56,623.54</td>

                                                      <td class="table-data last-update green">+1.45%</td>

                                                      <td class="table-data market-cap">$880,423,640,582</td>

                                                      <td class="table-data">
                                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                      </td>

                                                      <td class="table-data">
                                                        <button class="btn btn-outline">Trade</button>
                                                      </td>

                                                    </tr>

                                                    <tr class="table-row">

                                                      <td class="table-data">
                                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                        </button>
                                                      </td>

                                                      <th class="table-data rank" scope="row">32</th>

                                                      <td class="table-data">
                                                        <div class="wrapper">
                                                          <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                                          <h3>
                                                            <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                                          </h3>
                                                        </div>
                                                      </td>

                                                      <td class="table-data last-price">$56,623.54</td>

                                                      <td class="table-data last-update red">-3.75%%</td>

                                                      <td class="table-data market-cap">$880,423,640,582</td>

                                                      <td class="table-data">
                                                        <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                      </td>

                                                      <td class="table-data">
                                                        <button class="btn btn-outline">Trade</button>
                                                      </td>

                                                    </tr>

                                                    <tr class="table-row">

                                                      <td class="table-data">
                                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                        </button>
                                                      </td>

                                                      <th class="table-data rank" scope="row">33</th>

                                                      <td class="table-data">
                                                        <div class="wrapper">
                                                          <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                                          <h3>
                                                            <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                                          </h3>
                                                        </div>
                                                      </td>

                                                      <td class="table-data last-price">$56,623.54</td>

                                                      <td class="table-data last-update green">+1.45%</td>

                                                      <td class="table-data market-cap">$880,423,640,582</td>

                                                      <td class="table-data">
                                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                      </td>

                                                      <td class="table-data">
                                                        <button class="btn btn-outline">Trade</button>
                                                      </td>

                                                    </tr>

                                                    <tr class="table-row">

                                                      <td class="table-data">
                                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                        </button>
                                                      </td>

                                                      <th class="table-data rank" scope="row">34</th>

                                                      <td class="table-data">
                                                        <div class="wrapper">
                                                          <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                                          <h3>
                                                            <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                                          </h3>
                                                        </div>
                                                      </td>

                                                      <td class="table-data last-price">$56,623.54</td>

                                                      <td class="table-data last-update red">-2.22%</td>

                                                      <td class="table-data market-cap">$880,423,640,582</td>

                                                      <td class="table-data">
                                                        <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                      </td>

                                                      <td class="table-data">
                                                        <button class="btn btn-outline">Trade</button>
                                                      </td>

                                                    </tr>



                                                    <tr class="table-row">

                                                      <td class="table-data">
                                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                        </button>
                                                      </td>

                                                      <th class="table-data rank" scope="row">35</th>

                                                      <td class="table-data">
                                                        <div class="wrapper">
                                                          <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                                          <h3>
                                                            <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                                          </h3>
                                                        </div>
                                                      </td>

                                                      <td class="table-data last-price">$56,623.54</td>

                                                      <td class="table-data last-update green">+0.8%</td>

                                                      <td class="table-data market-cap">$880,423,640,582</td>

                                                      <td class="table-data">
                                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                      </td>

                                                      <td class="table-data">
                                                        <button class="btn btn-outline">Trade</button>
                                                      </td>

                                                      <tbody class="table-body">

                                                        <tr class="table-row">

                                                          <td class="table-data">
                                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                            </button>
                                                          </td>

                                                          <th class="table-data rank" scope="row">36</th>

                                                          <td class="table-data">
                                                            <div class="wrapper">
                                                              <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                                              <h3>
                                                                <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                                              </h3>
                                                            </div>
                                                          </td>

                                                          <td class="table-data last-price">$56,623.54</td>

                                                          <td class="table-data last-update green">+1.45%</td>

                                                          <td class="table-data market-cap">$880,423,640,582</td>

                                                          <td class="table-data">
                                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                          </td>

                                                          <td class="table-data">
                                                            <button class="btn btn-outline">Trade</button>
                                                          </td>

                                                        </tr>

                                                        <tr class="table-row">

                                                          <td class="table-data">
                                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                            </button>
                                                          </td>

                                                          <th class="table-data rank" scope="row">37</th>

                                                          <td class="table-data">
                                                            <div class="wrapper">
                                                              <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                                              <h3>
                                                                <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                                              </h3>
                                                            </div>
                                                          </td>

                                                          <td class="table-data last-price">$56,623.54</td>

                                                          <td class="table-data last-update red">-5.12%</td>

                                                          <td class="table-data market-cap">$880,423,640,582</td>

                                                          <td class="table-data">
                                                            <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                          </td>

                                                          <td class="table-data">
                                                            <button class="btn btn-outline">Trade</button>
                                                          </td>

                                                        </tr>

                                                        <tr class="table-row">

                                                          <td class="table-data">
                                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                            </button>
                                                          </td>

                                                          <th class="table-data rank" scope="row">38</th>

                                                          <td class="table-data">
                                                            <div class="wrapper">
                                                              <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                                              <h3>
                                                                <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                                              </h3>
                                                            </div>
                                                          </td>

                                                          <td class="table-data last-price">$56,623.54</td>

                                                          <td class="table-data last-update green">+1.45%</td>

                                                          <td class="table-data market-cap">$880,423,640,582</td>

                                                          <td class="table-data">
                                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                          </td>

                                                          <td class="table-data">
                                                            <button class="btn btn-outline">Trade</button>
                                                          </td>

                                                        </tr>

                                                        <tr class="table-row">

                                                          <td class="table-data">
                                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                            </button>
                                                          </td>

                                                          <th class="table-data rank" scope="row">39</th>

                                                          <td class="table-data">
                                                            <div class="wrapper">
                                                              <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                                              <h3>
                                                                <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                                              </h3>
                                                            </div>
                                                          </td>

                                                          <td class="table-data last-price">$56,623.54</td>

                                                          <td class="table-data last-update red">-3.75%%</td>

                                                          <td class="table-data market-cap">$880,423,640,582</td>

                                                          <td class="table-data">
                                                            <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                          </td>

                                                          <td class="table-data">
                                                            <button class="btn btn-outline">Trade</button>
                                                          </td>

                                                        </tr>

                                                        <tr class="table-row">

                                                          <td class="table-data">
                                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                            </button>
                                                          </td>

                                                          <th class="table-data rank" scope="row">40</th>

                                                          <td class="table-data">
                                                            <div class="wrapper">
                                                              <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                                              <h3>
                                                                <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                                              </h3>
                                                            </div>
                                                          </td>

                                                          <td class="table-data last-price">$56,623.54</td>

                                                          <td class="table-data last-update green">+1.45%</td>

                                                          <td class="table-data market-cap">$880,423,640,582</td>

                                                          <td class="table-data">
                                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                          </td>

                                                          <td class="table-data">
                                                            <button class="btn btn-outline">Trade</button>
                                                          </td>

                                                        </tr>

                                                        <tr class="table-row">

                                                          <td class="table-data">
                                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                            </button>
                                                          </td>

                                                          <th class="table-data rank" scope="row">41</th>

                                                          <td class="table-data">
                                                            <div class="wrapper">
                                                              <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                                              <h3>
                                                                <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                                              </h3>
                                                            </div>
                                                          </td>

                                                          <td class="table-data last-price">$56,623.54</td>

                                                          <td class="table-data last-update red">-2.22%</td>

                                                          <td class="table-data market-cap">$880,423,640,582</td>

                                                          <td class="table-data">
                                                            <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                          </td>

                                                          <td class="table-data">
                                                            <button class="btn btn-outline">Trade</button>
                                                          </td>

                                                        </tr>



                                                        <tr class="table-row">

                                                          <td class="table-data">
                                                            <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                              <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                              <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                            </button>
                                                          </td>

                                                          <th class="table-data rank" scope="row">42</th>

                                                          <td class="table-data">
                                                            <div class="wrapper">
                                                              <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                                              <h3>
                                                                <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                                              </h3>
                                                            </div>
                                                          </td>

                                                          <td class="table-data last-price">$56,623.54</td>

                                                          <td class="table-data last-update green">+0.8%</td>

                                                          <td class="table-data market-cap">$880,423,640,582</td>

                                                          <td class="table-data">
                                                            <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                          </td>

                                                          <td class="table-data">
                                                            <button class="btn btn-outline">Trade</button>
                                                          </td>

                                                          <tbody class="table-body">

                                                            <tr class="table-row">

                                                              <td class="table-data">
                                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                                </button>
                                                              </td>

                                                              <th class="table-data rank" scope="row">43</th>

                                                              <td class="table-data">
                                                                <div class="wrapper">
                                                                  <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                                                  <h3>
                                                                    <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                                                  </h3>
                                                                </div>
                                                              </td>

                                                              <td class="table-data last-price">$56,623.54</td>

                                                              <td class="table-data last-update green">+1.45%</td>

                                                              <td class="table-data market-cap">$880,423,640,582</td>

                                                              <td class="table-data">
                                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                              </td>

                                                              <td class="table-data">
                                                                <button class="btn btn-outline">Trade</button>
                                                              </td>

                                                            </tr>

                                                            <tr class="table-row">

                                                              <td class="table-data">
                                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                                </button>
                                                              </td>

                                                              <th class="table-data rank" scope="row">44</th>

                                                              <td class="table-data">
                                                                <div class="wrapper">
                                                                  <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                                                  <h3>
                                                                    <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                                                  </h3>
                                                                </div>
                                                              </td>

                                                              <td class="table-data last-price">$56,623.54</td>

                                                              <td class="table-data last-update red">-5.12%</td>

                                                              <td class="table-data market-cap">$880,423,640,582</td>

                                                              <td class="table-data">
                                                                <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                              </td>

                                                              <td class="table-data">
                                                                <button class="btn btn-outline">Trade</button>
                                                              </td>

                                                            </tr>

                                                            <tr class="table-row">

                                                              <td class="table-data">
                                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                                </button>
                                                              </td>

                                                              <th class="table-data rank" scope="row">45</th>

                                                              <td class="table-data">
                                                                <div class="wrapper">
                                                                  <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                                                  <h3>
                                                                    <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                                                  </h3>
                                                                </div>
                                                              </td>

                                                              <td class="table-data last-price">$56,623.54</td>

                                                              <td class="table-data last-update green">+1.45%</td>

                                                              <td class="table-data market-cap">$880,423,640,582</td>

                                                              <td class="table-data">
                                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                              </td>

                                                              <td class="table-data">
                                                                <button class="btn btn-outline">Trade</button>
                                                              </td>

                                                            </tr>

                                                            <tr class="table-row">

                                                              <td class="table-data">
                                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                                </button>
                                                              </td>

                                                              <th class="table-data rank" scope="row">46</th>

                                                              <td class="table-data">
                                                                <div class="wrapper">
                                                                  <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                                                  <h3>
                                                                    <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                                                  </h3>
                                                                </div>
                                                              </td>

                                                              <td class="table-data last-price">$56,623.54</td>

                                                              <td class="table-data last-update red">-3.75%%</td>

                                                              <td class="table-data market-cap">$880,423,640,582</td>

                                                              <td class="table-data">
                                                                <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                              </td>

                                                              <td class="table-data">
                                                                <button class="btn btn-outline">Trade</button>
                                                              </td>

                                                            </tr>

                                                            <tr class="table-row">

                                                              <td class="table-data">
                                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                                </button>
                                                              </td>

                                                              <th class="table-data rank" scope="row">47</th>

                                                              <td class="table-data">
                                                                <div class="wrapper">
                                                                  <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                                                  <h3>
                                                                    <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                                                  </h3>
                                                                </div>
                                                              </td>

                                                              <td class="table-data last-price">$56,623.54</td>

                                                              <td class="table-data last-update green">+1.45%</td>

                                                              <td class="table-data market-cap">$880,423,640,582</td>

                                                              <td class="table-data">
                                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                              </td>

                                                              <td class="table-data">
                                                                <button class="btn btn-outline">Trade</button>
                                                              </td>

                                                            </tr>

                                                            <tr class="table-row">

                                                              <td class="table-data">
                                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                                </button>
                                                              </td>

                                                              <th class="table-data rank" scope="row">48</th>

                                                              <td class="table-data">
                                                                <div class="wrapper">
                                                                  <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                                                  <h3>
                                                                    <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                                                  </h3>
                                                                </div>
                                                              </td>

                                                              <td class="table-data last-price">$56,623.54</td>

                                                              <td class="table-data last-update red">-2.22%</td>

                                                              <td class="table-data market-cap">$880,423,640,582</td>

                                                              <td class="table-data">
                                                                <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                                              </td>

                                                              <td class="table-data">
                                                                <button class="btn btn-outline">Trade</button>
                                                              </td>

                                                            </tr>



                                                            <tr class="table-row">

                                                              <td class="table-data">
                                                                <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                                                  <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                                                  <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                                                </button>
                                                              </td>

                                                              <th class="table-data rank" scope="row">49</th>

                                                              <td class="table-data">
                                                                <div class="wrapper">
                                                                  <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                                                  <h3>
                                                                    <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                                                  </h3>
                                                                </div>
                                                              </td>

                                                              <td class="table-data last-price">$56,623.54</td>

                                                              <td class="table-data last-update green">+0.8%</td>

                                                              <td class="table-data market-cap">$880,423,640,582</td>

                                                              <td class="table-data">
                                                                <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                                              </td>

                                                              <td class="table-data">
                                                                <button class="btn btn-outline">Trade</button>
                                                              </td>



                                    <tr class="table-row">

                                      <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                          <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                          <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                      </td>

                                      <th class="table-data rank" scope="row">50</th>

                                      <td class="table-data">
                                        <div class="wrapper">
                                          <img src="./assets/images/coin-8.svg" width="20" height="20" alt="Avalanche logo" class="img">

                                          <h3>
                                            <a href="#" class="coin-name">Avalanche <span class="span">AVAX</span></a>
                                          </h3>
                                        </div>
                                      </td>

                                      <td class="table-data last-price">$56,623.54</td>

                                      <td class="table-data last-update green">+1.41%</td>

                                      <td class="table-data market-cap">$880,423,640,582</td>

                                      <td class="table-data">
                                        <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                      </td>

                                      <td class="table-data">
                                        <button class="btn btn-outline">Trade</button>
                                      </td>

                                    </tr>

                                  </tbody>

                                </table>



                              </div>

                            </div>
                          </section>






                          <!--
                            - #ABOUT
                          -->

                          <section class="section about" aria-label="about">
                            <div class="container">

                              <figure class="about-banner">
                                <img src="./assets/images/about-banner.png" width="748" height="436" loading="lazy" alt="about banner"
                                  class="w-100">
                              </figure>

                              <div class="about-content">

                                <h2 class="h2 section-title">What Is CrypTicker</h2>

                                <p class="section-text">
                                  Experience a variety of trading on Bitcost. You can use various types of coin transactions such as Spot
                                  Trade, Futures
                                  Trade, P2P, Staking, Mining, and margin.
                                </p>

                                <ul class="section-list">

                                  <li class="section-item">
                                    <div class="title-wrapper">
                                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                                      <h3 class="h3 list-title">View real-time cryptocurrency prices</h3>
                                    </div>

                                    <p class="item-text">
                                      Experience a variety of trading on Bitcost. You can use various types of coin transactions such as
                                      Spot Trade, Futures
                                      Trade, P2P, Staking, Mining, and margin.
                                    </p>
                                  </li>

                                  <li class="section-item">
                                    <div class="title-wrapper">
                                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                                      <h3 class="h3 list-title">Buy and sell BTC, ETH, XRP, OKB, Etc...</h3>
                                    </div>

                                    <p class="item-text">
                                      Experience a variety of trading on Bitcost. You can use various types of coin transactions such as
                                      Spot Trade, Futures
                                      Trade, P2P, Staking, Mining, and margin.
                                    </p>
                                  </li>

                                </ul>

                                <a href="#" class="btn btn-primary">Explore More</a>

                              </div>

                            </div>
                          </section>





                          <!--
                            - #APP
                          -->

                          <section class="section app" aria-label="app" >
                            <div class="container">

                              <div class="app-content">

                                <h2 class="h2 section-title">Free Your Money & Invest With Confident</h2>

                                <p class="section-text">
                                  With CrypTicker Trade, you can be sure your trading skills are matched
                                </p>

                                <ul class="section-list">

                                  <li class="section-item">
                                    <div class="title-wrapper">
                                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                                      <h3 class="h3 item-title">Buy, Sell, And Trade On The Go</h3>
                                    </div>

                                    <p class="item-text">
                                      Manage Your Holdings From Your Mobile Decive
                                    </p>
                                  </li>

                                  <li class="section-item">
                                    <div class="title-wrapper">
                                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                                      <h3 class="h3 item-title">Take Control Of Your Wealth</h3>
                                    </div>

                                    <p class="item-text">
                                      Rest Assured You (And Only You) Have Access To Your Funds
                                    </p>
                                  </li>

                                </ul>

                                <div class="app-wrapper">
                                  <a href="#">
                                    <img src="./assets/images/googleplay.png" width="135" height="40" loading="lazy"
                                      alt="get it on google play">
                                  </a>

                                  <a href="#">
                                    <img src="./assets/images/appstore.png" width="120" height="40" loading="lazy"
                                      alt="download on the app store">
                                  </a>
                                </div>

                              </div>

                              <div class="app-banner">
                                <img src="./assets/images/app-banner.png" width="618" height="526" loading="lazy" alt="app banner"
                                  class="w-100">

                                <span class="span">Scan To Download</span>
                              </div>

                            </div>
                          </section>

                        </article>
                      </main>





                      <!--
                        - #FOOTER
                      -->

                      <footer class="footer">

                        <div class="footer-top" >
                          <div class="container">

                            <div class="footer-brand">

                              <a href="#" class="logo">
                                <img src="./assets/images/logo.png" width="100" height="100" alt="Cryptex logo">
                              </a>

                              <h2 class="footer-title">Let's talk! 🤙</h2>

                              <a href="tel:+123456789101" class="footer-contact-link">+12 345 678 9101</a>

                              <a href="mailto:hello.crypticker@gmail.com" class="footer-contact-link">hello.crypticker@gmail.com</a>

                              <address class="footer-contact-link">
                                Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi 96522
                              </address>

                            </div>

                            <ul class="footer-list">

                              <li>
                                <p class="footer-list-title">Products</p>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Spot</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Inverse Perpetual</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">USDT Perpetual</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Exchange</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Launchpad</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Binance Pay</a>
                              </li>

                            </ul>

                            <ul class="footer-list">

                              <li>
                                <p class="footer-list-title">Services</p>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Buy Crypto</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Markets</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Tranding Fee</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Affiliate Program</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Referral Program</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">API</a>
                              </li>

                            </ul>

                            <ul class="footer-list">

                              <li>
                                <p class="footer-list-title">Support</p>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Bybit Learn</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Help Center</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">User Feedback</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Submit a request</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">API Documentation</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Trading Rules</a>
                              </li>

                            </ul>

                            <ul class="footer-list">

                              <li>
                                <p class="footer-list-title">About Us</p>
                              </li>

                              <li>
                                <a href="#" class="footer-link">About Bybit</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Authenticity Check</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Careers</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Business Contacts</a>
                              </li>

                              <li>
                                <a href="#" class="footer-link">Blog</a>
                              </li>

                            </ul>

                          </div>
                        </div>

                        <div class="footer-bottom">
                          <div class="container">

                            <p class="copyright">
                              &copy; 2024 CrypTicker All Rights Reserved by <a href="#" class="copyright-link">Muhammad Bilal</a>
                            </p>

                            <ul class="social-list">

                              <li>
                                <a href="#" class="social-link">
                                  <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                              </li>

                              <li>
                                <a href="#" class="social-link">
                                  <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                              </li>

                              <li>
                                <a href="#" class="social-link">
                                  <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                              </li>

                              <li>
                                <a href="#" class="social-link">
                                  <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                              </li>

                            </ul>

                          </div>
                        </div>

                      </footer>

                      <!--
                        - custom js link
                      -->
                      <script src="{{ asset('assets/js/welcome.js') }}" defer></script>


                      <!--
                        - ionicon link
                      -->
                      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </body>
</html>
