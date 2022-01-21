<header id="header-wrap" class="relative">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HS Blog</title>

        <link rel="icon" type="image/png" href="{{ asset('/img/HS-blog-icon.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>


    <div class="block w-100 bg-white shadow z-50">

        <div class="max-w-6xl mx-auto py-4  text-gray-600 text-sm  flex justify-between">
            <img src="/img/HS-blog-logo.png" width="200" height="50" alt="Logo">

            <div class="px-6 flex flex-row justify-center gap-x-6">
                <a href="/" class="hover:underline decoration-pink-500 decoration-2">Home</a>
                <a href="/posts" class="hover:underline decoration-pink-500 decoration-2">Posts</a>
                <a href="/users" class="hover:underline decoration-pink-500 decoration-2">Users</a>
            </div>
            <div class="px-6">
                @if (Route::has('login'))
                    @auth
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="hover:underline decoration-pink-500 decoration-2">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 hover:underline decoration-pink-500 decoration-2">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</header>
