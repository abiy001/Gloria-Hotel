<nav class="mt-6 flex flex-col space-y-3">
    <button id="home" class="bg-[{{ env('COLOR_1') }}] text-[{{ env('COLOR_2') }}] py-2 px-4 rounded-lg w-full text-lg hover:bg-[{{ env('COLOR_3') }}] text-[{{ env('COLOR_2') }}] transition">
        <a href="/">Home</a>
    </button>
    <button id="profile" class="bg-[{{ env('COLOR_1') }}] text-[{{ env('COLOR_2') }}] py-2 px-4 rounded-lg w-full text-lg hover:bg-[{{ env('COLOR_3') }}] text-[{{ env('COLOR_2') }}] transition">
        <a href="{{ route('profile.dashboard.view') }}">Profile</a>
    </button>
    <button id="reservasi" class="py-2 px-4 rounded-lg w-full text-lg hover:bg-[{{ env('COLOR_3')}}] transition">
        <a href="{{ route('profile.reservasi.view') }}">Reservasi</a>
    </button>
    <button id="logout" class="bg-[{{ env('COLOR_1') }}] text-[{{ env('COLOR_2') }}] py-2 px-4 rounded-lg w-full text-lg hover:bg-[{{ env('COLOR_3') }}] text-[{{ env('COLOR_2') }}] transition">
        <a href="{{ route('logout') }}">Logout</a>
    </button>
</nav>

<script>
    const profileBtn = document.getElementById('profile');
    const reservasiBtn = document.getElementById('reservasi');
    const homeBtn = document.getElementById('home');
    const currentPath = window.location.pathname;
    console.log(currentPath);

    if (currentPath === '/profile') {
        profileBtn.classList.add('bg-[{{ env('COLOR_3') }}]');
        profileBtn.classList.add('text-[{{ env('COLOR_2') }}]');
        profileBtn.classList.remove('bg-[{{ env('COLOR_1') }}]');
        profileBtn.classList.remove('text-[{{ env('COLOR_2') }}]');
    } else if (currentPath === '/profile/reservasi' || currentPath === '/profile/riwayat' || currentPath === '/profile/belum-bayar' || currentPath === '/profile/proses') {
        reservasiBtn.classList.add('bg-[{{ env('COLOR_3') }}]');
        reservasiBtn.classList.add('text-[{{ env('COLOR_2') }}]');
        reservasiBtn.classList.remove('bg-[{{ env('COLOR_1') }}]');
        reservasiBtn.classList.remove('text-[{{ env('COLOR_2') }}]');
    } else if (currentPath === '/') {
        homeBtn.classList.add('bg-[{{ env('COLOR_3') }}]');
        homeBtn.classList.add('text-[{{ env('COLOR_2') }}]');
        homeBtn.classList.remove('bg-[{{ env('COLOR_1') }}]');
        homeBtn.classList.remove('text-[{{ env('COLOR_2') }}]');
    }

</script>