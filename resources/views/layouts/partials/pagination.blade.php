@if ($paginator->hasPages())
    <nav>
        <span class="relative z-0 inline flex shadow-sm">
            <!-- Previous Page Button -->

            @if ($paginator->onFirstPage())
                <li class="page-item disabled relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                    aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">
                        <x:heroicon-o-arrow-narrow-left class="h-5 w-5 text-gray-400"/>
                    </span>
                </li>
            @else
                <li class="page-item -relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                <button type="button" class="page-link" wire:click="previousPage" rel="prev"
                        aria-label="@lang('pagination.next')">
                   <x:heroicon-o-arrow-narrow-left class="h-5 w-5 text-gray-700"/>
                </button></li>
            @endif
                <!-- Page Links -->
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled d-none d-md-block" aria-disabled="true"><span
                                class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <button
                                class="page-item active -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                aria-current="page"
                                disabled>
                                    <span class="page-link">{{ $page }}</span>
                                </button>

                            @else
                            <li>
                               <button type="button" class="page-item -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                       wire:click="gotoPage({{ $page }})">
                                <span class="class="page-link">{{ $page }}</span></button>
                            </li>


                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item -ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                <button type="button" class="page-link" wire:click="nextPage" rel="next"
                        aria-label="@lang('pagination.next')">
                   <x:heroicon-o-arrow-narrow-right class="h-5 w-5 text-gray-700"/>
                </button>
            </li>
                @else
                    <li class="page-item disabled -ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                        aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">
                    <x:heroicon-o-arrow-narrow-right class="h-5 w-5 text-gray-400"/>
                </span>
            </li>
                @endif

        </span>
    </nav>
@endif
