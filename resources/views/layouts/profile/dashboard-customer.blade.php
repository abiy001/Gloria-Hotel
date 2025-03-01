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
<body>
    <div class="w-full flex flex-col lg:flex-row">

    <!-- Navbar (Only for Small Screens) -->
    <nav class="fixed top-0 left-0 right-0 lg:hidden flex justify-between px-4 items-center py-3 bg-opacity-90 z-50" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
        <div class="flex items-center">
            <h1 class="font-bold text-4xl ml-2">Hotel</h1>
            <button id="menu-toggle" class="text-2xl absolute right-5">
                &#9776;
            </button>
        </div>
    </nav>

      <!-- Mobile Navbar Menu (Appears Below Main Navbar) -->
      @component('layouts.profile.mobileNavbar')
        
      @endcomponent

        <!-- Sidebar (Only for Large Screens) -->
        <div class="hidden lg:flex flex-col w-80 min-h-screen bg-opacity-90 p-6" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
            <!-- Profile Section -->
            <div class="relative flex flex-col items-center text-center p-6 rounded-lg" style="background-color: {{ env('COLOR_3') }};">
                <div class="absolute top-0 left-0 right-0 h-16 bg-brown-900 rounded-t-lg"></div>
                <img class="w-24 h-24 rounded-full border-4 shadow-lg mt-8" style="border-color: {{ env('COLOR_2') }}" src="{{url('/images/hotels/hotel1.jpg')}}" alt="Profile Picture">
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
     
            <!-- Footer -->
            <div class="mt-auto text-center text-sm text-gray-400 pt-4 border-t border-gray-600">
                <p>✉️ GloriaHotel@email.com</p>
                <p>&copy; 2025 Gloria-Hotels</p>
            </div>
        </div>

        <!-- Content Area -->
        <main class="flex-grow p-6 sm:p-12 lg:p-32 mt-16 lg:mt-0">
            <div class="flex justify-center items-center p-4 sm:p-8">
                <div class="relative bg-gray shadow-lg rounded-lg p-6 sm:p-8 w-full max-w-sm sm:max-w-lg">
                    <div class="flex justify-center -mt-16 sm:-mt-24">
                        <img class="w-24 h-24 sm:w-40 sm:h-40 rounded-full shadow-lg border-4" style="border-color: {{ env('COLOR_3') }}" src="{{url('/images/hotels/hotel1.jpg')}}" alt="Profile Picture">
                    </div>
                    <div class="text-center mt-6 sm:mt-8">
                        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Nama Lengkap</h1>
                        <p class="text-base sm:text-lg text-gray-500 mt-2">Username</p>
                        <p class="text-base sm:text-lg text-gray-500">Email</p>
                        <p class="text-base sm:text-lg text-gray-500">No Handphone</p>
                        <a href="Edit-Profile">
                            <button type="submit" class="bg-blue-700 mt-4 sm:mt-6 py-2 px-4 sm:px-6 rounded-lg text-white text-sm sm:text-lg hover:bg-blue-800 focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                                Edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
