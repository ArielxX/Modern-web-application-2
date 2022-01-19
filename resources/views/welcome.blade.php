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
                <h1 class="block text-4xl font-bold">This is a great slogan</h1>
                <h2 class="block text-2xl font-semi-bold text-blue-50">
                    and with a great slogan comes great responsability
                </h2>
            </div>

            <!-- main content -->
            <main class="bg-white p-6 max-w-6xl flex flex-row" style="min-height: 60vh;">
                <div class="w-2/3">
                    <b> Most Recent Posts </b>
                    @foreach ($posts as $post)
                        <div style='border: 1px solid black; border-radius: 4px; margin-top: 20px'>
                            <div style="padding: 15px">
                                <div>
                                    <b>
                                        <span class="text-gray-800" style=>{{ $post->title }}</span>
                                    </b>
                                </div>

                                <div>
                                    <span>{{ $post->text }}</span>
                                </div>

                                <div style="padding-top: 10px">
                                    Author: {{ $post->name }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div style="padding: 20px">
                        <a href="/" style="color: blue">See all >></a>
                    </div>
                </div>

                <div class="w-1/3"
                    style='border: 1px solid black; border-radius: 4px; margin-top: 40px; margin-left: 20px'>
                    <div style="padding: 15px">
                        <b>
                            Tags
                        </b>

                        <div style="padding-top: 15px">
                            @foreach ($tags as $tag)
                                <a href="/" style="margin-right: 15px">
                                    <span class="w3-blue px-2 bg-green-50 text-green-500 rounded-lg"
                                        onclick="/">{{ $tag->name }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- footer area -->
    <x-footer />

</body>

</html>
