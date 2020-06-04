<div>
    <div>
        <input
                type="search"
                class=""
                Placeholder="Search Guests..."
                wire:model="query"
                wire:keydown.ArrowUp="decrementHighlight"
                wire:keydown.ArrowDown="incrementHightlight"
                wire:keydown.enter="selectGuest"
        />
        <div wire:loading class="">
            <div class="">Searching...</div>
        </div>

        @if(!empty($query))
            <div class="" wire:click="resetProps"></div>
            <div class="">

                @if(!empty($guests))
                    @foreach($guests as $i => $guest)
                        <a
                                href="{{ route('guest.show', $guest['booking_reference']) }}"
                                class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}"
                        >{{ $guest['first_name'] }} {{ $guest['last_name'] }} - {{ $guest['cabin'] }}
                            | {{ $guest['booking_reference'] }}</a>
                    @endforeach
                @else
                    <div class="">No Results</div>
                @endif


            </div>
        @endif

    </div>
</div>
