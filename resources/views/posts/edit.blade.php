<x-site-layout>

    <form action="{{ route('posts.update', ['post' => $post]) }}" method="post" enctype="multipart/form-data"
        class="mb-16 flex">
        @csrf
        @method('put')

        <div class="w-2/3" style="padding: 20px">
            <x-text name="title" :value="$post->title" required />
            <x-textarea name="abstract" :value="$post->abstract" />
            <x-textarea name="text" :value="$post->text" />

            <input type="file" name="image">

            <button type="submit"
                class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white float-right">Save</button>
        </div>
    </form>

</x-site-layout>
