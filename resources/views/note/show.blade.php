<x-layout>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto container items-center">
        <div class="flex flex-col items-center justify-center">
            <div class="w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                <div>
                    <p class="text-gray-800 dark:text-gray-100 font-bold">{{$note->note}}</p>
                </div>
                <div class="flex justify-between items-center">
                    <x-edit-button href="/note/{{ $note->id }}/edit" :note="$note"> </x-edit-button>
                    <a href="/note" class="text-blue-500">Back to notes</a>
                    <span class="text-gray-600 text-sm">Created on: {{$note->created_at}}</span>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
