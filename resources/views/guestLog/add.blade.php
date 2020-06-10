<x-app-layout title="Add New Guest Log">

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
    <div class="emotion">
        <label for="1">
            <input type="radio" name="guest_emotion" id="1" value="1">
            <span>😠</span>
        </label>

        <label for="2">
            <input type="radio" name="guest_emotion" id="2" value="2" >
            <span>🙁</span>
        </label>

        <label for="3">
            <input type="radio" name="guest_emotion" id="3" value="3">
            <span>🙁</span>
        </label>

        <label for="4">
            <input type="radio" name="guest_emotion" id="4" value="4">
            <span>😀</span>
        </label>

        <label for="5">
            <input type="radio" name="guest_emotion" id="5" value="5">
            <span>😃</span>
        </label>
    </div>


    <span class="inline-flex rounded-md shadow-sm">
  <button type="submit" class="inline-flex items-center px-3 py-3 border border-transparent text-xs leading-4 font-medium rounded text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
    Add Guest Log
  </button>
</span>
</form>

</x-app-layout>
