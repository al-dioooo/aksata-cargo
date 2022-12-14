<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="BxEv3A5Qq5ug3FZP8QJ4g5kcMFSszaktF1vgGf0cTHU">

    <link rel="icon" href="{{ asset('favicon.ico') }}" />

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://stijndv.com">
    <link rel="stylesheet" href="https://stijndv.com/fonts/Eudoxus-Sans.css">


    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    <script async src="https://www.instagram.com/embed.js"></script>
</body>

</html>
