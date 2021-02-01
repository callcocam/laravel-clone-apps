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
