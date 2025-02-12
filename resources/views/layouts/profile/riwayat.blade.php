<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/images/logo-hotel/logo-hotel.png" rel="icon">
    <link href="/images/logo-hotel/logo-hotel.png" rel="apple-touch-icon">

    <title>Status Reservasi</title>
</head>
<body>
    <div class="w-full">
        <!-- Navbar -->
        @component('layouts.profile.navbar')
            
        @endcomponent

       @component('layouts.profile.aside')
           
       @endcomponent

       

            <!-- Konten Utama -->
            <main class="flex-grow p-12">
                <h1 class="text-3xl font-bold px-4">Riwayat Reservasi</h1>

                <div class="overflow-x-auto bg-white shadow-lg p-6 mt-6 rounded-lg">
                    <table class="w-full border-collapse">
                        <thead class="bg-amber-950 text-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left">#</th>
                                <th class="px-4 py-3 text-left">Nama Tamu</th>
                                <th class="px-4 py-3 text-left">Tanggal Check-In</th>
                                <th class="px-4 py-3 text-left">Tanggal Check-Out</th>
                                <th class="px-4 py-3 text-left">Type Kamar</th>
                                <th class="px-4 py-3 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-amber-100">
                                <td class="px-4 py-3">1</td>
                                <td class="px-4 py-3">John Doe</td>
                                <td class="px-4 py-3">2025-01-15</td>
                                <td class="px-4 py-3">2025-01-20</td>
                                <td class="px-4 py-3">Exclusive</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 bg-green-500 text-white text-sm rounded">Selesai</span>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-amber-100">
                                <td class="px-4 py-3">2</td>
                                <td class="px-4 py-3">Alice Johnson</td>
                                <td class="px-4 py-3">2025-01-10</td>
                                <td class="px-4 py-3">2025-01-15</td>
                                <td class="px-4 py-3">Standard</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 bg-green-500 text-white text-sm rounded">Selesai</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    {{-- <script src="js/navbar.js"></script> --}}

</body>
</html>