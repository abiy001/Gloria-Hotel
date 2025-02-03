<nav class="relative flex justify-between px-4 items-center py-3 bg-opacity-90" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
    <div class="flex items-center">
        <button id="menu-toggle" class="lg:hidden block text-2xl">
            &#9776;
        </button>
        <h1 class="font-bold text-4xl ml-2">Hotel</h1>
    </div>

    <div class="hidden lg:flex gap-4 text-lg font-semibold">
        <a href="/home" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Home</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Hotels</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Wedding</a>
    </div>

    <div id="account" class="hover:cursor-pointer text-slate-50 font-bold px-2 py-3 rounded-md" style="background-color: {{ env('COLOR_3') }}">
        <h1>Akun</h1>
    </div>
</nav>
 <!-- Sidebar for small screens -->
 <div id="sidebar" class="fixed inset-y-0 left-0 w-64 top-16 bg-opacity-90 z-50 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
    <div class="relative flex justify-between p-4 text-center font-bold text-xl" style="background-color: {{ env('COLOR_3') }}">
        <a href="{{ route('home') }}">
            Gloria Hotel
        </a>
    </div>

    <nav class="flex-grow">
        <ul>
            <li class="hover:bg-slate-50 hover:bg-opacity-10">
                <a href="{{ route('home') }}" class="block py-3 px-4">Home</a>
            </li>
            <li class="hover:bg-slate-50 hover:bg-opacity-10">
                <a href="{{ route('profile.dashboard.view') }}" class="block py-3 px-4">Profile</a>
            </li>
            <li class="hover:bg-slate-50 hover:bg-opacity-10">
                <a href="{{ route('profile.riwayat') }}" class="block py-3 px-4">Riwayat Reservasi</a>
            </li>
            <li class="hover:bg-slate-50 hover:bg-opacity-10">
                <a href="{{ route('profile.reservasi') }}" class="block py-3 px-4">Status Reservasi</a>
            </li>
            <li class="hover:bg-slate-50 hover:bg-opacity-10">
                <a href="#" class="block py-3 px-4">Logout</a>
            </li>
        </ul>
    </nav>
</div>