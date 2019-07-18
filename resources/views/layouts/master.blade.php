<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @include('layouts.partials.meta_tags')

        <!-- Scripts -->
        <script src="{{ mix('/js/app.js') }}" defer></script>
        @if (app()->environment('production'))
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.id') }}"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', '{{ config('services.google_analytics.id') }}');
            </script>
        @endif

        @include('layouts.partials.favicon')

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>

    <body class="font-sans bg-gray-100 text-gray-900">
        @yield('body')

        @stack('scripts')
    </body>
</html>
