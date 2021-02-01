<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <div id="b-container" class="b-container expanded z-50 shadow-md flex flex-col bg-white burger-open">
        <div class="b-header min-w-24 z-30 flex items-center px-6 pb-4 pt-7">
            <div class="flex">
                <img class="w-10 h-10 mr-4" src="{{ asset('images/logo.svg') }}" alt="Avatar">
                <span class="b-title-logo expanded mt-2 text-vuexy-700 text-2xl font-bold">Vuexy</span>
            </div>
            <span id="b-menu" class="b-menu">
                <span class="b-menu-span"></span>
            </span>
        </div>
        <nav class="b-nav h-screen overflow-y-auto mt-2 pb-24 pl-5">
            @for($i=0;$i<= 50; $i++)
                <a class="b-link flex items-center py-2  hover:text-vuexy-800" href="">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="b-link-text ml-4">Home ({{ $i }})</span>
                </a>
            @endfor
        </nav>
    </div>

    <div id="b-main" class="mx-4">
        <header class="flex-1 pt-7">
            <div class="flex justify-between items-center h-16 bg-white shadow">
                <div class="flex justify-between space-x-4 mx-4">
                    <a class="text-xl text-gray-400 font-light" href="">
                        <i class="far fa-envelope"></i>
                    </a>
                    <a class="text-xl text-gray-400 font-light" href="">
                        <i class="far fa-comment-alt"></i>
                    </a>
                    <a class="text-xl text-gray-400 font-light" href="">
                        <i class="far fa-calendar"></i>
                    </a>
                    <a class="text-xl text-gray-400 font-light" href="">
                        <i class="far fa-check-square"></i>
                    </a>
                </div>
                <div class="flex-1 text-right mx-4">
                    dsfs
                </div>
            </div>
        </header>
        <section class="flex-1 block overflow-y-auto h-screen pt-3 pb-32">
            {{ $slot }}
        </section>
    </div>
</main>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    'use strict';
    (function () {
        let burgerOpen = 'burger-open';
        let burgerClose = 'burger-close';
        let burgerMainClass = 'b-main-open';
        let burgerMenuId = document.getElementById('b-menu');
        let burgerMenu = document.getElementsByClassName('b-menu')[0];
        let burgerMain = document.getElementById('b-main');
        let burgerContain = document.getElementsByClassName('b-container')[0];
        let burgerContainID = document.getElementById('b-container');
        let availWidth = window.innerWidth;
        let listenerClose = function (bM) {
            if (bM.target.classList.contains(burgerClose)) {
                if (window.localStorage.getItem(burgerClose)) {
                    menu()
                }
            }
        }

        let listenerOpen = function (bM) {
            if (bM.target.classList.contains(burgerOpen)) {
                if (window.localStorage.getItem(burgerClose)) {
                    menu()
                }
            }
        }

        window.addEventListener('resize', function () {
            init()
        });

        if (window.localStorage.getItem(burgerClose)) {
            addEvent(burgerContain, 'mouseenter', listenerClose)
            addEvent(burgerContain, 'mouseleave', listenerOpen)
            burgerMain.classList.add(burgerMainClass)
            menu()
        }


        burgerMenu.addEventListener('click', function (El) {

            if (availWidth > 1024 && !window.localStorage.getItem('collapsed')) {
                window.localStorage.setItem('collapsed', true);
            } else {
                window.localStorage.removeItem('collapsed');
            }
            startLayout();
        }, false);

        function init() {
            availWidth = window.innerWidth;
            if (availWidth < 1024) {
                burgerMenuId.classList.remove('b-menu');
                burgerMenuId.classList.add('b-menu-close');
            } else {
                burgerMenuId.classList.add('b-menu')
                burgerMenuId.classList.remove('b-menu-close')
            }
            if (!window.localStorage.getItem('collapsed')) {
                if (availWidth < 1024) {
                    if (burgerContainID.classList.contains(burgerOpen)) {
                        if (!window.localStorage.getItem(burgerClose)) {
                            startLayout()
                        }
                    }
                } else {
                    if (burgerContainID.classList.contains(burgerClose)) {
                        if (window.localStorage.getItem(burgerClose)) {
                            startLayout()
                            burgerContainID.classList.add(burgerOpen)
                            burgerContainID.classList.remove(burgerClose)
                            burgerContainID.classList.remove('fixed')
                            burgerMain.classList.remove(burgerMainClass)
                        }
                    }
                }
            }
        }

        function startLayout() {
            if (window.localStorage.getItem(burgerClose)) {
                window.localStorage.removeItem(burgerClose);
                removeEvent(burgerContain, 'mouseenter', listenerClose)
                removeEvent(burgerContain, 'mouseleave', listenerOpen)
                burgerMain.classList.remove(burgerMainClass);
                menu()

            } else {
                window.localStorage.setItem(burgerClose, true);
                addEvent(burgerContain, 'mouseenter', listenerClose)
                addEvent(burgerContain, 'mouseleave', listenerOpen)
                burgerMain.classList.add(burgerMainClass)
                menu()
            }
        }

        function addEvent(burgerContain, event, listener) {
            burgerContain.addEventListener(event, listener, false);
        }

        function removeEvent(burgerContain, event, listener) {
            burgerContain.removeEventListener(event, listener, false);
        }

        function menu() {
            if (window.localStorage.getItem(burgerClose)) {
                // if (burgerMenuId.classList.contains('b-menu')) {
                //     burgerMenuId.classList.remove('b-menu');
                //     burgerMenuId.classList.add('b-menu-close');
                // } else {
                //     burgerMenuId.classList.add('b-menu');
                //     burgerMenuId.classList.remove('b-menu-close');
                // }
                burgerContainID.classList.toggle(burgerOpen);
                burgerContainID.classList.toggle(burgerClose);
                if (burgerContainID.classList.contains(burgerOpen)) {
                    burgerContainID.classList.add('fixed');
                } else {
                    setTimeout(function () {
                        burgerContainID.classList.remove('fixed');
                    }, 200)
                }
            } else {
                burgerContainID.classList.remove('fixed');
            }
        }

        init()

    })();
</script>
@livewireScripts
</body>
</html>
