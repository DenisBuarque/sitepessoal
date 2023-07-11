<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/denis-buarque.jpg') }}" class="h-8 mr-3 rounded-full" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Denis Buarque</span>
            </a>
            <div class="flex md:order-2">
                <a href="https://api.whatsapp.com/send?phone=5582988365125&text=Olá!%20Como%20posso%20ajudar%20sobre%20seu%20chamado." target="_blank"
                    class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg height="24" width="24"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"
                        version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect height="24" id="Artboard1" style="fill:none;" width="24" x="0"
                            y="0" />
                        <g>
                            <g>
                                <path
                                    d="M4.018,17.048c-0.96,-1.484 -1.518,-3.253 -1.518,-5.151c0,-5.243 4.257,-9.5 9.5,-9.5c5.243,0 9.5,4.257 9.5,9.5c0,5.243 -4.257,9.5 -9.5,9.5c-1.777,0 -3.44,-0.489 -4.863,-1.339l-4.637,1.545l1.518,-4.555Z"
                                    style="fill:#f3f3f3;" />
                                <path
                                    d="M5.795,16.304c-0.886,-1.244 -1.407,-2.765 -1.407,-4.407c0,-4.201 3.411,-7.612 7.612,-7.612c4.201,0 7.612,3.411 7.612,7.612c0,4.201 -3.411,7.611 -7.612,7.611c-1.59,0 -3.066,-0.488 -4.288,-1.323l-2.862,0.954l0.945,-2.835Z"
                                    style="fill:#00a82d;" />
                            </g>
                            <path
                                d="M9.714,13.873c-1.124,-1.374 -1.874,-3.056 -2.109,-4.88c-0.063,-0.508 0.106,-1.018 0.461,-1.387c0.355,-0.369 0.858,-0.558 1.368,-0.515l0.049,0.005c0,0 0.561,0.15 0.868,0.233c0.122,0.033 0.219,0.124 0.26,0.243c0.138,0.41 0.464,1.373 0.618,1.826c0.05,0.147 0.004,0.31 -0.114,0.41c-0.233,0.196 -0.618,0.52 -0.858,0.723c-0.129,0.109 -0.17,0.29 -0.1,0.443c0.279,0.608 0.635,1.176 1.057,1.69c0.434,0.502 0.933,0.949 1.485,1.327c0.14,0.095 0.325,0.085 0.454,-0.024c0.241,-0.202 0.626,-0.526 0.858,-0.722c0.119,-0.1 0.287,-0.117 0.424,-0.043c0.42,0.228 1.314,0.712 1.694,0.918c0.111,0.06 0.185,0.172 0.196,0.297c0.029,0.317 0.083,0.895 0.083,0.895l-0.004,0.049c-0.044,0.51 -0.315,0.974 -0.739,1.261c-0.424,0.288 -0.955,0.368 -1.445,0.22c-1.772,-0.545 -3.313,-1.581 -4.479,-2.937l-0.027,-0.032Z"
                                style="fill:#f3f3f3;" />
                        </g>
                    </svg>

                    Whatsapp
                </a>

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">
                            Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="mx-auto w-full">
        <img class="h-auto max-w-full" src="{{ asset('/images/banner.jpg') }}" alt="banner">
    </section>

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="grid gap-4">
            <div class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <img class="w-36 h-36 m-auto rounded-full" src="{{ asset('/images/denis-buarque.jpg') }}"
                        alt="">
                    <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        Programador Ful Stack</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 dark:text-gray-400">
                        Sou desenvolvedor web com experiência em HTML, CSS, Bootstrap, JavaScript, Php, Laravel, MySQL,
                        Postgres, Git, Venho atualmente aprendendo e desenvolvendo pequenos projetos com React JS, Next
                        JS, Node JS, Tailwind CSS, Mongo DB, Docker. Tenho conhecimentos avançados em desenvolvimento
                        front-end e back-end, utilizando as melhores práticas e ferramentas do mercado. Já trabalhei em
                        diversos projetos web, desde sites institucionais até aplicações complexas e escaláveis. Tenho
                        facilidade para aprender novas tecnologias e me adaptar a diferentes ambientes de trabalho.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-6 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/html.jpg') }}"
                        alt="html">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/css.jpg') }}"
                        alt="css">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/tailwindcss.jpg') }}"
                        alt="tailwindcss">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/javascript.jpg') }}"
                        alt="javascript">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/reactjs.jpg') }}"
                        alt="reactjs">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/nextjs.jpg') }}"
                        alt="nextjs">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/php.jpg') }}"
                        alt="php">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/laravel.jpg') }}"
                        alt="laravel">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/nodejs.jpg') }}"
                        alt="nodejs">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/mysql.jpg') }}"
                        alt="mysql">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/postgres.jpg') }}"
                        alt="postgres">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('/images/logotipos/mongodb.jpg') }}"
                        alt="mongodb">
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl flex flex-wrap items-center flex-col mx-auto p-4 mt-10 md:flex-row md:justify-between">
        <div class="flex-1 my-1 md:mx-1">
            <div
                class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Full Stack Developer</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Domino as tecnologias de desenvolvimento web crio desde a interface gráfica do site ou aplicativo
                    até a lógica de negócio, a comunicação com o banco de dados e a integração com APIs externas. Amplo
                    conhecimentos em linguagens de programação, frameworks, ferramentas e metodologias que envolvem as
                    diferentes camadas da web.
                </p>
            </div>
        </div>
        <div class="flex-1 my-1 md:mx-1">
            <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Front-end Developer</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Crio e mantenho a interface de um site ou aplicativo, usando linguagens como HTML, CSS, JavaScript,
                React Js, Next Js. Procuro garantir que o design seja atraente, funcional e compatível com
                diferentes dispositivos e navegadores. Além disso, estou atento às boas práticas de acessibilidade,
                usabilidade e performance, buscando sempre oferecer a melhor experiência para os usuários.
            </p>
        </div>
        </div>
        <div class="flex-1 my-1 md:mx-1">
            <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Back-end Developer</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Responsável por desenvolver a lógica e a funcionalidade de um sistema web, usando Laravel 10, Node
                Js, entre outras. Interage com bancos de dados, MySQL, Postgres, Mongo DB, servidores, APIs e outras
                ferramentas
                que compõem a parte "invisível" de um site ou aplicativo, garantindo a segurança, a performance e a
                escalabilidade do sistema.
            </p>
        </div>
        </div>
    </div>

    <footer class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                <a href="https://www.facebook.com/denisbuarque.3" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>

                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 17">
                        <path fill-rule="evenodd"
                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://github.com/DenisBuarque" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
