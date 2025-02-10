@extends('layout')

@section('title', 'Home')

@section('content')

    <style>
        .transparent-section {
            .transparent-section {
                background-color: transparent;
                /* Fondo completamente transparente */
            }

            /* Completamente transparente */
        }
    </style>

    <body
        class="w-full h-64 min-h-screen bg-gradient-to-r from-[rgb(17,24,39)] via-[rgb(88,28,135)] to-[rgb(17,24,39)] dark:text-red">

        <main class="container px-6 py-8 mx-auto">
            <h1 class="mb-12 text-4xl font-bold text-center text-white animate-fade-in">Bienvenido</h1>
            <section class="transparent-section">
                <div class="max-w-screen-xl px-2 py-4 mx-auto sm:py-4 lg:px-6">
                    <div class="grid h-full grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">

                        <!-- Horario y Calendario -->
                        <div
                            class="flex flex-col h-auto col-span-1 text-indigo-800 sm:col-span-2 lg:col-span-2 xl:col-span-2">
                            <a href=""
                                class="relative flex flex-col flex-grow px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                <img src="{{ asset('img/CalendarioImg.webp') }}" alt=""
                                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                    Horario y Calendario</h3>
                            </a>
                        </div>

                        <!-- Mapa -->
                        <div
                            class="flex flex-col h-auto col-span-1 text-indigo-800 sm:col-span-2 lg:col-span-2 xl:col-span-2">
                            <a href=""
                                class="relative flex flex-col px-4 pt-40 pb-4 mb-4 overflow-hidden rounded-lg group">
                                <img src="{{ asset('img/UpiMapaFondo.webp') }}" alt=""
                                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                    Mapa</h3>
                            </a>
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Herramientas -->
                                <a href=""
                                    class="relative flex flex-col px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                    <img src="{{ asset('img/Herramientas.webp') }}" alt=""
                                        class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                    <h3
                                        class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white break-words whitespace-normal xs:text-xl md:text-3xl">
                                        Extras</h3>
                                </a>
                                <!-- Contenido Virtual -->
                                <a href=""
                                    class="relative flex flex-col px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                    <img src="{{ asset('img/Cursos.webp') }}" alt=""
                                        class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                    <h3
                                        class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white break-words whitespace-normal xs:text-xl md:text-3xl">
                                        Aula</h3>
                                </a>
                            </div>
                        </div>

                        <!-- Ofertas Laborales Y MarketPlace -->
                        <div
                            class="flex flex-col h-auto col-span-1 text-indigo-800 sm:col-span-2 lg:col-span-1 xl:col-span-1">
                            <a href=""
                                class="relative flex flex-col flex-grow px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                <img src="{{ asset('img/MarketPlaceOfertas.webp') }}" alt=""
                                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                    Ofertas Laborales Y MarketPlace</h3>
                            </a>
                        </div>

                        <!-- Cuaderno y Tareas automáticas IA -->
                        <div
                            class="flex flex-col h-auto min-h-[200px] lg:min-h-[300px] col-span-1 text-indigo-800 sm:col-span-4 lg:col-span-3 xl:col-span-5">
                            <a href=""
                                class="relative flex flex-col flex-grow px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                <img src="{{ asset('img/TareasIA.webp') }}" alt=""
                                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                    Cuaderno y Tareas automáticas IA</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </main>









        <h1 class="mb-12 text-4xl font-bold text-center text-white animate-fade-in">Costos y Servicios</h1>
        <div class="max-w-6xl px-4 py-8 mx-auto">
            <div
                class="relative p-8 overflow-hidden text-white shadow-2xl bg-gradient-to-r from-gray-800 to-gray-600 rounded-xl">
                <div class="absolute top-0 left-0 w-full h-full transform -skew-x-12 bg-white opacity-10"></div>
                <div class="relative z-10">
                    <svg class="w-12 h-12 mr-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="mb-4 text-xl font-medium">
                        Si estás leyendo esto, significa que estás explorando la beta anticipada de este proyecto. Con el
                        tiempo, se irán añadiendo nuevas funcionalidades, siempre que reciba el apoyo necesario y tus ideas.
                        A continuación, te cuento un poco más sobre mis servicios como desarrollador freelance. También
                        puedes contactarme a través de mis redes sociales (GitHub, LinkedIn, etc.) haciendo clic en el
                        enlace en la parte superior derecha.
                    </p>

                    {{-- <h1>{{ $count }}</h1>

                    <button wire:click="increment">+</button>

                    <button wire:click="decrement">-</button> https://randomuser.me/api/portraits/women/91.jpg --}}
                    <div class="flex items-center">
                        <img src="https://avatars.githubusercontent.com/u/115313375?v=4&size=64" alt="Avatar"
                            class="w-12 h-12 mr-4 border-2 border-black rounded-full">
                        <div>
                            <h4 class="font-semibold">Joseph Fabrizzio</h4>
                            <p class="text-black">CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-2">
            <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                style="animation-delay: 0.1s;">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Web Development</h2>
                <p class="text-gray-600 dark:text-gray-300">Llevo 4 años de experiencia y puedo desarrollar una web a tu
                    medida con Python PHP Vue y cualquier solucion que necesites.</p>
            </div>

            <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                style="animation-delay: 0.2s;">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Mobile App Development</h2>
                <p class="text-gray-600 dark:text-gray-300">Tengo experiencias con desarrollo mobile ya sea con kotlin o con
                    desarrollo java y puedo desarrollar tus aplicaciones nativas.</p>
            </div>



            <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                style="animation-delay: 0.5s;">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                </svg>
                <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Cloud Solutions</h2>
                <p class="text-gray-600 dark:text-gray-300">En mi experiencia puedo configurar serivdores y crear una
                    infrestructura limpia en la nube para hacer realidad y configurar tus proyectos en la nube.
                </p>
            </div>

            <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                style="animation-delay: 0.6s;">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                </svg>
                <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">AI & Machine Learning</h2>
                <p class="text-gray-600 dark:text-gray-300">Puedo ayudarte a integrar aplicaciones de ia y incluso cosas
                    con python con opencv o tensorflow para proyectos mas complejos y de machine learning.</p>
            </div>
        </div>
        </main>



        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in {
                animation: fadeIn 0.5s ease-out forwards;
            }
        </style>

        <script>
            // Toggle dark mode based on system preference
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            }
        </script>
    </body>

@endsection
