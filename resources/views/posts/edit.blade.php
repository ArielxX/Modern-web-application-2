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

            <div style="align-items: left">
                <h2>Tags</h2>
                <fieldset>
                    @if (sizeof($errors) > 0)
                        <div class="error_input">* You should fill all the inputs fields to save the images</div>
                    @endif

                    @php
                        $idx = 0;
                    @endphp
                    @foreach ($post->tags as $tag)
                        <br id="line{{ $idx }}" />
                        <input type="text" name="tags[]" id="tag{{ $idx }}" value="{{ $tag->name }}" style="color: green; padding: 8px 15px; margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius:
                            4px;box-sizing: border-box;" />
                        <button style="color: red; margin: 8px" id="{{ $idx }}" onclick="removeTag(this.id)"> X
                        </button>
                        @php
                            $idx = $idx + 1;
                        @endphp
                    @endforeach
                    <button type="button" id="input-btn" style="color: blue; width: 100px; padding: 5px"
                        onclick="addFileField()">Add
                        New Tag
                    </button><br>
                </fieldset>

            </div>

            <button type="submit"
                class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white float-right">Save</button>
        </div>
    </form>

</x-site-layout>
