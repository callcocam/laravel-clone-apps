<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        input:focus, textarea:focus, select:focus{
            outline: none;
        }
    </style>
    @livewireStyles
</head>
<body>
<!-- Page Content -->
<main class="flex container h-screen w-full mx-auto">
    {{ $slot }}
</main>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@livewireScripts
</body>
</html>
