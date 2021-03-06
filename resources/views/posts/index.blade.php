<x-site-layout>
    <div class="flex flex-col my-16 max-w-4xl mx-auto">

        <div class="flex justify-between mb-2 pr-6" style="padding: 30px">
            <h2 class="text-xl font-semibold">Posts</h2>
            @if (auth()->check() && auth()->user()->is_admin)
                <a href="{{ route('posts.create') }}" class="text-green-600 hover:text-green-900">Create new</a>
            @endif
        </div>
        <div style="display:flex; justify-content:center; padding-bottom: 20px">{{ $posts->links() }}</div>

        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Author
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tags
                                </th>
                                @if (auth()->check() && auth()->user()->is_admin)
                                    <th scope="col" class="relative px-6 py-3" style="width: 150px">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="@if ($loop->even) bg-gray-50 @else bg-white @endif">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <a href="/posts/{{ $post->id }}">
                                            {{ $post->title }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $post->author->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @foreach ($post->tags as $tag)
                                            <a href="/" style="margin-right: 15px">
                                                <span class="w3-blue px-2 bg-green-50 text-green-500 rounded-lg"
                                                    onclick="/">{{ $tag->name }}
                                                </span>
                                            </a>
                                        @endforeach

                                    </td>

                                    @if (auth()->check() && auth()->user()->is_admin)

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('posts.edit', ['post' => $post]) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                            <a href="{{ route('posts.destroy', ['post' => $post]) }}"
                                                class="text-indigo-600 hover:text-indigo-900"
                                                style="padding-left: 15px; color: red"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $post->id }}').submit(); return confirm('Are you sure you want to remove this post?')">
                                                delete
                                            </a>
                                            <form id="delete-form-{{ $post->id }}"
                                                action="{{ route('posts.destroy', ['post' => $post]) }}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div style="display:flex; justify-content:center; padding-bottom: 20px">{{ $posts->links() }}</div>

    </div>
</x-site-layout>
