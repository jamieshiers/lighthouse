@extends('layouts.app')

@section('content')

<h1>Add a Guest Log</h1>
<form method="POST" action="{{ route('guestLog.store') }}">
    @csrf
    <h3>Guest Details</h3>
    <p>Guest Name: {{ $guest->first_name }} {{ $guest->last_name }}</p>
    <P>Cabin Number: {{ $guest->cabin }} - Booking Ref: {{ $guest->booking_reference }}</P>


    <input type="text" id="booking_reference" name="booking_reference" hidden  value="{{ $guest->booking_reference }}">

    <x-select-field label="Officer In Charge" name="user_id" :options="['11' => 'Jamie Shiers']"></x-select-field>
    <x-text-field label="Short Description" type="text" name="short_description" placeholder="ß"></x-text-field>
    <x-text-field label="Additional Comments" type="text" name="comment" placeholder="ß"></x-text-field>
    <x-text-field label="Guest Emotion" type="text" name="guest_emotion" placeholder="ß"></x-text-field>

    <button type="submit">Add Log</button>
</form>

@endsection
