<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloria Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/navbar.css">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
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
</head>
<body>
<nav class="relative flex justify-between px-4 items-center py-3" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
    <div id="account" class=" hover:cursor-pointer text-slate-50 font-bold px-2 py-3 rounded-md" style="background-color: {{ env('COLOR_2') }}">
        <img class=" w-10" src="{{ url('/images/logo-hotel/logo-hotel.png') }}" alt="">
    </div>



    <!-- Tombol menu untuk layar kecil -->
    <button id="menuButton" class="lg:hidden p-2 text-white rounded" style="background-color: {{ env('COLOR_3') }}">☰</button>
</nav>

<div class="flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <div id="sidebar" class="w-full lg:w-1/4 text-white p-4 h-auto h-[  ] lg:block hidden" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
        <h2 class="text-xl px-4 py-4 font-semibold" style="background-color: {{ env('COLOR_3') }}">
            BOOK NOW
        </h2>
        <div class="pt-4 md:pt-14 mt-4">
            <div class="bg-white text-black rounded-md p-4 mb-4">
                <label for="checkin" class="text-gray-600">Checkin</label>
                <input type="date" id="checkin" disabled value="{{ date('Y-m-d') }}" class="w-full border rounded p-2 mt-1" >
                <label for="checkout" class="text-gray-600 mt-4 block">Checkout</label>
                <input type="date" id="checkout" disabled min="{{ date('Y-m-d', strtotime("+1 day")) }}) }}" value="{{ date('Y-m-d', strtotime("+1 day")) }}" class="w-full border rounded p-2 mt-1" >
                <p class="text-gray-600 mt-4">Nights</p>
                <input type="number" id="night" value="1"  disabled  class="w-full border rounded p-2 mt-1">
                <p class="text-gray-600">Room</p>
                    <div class="flex-col justify-between items-center mt-2">
                        <p>Guest</p>
                        <div class="flex items-center gap-2">
                            <button onclick=" {updateGuests('adults','guest', -1)} " class="bg-gray-200 rounded px-2">-</button>
                            <span id="adults">2</span>
                            <input type="text" id="guest" value="2" name="guest" hidden />
                            <button onclick="updateGuests('adults','guest', 1)" class="bg-gray-200 rounded px-2">+</button>
                        </div>
                    </div>
                   

                    <form action="" class="flex justify-center items-center w-svh">
                        <button class="bg-green-700 w-full p-2 mt-4 rounded-lg text-lg font-semibold text-white">Check Available </button>
                    </form>
                    
                </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="w-full lg:w-3/4 bg-white p-4 2xl:h-[750px] xl:h-[750px] lg:h-[750px] md:h-[750px] overflow-x-hidden scrollbar-hide" id="mainContent">
        <h2 class="text-2xl font-extrabold font-bold mb-4 uppercase">Select the room that suits you best</h2>
        <div class="flex  gap-4 bg-gray-50 p-4 rounded-md shadow">
                <!-- Room Image -->
               
                <!-- Room Details -->
                
            
     <div class="flex flex-col gap-3">
            
        @foreach ($roomType1 as $item)
            
        {{-- @if ($roomType1) --}}
        @if (!$item )
        
        @component('fragments.cardRoomBooking')
        @slot('img')
        images/roomtypes\1738893348.jpg
        @endslot
        @slot('jenis')
        REGULER
        @endslot
        @slot('keterangan')
        fdsaf
        @endslot
        
        @slot('harga')
        RP 1000000
        @endslot
        @endcomponent
        {{-- @endif --}}
        @endif
        @endforeach
        
        {{-- @if ($roomType2) --}}
        {{-- @foreach ($roomType2 as $item) --}}
            
        @if (! $roomType2)
        
        
        @component('fragments.cardRoomBooking')
        @slot('img')
        images/roomtypes\1738893374.jpg
        
        @endslot
            @slot('jenis')
            ELITE
            @endslot
            @slot('keterangan')
            fadfd
            @endslot
            
            @slot('harga')
            RP 2000000
            @endslot
            @endcomponent
            {{-- @endif     --}}
            @endif
            {{-- @endforeach --}}
        </div>
    </div>
</div>

<script>
    document.getElementById('menuButton').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    });

            const checkin = new Date(document.getElementById('checkin').value);
            const checkout = new Date(document.getElementById('checkout').value);
            const nights = checkin.splice('-')[0] - checkout.splice('-')[0];
            const nightInput = document.getElementById('night');

            nightInput.value = Number(nights);

        function updateGuests(type,type2, change) {
            const element = document.getElementById(type);
            const element2 = document.getElementById(type2);
            let value = parseInt(element.textContent);
            value = Math.max(0, value + change); // Prevent negative values
            element.textContent = value;
            element2.value = value;

        }

</script>
</body>
</html>