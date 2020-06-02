<div>
    <div>
        <input
                type="search"
                class=""
                Placeholder="Search Guests..."
                wire:model="query"
                wire:keydown.escape="reset"
                wire:keydown.tab="reset"
                wire:keydown.ArrowUp="decrementHighlight"
                wire:keydown.ArrowDown="incrementHightlight"
                wire:keydown.enter="selectContact"
        />
        <div wire:loading class="">
            <div class="">Searching...</div>
        </div>

        @if(!empty($query))
            <div class="" wire:click="reset"></div>
            <div class="">
                @if(!empty($guests))
                    @foreach($guests as $i => $guest)
                        <a
                                href="{{ route('show-contact', $guest['id']) }}"
                                class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}"
                        >{{ $guest['name'] }}</a>
                    @endforeach
                @else
                    <div class="">No Results</div>
                @endif
            </div>
        @endif

    </div>
</div>
