@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between border-b border-grey-200 mb-4">
        <h1 class="w-1/2 md:w-auto text-blue-800 text-2xl font-light text-left tracking-wide">Add New Venue</h1>
    </div>
    <form action="POST" action="{{ route('venues.create') }}">
        @csrf
        <x-text-field
                label="Venue Short Name"
                placeholder="Short Name"
                name="short_name"
                :required="true"
                type="text"
        />
        <x-text-field
                label="Venue Long Name"
                placeholder="Long Name"
                name="name"
                :required="true"
                type="text"
        />
        <x-text-field
                label="Owner"
                placeholder="Owner"
                name="user_id"
                :required="true"
                type="text"
        />
        <x-text-field
                label="Venue Capacity"
                placeholder="500"
                name="capacity"
                :required="true"
                type="number"
        />
    </form>






@endsection
