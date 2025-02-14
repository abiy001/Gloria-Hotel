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
                <input type="date" id="checkin" value="{{ new Date }}" class="w-full border rounded p-2 mt-1" onchange="updateNights()">
                <label for="checkout" class="text-gray-600 mt-4 block">Checkout</label>
                <input type="date" id="checkout" class="w-full border rounded p-2 mt-1" onchange="updateNights()">
                <p class="text-gray-600 mt-4">Nights</p>
                <input type="number" id="Nights" class="w-full border rounded p-2 mt-1">
                <p class="text-gray-600">Room</p>
                    <div class="flex-col justify-between items-center mt-2">
                        <p>Adults</p>
                        <div class="flex items-center gap-2">
                            <button onclick="updateGuests('adults', -1)" class="bg-gray-200 rounded px-2">-</button>
                            <span id="adults">0</span>
                            <button onclick="updateGuests('adults', 1)" class="bg-gray-200 rounded px-2">+</button>
                        </div>
                    </div>
                    <div class="flex-col justify-between items-center mt-2">
                        <p>Kids</p>
                        <div class="flex items-center gap-2">
                            <button onclick="updateGuests('kids', -1)" class="bg-gray-200 rounded px-2">-</button>
                            <span id="kids">0</span>
                            <button onclick="updateGuests('kids', 1)" class="bg-gray-200 rounded px-2">+</button>
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
        @component('fragments.cardRoomBooking')
        @slot('img')
        images/offers/foto7.jpg
        @endslot
        @slot('jenis')
        REGULARE
        @endslot
        @slot('keterangan')
        A 28 sqm room that offer high quality amenities expected from 4 stars international hotel standard, Superior Room offers a comfortable atmosphere. 
        Whether you  are on business travelling or holiday, this modern Javanese living is perfectly suit your need. This room is available in Twin Beds and non-smoking rooms.
        @endslot
        @slot('diskon')
        RP 632,000
        @endslot
        @slot('harga')
        RP 721,000
        @endslot
        @endcomponent

        @component('fragments.cardRoomBooking')
        @slot('img')
        images/offers/foto8.jpg
        @endslot
        @slot('jenis')
        INDUSTRI
        @endslot
        @slot('keterangan')
        With 30 sqm living space, Superior Triple Room configured with 1 queen and single bed or 3 single beds.
         This room is perfect for families or friend traveling together. Superior Triple room is available with your choice of Triple King Size bed or Triple Single Beds as well as non smoking room.
        @endslot
        @slot('diskon')
        RP 715,000
        @endslot
        @slot('harga')
        RP 845,000
        @endslot
        @endcomponent

        @component('fragments.cardRoomBooking')
        @slot('img')
        images/offers/foto9.jpg
        @endslot
        @slot('jenis')
        EXCLUSIVE
        @endslot
        @slot('keterangan')
        Take in vibrant views city of Solo from the wide windows of our spacious and modern suites with separate seating, working and dining areas.
        These 69 sqm suites feature microwave, coffee and tea machine, entertainment channels and complimentary WiFi access. Unwind in the bathtub or the shower in the marble bathrooms. 
        @endslot
        @slot('diskon')
        RP 888,000
        @endslot
        @slot('harga')
        RP 967,000
        @endslot
        @endcomponent

        @component('fragments.cardRoomBooking')
        @slot('img')
        images/offers/foto10.jpg
        @endslot
        @slot('jenis')
        SUPERRIOR
        @endslot
        @slot('keterangan')
        72 sqm modern and unique room facilitated with private living room, various TV channel, pantry and dining table, separate bath tub and shower, Enjoy the vibrant Solo city view from wide windows of these spacious Suite that also featured with microwave and coffee & tea making facility. 
        @endslot
        @slot('diskon')
        RP 999,000
        @endslot
        @slot('harga')
        RP 1,200,000
        @endslot
        @endcomponent
    </div>
    </div>
</div>

<script>
    document.getElementById('menuButton').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    });
    function updateNights() {
            const checkin = new Date(document.getElementById('checkin').value);
            const checkout = new Date(document.getElementById('checkout').value);
            
            if (checkin && checkout && checkout > checkin) {
                const difference = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24));
                document.getElementById('nights').textContent = difference;
            } else {
                document.getElementById('nights').textContent = 1;
            }
        }

        function updateGuests(type, change) {
            const element = document.getElementById(type);
            let value = parseInt(element.textContent);
            value = Math.max(0, value + change); // Prevent negative values
            element.textContent = value;
        }

</script>
</body>
</html>