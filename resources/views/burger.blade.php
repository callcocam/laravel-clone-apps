<x-burger.app-layout>
    <nav class="bg-grey-light py-3 rounded font-sans w-full">
        <ol class="list-reset flex text-gray-500 items-center font-light">
            <li><a href="#" class="text-3xl border-r-2 px-2 mr-2">Dashboard</a></li>
            <li><a href="#" class="text-blue font-normal">Library</a></li>
            <li><i class="fas fa-angle-right mx-2 mt-1"></i></li>
            <li>Data</li>
        </ol>
    </nav>
    <div class="px-4 grid grids-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">

        @for($i=0;$i<= 50; $i++)
            <div>
                Not all state variants are enabled for all utilities by default due to file-size considerations, but we've tried our best to enable the most commonly used combinations out of the box.

                For a complete list of which variants are enabled by default, see the reference table at the end of this page.

                If you need to target a state that Tailwind doesn't support, you can extend the supported variants by
            </div>
        @endfor

         </div>
</x-burger.app-layout>
