<!DOCTYPE html>
<html lang="en">

<!-- Icon -->
<link rel="stylesheet" type="text/css" href="css/LineIcons.2.0.css">
<!-- Animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!-- Tiny Slider  -->
<link rel="stylesheet" type="text/css" href="css/tiny-slider.css">
<!-- Tailwind css -->
<link rel="stylesheet" type="text/css" href="css/tailwind.css">


<body class="antialiased bg-gray-50 flex flex-col">
    <x-header />

    <!-- main page area -->
    <div class="w-120 z-0">
        <div class="block max-w-6xl mx-auto z-0">

            <!-- Hero or so-->

            <div class="w-120 h-35 bg-gradient-to-br from-blue-400 to-teal-200 text-white p-8" style="max-width: 90rem;">
                <h1 class="block text-4xl font-bold">Great slogan comes here</h1>
                <h2 class="block text-2xl font-semi-bold text-blue-50">and a tagline or explanation is printed here</h2>
            </div>

            <!-- main content -->
            <main class="bg-white p-6 max-w-6xl" style="min-height: 60vh;">
                <b> Most Recent Posts </b>
                @foreach ($posts as $post)
                    <li>
                        <span class="text-gray-800">{{ $post->title }}</span>

                        <span>{{ $post->text }}</span>
                    </li>

                    Author: {{ $post->name }}
                @endforeach

            </main>
        </div>
    </div>

    <!-- footer area -->
    <x-footer />

</body>

</html>
