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
    <div class="mx-20 my-14 rounded-full flex justify-between items-center gap-6">
        <!-- Kiri -->
        <div class="flex-1">
            <h1 class="text-8xl font-semibold leading-[1.05]">Everything your home deserves</h1>
            <p class="mt-4 mb-10 text-gray-600 max-w-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, magni praesentium possimus voluptatibus libero explicabo. Accusamus.</p>
            <a href="" class="button-animasi ">Explore Now</a>
        </div>

        <!-- Kanan -->
        <div class="border-black flex-1 relative flex flex-col">
            <!-- <img src="{{ URL::to('/assets/gambar1.jpg') }}" alt="" class="h-3/5 rounded-3xl"> -->
            <img src="{{ URL::to('/assets/gambar4.jpg') }}" alt="" class="w-8/12 h-auto m-auto block max-w-max z-10 relative right-0 top-0">
            <img src="{{ URL::to('/assets/gambar1.jpg') }}" alt="" class="w-8/12 h-auto m-auto block max-w-max absolute top-8 left-8 z-0">
            <!-- <img src="{{ URL::to('/assets/gambar2.jpg') }}" alt="" class="w-2/4 rounded-3xl block "> -->
        </div>
    </div>

    <!-- Catalog Barang -->
    <div class="my-16 mt-32 mx-20">
        <h5 class="font-semibold text-3xl">Our Collections</h5>

        <!-- Card Container -->
        <div class='grid-cols-1 md:grid-cols-4 sm:grid-cols-2 grid gap-4 mt-8 justify-center items-center'>
            <!-- Card -->
            <div class="flex-1 border-[1px] border-gray-300 rounded-md cursor-pointer transition-all hover:scale-[102%] ease-out duration-75">
                <img src="{{ URL::to('/assets/gambar6.jpg') }}" alt="" class="w-80 h-80 object-cover rounded-t-md">
                <div class="p-2 pb-4 flex justify-between flex-col gap-4">
                    <div>
                        <h5 class="font-medium text-lg">Simple Elegant Chair</h5>
                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <h5 class="font-semibold text-xl">Rp 120.000</h5>
                </div>
            </div>
            <!-- Card -->
            <div class="flex-1 border-[1px] border-gray-300 rounded-md cursor-pointer transition-all hover:scale-[102%] ease-out duration-75">
                <img src="{{ URL::to('/assets/gambar7.jpg') }}" alt="" class="w-80 h-80 object-cover rounded-t-md">
                <div class="p-2 pb-4 flex justify-between flex-col gap-4">
                    <div>
                        <h5 class="font-medium text-lg">Blue Royal Chair</h5>
                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <h5 class="font-semibold text-xl">Rp 120.000</h5>
                </div>
            </div>

        </div>

    </div>

    @include('layout.footer')


</body>
</html>
