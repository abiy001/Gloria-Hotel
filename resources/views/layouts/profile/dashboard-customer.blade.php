<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
</head>
<body>
    
    
    <div class="w-full">
        @component('fragments.toast')
            
        @endcomponent
        @component('layouts.profile.navbar')
            
        @endcomponent

       @component('layouts.profile.aside')
           
       @endcomponent

       

            <main class="flex-grow p-6 sm:p-12 lg:p-32">
                <div class="flex justify-center items-center p-4 sm:p-8">
                    <div class="relative bg-gray shadow-lg rounded-lg p-6 sm:p-8 w-full max-w-sm sm:max-w-lg">
                        <!-- Foto Profil -->
                        <div class="flex justify-center -mt-16 sm:-mt-24">
                            <img class="w-24 h-24 sm:w-40 sm:h-40 rounded-full shadow-lg border-4" style="border-color: {{ env('COLOR_3') }}" src="{{url('/images/hotels/hotel1.jpg')}}" alt="Profile Picture">
                        </div>

                        <!-- Konten Card -->
                        <div class="text-center mt-6 sm:mt-8">
                            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">{{ Auth::user()->name }} </h1>
                            <p class="text-base sm:text-lg text-gray-500 mt-2">{{ Auth::user()->username }}</p>
                            <p class="text-base sm:text-lg text-gray-500">{{ Auth::user()->email }}</p>
                            <p class="text-base sm:text-lg text-gray-500">{{ Auth::user()->nohp }}</p>
                            <a href="{{ route('profile.edit-profile') }}">
                                <div type="submit" class="bg-blue-700 mt-4 sm:mt-6 py-2 px-4 sm:px-6 rounded-lg text-white text-sm sm:text-lg hover:bg-blue-800 focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                                    Edit
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>


</body>
</html>