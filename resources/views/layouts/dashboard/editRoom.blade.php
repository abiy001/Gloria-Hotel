<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Edit Room</title>
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
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div>
  <nav class=" py-4"  style="background-color: {{ env('COLOR_1') }};">
      <h1 class="text-white px-4 font-semibold text-2xl">Gloria Hotel</h1>
  </nav>
  </div>

  @component('fragments.toast')
      
  @endcomponent

  <main class="main mx-5 pb-4">

  <div class="text-2xl pt-4 pb-4 font-semibold">
    <h1>Form Edit Data Kamar</h1>
  </div>
<hr>
          <!-- FORM -->
          <form action="{{ route('room.edit', $room -> id) }}" method="POST" class=" flex flex-col gap-4"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
      <div class="py-3">
        <label for="disabledTextInput"  class="form-label text-xl py-3 font-semibold">Room Number</label>
              <div class="input-group has-validation my-3">
                <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" name="room_number" value="{{$room -> room_number }}" id="disabledTextInput" placeholder="No Kamar" required>

                <div class="col-12  ">
                    <label for="disabledTextInput" class="form-label py-5 text-xl font-semibold ">Room Status</label><br>
          <select class="form-control py-3 px-3 w-full border border-2 border-black rounded-lg px-3"  id="disabledTextInput" name="room_status" placeholder="Room Status" required>
            <option value="{{ $room -> room_status }}">{{ $room -> room_status }}</option>
            <option value="available">Available</option>
            <option value="not available">Not Available</option>
            <option value="repairment">Repairment</option>
          </select>          
        </div>

                <div class="col-12  ">
                    <label for="disabledTextInput" class="form-label py-5 text-xl font-semibold ">Room Type ID</label><br>
          <select class="form-control py-3 px-3 w-full border border-2 border-black rounded-lg px-3"  id="disabledTextInput" name="rooms_roomtype_id" placeholder="Room Type" required>
            <option value="{{ $room -> rooms_roomtype_id }}">{{ $room -> roomtype -> roomtype_name }}</option>
         @foreach ($roomType as $item)
             <option value="{{ $item -> id }}">{{ $item -> roomtype_name }}</option>
         @endforeach
          </select>          
        </div>

        <div class="col-12">
          <label for="disabledSelect" class="form-label py-5 text-xl font-semibold ">Hotel</label>
          <select name="hotel_id" value=""  required class="form-control py-3 px-3 w-full border border-2 border-black rounded-lg px-3"  >
            <option value="{{ $room -> hotel_id }}" disable selected hidden>{{ $room -> hotel -> hotel_name }}</option>
            @foreach ($hotels as $item)
            <option value="{{ $item -> id }}">{{ $item -> hotel_name}}</option>
            @endforeach
            
            </select>  
          </div>

            <button class="bg-green-400 p-2 mt-3 rounded-lg text-lg font-semibold" name="simpan" type="submit">Simpan</button>
          </form>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>