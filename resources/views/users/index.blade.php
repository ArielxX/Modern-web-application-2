<x-site-layout>
    <div class="flex flex-col my-16 max-w-4xl mx-auto">

        <div class="flex justify-between mb-2 pr-6" style="padding: 30px">
            <h2 class="text-xl font-semibold">Users</h2>
        </div>
        <div style="display:flex; justify-content:center">{{ $users->links() }}</div>

        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8" style="display:flex; justify-content:center">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th>
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                @if (auth()->check() && auth()->user()->is_admin)
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                @endif
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Amount of Posts
                                </th>

                                @if (auth()->check() && auth()->user()->is_admin)
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="@if ($loop->even) bg-gray-50 @else bg-white @endif">
                                    <td>
                                        @if (($media = $user->getMedia('avatars'))->count() > 0)
                                            <div>
                                                <img src={{ $media->first()?->getUrl() }} width="30" height="30" />
                                            </div>
                                        @else
                                            <img src="/img/default_profile_pic.jpg" width="30" height="30">
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <a href="/users/{{ $user->id }}">
                                            {{ $user->name }}
                                        </a>
                                    </td>

                                    @if (auth()->check() && auth()->user()->is_admin)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->email }}
                                        </td>
                                    @endif
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                        style="text-align: center">
                                        {{ $user->amount }}
                                    </td>

                                    @if (auth()->check() && auth()->user()->is_admin)
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('users.edit', ['user' => $user]) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <a href="{{ route('users.destroy', ['user' => $user]) }}"
                                                class="text-indigo-600 hover:text-indigo-900"
                                                style="padding-left: 15px; color: red"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-user-{{ $user->id }}').submit(); return confirm('Are you sure you want to remove this user?')">
                                                delete
                                            </a>
                                            <form id="delete-form-user-{{ $user->id }}"
                                                action="{{ route('users.destroy', ['user' => $user]) }}"
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
        <div style="display:flex; justify-content:center; padding-bottom: 20px">{{ $users->links() }}</div>

    </div>
</x-site-layout>
