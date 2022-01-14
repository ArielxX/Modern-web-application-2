<header id="header-wrap" class="relative">
    <!-- Navbar Start -->
    <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
        <div class="container">
            <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                <a class="navbar-brand" href="index.html">
                    <img src="img/HS-blog-logo.png" width="200" height="50" alt="Logo">
                </a>
                <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                        <li class="nav-item">
                            <a class="page-scroll active" href="#hero-area">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#feature">feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0"
                    style="margin-right: 120px">
                    <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white"
                        href="#feature">FAQ</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</header>
