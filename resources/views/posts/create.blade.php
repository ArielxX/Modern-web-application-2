<x-site-layout>

    <form action="{{ route('posts.store') }}" method="post" class="mb-16 flex">
        @csrf

        <div class="w-2/3" style="padding: 20px">
            <x-text name="title" required />
            <x-textarea name="abstract" />
            <x-textarea name="text" required />

            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white">Create</button>
        </div>
    </form>

</x-site-layout>
