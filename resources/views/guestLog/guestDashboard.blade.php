@extends('layouts.app')

@section('content')

    {{ $guests->first_name }} {{ $guests->last_name }}
    {{ $guests->cabin }} | {{ $guests->booking_reference }}


    @foreach($logs as $log)
        @if($log->status == 'Open')
            <h3>Open Logs</h3>
            {{ $log->short_description }}
        @else
            <h3>Return a blank state here</h3>
        @endif

        @if($log->status == 'Closed')
            <h3>Closed Logs</h3>
            {{ $log->short_description }}
        @else
            <h3>Closed Logs</h3>
            <h3>Return a blank state here</h3>
        @endif

    @endforeach

    <a href="{{ route('guestLog.add', $guests->booking_reference) }}">Add New Guest Log</a>

@endsection
