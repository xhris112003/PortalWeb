<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portafolio | Christian</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/5.png') }}" type="image/x-icon">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .button-new {
            --offset: 10px;
            --border-size: 2px;
            display: block;
            position: relative;
            padding: 1.5em 3em;
            appearance: none;
            border: 0;
            background: transparent;
            color: #6B7280;
            text-transform: uppercase;
            letter-spacing: .25em;
            outline: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 0;
            box-shadow: inset 0 0 0 var(--border-size) currentcolor;
            transition: background .8s ease;
        }

        .button-new:hover {
            background: rgba(100, 0, 0, .03);
        }

        .button__horizontal,
        .button__vertical {
            position: absolute;
            top: var(--horizontal-offset, 0);
            right: var(--vertical-offset, 0);
            bottom: var(--horizontal-offset, 0);
            left: var(--vertical-offset, 0);
            transition: transform .8s ease;
            will-change: transform;
        }

        .button__horizontal::before,
        .button__vertical::before {
            content: '';
            position: absolute;
            border: inherit;
        }

        .button__horizontal {
            --vertical-offset: calc(var(--offset) * -1);
            border-top: var(--border-size) solid currentcolor;
            border-bottom: var(--border-size) solid currentcolor;
        }

        .button__horizontal::before {
            top: calc(var(--vertical-offset) - var(--border-size));
            bottom: calc(var(--vertical-offset) - var(--border-size));
            left: calc(var(--vertical-offset) * -1);
            right: calc(var(--vertical-offset) * -1);
        }

        .button-new:hover .button__horizontal {
            transform: scaleX(0);
        }

        .button__vertical {
            --horizontal-offset: calc(var(--offset) * -1);
            border-left: var(--border-size) solid currentcolor;
            border-right: var(--border-size) solid currentcolor;
        }

        .button__vertical::before {
            top: calc(var(--horizontal-offset) * -1);
            bottom: calc(var(--horizontal-offset) * -1);
            left: calc(var(--horizontal-offset) - var(--border-size));
            right: calc(var(--horizontal-offset) - var(--border-size));
        }

        .button-new:hover .button__vertical {
            transform: scaleY(0);
        }

        .hidden {
            display: none;

        }

        .content {
            margin-top: 20px;
            /* Espacio entre el botón y la caja oculta */
        }

        .photo-frame {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            /* Agrega aquí estilos adicionales para el marco de la foto */
        }

        .text {
            margin-left: 20px;
            /* Agrega aquí estilos adicionales para el texto */
        }

        .fade-in-out {
            animation: fadeInOut 0.5s ease-in-out;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        /* Ocultar la barra de desplazamiento en Google Chrome */
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <img id="logo" src="{{ asset('img/1.png') }}">
            </div>
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mt-4">
                <button id="toggleButton" class="button-new">
                    About me
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                </button>
            </div>
            <div id="hiddenBox" class="hidden">
                <div class="content">
                    <div><img class="photo-frame" src="{{ asset('img/3.jpg') }}" alt=""></div>
                    <p class="text dark:text-white">
                        I'm Christian,<br>
                        Passionate about backend programming, I specialize in PHP<br>
                        (Laravel, Composer), Java (Spring Boot), and Python. Additionally,<br>
                        I have experience with databases (MySQL, MariaDB, MongoDB)<br>
                        and tools such as Workbench and PhpMyAdmin. I also possess<br>
                        frontend skills using HTML, CSS, Bootstrap, JavaScript, and ReactJS.<br>
                        Always seeking opportunities to create innovative technological solutions.</p>
                </div>
            </div>
            <div>

            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="#6B7280" height="8" width="8" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                                class="w-8 h-8 text-gray-500">
                                <g id="Certificate-file">
                                    <path
                                        d="M54.1076508,14.717124c-0.0053024-0.0955-0.0237999-0.1876001-0.0559006-0.2779007
                                    c-0.0102005-0.0284996-0.0171013-0.0567999-0.0298004-0.0840998c-0.0480995-0.1046-0.1090012-0.2038994-0.1932983-0.2884998
                                    c0,0-3.4248009-3.4394999-6.8535004-6.8759999c-1.7139015-1.7188001-3.4297028-3.4356-4.7187996-4.7227001
                                    c-0.9531021-0.9511001-1.5810013-1.5781001-2.0234032-1.9677001c-0.006897-0.0098-0.0136986-0.0186-0.0205002-0.0284
                                    c-0.0009995-0.0019-0.0019989-0.0029-0.0029984-0.0048l-0.0078011,0.0058c-0.6213989-0.5415-0.8670006-0.6004-1.1478996-0.4306
                                    l-26.0746994,0.0009c-1.7079992,0-3.0977001,1.3907001-3.0977001,3.0996001v50.5655022
                                    c0,0.8661995,0.3369007,1.6805992,0.9522009,2.2967987c0.6053991,0.6026001,1.4413996,0.9482994,2.2928991,0.9482994h13.1513996
                                    c0.5527,0,1-0.4473,1-1c0-0.5527992-0.4473-1-1-1H13.1264496c-0.3270998,0-0.6483994-0.1338005-0.8799-0.3633003
                                    c-0.2323999-0.232399-0.3652-0.5536995-0.3652-0.8817978V3.1427238c0-0.6064,0.4922009-1.0996001,1.0977001-1.0996001
                                    l25.4626007-0.0009c0.0377007,2.2823002-0.0049019,8.6077995-0.0485992,12.7186995
                                    c-0.002903,0.2676001,0.1016006,0.5244007,0.2891006,0.7139006c0.1875,0.1904001,0.4442978,0.2967997,0.7108994,0.2967997
                                    h12.7255974v38.0997009c0,0.2851028-0.1152,0.5634003-0.3173981,0.7656021
                                    c-0.2041016,0.2040977-0.4756012,0.3163986-0.7645988,0.3163986h-0.455101c-0.5527,0-1,0.4472008-1,1c0,0.5527,0.4473,1,1,1
                                    h0.455101c0.8241997,0,1.5985985-0.3213005,2.1796989-0.9033012c0.5732002-0.5732994,0.902298-1.3671989,0.902298-2.1786995
                                    V14.7716236C54.1186485,14.7523241,54.1087494,14.7362242,54.1076508,14.717124z M40.4038506,13.7716236
                                    C40.45755,8.5080242,40.4741516,5.380024,40.4585495,3.4992237c2.3398018,2.3340001,6.6297989,6.6346998,10.2538986,10.2723999
                                    H40.4038506z" />
                                    <path
                                        d="M46.4301491,49.4289246c-0.0370979-0.1273003-0.0993004-0.2401009-0.1764984-0.3384018
                                    c1.4456978-1.7341003,2.3171997-3.9636993,2.3171997-6.3979988c0-5.5228004-4.4771996-10-10-10c-5.5228996,0-10,4.4771996-10,10
                                    c0,2.5708008,0.9783993,4.9075012,2.5725002,6.6790009L27.7680492,60.942524
                                    c-0.1103001,0.3779984,0.0117016,0.7862015,0.3116016,1.0419998c0.299799,0.2549019,0.7206993,0.3086014,1.0770988,0.1416016
                                    l3.4014015-1.6162033l2.1376991,3.0996017c0.1884003,0.2734985,0.4980011,0.4326973,0.8232002,0.4326973
                                    c0.0565987,0,0.1133003-0.0048981,0.169899-0.0146942c0.3848-0.0664024,0.6953011-0.3496017,0.7959023-0.7266045
                                    l2.2945976-8.5613976l2.2943001,8.5613976c0.1006012,0.3760033,0.410202,0.6592026,0.7938995,0.7266045
                                    c0.0577011,0.0097961,0.1152992,0.0146942,0.1719017,0.0146942c0.3241997,0,0.6319008-0.157299,0.8213005-0.4296989
                                    l2.1436005-3.0839996l3.3993988,1.5996017c0.3554001,0.1660004,0.7753983,0.1102982,1.0760994-0.1455002
                                    c0.2989006-0.2549019,0.4199982-0.6621017,0.3096008-1.0401001L46.4301491,49.4289246z M38.5708504,34.5973244
                                    c4.4636993,0,8.0951996,3.6315002,8.0951996,8.0951996c0,4.4637985-3.6315002,8.0952988-8.0951996,8.0952988
                                    c-4.4637985,0-8.0953007-3.6315002-8.0953007-8.0952988C30.4755497,38.2288246,34.1070518,34.5973244,38.5708504,34.5973244z
                                     M35.1137505,60.692524l-1.3925018-2.0185013c-0.2792969-0.4043007-0.809597-0.5478973-1.2519989-0.3359985l-2.1571999,1.024498
                                    l2.4841995-8.5150986c1.3003006,0.9225998,2.8286018,1.5391998,4.4862022,1.7528992L35.1137505,60.692524z M45.0913506,58.3586235
                                    c-0.4424019-0.2080994-0.9687996-0.0654984-1.2471008,0.3348999l-1.3964996,2.0088005l-2.1875992-8.1632004
                                    c1.6489983-0.2812004,3.1576996-0.9631996,4.4260979-1.9464989l2.5623016,8.781601L45.0913506,58.3586235z" />
                                    <path
                                        d="M38.5708504,47.692524c2.7613983,0,5-2.2384987,5-5c0-2.7613983-2.2386017-5-5-5c-2.7614021,0-5,2.2386017-5,5
                                    C33.5708504,45.4540253,35.8094482,47.692524,38.5708504,47.692524z M38.5708504,39.692524c1.6542015,0,3,1.3457985,3,3
                                    c0,1.6543007-1.3457985,3-3,3c-1.6543007,0-3-1.3456993-3-3C35.5708504,41.0383224,36.9165497,39.692524,38.5708504,39.692524z" />
                                </g>
                            </svg>

                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <p class="text-gray-900 dark:text-white">Certifications</p>
                            </div>
                        </div>

                        <div class="ml-12 pa">
                            <a target="_blank" href="https://acortar.link/hiDUdw"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Back End Development and APIs
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://acortar.link/fITVgZ"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Front End Development Libraries
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="{{ asset('img/4.jpg') }}"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Web Development Certificate
                            </a>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                height="50.000000pt" viewBox="0 0 50.000000 50.000000"
                                preserveAspectRatio="xMidYMid meet" class="w-8 h-8 text-gray-500">

                                <g transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)" fill="#6B7280"
                                    stroke="none">
                                    <path
                                        d="M45 447 c-3 -7 -4 -100 -3 -207 l3 -195 205 0 205 0 0 205 0 205
                                    -203 3 c-159 2 -204 0 -207 -11z m395 -197 l0 -190 -190 0 -190 0 0 190 0 190
                                    190 0 190 0 0 -190z" />
                                    <path
                                        d="M121 248 c1 -29 3 -45 6 -36 2 9 14 18 25 20 51 7 44 68 -8 68 -22 0
                                    -24 -4 -23 -52z m49 16 c0 -8 -9 -14 -20 -14 -19 0 -27 19 -14 33 10 9 34 -4
                                    34 -19z" />
                                    <path
                                        d="M210 250 c0 -27 5 -50 10 -50 6 0 10 9 10 20 0 15 7 20 25 20 19 0
                                    25 -5 25 -21 0 -11 5 -17 10 -14 6 3 10 26 10 51 0 24 -4 44 -10 44 -5 0 -10
                                    -9 -10 -20 0 -15 -7 -20 -25 -20 -18 0 -25 5 -25 20 0 11 -4 20 -10 20 -5 0
                                    -10 -22 -10 -50z" />
                                    <path
                                        d="M320 251 c0 -28 5 -51 10 -51 6 0 10 6 10 14 0 8 12 17 26 20 20 5
                                    25 12 22 34 -2 22 -9 28 -35 30 l-33 3 0 -50z m49 26 c12 -15 5 -27 -16 -27
                                    -7 0 -13 9 -13 20 0 23 13 26 29 7z" />
                                </g>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <p class="text-gray-900 dark:text-white">Php Projects GitHub (Laravel, Composer)</p>
                            </div>
                        </div>

                        <div class="ml-12 pa">
                            <a target="_blank" href="https://github.com/xhris112003?tab=stars"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                GitHub PHP Proyects
                            </a>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="200.000000pt"
                                height="200.000000pt" viewBox="0 0 200.000000 200.000000"
                                preserveAspectRatio="xMidYMid meet" class="w-8 h-8 text-gray-500">

                                <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)" fill="#6B7280"
                                    stroke="none">
                                    <path
                                        d="M136 1734 c-14 -14 -16 -72 -16 -489 0 -417 2 -475 16 -489 13 -14
                                    60 -16 355 -16 l340 0 -3 -122 -3 -122 -100 -17 c-111 -18 -161 -36 -188 -67
                                    -44 -48 6 -100 122 -126 114 -26 325 -37 478 -26 221 17 325 49 339 105 14 56
                                    -57 93 -224 118 l-77 12 -3 123 -3 122 340 0 c295 0 342 2 355 16 14 14 16 72
                                    16 489 0 417 -2 475 -16 489 -14 14 -106 16 -864 16 -758 0 -850 -2 -864 -16z
                                    m1682 -486 l2 -438 -820 0 -820 0 0 433 c0 239 3 437 7 440 3 4 371 6 817 5
                                    l811 -3 3 -437z m-708 -668 l0 -160 -110 0 -110 0 0 160 0 160 110 0 110 0 0
                                    -160z m-278 -182 l3 -33 165 0 165 0 3 33 3 34 60 -7 c73 -9 158 -30 172 -44
                                    14 -14 -25 -28 -131 -47 -210 -37 -708 -4 -677 46 9 15 138 46 207 49 23 1 27
                                    -3 30 -31z" />
                                    <path
                                        d="M333 1593 c-10 -4 -13 -83 -13 -349 l0 -344 680 0 680 0 0 344 c0
                                    304 -2 345 -16 350 -19 7 -1313 7 -1331 -1z m1287 -118 l0 -55 -620 0 -620 0
                                    0 55 0 55 620 0 620 0 0 -55z m0 -315 l0 -200 -181 0 c-128 0 -178 3 -173 11
                                    18 29 122 344 117 356 -3 7 -15 13 -28 13 -20 0 -29 -18 -82 -172 -44 -125
                                    -58 -178 -51 -190 8 -17 -15 -18 -417 -18 l-425 0 0 200 0 200 620 0 620 0 0
                                    -200z" />
                                    <path
                                        d="M446 1494 c-4 -10 -1 -24 7 -31 19 -19 49 -5 45 21 -4 27 -43 34 -52
                                    10z" />
                                    <path
                                        d="M567 1503 c-13 -12 -7 -44 9 -50 23 -9 48 25 33 44 -12 14 -32 17
                                    -42 6z" />
                                    <path
                                        d="M676 1494 c-4 -10 -1 -24 7 -31 19 -19 49 -5 45 21 -4 27 -43 34 -52
                                    10z" />
                                    <path
                                        d="M1087 1229 c-31 -28 -57 -59 -57 -69 0 -18 108 -120 128 -120 5 0 15
                                    7 22 15 11 14 7 23 -30 60 l-44 45 44 45 c37 37 41 46 30 60 -19 23 -32 19
                                    -93 -36z" />
                                    <path
                                        d="M560 1257 c0 -17 -36 -38 -54 -31 -17 7 -42 -31 -26 -41 15 -9 12
                                    -41 -4 -54 -18 -15 -9 -51 13 -51 22 0 41 -19 41 -41 0 -22 28 -33 46 -18 8 7
                                    28 9 48 5 33 -6 49 3 51 29 2 21 18 45 30 45 20 0 26 39 7 49 -9 5 -15 22 -15
                                    42 0 40 -14 63 -31 50 -13 -10 -56 4 -56 19 0 5 -11 10 -25 10 -14 0 -25 -6
                                    -25 -13z m75 -73 c25 -25 16 -75 -17 -94 -32 -17 -54 -8 -77 32 -13 23 -13 29
                                    2 52 20 30 66 35 92 10z" />
                                    <path
                                        d="M1416 1254 c-5 -12 7 -30 38 -60 l45 -42 -45 -40 c-43 -40 -49 -64
                                    -19 -76 18 -7 135 92 135 113 0 24 -102 121 -127 121 -11 0 -24 -7 -27 -16z" />
                                    <path
                                        d="M800 1200 c-6 -12 -21 -20 -35 -20 -25 0 -29 -7 -25 -48 1 -13 -4
                                    -30 -11 -38 -11 -13 -8 -20 19 -41 18 -13 30 -28 27 -33 -8 -13 26 -21 40 -10
                                    7 6 28 9 46 8 29 -3 34 0 37 21 2 13 12 26 23 28 20 6 26 39 8 45 -6 2 -12 19
                                    -13 38 -1 31 -5 35 -30 36 -16 1 -35 8 -41 18 -16 22 -32 20 -45 -4z m62 -57
                                    c36 -32 17 -83 -32 -83 -48 0 -67 45 -33 82 20 22 41 23 65 1z" />
                                </g>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <p class="text-gray-900 dark:text-white">Back End Development and APIs (Node, MongoDB)
                                </p>
                            </div>
                        </div>

                        <div class="ml-12 pa">
                            <a target="_blank" href="https://boilerplate-project-timestamp.xhris112003.repl.co/"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Timestamp Microservice
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://boilerplate-project-headerparser.xhris112003.repl.co/"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Request Header Parser Microservice
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://boilerplate-project-urlshortener.xhris112003.repl.co/"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                URL Shortener Microservice
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://boilerplate-project-exercisetracker.xhris112003.repl.co/"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Exercise Tracker
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://boilerplate-project-filemetadata.xhris112003.repl.co/"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                File Metadata Microservice
                            </a>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="450.000000pt"
                                height="450.000000pt" viewBox="0 0 450.000000 450.000000"
                                preserveAspectRatio="xMidYMid meet" class="w-8 h-8 text-gray-500">

                                <g transform="translate(0.000000,450.000000) scale(0.100000,-0.100000)" fill="#6B7280"
                                    stroke="none">
                                    <path
                                        d="M2105 3990 c-44 -23 -100 -54 -125 -69 -25 -16 -90 -54 -145 -86 -55
                                        -32 -131 -77 -170 -100 -38 -23 -247 -145 -464 -271 -233 -135 -410 -244 -432
                                        -267 -80 -80 -74 -10 -74 -947 l0 -835 22 -40 c12 -22 36 -54 55 -71 32 -30
                                        263 -170 488 -295 l114 -64 106 0 c95 0 110 3 157 28 101 52 168 130 197 227
                                        14 47 16 152 16 900 0 929 4 872 -60 905 -37 19 -54 19 -96 -1 -67 -32 -64 13
                                        -64 -899 0 -930 5 -874 -75 -920 -48 -29 -93 -32 -138 -9 -83 42 -483 279
                                        -495 292 -9 12 -12 185 -12 787 0 723 1 773 18 787 9 9 76 49 147 91 72 41
                                        209 121 305 177 96 57 200 117 230 135 30 18 109 64 175 102 392 228 453 263
                                        466 263 8 0 28 -9 46 -19 17 -11 179 -106 360 -211 180 -106 348 -205 373
                                        -220 25 -15 122 -71 215 -125 94 -54 207 -121 253 -148 l82 -49 0 -784 0 -784
                                        -42 -27 c-54 -34 -1187 -698 -1248 -731 l-45 -25 -165 98 c-91 53 -182 106
                                        -202 116 -72 37 -140 16 -168 -51 -17 -42 1 -102 38 -128 61 -42 386 -226 420
                                        -238 49 -17 110 -17 161 1 23 8 187 99 364 203 177 104 390 229 472 277 536
                                        312 553 323 586 368 61 84 60 66 57 943 l-3 799 -23 46 c-12 25 -37 60 -55 77
                                        -27 26 -205 134 -537 327 -30 18 -93 55 -140 82 -91 53 -333 195 -465 272 -44
                                        26 -118 69 -164 97 -78 45 -91 49 -161 52 -72 4 -79 2 -155 -38z" />
                                    <path
                                        d="M2460 3009 c-183 -21 -343 -84 -430 -169 -128 -125 -146 -325 -41
                                        -457 72 -90 201 -148 466 -209 594 -137 650 -164 615 -302 -28 -112 -115 -149
                                        -370 -159 -181 -6 -297 8 -407 48 -76 29 -139 90 -148 144 -16 103 -70 149
                                        -147 125 -59 -17 -81 -58 -74 -141 13 -176 145 -302 385 -367 90 -24 111 -26
                                        326 -26 262 -1 335 10 454 70 129 64 197 171 208 324 8 107 -14 177 -74 241
                                        -86 92 -176 129 -503 208 -359 86 -410 100 -470 127 -80 36 -105 64 -104 119
                                        1 53 22 87 72 120 88 58 213 85 400 85 144 0 251 -19 339 -61 74 -35 109 -74
                                        118 -131 10 -65 23 -93 54 -111 45 -27 95 -22 133 12 32 28 33 32 32 104 0 92
                                        -33 166 -104 236 -137 135 -433 204 -730 170z" />
                                </g>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <p class="text-gray-900 dark:text-white">Front End Proyects (Js, React)</p>
                            </div>
                        </div>

                        <div class="ml-12 pa">
                            <a target="_blank" href="https://codepen.io/xhris112003/pen/MWqzxyj"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Build a random trading machine
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://codepen.io/xhris112003/pen/qBMQzZx"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Create a markdown viewer
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://codepen.io/xhris112003/pen/xxaQvBx"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Create a drum machine
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://codepen.io/xhris112003/pen/RwYELdy"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Create a JavaScript Calculator
                            </a>
                        </div>
                        <div class="ml-12 mt-2">
                            <a target="_blank" href="https://codepen.io/xhris112003/pen/XWxOOLe"
                                class="underline mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Create a clock 25 + 5
                            </a>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
    </div>
</body>

</html>
<script>
    // Detectar si el tema del sistema operativo es claro u oscuro
    const prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

    // Obtener la ruta del logo según el tema
    const logoSource = prefersDarkMode ? '{{ asset('img/1.png') }}' : '{{ asset('img/2.png') }}';

    // Cambiar la imagen del logo
    document.getElementById('logo').src = logoSource;

    const toggleButton = document.getElementById('toggleButton');
    const hiddenBox = document.getElementById('hiddenBox');

    let isHidden = true;
    let animationTimeout;

    toggleButton.addEventListener('click', function() {
        clearTimeout(animationTimeout); // Limpiamos el timeout actual

        if (isHidden) {
            hiddenBox.classList.remove('hidden');
            hiddenBox.classList.add('fade-in-out');
        } else {
            hiddenBox.classList.remove('fade-in-out');
        }

        isHidden = !isHidden;

        // Establecemos un nuevo timeout para limpiar las clases después de la animación
        animationTimeout = setTimeout(function() {
            if (isHidden) {
                hiddenBox.classList.add('hidden');
            }
        }, 50); // El tiempo debe ser igual al tiempo de duración de la animación CSS en milisegundos
    });
</script>
