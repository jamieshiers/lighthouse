<a class= "{{ \Illuminate\Support\Str::startsWith(request()->url(), $href) ? 'bg-gray-900' : '' }} ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
    href="{{ $href }}">
        {{ $slot  }}
</a>
