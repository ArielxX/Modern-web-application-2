<x-site-layout>
    <div style=" padding: 30px">
        <div class="flex justify-between mb-2 pr-6" style="padding: 30px">
            <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
            <div>
                @if (auth()->check() && (auth()->user()->is_admin || auth()->user()->id === $user->id))
                    <a href="/users/{{ $user->id }}/edit" class="text-green-600 hover:text-green-900"
                        style="margin-right: 20px; font-size: 15px">Edit</a>
                @endif
            </div>
        </div>
        @if (auth()->check() && (auth()->user()->is_admin || auth()->user()->id === $user->id))
            <div>
                Email: <b>{{ $user->email }}</b>
            </div>
        @endif

        @if (($media = $user->getMedia('avatars'))->count() > 0)
            <div>
                <img src={{ $media->first()?->getUrl() }} width="200" height="200" />
            </div>
        @else
            <img src="/img/default_profile_pic.jpg" width="200" height="200">
        @endif


        <div>
            <div style="font-size: 20px; padding: 20px">
                <b>User's posts list</b>
            </div>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Post
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Abstract
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tags
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->posts as $post)
                                    <tr class="@if ($loop->even) bg-gray-50 @else bg-white @endif">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <a href="/posts/{{ $post->id }}">
                                                {{ $post->title }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $post->abstract }}
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-site-layout>
