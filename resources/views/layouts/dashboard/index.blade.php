<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
  <title>Dashboard - Manage Reservations</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <style>
        table tbody tr td #add-room-number {
            display: none;
        }
        table tbody tr td #add-room-number.active {
            display: flex;
        }
    </style>

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
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</head>

<body class="">
  
  @component('fragments.toast')
    
  @endcomponent

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

      <table class="table table-striped table-sm flex items-center ">
        <thead>
          <tr>
            <th scope="col">No</th>
                    <th scope="col">Nama </th>
                    <th scope="col">No Kamar</th>
              <th scope="col">Type Kamar</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Status Payment</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Aksi Booking</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($reservation as $item )
                
            <tr>
                <td>{{ $loop->iteration  }}</td>
                <td>{{ $item-> user -> name }}</td>
                @if ($item-> room_id == NULL)
                  <td>Belum dapat kamar</td>
                @endif
                @if ($item-> room_id != NULL)
                <td>{{ $item -> rooms -> room_number }}</td>
                @endif
                <td>{{ $item  -> roomtype -> roomtype_name }}</td>
                <td>{{ $item -> checkin_date }}</td>
                <td>{{ $item -> checkout_date }}</td>
                <td>{{ $item -> payment_status }}</td>
                <td>{{ number_format( date_diff(date_create($item -> checkin_date), date_create($item -> checkout_date)) ->format('%d') *   $item  -> roomtype -> price_per_day, 0 , ',' , '.') }}</td>
              <td>
                  @if ($item-> booking_status == 'pending')
                  <div class="flex gap-2 flex-warp min-h-full">
                            <form id="form_cancel" action="{{ route('reservation.cancel',  $item -> id ) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <button type="submit"></button>
                            </form>

                           
                            <a onclick="cancelReservation(event)" class="btn btn-danger btn-sm px-3 py-1">
                              <i class="bi bi-x"></i>
                            </a>

                        <div onclick="showForm({{ $item -> id - 1  }})" id="" class="add-room-number-btn btn btn-primary btn-sm px-3 py-1">
                            <i class="bi bi-check2"></i>
                        </div>
                        
                    </div>
                    @endif


                    @if ($item->booking_status == 'verified')
                  
                      <form action="{{ route('reservation.checkout', ['id' => $item -> id]) }}" method="POST" class=" bg-slate-900 text-slate-50 flex justify-center items-center font-bold py-2 rounded-full hover:cursor-pointer hover:text-slate-50 hover:bg-slate-700">
                        @csrf
                        @method('PUT')
                        <button type="submit">Checkout</button>
                      </form>
                    @endif

                    @if ($item->booking_status == 'checkout')
                      <h1 class=" bg-green-500 text-slate-50 flex justify-center items-center font-bold py-2 rounded-full ">Checkout </h1>
                    
                    @endif

                    @if ($item->booking_status == 'cancel')
                    <h1 class=" bg-red-500 text-slate-50 flex justify-center items-center font-bold py-2 rounded-full ">Cancel </h1>
                    @endif

                    <form action="{{ route('reservation.verified', ['id' => $item -> id]) }}" method="POST" id="add-room-number" class=" absolute flex flex-col gap-2 px-2 top-0 2xl:left-20 xl:left-20 lg:left-20 md:left-20 sm:left-5 -left-28  justify-around items-center w-[350px] h-[300px] py-4 bg-slate-950 text-slate-50 shadow-xl translate-x-1/2 translate-y-1/2">
                      @csrf
                      @method('PUT')
                      <div id="btn-close"  class=" hover:cursor-pointer flex justify-end text-sm w-full mr-2 flex-row">

                        <h1 class="text-xl font-bold">X</h1>
                        </div>
                        <h1 class="text-xl font-bold">Add Room Number</h1>
                        <select name="room_id" id="" class="w-11/12 h-[40px] outline-none shadow-md text-slate-950">
                          @foreach ($rooms -> where('hotel_id', $item  -> hotel_id  ) -> where('rooms_roomtype_id', $item -> room_type_id)  -> where('checkout_date','<=', $item -> checkin_date ) as $item )
                          
                          <option value="{{ $item -> id }}">{{ $item -> room_number }}</option>
                          @endforeach
                        </select>
                        {{-- <input type="text" class=" text-black" value="{{ $item -> id }}" name="" id=""> --}}

                        <input type="text" name="checkin_date" hidden disabled value="{{ $item -> checkin_date }}" id="" />
                        
                        <input type="text" name="checkout_date" hidden disabled value="{{ $item -> checkout_date }}" id="" />
                        
                        <div>
                          <button class="btn btn-primary my-3 w-[330px]">Submit</button>
                        </div>
                      </form>
                      @endforeach
                </td>
            </tr>
          </tbody>
        </table>
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
        const addRoomNumber = document.querySelectorAll('#add-room-number')
        const addRoomNumberBtn = document.querySelectorAll('.add-room-number-btn')
        const btnClose = document.querySelectorAll('#btn-close')
        const btnCancel = document.getElementById('btnCancel')

        function showForm(id) {
          addRoomNumber[id].classList.add('active')
        }

        btnClose.forEach(e => {
          e.addEventListener('click', function() {
            addRoomNumber.forEach(e => e.classList.remove('active'))
          })
        });

        function cancelReservation(e) {
      e.preventDefault();

      const form = document.getElementById('form_cancel');

      Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, cancel reservation!"
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
      }
    });
    }
    </script>
</body>

</html>