<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>
<body class="bg-[#fefefe]">
    @include('layout.navbar')

    <!-- Hero -->
    <div class="mx-20 my-12 rounded-full flex justify-between items-center gap-6">
        <!-- Kiri -->
        <div class="flex-1">
            <h1 class="text-8xl font-semibold leading-[1.05]">Everything your home deserves</h1>
            <p class="mt-4 mb-10 text-gray-600 max-w-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, magni praesentium possimus voluptatibus libero explicabo. Accusamus.</p>
            <a href="" class="button-animasi">Explore Now</a>
        </div>
        
        <!-- Kanan -->
        <div class="border-black flex-1 relative flex flex-col">
            <!-- <img src="{{ URL::to('/assets/gambar1.jpg') }}" alt="" class="h-3/5 rounded-3xl"> -->
            <img src="{{ URL::to('/assets/gambar4.jpg') }}" alt="" class="w-8/12 h-auto m-auto block max-w-max z-10 relative right-0 top-0">
            <img src="{{ URL::to('/assets/gambar1.jpg') }}" alt="" class="w-8/12 h-auto m-auto block max-w-max absolute top-8 left-8 z-0">
            <!-- <img src="{{ URL::to('/assets/gambar2.jpg') }}" alt="" class="w-2/4 rounded-3xl block "> -->
        </div>
    </div>



</body>
</html>