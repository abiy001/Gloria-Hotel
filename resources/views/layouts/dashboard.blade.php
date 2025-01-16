<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Document</title>
</head>
<body>
    @if (session('success')) 
    <script>
        Swal.fire({
  position: "top-center",
  icon: "success",
  title: "{{ session('success') }}",
  showConfirmButton: false,
  timer: 1500
});
    </script>
    
@endif

    dashboard
</body>
</html>