<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Dashboard Edit City</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->


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
    <h1>Form Data Edit City</h1>
  </div>
<hr>
          <!-- FORM -->
          <form action="{{ route('city.edit', $city -> id) }}" method="POST" class=" flex flex-col gap-4"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="disabledTextInput" class="form-label text-xl py-3 font-semibold">City Name</label>
              <div class="input-group has-validation my-3">
                <input type="text" class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" name="city_name" value="{{$city -> city_name }}" id="disabledTextInput" placeholder="City Name" required>
                
                <div class="col-12 pb-3">
                    <img class=" max-h-[600px] w-64 my-4" src="{{ url($city -> city_image ) }}" alt="">
                    <input type="text" hidden value="{{ $city -> city_image }}" name="city_image" id="">
                </div>

            <button class="bg-green-400 p-2 mt-3 rounded-lg text-lg font-semibold" name="simpan" type="submit">Simpan</button>
          </form>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>