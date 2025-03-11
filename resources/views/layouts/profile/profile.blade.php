<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Profile</title>
</head>
<body>
  @component('fragments.toast')
    
  @endcomponent

    @if (session('update-user') || ) 
    <script>
        Swal.fire({
    position: "top-center",
    icon: "success",
    title: "{{ session('success') }}",
    showConfirmButton: false,
    timer: 1500
    });
    </script>
    
    @endif

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
        <main class="flex-grow  container mx-auto p-6">
            <h1 class="text-xl font-bold mb-6">Edit Your Profile</h1>
            <form action="{{ route('user.edit', Auth::user()->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
             
                <div class="text-slate-900">
                  <label for="name" class="block  font-semibold mb-1">Nama Lengkap</label>
                  <input value="{{ Auth::user()->name }}" type="text" id="name" name="name" class="bg-gray-100 border shadow-2xl w-full border-gray-600 rounded-xl px-3 py-2 outline-none" />
                </div>
    
                <div class="text-slate-900">
                  <label for="username" class="block  font-semibold mb-1">Username</label>
                  <input value="{{ Auth::user()-> username }}" type="text" id="username" name="username" class="bg-gray-100 border shadow-2xl w-full border-gray-600 rounded-xl px-3 py-2 outline-none" />
                </div>
    
                <div class="text-slate-900">
                  <label for="email" class="block  font-semibold mb-1">Email</label>
                  <input disabled value="{{ Auth::user()->email }}" type="email" id="email" name="email" class="bg-gray-100 border shadow-2xl w-full border-gray-600 rounded-xl px-3 py-2 outline-none" />
                </div>
    
                <div class="text-slate-900">
                  <label for="phone" class="block  font-semibold mb-1">Nomor Handphone</label>
                  <input disabled value=" {{ Auth::user()->nohp }}" type="tel" id="phone" name="" class="bg-gray-100 border shadow-2xl w-full border-gray-600 rounded-xl px-3 py-2 outline-none" />
                </div>
    
                <div class="flex justify-end">
                      
                  <button type="submit" class="bg-[{{ env('COLOR_1') }}] text-white py-2 px-4 rounded-lg shadow cursor-pointer focus:ring-2 focus:ring-blue-400">
                    Simpan Perubahan
                  </button>
                   
                </div>
              </form>
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
