@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between border-b border-grey-200 mb-4">
        <h1 class="w-1/2 md:w-auto text-blue-800 text-2xl font-light text-left tracking-wide">Venue Management</h1>
        <button class="w-1/4 flex md:w-auto items-center pl-2 pr-2 py-2 mb-2 text-sm text-white bg-green-400 rounded hover:bg-green-600">
            <svg class="h-6 w-6 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Add Venue
        </button>
    </div>

    <table class="w-full whitespace-no-wrap overflow-hidden">
        <thead>
            <tr class="text-left">
                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Short Name</th>
                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Full Name</th>
                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Capacity</th>
                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Category</th>
                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Ship</th>
                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Owner</th>
                <th class="px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr class="hover:bg-blue-100  border-t border-gray-200 overflow-hidden">
                    <td><span class="py-4 px-6 flex items-center">{{ $room->short_name }}</span></td>
                    <td><span class="py-4 px-6 flex items-center">{{ $room->name }}</span></td>
                    <td><span class="py-4 px-6 flex items-center">{{ $room->capacity }}</span></td>
                    <td><span class="py-4 px-6 flex items-center">{{ $room->category }}</span></td>
                    <td><span class="py-4 px-6 flex items-center">{{ $room->ship }}</span></td>
                    <td><span class="py-4 px-6 flex items-center">{{ $room->owners->name }}</span></td>
                    <td>
                        <button class="flex items-center pl-2 pr-4 py-2 ml-6 text-sm text-white bg-blue-700 rounded hover:bg-blue-800">
                            <svg class="h-6 w-6"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>

                            Edit</button>
                    </td>
                </tr>
        @endforeach
        </tbody>

    </table>

@endsection
