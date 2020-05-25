@extends('layouts.app')

@section('content')
    @foreach($details as $detail)
        <h2 class="pt-6 mb-4 text-lg font-bold">View Guest Log - {{ $detail->log_number }}</h2>
    @endforeach
    <div class="md:grid md:grid-cols-4 md:gap-6">
        <div class="md:col-span-3">
            @foreach($details as $detail)
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="border-b border-gray-200 px-4 py-5 sm:px-6">
                        <div class="-mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
                            <div class="mt-4">
                                <h3 class="text-lg leading-6 tracking-wide font-semibold text-gray-900">
                                    {{ $detail->short_description }}
                                </h3>
                                <span class="mt-1 text-sm leading-5 text-gray-500">{{ $detail->guest->cabin }} - {{ $detail->guest->first_name }} {{$detail->guest->last_name}}</span>
                                <p class="mt-1 text-sm leading-5 text-gray-500"> Created
                                    at {{ $detail->created_at->format('g.ia - j M Y') }}</p>
                            </div>
                            <div class="mt-4 flex-shrink-0">
                                    <span class="inline-flex rounded-md shadow-sm">
                                        <button type="button"
                                                class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                                            Add New Response
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        @if($detail->updated_at < \Carbon\Carbon::now()->subHours(24))
                            <div class="max-w-full bg-red-200 py-4 px-4">
                                <div class="flex overflow-hidden">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-200 text-red-800">This log was last updated {{ $detail->updated_at->diffForHumans(['parts' => 2]) }}. Please provide a status update. </span>
                                </div>
                            </div>

                        @endif
                    </div>

                    @foreach($detail->GuestLogComments as $comment)
                        <div class="border-b border-gray-200 px-4 py-5 sm:p-6">
                            <h3 class="pb-2" >{{ $comment->user->name }} <span class="mt-1 text-sm leading-snug text-gray-500">{{ $comment->created_at->format('g.ia - j M Y') }}</span></h3>
                            <p class="text-gray-900 leading-relaxed">{{ $comment->comment_text }}</p>
                        </div>
                    @endforeach

                    <div class=" px-4 py-4 sm:px-6">
                      <h3 class="mb-4">Add a Response</h3>
                        <form method="post" action="{{ route('guestLog.update', $detail->log_number) }}">
                            @csrf
                            <div>
                                <label for="response" class="sr-only">Response</label>
                                <div class="relative rounded-md shadow-sm">
                                    <textarea name="response"id="response" class="border border-gray-200 form-input w-full sm:text-sm sm:leading-5" rows="8" placeholder="Type your response here..."></textarea>
                                </div>
                                <button type="submit"
                                        class="mt-4 mb-4 float-right inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                                    Add New Response
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="md:col-span-1">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <h1>Sidebar</h1>
            </div>
        </div>

    </div>

@endsection
