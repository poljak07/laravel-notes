
<x-layout>
    <div class="mx-auto container py-20 px-6">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($notes as $note)
                <x-note-card :note="$note">
                    <a
                        href="/note/{{$note->id}}">
                        {{ $note->note }}
                </a>
            </x-note-card>
                @endforeach



</div>
</x-layout>
