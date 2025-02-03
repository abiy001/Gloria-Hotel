<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="js/navbar.js"></script>

  <link rel="stylesheet" href="css/navbar.css">
</head>
<body class="bg-gray-100">

<div class="w-full">
    @component('layouts.profile.navbar')
            
    @endcomponent

   @component('layouts.profile.aside')
       
   @endcomponent

    <!-- Konten Edit Profil -->
    <main class="flex-grow p-6">
      <div class="flex justify-center items-center">
        <div class=" shadow-lg rounded-lg p-8 w-full max-w-lg" style="background-color: {{ env('COLOR_3') }}">
          <h1 class="text-2xl font-bold text-white mb-6 text-center">Edit Profile</h1>

          <!-- Foto Profil -->
          <div class="flex justify-center mb-6">
            <div class="relative">
              <img id="profile-picture-preview" class="w-32 h-32 rounded-full shadow-lg object-cover border-4 border-gray-200" 
                   src="{{url('/images/hotels/hotel1.jpg')}}" 
                   alt="Profile Picture">
              <!-- Tombol Edit Foto -->
              <label for="upload-photo" class="absolute bottom-2 right-2 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
              </label>
              <input type="file" id="upload-photo" accept="image/*" class="hidden" onchange="previewProfilePicture(event)">
            </div>
          </div>
          
          <!-- Form Edit Profil -->
          <form action="{{ route('user.edit', Auth::user()->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
              <label for="name" class="block text-white font-semibold mb-1">Nama Lengkap</label>
              <input value="{{ Auth::user()->name }}" type="text" id="name" name="name" class="bg-blue-100 w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
              <label for="username" class="block text-white font-semibold mb-1">Username</label>
              <input value="{{ Auth::user()-> username }}" type="text" id="username" name="username" class="bg-blue-100 w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
              <label for="email" class="block text-white font-semibold mb-1">Email</label>
              <input disabled value="{{ Auth::user()->email }}" type="email" id="email" name="email" class="bg-blue-100 w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
              <label for="phone" class="block text-white font-semibold mb-1">Nomor Handphone</label>
              <input value=" {{ Auth::user()->nohp }}" type="tel" id="phone" name="nohp" class="bg-blue-100 w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="flex justify-end">
                  
              <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-400">
                Simpan Perubahan
              </button>
               
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>

<script>
  // Fungsi untuk menampilkan pratinjau gambar profil
  function previewProfilePicture(event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById('profile-picture-preview').src = e.target.result; // Perbarui gambar profil
      };
      reader.readAsDataURL(file); // Membaca file gambar
    }
  }

  const menuToggle = document.getElementById('menu-toggle');
  const sidebar = document.getElementById('sidebar');

  menuToggle.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
  });
</script>

</body>
</html>