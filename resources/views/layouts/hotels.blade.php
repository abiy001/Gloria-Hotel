<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link href="/images/logo-hotel/logo-hotel.png" rel="icon">
    <link href="/images/logo-hotel/logo-hotel.png" rel="apple-touch-icon">

    <title>Hotels Page</title>

</head>
<body>
    <div>
        @component('layouts.navbar')
        @endcomponent
    </div>

    <div>
        <img src="public/images/hotels/hotel1.jpg   " alt="">
    </div>
    
        <div class="pb-24">
            <div class=" flex pt-24">
                <h1 class=" font-bold text-2xl px-24 " style="color: {{ env('COLOR_1') }}">EXPLORE OUR HOTELS</h1>
            </div>
             
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 pt-24 px-4 md:px-8">


             <!-- 2xl: grid-cols 4, xl: grid-cols-3, lg: grid-cols-2, md: grid-cols-2, sm: grid-cols-1    -->

             @foreach ($cities as $item)
                 
             @component('fragments/hotelcard')
             
             @slot('img')
             {{ $item -> city_image }}
             @endslot

             @slot('city')
             {{ $item -> city_name }}
             @endslot

             @slot('id')
             {{ $item -> id  }}
             @endslot
             @endcomponent
          

            @endforeach

             
            </div>

    </div>
    
</div>


<div>
    
</div>

<script src="/js/navbar.js"></script>

</body>
</html>