<x-site-layout>

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="mb-16 flex">
        @csrf

        <div class="w-2/3" style="padding: 20px">
            <x-text name="title" required />
            <x-textarea name="abstract" />
            <x-textarea name="text" required />

            <input type="file" name="image">

            <div style="align-items: left; padding-top: 15px">
                <h2>Add Tags</h2>
                <fieldset>
                    @if (sizeof($errors) > 0)
                        <div class="error_input">* You should fill all the inputs fields to save the images</div>
                    @endif

                    <button type="button" id="input-btn" style="color: blue; width: 100px; padding: 5px"
                        onclick="addFileField()">Add
                        New Tag
                    </button><br>
                </fieldset>

            </div>

            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white">Create</button>
        </div>
    </form>

</x-site-layout>
