<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Edit Hotel</title>
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
          <form action="{{ route('hotel.edit', $hotel -> id) }}" method="POST" class=" flex flex-col gap-4"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label for="disabledTextInput" class="form-label w-full">Hotel Name</label>
                      <div class="input-group has-validation">
                        <input type="text"class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" id="disabledTextInput" name="hotel_name" value="{{ $hotel -> hotel_name }}" placeholder="Hotel Name" required>
                        
                        <div class="col-12 mb-3">
                            <label for="disabledSelect" class="form-label">Hotel Description</label>
                            <input type="text" class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" value="{{ $hotel -> hotel_description }}"  id="disabledTextInput" name="hotel_description" placeholder="No Kamar" required />
                        </div> 
        
                        <div class="col-12">
                            <label for="disabledSelect" class="form-label">City</label>
                            <select value=""  class="form-control w-full border border-2 rounded-lg border-black py-3 px-3" id="disabledSelect" name="city_id" required>
                                <option value="{{ $hotel -> city_id }}" disable selected hidden>{{ $hotel -> city -> city_name }}</option>
                                @foreach ($city as $item) 
                                    
                                <option value="{{ $item -> id }}">{{ $item -> city_name }}</option>
                                @endforeach
                              </select>  
                            </div>
        
                            <div class="col-12 pb-3">
                                <img class=" max-h-[600px] w-64 my-4" src="{{ url($hotel -> hotel_image ) }}" alt="">
                                <input type="file" hidden value="{{ $hotel -> hotel_image }}" name="hotel_image" id="">
                            </div>
            <button class="bg-green-400 p-2 mt-3 rounded-lg text-lg font-semibold" name="simpan" type="submit">Simpan</button>
          </form>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>