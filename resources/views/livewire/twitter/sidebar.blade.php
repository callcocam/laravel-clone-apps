<div class="w-1/5 border-r border-tw-lighter px-2 lg:px-6 py-2 flex flex-col justify-between">
    <div>
        <button class="h-12 w-12 hover:bg-tw-light-blue text-3xl rounded-full text-tw-blue focus:outline-none">
            <i class="fab fa-twitter"></i>
        </button>
        <div>
            @foreach($this->menus as $menu)
              <button wire:click="setActive('{{$menu->id}}')" class="{{ $active == $menu->id ?'text-tw-blue':'' }} hover:text-tw-blue flex items-center py-2 px-4 hover:bg-tw-light-blue rounded-full mr-auto focus:outline-none">
                  <i class="{{ $menu->icon }} text-2xl mr-4 text-left"></i>
                  <p class="text-lg font-semibold text-left hidden lg:block">{{ $menu->name }}</p>
              </button>
            @endforeach
        </div>
        <button class="text-white bg-tw-blue rounded-full font-semibold focus:outline-none w-12 h-12 lg:h-auto lg:w-full p-3 hover:bg-tw-dark-blue">
            <p class="hidden lg:block">Tweetar</p>
            <i class="fas fa-plus lg:hidden"></i>
        </button>
    </div>
    <div class="lg:w-full relative" x-data="{ open:false}" @click.away="open = false" @close.stop="open = false">
        <button @click="open =!open" class="flex items-center w-full hover:bg-tw-light-blue rounded-full p-2 focus:outline-none">
            <img class="w-10 h-10 rounded-full border border-tw-lighter" src="{{ asset('img/15.jpg') }}" alt="Avatar">
           <div class="ml-4">
               <p class="text-sm font-bold leading-tight">Claudio campos</p>
               <p class="text-sm leading-tight">@callcocam</p>
           </div>
            <i class="hidden lg:block fas fa-ellipsis-h ml-auto text-lg"></i>
        </button>
           <div
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="transform opacity-0 scale-95"
               x-transition:enter-end="transform opacity-100 scale-100"
               x-transition:leave="transition ease-in duration-75"
               x-transition:leave-start="transform opacity-100 scale-100"
               x-transition:leave-end="transform opacity-0 scale-95"
               x-show="open"
                @click="open = false"
                class="absolute bottom-0 left-0 w-64 rounded-lg shadow-md border-tw-lightest bg-white mb-16">
               <button class="flex items-center w-full hover:bg-tw-light-blue rounded-full p-2 focus:outline-none">
                   <img class="w-10 h-10 rounded-full border border-tw-lighter" src="{{ asset('img/15.jpg') }}" alt="Avatar">
                   <div class="ml-4">
                       <p class="text-sm font-bold leading-tight">Claudio campos</p>
                       <p class="text-sm leading-tight">@callcocam</p>
                   </div>
                   <i class="fas fa-check ml-auto text-tw-blue"></i>
               </button>
               <button class="w-full text-left hover:bg-tw-lightest border-t border-tw-lighter  p-3 text-sm focus:outline-none">Adicionar conta existente</button>
               <button class="w-full text-left hover:bg-tw-lightest border-t border-tw-lighter  p-3 text-sm focus:outline-none">Sair de @callcocam</button>
           </div>
    </div>
</div>
