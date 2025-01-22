 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar" style="background-color: {{ env('COLOR_1') }};">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
        <i class="bi bi-arrow-right"></i>
          <span>Data Reservasi</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('room.dashboard.view') }}">
        <i class="bi bi-arrow-right"></i>
          <span>Data Kamar</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('facility.dashboard.view') }}">
        <i class="bi bi-arrow-right"></i>
          <span>Data Fasilitas</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="laporanbulanan">
        <i class="bi bi-arrow-right"></i>
          <span>Laporan bulanan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('city.dashboard.view') }}">
        <i class="bi bi-arrow-right"></i>
          <span>Data Kota</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('hotel.dashboard.view') }}">
        <i class="bi bi-arrow-right"></i>
          <span>Data Hotel</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->