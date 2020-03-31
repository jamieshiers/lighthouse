<li class= "{{ \Illuminate\Support\Str::startsWith(request()->url(), $href) ? 'border-b border-blue-900' : '' }} flex -mb-px mr-8">
    <a  href="{{ $href }}" class="no-underline text-gray-600 flex items-center py-4">
        {{ $slot  }}
    </a>
</li>