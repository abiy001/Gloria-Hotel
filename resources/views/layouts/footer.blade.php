

    <footer class="bg-gray-800 text-white py-4 px-5">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class=" flex flex-col gap-4">
                    <img src="/images/logo-hotel/logo-hotel.png" class="w-24 bg-white p-4 rounded-2xl h-24">
                    <h1 class="text-2xl font-bold text-white">Gloria Hotel</h1>
                    <p class=" text-sm">
                        Kami berkomitmen memberikan layanan terbaik untuk kebutuhan Anda.
                    </p>

                    <div class="flex flex-row space-x-4 mt-2">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                        <i data-lucide="youtube" class="w-5 h-5"></i>
                    </div>
                </div>


                <div>
                    <h2 class="text-lg font-bold text-yellow-500">Navigasi</h2>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center gap-2">
                            <i data-lucide="home" class="w-5 h-5"></i>
                            <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="info" class="w-5 h-5"></i>
                            <a href="{{ route('hotels') }}" class="hover:text-white">Hotels</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="briefcase" class="w-5 h-5"></i>
                            <a href="{{ route('offers') }}" class="hover:text-white">Offers</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                            <a href="{{ route('wedding') }}" class="hover:text-white">Weddings</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-yellow-500">Kontak Kami</h2>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center gap-2">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                            <span>Email: info@mycompany.com</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                            <span>Telepon: +62 812 3456 2332</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                            <span>Alamat: Jl. Perjuangan No. 123, Cirebon</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class=" flex justify-center border-t h-48 items-center mt-8 border-gray-700 pt-4 px-5 gap-4">
            <img src="/images/footer/logo-hotel1.png" class="w-[100px] h-18" alt="">
            <img src="/images/footer/logofais.png" class="w-[100px] h-24" alt="">
            <img src="/images/footer/logonaila.png" class="w-[100px]  h-24" alt="">
            <img src="/images/footer/logo2.png" class="w-[100px]  h-18" alt="">
        </div>
        <div class="mt-8 border-t border-gray-700 pt-4">
            <p class="text-center text-sm">&copy; {{ date('Y') }} Gloria Hotel. Semua hak dilindungi.</p>
        </div>
    </footer>


    <script>
        lucide.createIcons();
    </script>
