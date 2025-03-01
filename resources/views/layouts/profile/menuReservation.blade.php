<div class="border-b flex overflow-x-auto">
    <button id="semua" class="tab-button px-4 py-2 text-gray-600 hover:text-red-500"><a href="reservasi">Semua</a></button>
    <button id="belum-bayar" class="  tab-button relative px-4 py-2 text-gray-600 hover:text-red-500">
        <a href="belum-bayar">Belum Bayar </a>
        <div class=" absolute top-0 right-0 bg-opacity-80 bg-red-600 text-slate-50 font-bold rounded-full w-6 h-6">{{ $belum_bayar }}</div>
    </button>
    <button id="proses" class="tab-button px-4 py-2 text-gray-600 hover:text-red-500"><a href="proses">Proses</a></button>
    <button id="riwayat" class="tab-button px-4 py-2 text-gray-600 hover:text-red-500"><a href="riwayat">Riwayat</a></button>
</div>

<script>
    const semua = document.getElementById('semua');
    const belumBayar = document.getElementById('belum-bayar');
    const proses = document.getElementById('proses');
    const riwayat = document.getElementById('riwayat');
    const currentPathMenuReservation = window.location.pathname;

    if (currentPathMenuReservation === '/profile/riwayat') {
        riwayat.classList.add('text-red-500');
        riwayat.classList.add('font-semibold');
    } else if (currentPathMenuReservation === '/profile/belum-bayar') {
        belumBayar.classList.add('text-red-500');
        belumBayar.classList.add('font-semibold');
    } else if (currentPathMenuReservation === '/profile/proses') {
        proses.classList.add('text-red-500');
        proses.classList.add('font-semibold');
    } else if (currentPathMenuReservation === '/profile/reservasi') {
        semua.classList.add('text-red-500');
        semua.classList.add('font-semibold');
    }

</script>