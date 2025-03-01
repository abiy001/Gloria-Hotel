<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Manage Rooms</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


  <!-- Favicons -->
  <link href="/images/logo-hotel/logo-hotel.png" rel="icon">
  <link href="/images/logo-hotel/logo-hotel.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    @component('fragments.toast')
        
    @endcomponent

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: {{ env('COLOR_1') }};">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block text-white px-4">Gloria Hotel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn text-white"></i>
    </div><!-- End Logo -->




        
  </header><!-- End Header -->

  @component('layouts.dashboard.asideDashboard')
    
  @endcomponent

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 class="text-black">Data Kamar</h1>
    </div><!-- End Page Title -->

    <div class=" flex justify-end items-center mb-4">
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Filter <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
        </button>
        
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="{{ route("room.dashboard.view" , ['sort' => 'nomorKamarTerbesar']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Desc</a>
              </li>
              <li>
                <a href="{{ route("room.dashboard.view" , ['sort' => 'nomorKamarTerkecil']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Asc</a>
              </li>
              <li>
                <a href="{{ route("room.dashboard.view" , ['sort' => 'available']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Available Kamar</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
              </li>
            </ul>
        </div>
        
    </div>

    <div>

        <table class="table table-striped table-sm flex items-center  ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Kamar</th>
                    <th scope="col">Type Kamar </th>
                    <th scope="col">Hotel Name </th>
              <th scope="col">Harga Per Malam</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Status Kamar</th>
              <th scope="col">Check in</th>
              <th scope="col">Check out</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($room as $item)
                
            <tr>
              <td>{{ $loop->iteration  }}</td>
                <td>{{ $item->room_number }}</td>
                <td>{{ $item -> roomtype -> roomtype_name }}</td>
                <td>{{ $item -> hotel -> hotel_name }}</td>
                <td>{{ number_format( $item -> roomtype -> price_per_day, 0, ',', '.') }}</td>
                <td>{{ $item -> roomtype -> roomtype_description }}</td>
                <td>{{ $item -> room_status }}</td>
                <td>{{ $item -> checkin_date }}</td>
                <td>{{ $item -> checkout_date }}</td>
                <td>
                    <div class="flex flex-warp gap-2">
                      <form id="form_delete" action="{{ route('room.delete',  $item -> id ) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"></button>
                      </form>
                  <a href="" onclick="confirmDelete(event)"  class="btn btn-danger btn-sm px-3 py-1">
                    <i class="bi bi-trash"></i>
          
                            </a>

                        <a href="{{ route('editRoom.dashboard.view', $item -> id) }}" class="btn btn-primary btn-sm px-3 py-1">
                            <i class="bi bi-pencil"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>

    <div class="static h-screen w-full ">
      <div class="fixed bottom-0 right-2 h-16 w-16 ">
      <a href="{{ route('addRoom.dashboard.view') }}" class="bg-dark text-white rounded-lg px-4 py-3 "><i class="bi bi-plus"></i></a>
    </div>
  </div>
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    function confirmDelete(e) {
      e.preventDefault();

      const form = document.getElementById('form_delete');

      Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    form.submit();
  }
});
    }
  </script>
</body>

</html>