@extends('layouts.app')

@section('content')
    <div class="md:grid md:grid-cols-5">
        <div class="md:col-span-1 bg-gray-100 h-full">
            <h1>Left Sidebar</h1>
        </div>
        <!-- Main Comment Body -->
        <div class="md:col-span-4">
            @foreach($details as $detail)
                <div class="bg-white overflow-hidden border-l border-gray-300">
                    <div class="border-b border-gray-300 px-4 py-5 ">
                        <a href="{{ route('guestLog.index') }}" class="text-indigo-600 no-underline">
                            <x:heroicon-o-arrow-narrow-left class="h-6 w-6 mr-4 inline"/>
                            <span class="align-middle">Guest Logs</span>
                        </a>
                        <span class="text-gray-800 align-middle"> / {{ $detail->short_description }}</span><span
                                class="align-middle ml-4 text-sm leading-5 text-gray-500">#{{ $detail->log_number }}</span>
                    </div>
                </div>
                <!-- Do we need to close out the forech here? -->
        </div>
        <!-- Main Comments Section -->
        <div class="bg-white overflow-hidden md:col-start-2 md:col-span-3 border-l border-gray-300">
            @foreach($detail->GuestLogComments as $comment)
                <div class="border-b border-gray-200 mr-4 ml-4 sm:p-6">
                    <h3 class="ml-4 text-lg">{{ $comment->user->name }}</h3>
                    <span class="mt-1 text-sm leading-snug text-gray-500 pb-4 ml-4">
                        @if($loop->first)
                            Created on {{ $comment->created_at->format('j M Y') }}
                        @else
                            Updated at {{ $comment->created_at->format('j M Y') }}
                            at {{ $comment->created_at->format('g:i a') }}
                        @endif
                    </span>
                    <p class="text-gray-800 font-light leading-6 mt-2 ml-4">{{ $comment->comment_text }}</p>
                </div>
            @endforeach
            <div class=" px-4 py-4 sm:px-6">

                <form method="post" action="{{ route('guestLog.update', $detail->log_number) }}">
                    @csrf
                    <div>
                        <label for="response" class="sr-only">Response</label>
                        <textarea name="response" id="response"
                                  class="w-11/12 focus:outline-none focus:shadow-outline resize-none rounded border border-gray-300 form-input w-auto ml-8 mr-8"
                                  rows="8" placeholder="Type your response here..."></textarea>
                        <div class="float-right mr-6">

                            <button type="submit"
                                    class="mt-4 mb-4 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                                <x:heroicon-o-plus-circle class="h-6 w-6 text-white inline align-middle pr-2"/>
                                <span>Add Response</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="bg-white overflow-hidden md:col-span-1 border-gray-300 border-l">
            <div class="ml-4 mr-4">
                @if($detail->status = 'Open')
                    <div class="mt-2 mb-2 pb-2 border-b border-gray-300">
                        <x:heroicon-s-lock-open class="h-6 w-6 text-green-500 align-middle pr-2 inline"/>
                        <span class="inline text-green-500 font-medium align-middle text-sm">Open Log</span>
                    </div>
                @else
                    <div class="mt-2 mb-2 pb-2 border-b border-gray-300">
                        <x:heroicon-s-lock-open class="h-6 w-6 text-red-500 align-middle pr-2 inline"/>
                        <span class="inline text-red-500 font-medium align-middle">Closed Log</span>
                    </div>
                @endif
                @if($detail->updated_at < \Carbon\Carbon::now()->subHours(24))
                    <div class="bg-red-200 p-2 mt-2 mb-2 pb-2 border-b border-gray-300">
                        <span class="mt-4 text-sm leading-5 font-semibold rounded-full text-red-800">This log was last updated {{ $detail->updated_at->diffForHumans(['parts' => 2]) }}. </span>
                    </div>
                @endif
                <div class="mt-2 mb-2 pb-2 border-b border-gray-300 text-sm">
                    <h3 class="font-medium text-base">Guest Details</h3>
                    <p><span>Guest Name:</span> {{ $detail->guest->first_name }} {{ $detail->guest->last_name }}</p>
                    <p><span>Cabin: </span> {{ $detail->guest->cabin }}</p>
                    <p><span>Booking Ref: </span> {{ $detail->guest->booking_reference }}</p>
                </div>

                    <x-form-button :action="route('guestLog.closeLog', $detail->log_number)" class="mt-2 px-4 py-2 border border-gray-500 text-sm leading-5 font-medium rounded-md text-gray-800">
                        <x:heroicon-s-lock-closed class="h-6 w-6 text-gray-500 inline align-middle pr-2"/>
                        <span class="align-middle">Close Log</span>
                    </x-form-button>

            </div>

        </div>
        <div>

        </div>


        @endforeach
    </div>

    </div>
    </div>


    </div>

@endsection
