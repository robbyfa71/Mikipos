<a {{ $attributes }}
    class="{{ $active ? 'bg-orange-400 text-white' : 'hover:bg-gray-100 text-gray-500' }} rounded-lg  flex items-center p-2 group">
    {{ $slot }}
</a>
