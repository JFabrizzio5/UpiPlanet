@extends('layout')

@section('title', 'Home')

@section('content')
    <section>
        <div class="grid items-center max-w-screen-xl px-4 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <!-- Contenido principal -->
            <div class="mr-auto text-center place-self-center lg:col-span-7 lg:text-left">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    UpiPlanet
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Hola, este es tu lugar de productividad y gran planeta de experiencias al siguiente nivel.
                </p>
                <a href="/Menu"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-900">
                    🪐 Inicia tu experiencia
                    <svg class="w-5 h-5 ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="https://link.mercadopago.com.mx/upiplanetdonacion"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    🤲 Donar al proyecto
                </a>
            </div>
            <!-- Imagen con animación de rebote -->
            <div class="flex justify-center lg:mt-0 lg:col-span-5">
                <img src="{{ asset('img/Fondo.webp') }}" alt="fondo"
                    class="object-cover object-top w-full h-full animate-bounce-smooth">
            </div>
        </div>
    </section>

    <style>
        /* Definir la animación bounce más suave */
        @keyframes bounce-smooth {
            0% {
                transform: translateY(0);
            }

            30% {
                transform: translateY(-12px);
            }

            50% {
                transform: translateY(0);
            }

            70% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0);
            }
        }

        /* Aplicar la animación más suave */
        .animate-bounce-smooth {
            animation: bounce-smooth 4s ease-in-out infinite;
        }
    </style>








    <livewire:counter /> {{-- Componente de Livewire --}}
@endsection
