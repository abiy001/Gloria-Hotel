<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Gloria Hotel - Add Room</title>
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
  <div>

    @component('layouts.dashboard.navadmin')
    @endcomponent

    @component('fragments.toast')
        
    @endcomponent
    
  </div>
  <main class="main mx-5 pb-4 flex flex-col gap-3">

  <div class="text-2xl pt-4">
    <h1>Add Data Hotel</h1>
  </div>
<hr>
          <!-- FORM -->
          <form class="" action="{{ route('hotel.submit') }}" method="POST"  enctype="multipart/form-data">
            @csrf
      <div class="col-12">
        <label for="disabledTextInput" class="form-label w-full">Hotel Name</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control mb-3" value="" id="disabledTextInput" name="hotel_name" placeholder="Hotel Name" required>
                
                <div class="col-12 mb-3">
                    <label for="disabledSelect" class="form-label">Hotel Description</label>
                    <input type="text" class="form-control" class="mb-3" value="" id="disabledTextInput" name="hotel_description" placeholder="Hotel Description" required />
                </div> 

                <div class="col-12">
                    <label for="disabledSelect" class="form-label">City</label>
                    <select value="" class="form-select" id="disabledSelect" name="city_id" required>
                        <option value="1" disable selected hidden>Type Kamar</option>
                        @foreach ($city as $item) 
                            
                        <option value="{{ $item -> id }}">{{ $item -> city_name }}</option>
                        @endforeach
                      </select>  
                    </div>

                <div class="col-12 mt-3">
                    <label for="disabledSelect" class="form-label">Hotel Image</label>
                    <input type="file" class="form-control" name="hotel_image" id="">
                </div>

            <button class="btn-sm btn btn-primary rounded-lg mt-3" name="simpan" type="submit">Submit</button>
          </form>

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

</body>

</html>