<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADMIN-Template</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body class="overflow-y-hidden">
<!-- Page Content -->
<main class="relative flex min-h-screen w-full bg-gray-100">
    <x-admin.sidebar/>
    <div id="b-main" class="mx-4">
        <x-admin.header/>
        <section class="flex-1 block h-screen overflow-y-auto pt-3 mb-5">
            <div class="pb-5">
                {{ $slot }}
            </div>
            <x-admin.footer/>
        </section>
    </div>
</main>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/sidebar.js') }}" defer></script>
@livewireScripts
</body>
</html>
