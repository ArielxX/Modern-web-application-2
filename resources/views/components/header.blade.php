<header id="header-wrap" class="relative">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HS Blog</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>


    <div class="block w-100 bg-white shadow z-50">

        <div class="max-w-6xl mx-auto py-4  text-gray-600 text-sm  flex justify-between">
            <img src="img/HS-blog-logo.png" width="200" height="50" alt="Logo">

            <div class="px-6 flex flex-row justify-center gap-x-6">
                <a href="" class="hover:underline decoration-pink-500 decoration-2">Home</a>
                <a href="" class="hover:underline decoration-pink-500 decoration-2">Posts</a>
                <a href="" class="hover:underline decoration-pink-500 decoration-2">Authors</a>
            </div>
            <div class="px-6">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="hover:underline">Home</a>
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
