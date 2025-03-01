<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Profile</title>
</head>
<body class="flex flex-col min-h-screen">
    
    <!-- Navbar (Only for Small Screens) -->
    <nav class="fixed top-0 left-0 right-0 lg:hidden flex justify-between px-4 items-center py-3 bg-opacity-90 z-50" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
        <h1 class="font-bold text-2xl">Hotel</h1>
        <button id="menu-toggle" class="text-2xl">&#9776;</button>
    </nav>
    
    <!-- Mobile Navbar Menu (Appears Below Main Navbar) -->
    @component('layouts.profile.mobileNavbar')
        
    @endcomponent
    
    <div class="flex flex-col lg:flex-row flex-grow">
        <!-- Sidebar (Only for Large Screens) -->
        <div class="hidden lg:flex flex-col w-80 min-h-screen bg-opacity-90 p-6" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
            <div class="relative flex flex-col items-center text-center p-6 rounded-lg" style="background-color: {{ env('COLOR_3') }};">
                <img class="w-24 h-24 rounded-full border-4 shadow-lg mt-8" src="{{url('/images/hotels/hotel1.jpg')}}" alt="Profile Picture">
                <h1 class="text-xl font-bold mt-4">Nama Lengkap</h1>
                <div class="flex space-x-3 mt-2">
                    <a href=""><box-icon name='bed' color='#ffffff'></box-icon></a>
                    <a href="/"><box-icon name='home' color='#ffffff' ></box-icon></a>
                    <a href="Reservasi"><box-icon name='cart-alt' color='#ffffff' ></box-icon></a>
                </div>
            </div>
            <!-- Navigation -->
            @component('layouts.profile.aside')
               
            @endcomponent
        </div>
        
        <!-- Content Area -->
        <div class="w-full max-w-4xl bg-white p-4 shadow-md rounded-md mt-16 lg:mt-0">
            @component('layouts.profile.menuReservation')
            @slot('belum_bayar')
            {{ $reservations -> count() }}
            @endslot
            @endcomponent
            
             <!-- Konten Hotel -->
             @foreach ($reservations as $item)
                 
             @component('layouts.profile.cardRowReservation')
             @slot('img')
             {{ url( $item -> roomtype -> roomtype_image ) }}
             @endslot
  
             {{-- @slot('hotel_name')
             {{ $item -> rooms -> hotel -> hotel_name }}
             @endslot --}}
  
             @slot('roomtypename')
             {{ $item -> roomtype -> roomtype_name }}
             @endslot
  
             @slot('checkin')
             {{ $item -> checkin_date }}
             @endslot
             @slot('checkout')
             {{ $item -> checkout_date }}
             @endslot
             @slot('index')
             {{ $loop -> index }}
             @endslot
  
             @slot('harga')
             {{ number_format( date_diff(date_create($item -> checkin_date), date_create($item -> checkout_date)) ->format('%d') *   $item  -> roomtype -> price_per_day, 0 , ',' , '.') }}
             @endslot
  
             @slot('booking_status')
             {{ $item -> booking_status }}
             @endslot
             
             @slot('payment_status')
             {{ $item -> payment_status }}
             @endslot
  
             {{-- @slot('total_rating')
             {{ $item -> rooms -> hotel -> total_rating + 1 }}
             @endslot --}}
  
             @slot('id')
             {{ $item -> id }}
             @endslot
  
         @endcomponent
        @endforeach

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>