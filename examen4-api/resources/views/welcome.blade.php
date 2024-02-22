<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen febrero 2024 DWES</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('token') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Crear token</a>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" style="display: inline">
                            @csrf

                            <button type="submit" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                {{ __('Log Out') }}
                            </button>
                        </form>

                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg width="350px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 512 512" xml:space="preserve">
                        <path style="fill:#509FE8;" d="M427.023,59.858H84.977c-13.851,0-25.119,11.268-25.119,25.119v401.904
                            c0,13.851,11.268,25.119,25.119,25.119h342.046c13.851,0,25.119-11.268,25.119-25.119V84.977
                            C452.142,71.126,440.874,59.858,427.023,59.858z"/>
                                                <g>
                                                    <path style="fill:#4D8CCF;" d="M93.528,470.313c0,4.427,3.589,8.017,8.017,8.017h290.739c4.427,0,8.017-3.589,8.017-8.017V77.934
                                c0-4.965-4.025-8.99-8.99-8.99H102.519c-4.965,0-8.99,4.025-8.99,8.99V470.313z"/>
                                                    <path style="fill:#4D8CCF;" d="M436.109,503.983H94.063c-13.851,0-25.119-11.268-25.119-25.119V76.96
                                c0-5.296,1.651-10.211,4.46-14.267c-8.04,4.193-13.546,12.604-13.546,22.283v401.904c0,13.851,11.268,25.119,25.119,25.119h342.046
                                c8.554,0,16.12-4.301,20.659-10.852C444.215,502.955,440.28,503.983,436.109,503.983z"/>
                                                </g>
                                                <path style="fill:#F6F6F7;" d="M102.079,461.228c0,4.427,3.589,8.017,8.017,8.017h290.739c4.427,0,8.017-3.589,8.017-8.017V77.934
                            c0-4.965-4.025-8.99-8.99-8.99H111.07c-4.965,0-8.99,4.025-8.99,8.99V461.228z"/>
                                                <path style="fill:#D9DCDF;" d="M163.541,110.63h188.125c10.314,0,18.706-8.392,18.706-18.706V68.944H144.835v22.981
                            C144.835,102.239,153.227,110.63,163.541,110.63z"/>
                                                <path style="fill:#FFC44F;" d="M332.96,34.205h-35.502C293.703,14.743,276.542,0,256,0c-20.541,0-37.703,14.743-41.458,34.205
                            H179.04c-13.851,0-25.119,11.268-25.119,25.119v34.205c0,4.427,3.589,8.017,8.017,8.017h188.125c4.428,0,8.017-3.589,8.017-8.017
                            V59.324C358.079,45.473,346.811,34.205,332.96,34.205z"/>
                                                <g>
                                                    <path style="fill:#F7B14D;" d="M260.008,0.192C258.688,0.067,257.352,0,256,0c-20.541,0-37.703,14.743-41.458,34.205h8.017
                                C226.067,16.024,241.275,1.966,260.008,0.192z"/>
                                                    <path style="fill:#F7B14D;" d="M161.937,93.528V59.324c0-13.851,11.268-25.119,25.119-25.119h-8.017
                                c-13.851,0-25.119,11.268-25.119,25.119v34.205c0,4.427,3.589,8.017,8.017,8.017h8.017
                                C165.527,101.545,161.937,97.956,161.937,93.528z"/>
                                                </g>
                                                <path style="fill:#BF722A;" d="M256,50.238c-4.427,0-8.017-3.589-8.017-8.017V33.67c0-4.427,3.589-8.017,8.017-8.017
                            c4.428,0,8.017,3.589,8.017,8.017v8.551C264.017,46.649,260.428,50.238,256,50.238z"/>
                                                <path style="fill:#DF7A6E;" d="M 219.5 291.2 L 207.7 291.2 L 188.7 223.5 L 198.1 220.5 L 213.9 281.1 L 228.8 228.5 L 240.7 228.5 L 255.5 281.1 L 271.2 220.8 L 280 223.5 L 261.1 291.2 L 249.3 291.2 L 234.5 238.6 L 219.5 291.2 Z M 332.5 291.2 L 290.5 291.2 L 290.5 221.2 L 332.5 221.2 L 332.5 229.4 L 300 229.4 L 300 250.7 L 328 250.7 L 328 258.7 L 300 258.7 L 300 283 L 332.5 283 L 332.5 291.2 Z M 340 285.3 L 344.8 277.3 Q 348.4 280.3 352.9 282.2 A 23.348 23.348 0 0 0 358.27 283.71 A 32.118 32.118 0 0 0 363.4 284.1 A 27.981 27.981 0 0 0 367.947 283.754 Q 370.37 283.354 372.331 282.494 A 13.701 13.701 0 0 0 374.8 281.1 Q 378.848 278.209 378.995 273.366 A 12.116 12.116 0 0 0 379 273 A 11.94 11.94 0 0 0 378.663 270.107 A 9.816 9.816 0 0 0 377.8 267.85 A 8.097 8.097 0 0 0 376.6 266.194 Q 375.33 264.813 373.184 263.471 A 25.81 25.81 0 0 0 373.15 263.45 Q 370.034 261.508 364.265 259.28 A 118.584 118.584 0 0 0 363 258.8 Q 355.8 256 351.5 253.15 A 21.931 21.931 0 0 1 348.411 250.703 Q 346.694 249.053 345.638 247.188 A 13.303 13.303 0 0 1 345.35 246.65 Q 343.5 243 343.5 238 Q 343.5 233 346.25 228.95 Q 349 224.9 354.35 222.45 A 25.558 25.558 0 0 1 360.25 220.615 Q 363.493 220 367.3 220 Q 373.5 220 378.45 221.25 Q 383.4 222.5 388.1 224.8 L 384.6 232.9 A 31.496 31.496 0 0 0 380.474 230.881 A 41.686 41.686 0 0 0 376.65 229.55 Q 372.1 228.2 367.1 228.2 A 27.187 27.187 0 0 0 363.07 228.48 Q 360.938 228.8 359.2 229.487 A 12.616 12.616 0 0 0 356.7 230.8 A 9.902 9.902 0 0 0 354.537 232.765 A 7.359 7.359 0 0 0 352.9 237.5 A 10.464 10.464 0 0 0 353.192 240.022 A 8.562 8.562 0 0 0 354 242.1 Q 355.056 244.019 358.091 245.847 A 23.503 23.503 0 0 0 358.35 246 A 33.003 33.003 0 0 0 360.566 247.172 Q 362.835 248.275 366.046 249.523 A 130.016 130.016 0 0 0 368.1 250.3 A 81.228 81.228 0 0 1 373.078 252.329 Q 377.464 254.3 380.45 256.4 A 26.044 26.044 0 0 1 383.49 258.878 Q 385.713 261.006 386.9 263.35 A 17.579 17.579 0 0 1 388.641 269.213 A 22.155 22.155 0 0 1 388.8 271.9 A 21.71 21.71 0 0 1 388.133 277.401 A 17.105 17.105 0 0 1 385.55 283 Q 382.3 287.6 376.55 290 A 30.521 30.521 0 0 1 369.14 292.004 A 40.027 40.027 0 0 1 363.4 292.4 Q 356.1 292.4 350.1 290.45 A 38.206 38.206 0 0 1 344.733 288.268 A 28.433 28.433 0 0 1 340 285.3 Z M 130 291 L 130 221.4 Q 134.7 220.9 139.2 220.65 A 151.31 151.31 0 0 1 143.386 220.479 Q 146.238 220.4 149.5 220.4 A 48.608 48.608 0 0 1 156.844 220.927 Q 160.778 221.528 164.11 222.818 A 29.198 29.198 0 0 1 165.05 223.2 A 30.978 30.978 0 0 1 172.339 227.521 A 27.223 27.223 0 0 1 175.85 230.9 Q 180.1 235.8 182.15 242.25 A 44.256 44.256 0 0 1 184.122 253.246 A 51.506 51.506 0 0 1 184.2 256.1 A 45.309 45.309 0 0 1 182.719 267.798 A 41.802 41.802 0 0 1 182.1 269.9 Q 180 276.4 175.65 281.35 Q 171.3 286.3 164.55 289.15 Q 158.275 291.8 149.709 291.986 A 60.192 60.192 0 0 1 148.4 292 A 186.98 186.98 0 0 1 144.329 291.958 Q 142.315 291.914 140.522 291.824 A 101.5 101.5 0 0 1 138.45 291.7 Q 134.2 291.4 130 291 Z M 139.5 229.1 L 139.5 283.2 Q 141.6 283.5 143.9 283.6 A 107.265 107.265 0 0 0 147.463 283.694 A 121.297 121.297 0 0 0 148.7 283.7 A 37.906 37.906 0 0 0 154.864 283.228 Q 159.793 282.415 163.4 280.2 Q 169.1 276.7 171.8 270.45 A 32.292 32.292 0 0 0 174.054 262.376 A 42.502 42.502 0 0 0 174.5 256.1 Q 174.5 248.9 171.8 242.6 Q 169.1 236.3 163.5 232.45 A 20.895 20.895 0 0 0 156.448 229.391 Q 153.607 228.711 150.296 228.616 A 38.008 38.008 0 0 0 149.2 228.6 Q 146.3 228.6 143.9 228.75 Q 141.5 228.9 139.5 229.1 Z" vector-effect="non-scaling-stroke"/>

                                                <g>
                                                    <path style="fill:#B3B9BF;" d="M324.409,392.284H187.591c-4.427,0-8.017-3.589-8.017-8.017c0-4.427,3.589-8.017,8.017-8.017
                                h136.818c4.428,0,8.017,3.589,8.017,8.017C332.426,388.695,328.838,392.284,324.409,392.284z"/>
                                                    <path style="fill:#B3B9BF;" d="M264.551,426.489h-76.96c-4.427,0-8.017-3.589-8.017-8.017c0-4.427,3.589-8.017,8.017-8.017h76.96
                                c4.428,0,8.017,3.589,8.017,8.017C272.568,422.899,268.98,426.489,264.551,426.489z"/>
                                                </g>
                        </svg>

                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-4 md:grid-cols-4 gap-6 lg:gap-8">
                        <a href="api/vacunas" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Todas las vacunas</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Mostrar todas las vacunas
                                </p>
                            </div>
                        </a>

                        <a href="api/vacunas/si" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Pacientes vacunables</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Pacientes que se quieren vacunar
                                </p>
                            </div>
                        </a>

                        <a href="api/vacunas/no" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Antivacunas</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Pacientes antivacunas
                                </p>
                            </div>
                        </a>

                        <a href="api/vacunas-por-grupo" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vacunas por grupo</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Mostrar el número de vacunas de cada grupo ordenadas de más a menos
                                </p>
                            </div>
                        </a>

                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
