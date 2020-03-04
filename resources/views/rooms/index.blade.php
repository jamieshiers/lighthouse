@extends('layouts.app')

@section('content')

    <h1>Rooms</h1>

    <table>
        <tr>
            <th>Short Name</th>
            <th>Full Name</th>
            <th>Capacity</th>
            <th>Owner</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->short_name }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->capacity }}</td>
                <td>{{ $room->owner }}</td>
                <td>
                    <button class="ml-5 flex items-center pl-2 pr-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-bl-md hover:bg-gray-700">Edit</button>
                </td>
                <td>
                    <button>Delete</button>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
