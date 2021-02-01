<div class="w-full md:w-1/2 h-full overflow-scroll">
    <div class="px-5 py-3 border-b border-tw-lighter flex items-center justify-between">
        <h1 class="text-xl font-bold">Pagina inicial</h1>
        <i class="far fa-star text-xl text-blue"></i>
    </div>
    <div class="px-5 py-3 border-b-8 border-tw-lighter flex">
        <div class="flex-none">
            <img class="flex-none w-12 h-12 rounded-full border border-tw-lighter" src="{{ asset('img/15.jpg') }}"
                 alt="Avatar">
        </div>
        <form class="w-full px-4 relative">
            <textarea wire:model="comment" placeholder="O que esta acontecendo?"
                      class="mt-3 pb-3 w-full focus:outline-none border-none"></textarea>
            <div class="flex items-center">
                <i class="text-lg text-tw-blue mr-4 far fa-image"></i>
                <i class="text-lg text-tw-blue mr-4 fas fa-film"></i>
                <i class="text-lg text-tw-blue mr-4 far fa-chart-bar"></i>
                <i class="text-lg text-tw-blue mr-4 far fa-smile"></i>
            </div>
            <button type="button" wire:click="addTweet"
                    class="h-10 px-4 text-white font-semibold bg-tw-blue hover:bg-tw-dark-blue focus:outline-none rounded-full absolute bottom-0 right-0">
                Tweetar
            </button>
        </form>
    </div>

    <div class="flex flex-col-reverse">
        @if($this->tweets)
            @foreach($this->tweets as $tweet)
                {{ $tweet->content }}
            @endforeach
        @endif
    </div>

</div>
