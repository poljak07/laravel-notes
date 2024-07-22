<div class="flex items-center justify-between text-gray-800 dark:text-gray-100">
<a href="/note/{{$note->id}}/edit" class="w-8 h-8 rounded-full bg-gray-800 dark:bg-gray-100 dark:text-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black">
    <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z"></path>
        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
    </svg>
</a>
<x-delete-button action="/note/{{ $note->id }}"></x-delete-button>
</div>



