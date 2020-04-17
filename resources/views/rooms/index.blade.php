@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between border-b border-grey-200 mb-4">
        <h1 class="w-1/2 md:w-auto text-blue-800 text-2xl font-light text-left tracking-wide">Venue Management</h1>
        <a href="{{ route('venues.create') }}" class="w-1/4 flex md:w-auto items-center pl-2 pr-2 py-2 mb-2 text-sm text-white bg-green-400 rounded hover:bg-green-600">
            <x:heroicon-o-plus-circle class="h-6 w-6 text-white" />
            <span class="pl-2">Add Venue</span>
        </a>
        </button>
    </div>

    @livewire('venues-table')

@endsection
