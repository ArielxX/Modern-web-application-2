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
            {{ $slot }}
        </div>
    </div>

    <!-- footer area -->
    <x-footer />

</body>

</html>
