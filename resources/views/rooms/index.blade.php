@extends('layouts.app')

@section('content')

    <h1>Rooms</h1>

    <table>
        <tr>
            <th>Short Name</th>
            <th>Full Name</th>
            <th>Capacity</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->short_name }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->capacity }}</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        @endforeach
    </table>

@endsection
