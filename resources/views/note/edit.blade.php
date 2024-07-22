<x-layout>
<div class="bg-gray-100 flex items-center justify-center min-h-screen" >
    <form method="POST" action="/note/{{$note->id}}" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PATCH')
        <div class="flex flex-col space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="note" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="note"
                                       id="note"
                                       class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                       placeholder="Shift Leader"
                                       value="{{$note->note}}"
                                       required>
                            </div>
                            @error('note')
                            <p class="text-xs text-red-500 semi-bold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between gap-x-6">
                <a href="/note/{{$note->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update
                </button>
            </div>
        </div>
    </form>

</div>
</x-layout>
