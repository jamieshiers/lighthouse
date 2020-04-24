@section('title', 'Venues')
<div>
    <div class="bg-white flex  py-4 items-center justify-between border-b border-gray-200 ">
        <div>
            <div class="inline-block relative ">
                <select wire:model="perPage"
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option>10</option>
                    <option>15</option>
                    <option>25</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
        @can('Create Venues')
            <div>
                <a href="{{ route('venues.create') }}"
                   class="w-1/4 flex md:w-auto items-center pl-2 pr-2 py-2  text-sm text-white bg-green-400 rounded hover:bg-green-600">
                    <x:heroicon-o-plus-circle class="h-6 w-6 text-white"/>
                    <span class="pl-2">Add Venue</span>
                </a>
            </div>
        @endcan
    </div>
    <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            Short Name
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            Full Name
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            Capacity
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            Category
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            Ship
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            Owner
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $room->short_name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $room->name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $room->capacity }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $room->category }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $room->ships->ship_name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $room->owners->name }}</td>
                            @can('Edit Venues')
                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                <a href="{{ url('settings/venues', $room->id, '/edit') }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--  <th class="px-6 py-3 text-white font-bold tracking-wider uppercase text-xs"><a wire:click.prevent="sortBy('short_name')" role="button" href="#">Short Name</a></th> -->


    </table>
    <div class="bg-white  py-3 flex items-center justify-between ">
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
