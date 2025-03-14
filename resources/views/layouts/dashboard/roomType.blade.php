<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Room Type</title>
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
      <h1 class="text-black">Data Room Type</h1>
    </div><!-- End Page Title -->

    <hr>

    <div class="row">
        
        @foreach ($roomType as $item)
        <div class="col-sm-4 grid-cols-4 mb-3 mb-sm-0">
<div class="card">
    

        <img src=" {{ $item -> roomtype_image  }}" alt="" class="w-full h-[250px]">
        <div class="card-body" >
            <h5 class="card-title ">{{ $item -> roomtype_name }}</h5>

            <form id="form_delete" action="{{ route('roomType.delete',  $item -> id ) }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit"></button>
            </form>
            <a href="" onclick="confirmDelete(event, {{$loop->iteration - 1}})"  class="btn btn-danger btn-sm px-3 py-1">
            <i class="bi bi-trash"></i>

                  </a>
                  <a href="{{ route('editRoomType.dashboard.view', $item -> id) }}" class="btn btn-primary btn-sm px-3 py-1">
                      <i class="bi bi-pencil"></i>
                    </a>
                </div>
            </div>
        </div>
                @endforeach
  </div>

  
</div>

<div class="static h-screen w-full ">    <div class="fixed bottom-0 right-2 h-16 w-16 ">
    <a href="{{ route('addRoomType.dashboard.view') }}" class="bg-dark text-white rounded-lg px-4 py-3 "><i class="bi bi-plus"></i></a>
  </div>
</div>

  </main><!-- End #main -->



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
    function confirmDelete(e,index) {
      e.preventDefault();

      const form = document.querySelectorAll('#form_delete');
      console.log(form[index]);

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
        form[index].submit();
      }
    });
    }
  </script>

</body>

</html>