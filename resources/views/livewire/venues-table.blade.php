<div>
    <div class="bg-white flex  py-4 items-center justify-between border-b border-gray-200 ">
        <div>
            <div class="inline-block relative ">
                <select wire:model="perPage" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option>10</option>
                    <option>15</option>
                    <option>25</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
        <div class="relative">
            <input class="border-gray-300 border-2 bg-white h-10 px-5 pr-16 rounded-lg text-sm foucs:outline-none"
                   wire:model="search"  type="search" placeholder="Search Venues...">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <x:heroicon-o-search class="text-gray-400 h-4 w-4 fill current"/>
            </button>
        </div>
        @can('create venues')
        <div>
            <a href="{{ route('venues.create') }}"
               class="w-1/4 flex md:w-auto items-center pl-2 pr-2 py-2  text-sm text-white bg-green-400 rounded hover:bg-green-600">
                <x:heroicon-o-plus-circle class="h-6 w-6 text-white"/>
                <span class="pl-2">Add Venue</span>
            </a>
        </div>
        @endcan
    </div>
    <table class="w-full whitespace-no-wrap overflow-hidden">
        <thead class="bg-blue-800">
        <tr class="text-left">
            <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xs"><a
                    wire:click.prevent="sortBy('short_name')" role="button" href="#">Short Name</a></th>
            <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xs"><a
                    wire:click.prevent="sortBy('name')" role="button" href="#">Full Name
                    <x:heroicon-o-selector class="h-4"/>
                </a></th>
            <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xs">Capacity</th>
            <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xs">Category</th>
            <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xss">Ship</th>
            <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xs">Owner</th>
            <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xs"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr class="hover:bg-blue-100  border-t border-gray-200 overflow-hidden">
                <td><span class="py-4 px-6 flex items-center">{{ $room->short_name }}</span></td>
                <td><span class="py-4 px-6 flex items-center">{{ $room->name }}</span></td>
                <td><span class="py-4 px-6 flex items-center">{{ $room->capacity }}</span></td>
                <td><span class="py-4 px-6 flex items-center">{{ $room->category }}</span></td>
                <td><span class="py-4 px-6 flex items-center">{{ $room->ship_name }}</span></td>
                <td><span class="py-4 px-6 flex items-center">{{ $room->user_name }}</span></td>
                <td>
                    <button
                        class="flex items-center pl-2 pr-4 py-2 ml-6 text-sm text-white bg-blue-700 rounded hover:bg-blue-800">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>

                        Edit
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
        <div>
            <p class="text-sm leading-5 text-gray-700">
                Showing
                <span class="font-medium">{{ $rooms->firstItem() }}</span>
                to
                <span class="font-medium">{{ $rooms->lastItem() }}</span>
                of
                <span class="font-medium">{{ $rooms->total() }}</span>
                results
            </p>
        </div>
        <div class="col">
            {{ $rooms->links('layouts.partials.pagination') }}
        </div>

    </div>
</div>
