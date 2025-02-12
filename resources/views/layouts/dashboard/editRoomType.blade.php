<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
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
    <h1>Form Data Kamar</h1>
  </div>
<hr>
          <!-- FORM -->
          <form action="{{ route('roomType.edit', $roomType -> id) }}" method="POST" class=" flex flex-col gap-4"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12 flex flex-col gap-3 pb-3">
                <label for="disabledTextInput" class="form-label w-full">Room Type Name</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" value="{{ $roomType -> roomtype_name }}" id="disabledTextInput" name="roomtype_name" placeholder="Room Type Name" required>
                        
                        <div class="col-12 mb-3 flex flex-col gap-3 mt-3">
                            <label for="disabledSelect" >Room Type Price</label>
                            <input class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" type="text" class="form-control" class="mb-3" value="{{ $roomType -> price_per_day }}" id="disabledTextInput" name="price_per_day" placeholder="Room Type Price" required />
                        </div> 
        
                        <div class="col-12 mb-3 flex flex-col gap-3">
                            <label for="disabledSelect" class="form-control ">Total Guest</label>
                            <input class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" inputmode="numeric" type="text" class="form-control" class="mb-3" value="{{ $roomType -> guest }}" id="disabledTextInput" name="guest" placeholder="total guest" required />
                        </div> 
        
                        <div class="col-12 mb-3 flex flex-col gap-3">
                            <label for="disabledSelect" class="form-control ">Room Type Description</label>
                            <input class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" type="text" value="{{ $roomType -> roomtype_description }}" class="form-control" class="mb-3" value="" id="disabledTextInput" name="roomtype_description" placeholder="Room Type Description" required />
                        </div> 
                        
                        <div class="col-12 flex flex-col gap-3">
                            <label for="disabledSelect" class="form-control ">Room Type Image</label>
                            <img class=" max-h-[600px] w-64 my-4" src="{{ url($roomType -> roomtype_image ) }}" alt="">
                            <input type="file" class="form-control" name="roomtype_image" hidden value="{{ $roomType -> roomtype_image }}" id="">
        
                        </div>

            <button class="bg-green-400 p-2 mt-3 rounded-lg text-lg font-semibold" name="simpan" type="submit">Simpan</button>
          </form>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>