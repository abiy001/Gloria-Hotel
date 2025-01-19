@if (session('error') || $errors->any()) 
<script>
    Swal.fire({
position: "top-center",
icon: "error",
title: "{{ session('error') }}  {{ $errors->first() }}",
showConfirmButton: false,
timer: 1500
});
</script>

@endif

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