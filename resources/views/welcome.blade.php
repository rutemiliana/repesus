<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RePeSUS') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Entrar</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="flex justify-center items-center bg-blue-50 min-h-screen">
        <div>
            <x-application-logo class="mx-auto h-20 w-auto" style=" width: 5000px" alt="Logo da Rede de Pesquisadores" />

        </div>
    </div>

    <div class="bg-blue-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Quem Somos</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    Conheça nossa missão e equipe
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Somos uma comunidade de pesquisadores dedicados a promover o avanço científico através da colaboração e inovação.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-blue-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Nossa Equipe</h3>
                <p class="mt-2 text-base text-gray-500">
                    Conheça a Rede de Pesquisadores do SUS - DF.
                </p>
            </div>

            <div class="mt-10">
                <ul class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <li>
                        <div class="space-y-6">
                            <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="{{asset('logofepecs.png')}}" alt="LOGO FEPECS">
                            <div class="space-y-2">
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>FEPECS</h3>
                                    <p class="text-blue-600">Mantenedora da Rede</p>
                                </div>
                                <p class="text-gray-500">
                                Fundação de Ensino e Pesquisa em Ciências da Saúde
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="space-y-6">
                            <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="{{asset('repesus.png')}}" alt="Foto RePeSUS e sob o mapa de Brasília">
                            <div class="space-y-2">
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Hospitais da Secretaria de Saúde</h3>
                                    <p class="text-blue-600">Hospitais da SES que atendam SUS</p>
                                </div>
                                <p class="text-gray-500">
                                Hospitais da Secretaria de Saúde
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="space-y-6">
                            <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="{{asset('logoescs.png')}}" alt="Logo da ESCS">
                            <div class="space-y-2">
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>ESCS</h3>
                                    <p class="text-blue-600"> Escola Superior de Ciências da Saúde</p>
                                </div>
                                <p class="text-gray-500">
                                Escola Superior de Ciências da Saúde
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>