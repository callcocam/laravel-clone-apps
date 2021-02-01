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
