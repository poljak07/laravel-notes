
<x-layout>
    <div class="mx-auto container py-20 px-6">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <div class="rounded">
                <div class="w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                    <div>
                        <p class="text-gray-800 dark:text-gray-100 font-bold">Our interior design experts work with you to create the space that you have been dreaming about.</p>
                    </div>
                    <div>
                        <x-edit-button></x-edit-button>
                    </div>
                </div>
            </div>
            @foreach($notes as $note)
            <x-note-card href="/note/{{$note->id}}/edit"> {{$note->note }}</x-note-card>
                @endforeach




</x-layout>
