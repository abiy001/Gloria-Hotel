<div id="mobile-menu" class="fixed top-14 left-0 right-0 hidden bg-opacity-90 z-40 flex justify-center space-x-4 text-white text-lg py-4" style="background-color: {{ env('COLOR_3') }};">
    <a href="{{ route('home') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Home</a>
    <a href="{{ route('profile.dashboard.view') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Profile</a>
    <a href="{{ route('profile.reservasi.view') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Reservasi</a>
    <a href="{{ route('logout') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Logout</a>
</div>