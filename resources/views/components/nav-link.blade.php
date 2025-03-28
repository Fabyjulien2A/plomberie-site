<a href="{{ $href }}"
   class="block px-3 py-2 rounded text-sm font-medium
          {{ $active ? 'bg-blue-100 text-blue-700' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-100' }}">
    {{ $slot }}
</a>
