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
        <button class="text-white bg-tw-blue rounded-full font-semibold focus:outline-noe w-12 h-12 lg:h-auto lg:w-full p-3 hover:bg-tw-dark-blue">
            <p class="hidden lg:block">Tweetar</p>
            <i class="fas fa-plus lg:hidden"></i>
        </button>
    </div>
</div>
