<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <title>Detail Hotel</title>
    <style>
        #show-all-btn :hover{
            background-color: {{ env('COLOR_1') }};
            color:{{ env('COLOR_2') }}
        }

        .scrollbar-hide::-webkit-scrollbar {
    display: none;
}

/* For IE, Edge and Firefox */
.scrollbar-hide {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
    </style>
    <link rel="stylesheet" href="css/detailHotel.css">
</head>
<body class="pb-4">
 @component('fragments.toast')
     
 @endcomponent

 @component('layouts.navbar')
 @endcomponent

 <div class=" container mx-auto p-4 flex flex-col gap-5 2xl:w-9/12 xl:w-9/12 lg:w-9/12 w-full h-[300px] overflow-y-auto scrollbar-hide min-h-screen">
    <div class=" flex flex-col gap-3 font-bold">
        <img class="w-full max-h-[550px]" src=" {{ url('/images/hotels/hotel1.jpg') }}" alt="">
        <h1 style="color: {{ env('COLOR_1') }}" class=" 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl text-2xl">Superior Room</h1>
    </div>

    <div class=" flex flex-col gap-4">
        <div class=" flex flex-row items-center justify-between">
            <h1 style="" class=" text-slate-900 font-semibold text-3xl">IDR 855,441 net</h1>
            <a href="" class=" font-bold hover:cursor-pointer flex justify-center items-center px-3 py-2" style="background-color: {{ env('COLOR_3') }}; color:{{ env('COLOR_2') }}">BOOK NOW</a>
        </div>

        <div class=" h-[1px] bg-black"></div>

        <div class="text-lg text-justify text-gray-700">
            <p>Our Superior Room provides all the modern amenities and comforts a business or leisure traveler needs for a relaxing or productive stay, complete with desk, high-speed WiFi, 32” TV with international channels and mini bar. Available in Queen and Twin bed with the option of an extra bed for an additional fee. </p>
        </div>
    </div>

    <div class=" h-[1px] bg-black"></div>

    <div class=" flex flex-col gap-4">
        <h1 style="color: {{ env('COLOR_1') }}" class=" 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl text-2xl font-bold">Room Facilities</h1>

        <div class=" grid-cols-2 grid gap-2">
            <div class=" flex justify-start flex-row items-center gap-3">
                <div class="text-3xl text-black">
                    <i class="ph-bold ph-fork-knife"></i>
                </div>
                <h1 class=" text-sm text-center font-semibold text-gray-700">Restaurant</h1>
            </div>
            <div class=" flex justify-start flex-row items-center gap-3">
                <div class="text-3xl text-black">
                    <i class="ph-bold ph-fork-knife"></i>
                </div>
                <h1 class=" text-sm text-center font-semibold text-gray-700">Restaurant</h1>
            </div>
            <div class=" flex justify-start flex-row items-center gap-3">
                <div class="text-3xl text-black">
                    <i class="ph-bold ph-fork-knife"></i>
                </div>
                <h1 class=" text-sm text-center font-semibold text-gray-700">Restaurant</h1>
            </div>
            <div class=" flex justify-start flex-row items-center gap-3">
                <div class="text-3xl text-black">
                    <i class="ph-bold ph-fork-knife"></i>
                </div>
                <h1 class=" text-sm text-center font-semibold text-gray-700">Restaurant</h1>
            </div>
            <div class=" flex justify-start flex-row items-center gap-3">
                <div class="text-3xl text-black">
                    <i class="ph-bold ph-fork-knife"></i>
                </div>
                <h1 class=" text-sm text-center font-semibold text-gray-700">Restaurant</h1>
            </div>
                
        </div>
    </div>

 </div>

    
    <script src="js/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>