@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between border-b border-grey-200 mb-4">
        <h1 class="w-1/2 md:w-auto text-blue-800 text-2xl font-light text-left tracking-wide">Add New Venue</h1>
    </div>

    <x-text-field
            label="Test your email first"
            placeholder="Email(s) comma separated"
            name="emails"
            :required="true"
            type="text"
    />





@endsection
