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

    <div class="flex flex-col relative lg:flex-row flex-grow">
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
            {{ $pending_reservations -> count() }}
            @endslot
            @endcomponent
            
            <!-- Konten Hotel -->
            @foreach ($reservations as $item)
                
              <div class="mb-2 mt-2">
                 <div id="semua" class="tab-content block">
                     <div class="border p-4 rounded-md mb-4 flex justify-between">
                         <div>
                             <h2 class="font-semibold text-lg">Pesanan Kamar Hotel {{ $item -> rooms -> hotel -> hotel_name }} Kelas {{ $item -> roomtype -> roomtype_name }}</h2>
                <p class="text-gray-600">Status: {{ $item-> booking_status }}</p>
                <div class="flex items-center gap-4 mt-2">
                    <img src="{{url( $item -> roomtype -> roomtype_image )}}" class="w-64 h-32 rounded-md" alt="Produk">
                    <div>
                        <h2 class="uppercase text-gray-800 text-3xl font-medium">{{ $item -> roomtype -> roomtype_name }}</h2>
                     
                        <p class="text-gray-700">Check-in  : {{ $item -> checkin_date }}</p>
                        <p class="text-gray-700">Check-out : {{ $item -> checkout_date }}</p>
                        <h1 class="text-red-600 font-bold text-xl">Rp. {{ number_format( date_diff(date_create($item -> checkin_date), date_create($item -> checkout_date)) ->format('%d') *   $item  -> roomtype -> price_per_day, 0 , ',' , '.') }}</h1>
                    </div>
                </div>
            </div>
            <!-- Tombol Bayar di pojok kanan bawah -->
            <div class="flex items-end">
                @if ($item-> booking_status == 'checkout')
                        <button
                        onclick="giveRating({{ $loop -> index }})" class="rating-btn bg-black text-white px-4 py-2 rounded-lg hover:bg-slate-700">
                            Rating
                        </button>                 
                @endif

                @if ($item-> booking_status != 'checkout')
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Selesai
                </button>
                @endif
            </div>
        </div>
    </div>
</div>

<div  class="rating-form absolute hidden top-0 justify-center items-center   flex-col translate-x-1/2 w-full h-full bg-opacity-25 bg-slate-800  right-1/2 ">

    <form action="{{ route('hotel.rating' , ['id' => $item  -> id]) }}" method="POST" enctype="multipart/form-data"  class="w-[250px]  flex flex-col gap-4 bg-slate-50  shadow-2xl  p-5" >
        @csrf
        @method('PUT')
        <div onclick="closeBtn()" class="close-btn hover:cursor-pointer flex justify-end items-center font-bold text-xl">X</div>

        <input type="text" name="reservation_id" value="{{ $item -> id  }}"  disabled id="" />


        <select name="hotel_rating" id="">
            <option value="{{ $item -> rooms -> hotel -> hotel_rating + 1 }}">1</option>
            <option value="{{ $item -> rooms -> hotel -> hotel_rating + 2 }}">2</option>
            <option value="{{ $item -> rooms -> hotel -> hotel_rating + 3 }}">3</option>
            <option value="{{ $item -> rooms -> hotel -> hotel_rating + 4 }}">4</option>
            <option value="{{ $item -> rooms -> hotel -> hotel_rating + 5 }}">5</option>
        </select>
      
        @if ($item -> rooms -> hotel -> total_rating == 0)
            
        <input type="text" name="total_rating" value="1"  disabled id="" />
        @endif
        
        @if ($item -> rooms -> hotel -> total_rating > 0)
        <input type="text" name="total_rating" value="{{ $item -> rooms -> hotel -> total_rating + 1 }}"  disabled id="" />
        @endif
        
        <button class="rating-btn bg-black text-white px-4 py-2 rounded-lg hover:bg-slate-700">
        Rating
    </button>
</form>
</div>

@endforeach

    <script>
        const closeBtn = document.querySelectorAll('.close-btn');
        
        closeBtn.forEach((item) => {
            item.addEventListener('click', () => {
                item.parentElement.parentElement.classList.add("hidden")
            })
        })
        
        function giveRating(id) {
            const ratingForm = document.querySelectorAll('.rating-form');
            ratingForm[id].classList.add("flex")
            
            
            ratingForm[id].classList.remove("hidden")
            
            
        }
        

        

        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>