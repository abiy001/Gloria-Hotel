

<!-- sidebar -->
<div class="flex flex-col lg:flex-row h-screen" id="sidebar">
    <aside class="hidden lg:block w-64 text-gray-100 flex flex-col" style="background-color: {{ env('COLOR_1') }}; color: {{ env('COLOR_2') }}">
        <div class="p-4 text-center font-bold text-xl" style="background-color: {{ env('COLOR_3') }}">
            Gloria Hotels
        </div>

        <nav class="" id="sidebar">
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
    </aside>