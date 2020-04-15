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

    @livewire('venues-table')

@endsection
