<button 
    {{ $attributes->merge([ 
        'class' => 'inline-flex items-center px-4 py-2 bg-secondary border border-secondary rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150'
    ]) }}
>
    {{ $slot }}
</button>