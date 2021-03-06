<x-site-layout>

    <form action="{{ route('users.update', ['user' => $user]) }}" method="post" enctype="multipart/form-data"
        class="mb-16 flex">
        @csrf
        @method('put')

        <div class="w-2/3" style="padding: 20px">
            <x-text name="name" :value="$user->name" required />
            <x-text name="abstract" :value="$user->email" />

            <div style="padding-top: 15px">
                <label for="files" class="btn">Upload new avatar</label>
                <input type="file" name="avatar">
            </div>
            </br>

            <button type="submit"
                class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white float-right">Save</button>
        </div>
    </form>

</x-site-layout>
