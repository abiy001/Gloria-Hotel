<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $roomtype -> roomtype_name }} Room</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/navbar.css">
</head>
<body class="bg-gray-100 h-full">

    @component('layouts.navbar')
        
    @endcomponent
    <div class="flex flex-col p-6 lg:flex-row min-h-screen gap-6 w-full">
        
        <!-- Room Details Section -->
        <div class="flex flex-col drop-shadow-xl w-full bg-white rounded-lg overflow-hidden lg:h-auto md:h-auto">
            <!-- Image Section -->
            <div class="bg-cover bg-center h-80 lg:h-96 w-full">
                <img src="/{{ $roomtype -> roomtype_image }}" class="w-full h-full object-cover" alt="Room Image">
            </div>

            <div class="text-black p-6 flex-1">
                <h1 class="text-3xl font-bold uppercase">{{ $roomtype -> roomtype_name }}</h1>
                <h2 class="text-2xl font-bold mt-4" style="color: {{ env('COLOR_1')  }}">Rp. {{ number_format($roomtype -> price_per_day, 0, ',', '.') }}</h2>
                <p class="mt-4 text-lg">{{ $roomtype -> roomtype_description }}</p>
                
                <div class="bg-white p-6 rounded-lg mt-6">
                    <h2 class="text-2xl font-semibold mb-4">Room Overview</h2>
                    <h3 class="text-lg font-medium mb-2">Special benefits</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div class="flex items-center space-x-2"><span>&#127754;</span><span>Pool View</span></div>
                        <div class="flex items-center space-x-2"><span>&#127807;</span><span>Garden View</span></div>
                    </div>
                    
                    <h3 class="text-lg font-medium mb-2">Features</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-gray-700">
                        <div class="flex items-center space-x-2"><span>&#128719;</span> <span>Single Bed</span></div>
                        <div class="flex items-center space-x-2"><span>&#128273;</span> <span>In-Room Safe</span></div>
                        <div class="flex items-center space-x-2"><span>&#128719;</span> <span>Queen / King Bed</span></div>
                        <div class="flex items-center space-x-2"><span>&#128187;</span> <span>Smart TV</span></div>
                        <div class="flex items-center space-x-2"><span>&#128719;</span> <span>Queen Bed</span></div>
                        <div class="flex items-center space-x-2"><span>&#128221;</span> <span>Writing Desk</span></div>
                        <div class="flex items-center space-x-2"><span>&#128719;</span> <span>King Bed</span></div>
                        <div class="flex items-center space-x-2"><span>&#128705;</span> <span>Wi-Fi</span></div>
                        <div class="flex items-center space-x-2"><span>&#128719;</span> <span>Twin Bed</span></div>
                        <div class="flex items-center space-x-2"><span>&#128717;</span> <span>Hair Dryer</span></div>
                        <div class="flex items-center space-x-2"><span>&#128716;</span> <span>Shower</span></div>
                        <div class="flex items-center space-x-2"><span>&#128715;</span> <span>Iron & Ironing Board</span></div>
                        <div class="flex items-center space-x-2"><span>&#9749;</span> <span>Tea / Coffee Maker</span></div>
                        <div class="flex items-center space-x-2"><span>&#127868;</span> <span>Minibar</span></div>
                        <div class="flex items-center space-x-2"><span>&#128684;</span> <span>Smoking room</span></div>
                        <div class="flex items-center space-x-2"><span>&#128722;</span> <span>Extra Bed Available</span></div>
                        <div class="flex items-center space-x-2"><span>&#128705;</span> <span>International TV Channels</span></div>
                        <div class="flex items-center space-x-2"><span>&#128707;</span> <span>Toiletries</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Form Section -->
        <div class="2xl:w-2/4 xl:w-2/4 lg:w-2/4 w-full p-6 bg-white max-h-[600px] rounded-lg lg:h-auto  md:h-auto">
            <h2 class="text-4xl font-semibold text-center text-black mb-24 py-2">Form Pemesanan</h2>
            <form action="{{ route('reservation.submit') }}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="checkin" class="block text-sm font-medium text-gray-600 mb-2">Tanggal Check-In</label>
                    <input type="date" min="{{ date('Y-m-d') }}" id="checkin" name="checkin_date" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="checkout" class="block text-sm font-medium text-gray-600 mb-2">Tanggal Check-Out</label>
                    <input name="checkout_date" type="date" min="{{ date('Y-m-d', strtotime("+1 day")) }}" max="{{ date('Y-m-d', strtotime("+7 day")) }}" id="checkout" name="checkout" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400" required>
                </div>

                <input type="text" name="guest_total"  disabled value="{{ $roomtype -> guest  }}" id="" />

                <input type="text"  name="" id="" value="" />
                <button type="submit" class="w-full bg-stone-950 text-white py-3 rounded-md hover:bg-stone-600 focus:ring-2 focus:ring-blue-400">
                    Booking Now
                </button>
            </form>
        </div>
    </div>

    <script src="/js/navbar.js"></script>
</body>
</html>