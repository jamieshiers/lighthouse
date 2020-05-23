@extends('layouts.app')

@section('content')
    <div>
       <div class="bg-white shadow overflow-hidden sm:rounded-md">
           <h2 class="">My Open Logs</h2>
           <ul>
               @foreach($logs as $log)
               <li>
                   <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                       <div class="px-4 py-4 flex items-center sm:px-6">
                           <div>
                               <div class="text-sm leading-5 font-medium text-indigo-600">
                                   <span>
                                       {{ $log->guest->last_name }}, {{ $log->guest->first_name }}
                                   </span>
                               </div>
                           </div>
                       </div>
                   </a>
               </li>
               @endforeach
           </ul>
       </div>
    </div>

@endsection
