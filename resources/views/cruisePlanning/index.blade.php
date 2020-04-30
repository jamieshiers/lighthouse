@extends('layouts.app')

@section('title', 'Cruise Planning')

@section('content')

    <div>
        <div class="md:grid md:grid-cols-4 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 mb-3">Cruise Overview</h3>
                    <!-- Timeline -->
                    <div class="relative m-1">
                        <div class="border-r-2 border-blue-400 absolute h-full top-0" style="left:3px"></div>
                        <ul class="list-none m-0 p-0">
                            @foreach($days as $day)
                                <li class="mb-2">
                                    <div class="flex items-center mb-1">
                                        <div class="bg-blue-400 rounded-full h-2 w-2"></div>
                                        <div class="text-base flex-1 ml-4 text-gray-800">Day {{ $day->day_number }}
                                            - {{ $day->port->name }}</div>
                                    </div>
                                    @if(isset($day->arrival))
                                        <div class="ml-6">
                                            <p class="text-xs text-gray-500 leading-relaxed">
                                                <span
                                                    class="font-medium text-gray-600">Arr: </span>{{ $day->arrival->format('g.ia - j M Y ') }}
                                            </p>
                                            <p class="text-xs text-gray-500 leading-relaxed">
                                                <span
                                                    class="font-medium text-gray-600">Dep: </span>{{ $day->departure->format('g.ia - j M Y ') }}
                                            </p>
                                        </div>
                                    @else
                                        <div class="ml-6">
                                            <p class="text-xs text-gray-500 leading-relaxed">{{ $day->day_date->format('j M Y') }}</p>
                                        </div>
                                    @endif
                                    <div class="ml-6">
                                        <p class="text-xs text-gray-500 leading-relaxed">
                                            <span
                                                class="font-medium text-gray-600">Dress Code: </span>{{ $day->dress->name }}
                                        </p>
                                    </div>
                                    @if(isset($day->offset))
                                        @if($day->offset > 0)
                                            <div class="ml-4">
                                                <p class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-red-200 text-red-800">
                                                    Clocks Forward by {{ $day->offset }} Hour
                                                    at {{ $day->clock_change_time->format('g.ia')  }} </p>
                                            </div>
                                        @elseif($day->offset < 0 )
                                            <div class="ml-4">
                                                <p class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-green-200 text-green-800">
                                                    Clocks Back by {{ $day->offset }} Hour
                                                    at {{ $day->clock_change_time->format('g.ia')  }} </p>
                                            </div>
                                        @endif
                                     @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Main Body -->
            <div class="md:mt-0 md:col-span-3">
                @foreach($days as $day)
                    <div class="mt-2 shadow sm:rounded-md sm:overflow-hidden border-t-4 border-blue-400">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-3">Day {{ $day->day_number }}
                                - {{ $day->port->name }}</h3>
                            <hr>
                            <div class="grid grid-cols-6 gap-4">
                                <div class="col-span-2 mt-4">
                                    <h4 class="text-base font-medium leading-6 text-blue-900">Opening Times</h4>
                                    <hr class="mb-2">
                                    @foreach($venues as $venue)
                                    <p class="text-sm font-medium text-gray-600">{{ $venue->short_name }}: <Span
                                            class="text-gray-400">5.00pm-11.00pm</Span></p>
                                    @endforeach
                                </div>
                                <div class="col-span-2 mt-4">
                                    <h4 class="text-base font-medium leading-6 text-blue-900">Day's Promotions</h4>
                                    <hr class="mb-2">
                                    @foreach($promotions as $promo)
                                    @if($day->day_date->format('Y-m-d') == $promo->start->format('Y-m-d'))
                                    <p class="text-sm font-medium text-gray-600">{{$promo->promotion->title}}: <Span
                                            class="text-gray-400">{{ $promo->start->format('g.ia') }} - {{ $promo->finish->format('g.ia') }} </Span></p>
                                    @endif 
                                    @endforeach
                                    <a href="" class="text-indigo-600 hover:text-indigo-900 text-sm float-right">Add Promotion</a>
                                    
                                </div>
                                <div class="col-span-2 mt-4">
                                    <h4 class="text-base font-medium leading-6 text-blue-900">Day's Events</h4>
                                    <hr class="mb-2">
                                    <p class="text-sm font-medium text-gray-600">Shopping Centre: <Span
                                            class="text-gray-400">5.00pm-11.00pm</Span></p>
                                    <p class="text-sm font-medium text-gray-600">Shopping Centre: <Span
                                            class="text-gray-400">5.00pm-11.00pm</Span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

    

@endsection
