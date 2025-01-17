<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Home</title>

</head>
<body>
 @component('fragments.toast')
     
 @endcomponent

    <div class=" w-full">
        @component('layouts.navbar')
        @endcomponent
        
        <div class=" w-full  relative ">
            <img src=" {{ url('/images/hotels/hotel1.jpg') }}" alt="hotel1" 
            class=" w-full max-h-[620px]">
            <div class="absolute top-0 w-full h-full bg-slate-900 bg-opacity-40 text-center">
                <div class=" flex flex-col gap-3 items-center justify-center h-full px-2">
                <h1 style ="color: {{ env('COLOR_2') }}" class=" text-3xl font-bold ">HOTEL TERBAIK DI SELURUH NEGARA, BENUA, PLANET, UNIVERSE</h1>

                    <input type="text" class=" w-2/3 px-4 py-2 rounded-md">
                </div>
            </div>

        </div>
    </div>

    <script src="js/navbar.js"></script>
</body>
</html>