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
            <section class=" transparent-section">

                <div class="max-w-screen-xl px-2 py-4 mx-auto sm:py-4 lg:px-6">
                    <div class="grid h-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-5">
                        <div class="flex flex-col h-auto col-span-2 text-indigo-800 sm:col-span-1 md:col-span-2 md:h-full">
                            <a href=""
                                class="relative flex flex-col flex-grow px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                <img src="{{ asset('img/CalendarioImg.webp') }}" alt=""
                                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                    Horario</h3>
                            </a>
                        </div>
                        <div class="col-span-2 text-indigo-800 sm:col-span-1 md:col-span-2">
                            <a href=""
                                class="relative flex flex-col px-4 pt-40 pb-4 mb-4 overflow-hidden rounded-lg group">
                                <img src="https://images.unsplash.com/photo-1504675099198-7023dd85f5a3?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt=""
                                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                    Gin</h3>
                            </a>
                            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-2">
                                <a href=""
                                    class="relative flex flex-col px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                    <img src="https://images.unsplash.com/photo-1571104508999-893933ded431?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt=""
                                        class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                    <h3
                                        class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                        Whiskey</h3>
                                </a>
                                <a href=""
                                    class="relative flex flex-col px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                    <img src="https://images.unsplash.com/photo-1626897505254-e0f811aa9bf7?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt=""
                                        class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                    <h3
                                        class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                        Vodka</h3>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col h-auto col-span-2 sm:col-span-1 md:col-span-1 md:h-full">
                            <a href=""
                                class="relative flex flex-col flex-grow px-4 pt-40 pb-4 overflow-hidden rounded-lg group">
                                <img src="https://images.unsplash.com/photo-1693680501357-a342180f1946?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt=""
                                    class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="absolute top-0 left-0 z-10 p-4 text-2xl font-medium text-white xs:text-xl md:text-3xl">
                                    Brandy</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </section>





            <div class="max-w-6xl px-4 py-8 mx-auto">
                <div class="flex justify-between gap-5">
                    <!-- Card 1 -->
                    <div
                        class="relative w-1/2 p-8 overflow-hidden text-white shadow-2xl bg-gradient-to-r from-gray-800 to-gray-600 rounded-xl">
                        <div class="absolute top-0 left-0 w-full h-full transform -skew-x-12 bg-white opacity-10"></div>
                        <div class="relative z-10">
                            <svg class="w-12 h-12 mb-4 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <p class="mb-4 text-xl font-medium">
                                "This product exceeded all my expectations. It's intuitive, powerful, and has dramatically
                                improved my workflow. I can't imagine working without it now!"
                            </p>
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/91.jpg" alt="Avatar"
                                    class="w-12 h-12 mr-4 border-2 border-black rounded-full">
                                <div>
                                    <h4 class="font-semibold">Sarah Johnson</h4>
                                    <p class="text-black">UX Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->

                    <!-- Card 3 -->
                    <div
                        class="relative w-1/2 p-8 overflow-hidden text-white shadow-2xl bg-gradient-to-r from-gray-800 to-gray-600 rounded-xl">
                        <div class="absolute top-0 left-0 w-full h-full transform -skew-x-12 bg-white opacity-10"></div>
                        <div class="relative z-10">
                            <svg class="w-12 h-12 mb-4 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <p class="mb-4 text-xl font-medium">
                                "This is another example of a card. Modify the content here for your needs!"
                            </p>
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="Avatar"
                                    class="w-12 h-12 mr-4 border-2 border-black rounded-full">
                                <div>
                                    <h4 class="font-semibold">Example John</h4>
                                    <p class="text-black">Software Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                    style="animation-delay: 0.1s;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Web Development</h2>
                    <p class="text-gray-600 dark:text-gray-300">Custom web applications tailored to your business needs. We
                        use cutting-edge technologies to deliver fast, responsive, and scalable solutions.</p>
                </div>

                <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Mobile App Development</h2>
                    <p class="text-gray-600 dark:text-gray-300">Innovative mobile applications for iOS and Android. We
                        create user-friendly apps that engage your audience and drive business growth.</p>
                </div>

                <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                    style="animation-delay: 0.3s;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Data Analytics</h2>
                    <p class="text-gray-600 dark:text-gray-300">Turn your data into actionable insights. Our analytics
                        services help you make informed decisions and optimize your business processes.</p>
                </div>

                <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                    style="animation-delay: 0.4s;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                    </svg>
                    <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Cybersecurity</h2>
                    <p class="text-gray-600 dark:text-gray-300">Protect your digital assets with our comprehensive
                        cybersecurity solutions. We offer threat detection, risk assessment, and security consulting
                        services.</p>
                </div>

                <div class="p-6 transition-all duration-300 transform bg-white shadow-lg dark:bg-gray-800 rounded-xl hover:scale-105 animate-fade-in"
                    style="animation-delay: 0.5s;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-4 text-indigo-800 dark:text-indigo-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                    <h2 class="mb-2 text-xl font-semibold text-indigo-800 dark:text-white">Cloud Solutions</h2>
                    <p class="text-gray-600 dark:text-gray-300">Leverage the power of cloud computing for your business. We
                        provide cloud migration, management, and optimization services to enhance your IT infrastructure.
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
                    <p class="text-gray-600 dark:text-gray-300">Harness the power of artificial intelligence and machine
                        learning. We develop smart solutions that automate processes and provide valuable predictions.</p>
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
