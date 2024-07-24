<div class="rounded">
    <div class="w-full h-64 flex flex-col justify-between bg-white rounded-lg border border-gray-400 mb-6 py-5 px-4">
        <div>
            <p class="text-gray-800 font-bold">{{ $slot }}</p>
        </div>
        <div>
            <x-edit-button {{$attributes}}></x-edit-button>
        </div>
    </div>
</div>
