<x-app-layout title="Guest Logs">
    <x-slot name="header">Guest Logs</x-slot>
    <div>
        @if (flash()->message)
            @if(flash()->level === 'success')
                <x-flash.success>{{ flash()->message }}</x-flash.success>
            @endif
        @endif

        <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                            Total Guest Logs
                        </dt>
                        <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                            {{ $counts->total  }}
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                            Open Logs
                        </dt>
                        <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                            {{ $counts->open }}
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                            Logs Requiring my Attention
                        </dt>
                        <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                            {{ $logs->count() }}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

        <h2 class="pt-6 mb-4 text-lg font-bold">My Open Logs</h2>
        <div class="bg-white shadow overflow-hidden sm:rounded-md">

            <ul>
                @foreach($logs as $log)
                    <li class="border-t border-gray-200">
                        <a href="{{ url("/guestlog/$log->log_number")}}"
                           class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="px-4 py-4 flex items-center sm:px-6">
                                <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div>
                                        <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                            {{ $log->short_description  }}
                                            <span class="ml-1 font-normal text-gray-500 text-xs">
                                           {{ $log->log_number }}
                                       </span>
                                        </div>
                                        <div class="mt-2 flex">
                                            <div class="flex items-center text-sm leading-5 text-gray-500">
                                                <span>{{ $log->guest->cabin }} - {{ $log->guest->first_name }} {{ $log->guest->last_name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex-shrink-0 sm:mt-0">
                                        @if($log->updated_at < \Carbon\Carbon::now()->subHours(24))
                                            <div class="flex overflow-hidden">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800">last updated {{ $log->updated_at->diffForHumans(['parts' => 2]) }}</span>
                                            </div>
                                        @else
                                            <div class="flex overflow-hidden">
                                                <span class="float-right px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-800">last updated {{ $log->updated_at->diffForHumans(['parts' => 2]) }}</span>
                                            </div>
                                        @endif

                                        <div class="flex overflow-hidden text-xs text-gray-500 float-right">
                                            <span class="">created {{ $log->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-5 flex-shrink-0">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
