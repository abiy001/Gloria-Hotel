<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="/images/logo-hotel/logo-hotel.png" rel="icon">
    <link href="/images/logo-hotel/logo-hotel.png" rel="apple-touch-icon">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Status Reservasi</title>
</head>
<body>
    <div class="w-full">
        @component('layouts.profile.navbar')
            
        @endcomponent

       @component('layouts.profile.aside')
           
       @endcomponent

       
            <!-- Content -->
            <main class="flex-grow p-6 sm:p-12 lg:p-32">
                <h1 class="text-3xl font-bold px-4 sm:px-6">Status Reservasi</h1>

                <div class="overflow-x-auto bg-white shadow-lg mt-6 p-8">
                    <table class="flex flex-col w-full border-collapse">
                        <thead class="bg-amber-950 text-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left">#</th>
                                <th class="px-4 py-3 text-left">Nama Tamu</th>
                                <th class="px-4 py-3 text-left">Tanggal Check-In</th>
                                <th class="px-4 py-3 text-left">Tanggal Check-Out</th>
                                <th class="px-4 py-3 text-left">Tipe Kamar</th>
                                <th class="px-4 py-3 text-left">Status</th>
                                <th class="px-4 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-amber-100">
                                <td class="px-4 py-3">1</td>
                                <td class="px-4 py-3">John Doe</td>
                                <td class="px-4 py-3">2025-01-15</td>
                                <td class="px-4 py-3">2025-01-20</td>
                                <td class="px-4 py-3">Eksklusif</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 bg-green-500 text-white text-sm rounded">Sudah Transaksi</span>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <button class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700"><box-icon name='trash' type='solid' color='#ffffff' ></box-icon></button>
                                    <button class="bg-blue-600 text-white px-3 py-1 rounded-lg hover:bg-blue-700"><box-icon name='check' color='#ffffff' ></box-icon></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-amber-100">
                                <td class="px-4 py-3">2</td>
                                <td class="px-4 py-3">Alice Johnson</td>
                                <td class="px-4 py-3">2025-01-10</td>
                                <td class="px-4 py-3">2025-01-15</td>
                                <td class="px-4 py-3">Standar</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 bg-red-500 text-white text-sm rounded">Belum Transaksi</span>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <button class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700"><box-icon name='trash' type='solid' color='#ffffff' ></box-icon></button>
                                    <button class="bg-blue-600 text-white px-3 py-1 rounded-lg hover:bg-blue-700"><box-icon name='check' color='#ffffff' ></box-icon></button>
                               </td>
                            </tr>
                        </tbody>
                    </table>
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