<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="{{  asset('admin-template/style.css') }}">

        <!-- taiwind-elements -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />


        <!-- Styles -->
        @livewireStyles

        <!-- Icons pack -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <!-- ChartJS -->


        <!-- Scripts -->
        <script src="{{ asset('admin-template/dashboard.js') }}"></script>



        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- taiwind-elements script -->
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    </head>
    <body class="font-sans antialiased">

        @include('parials.sidebar')


        <main>
            @yield('content')
        </main>

        @stack('modals')

        @livewireScripts
    </body>
</html>
