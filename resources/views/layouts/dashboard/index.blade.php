<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <style>
        #add-room-number {
            display: none;
        }
        #add-room-number.active {
            display: flex;
        }
    </style>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
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
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body class="">
  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: {{ env('COLOR_1') }};">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block text-white px-4">Gloria Hotel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn text-white "></i>
    </div><!-- End Logo -->




        
  </header><!-- End Header -->

 @component('layouts.dashboard.asideDashboard')
     
 @endcomponent

  <main id="main" class="main relative ">

    <div class="pagetitle">
      <h1 class="text-black">Data Reservasi</h1>
    </div><!-- End Page Title -->

    <div>

      <table class="table table-striped table-sm flex items-center  ">
        <thead>
          <tr>
            <th scope="col">No</th>
                    <th scope="col">Nama </th>
              <th scope="col">Type Kamar</th>
              <th scope="col">No Kamar</th>
              <th scope="col">Harga</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Status Payment</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($reservation as $item )
                
            <tr>
                <td>{{ $loop->iteration  }}</td>
                <td>{{ $item-> name }}</td>
                <td>{{ $item -> room_id }}</td>
                <td>{{ $item -> room_id }}</td>
              <td>{{ $item -> price }}</td>
              <td>{{ $item -> checkin_date }}</td>
              <td>{{ $item -> checkout_date }}</td>
              <td>{{ $item -> payment_status }}</td>
              <td>
                  @if ($item-> payment_status == 'pending')
                  <div class="flex gap-2 flex-warp min-h-full">
                            <form id="form_delete" action="{{ route('reservation.cancel',  $item -> id ) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <button type="submit"></button>
                            </form>

                            <a href="" onclick="cancelReservation(event)" class="btn btn-danger btn-sm px-3 py-1">
                              <i class="bi bi-x"></i>
                            </a>

                        <div id="add-room-number-btn" class="btn btn-primary btn-sm px-3 py-1">
                            <i class="bi bi-check2"></i>
                        </div>
                        
                    </div>
                    @endif


                    @if ($item->status == 'verified')
                    
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>

      <form action="" method="POST" id="add-room-number" class=" absolute flex flex-col gap-2 px-2 justify-around items-center w-[350px] h-[300px] py-4 bg-slate-950 text-slate-50 shadow-xl translate-x-1/2">
        <div id="btn-close"  class=" hover:cursor-pointer flex justify-end text-sm w-full mr-2 flex-row">
            <h1 class="text-xl font-bold">X</h1>
        </div>
        <h1 class="text-xl font-bold">Add Room Number</h1>
        <select name="room_id" id="" class="w-11/12 h-[40px] outline-none shadow-md text-slate-950">
            @foreach ($rooms as $item )
                
            <option value="{{ $item -> id }}">{{ $item -> room_number }}</option>
            @endforeach
        </select>

        <div>
            <button class="btn btn-primary my-3 w-[330px]">Submit</button>
        </div>
      </form>
   
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
        const addRoomNumber = document.getElementById('add-room-number')
        const addRoomNumberBtn = document.getElementById('add-room-number-btn')
        const btnClose = document.getElementById('btn-close')
        const btnCancel = document.getElementById('btnCancel')
        addRoomNumberBtn.addEventListener('click', function() {
            addRoomNumber.classList.add('active')
        })

        btnClose.addEventListener('click', function() {
            addRoomNumber.classList.remove('active')
        })

        function cancelReservation(e) {
            
            e.preventDefault();
            
            const form = document.getElementById('form_delete');
            
            Swal.fire({
                title: "Are you sure to cancel?",
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