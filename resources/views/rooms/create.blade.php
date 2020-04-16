@extends('layouts.app')

@section('content')


    <div class="flex items-center justify-between border-b border-grey-200 mb-4">
        <h1 class="w-1/2 md:w-auto text-blue-800 text-2xl font-light text-left tracking-wide">Add New Venue</h1>
    </div>
    <form method="POST" action="{{ route('venues.store') }}">
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
        <label for="Owner">Owner</label>
        <select name="owner" id="owner">

            @foreach($owners as $owner => $n)
                <option value="{{ $n->id }}">
                    {{ $n->name }}
                </option>
            @endforeach
        </select>

        <label for="Ship">Ship</label>
        <select name="ship" id="ship">

            @foreach($ships as $ship)
                <option value="{{ $ship->id }}">
                    {{ $ship->ship_name }}
                </option>
            @endforeach

        </select>
        <x-text-field
            label="Venue Capacity"
            placeholder="500"
            name="capacity"
            :required="true"
            type="number"
        />

        <label for="category">Category</label>
        <select name="category" id="category">
            <option value="guest_venue">Guest Venue</option>
            <option value="crew_venue">Crew Venue</option>
            <option value="guest_cabin">Guest Cabin</option>
            <option value="crew_cabin">Crew Cabin</option>
        </select>
        <button
            class="font-bold uppercase tracking-wide text-white bg-teal-600 hover:bg-teal-800 rounded py-2 px-4 w-full mt-2"
            type="submit">Create New Venue
        </button>
    </form>






@endsection
