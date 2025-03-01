<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/navbar.css">
  <link href="/images/logo-hotel/logo-hotel.png" rel="icon">
  <link href="/images/logo-hotel/logo-hotel.png" rel="apple-touch-icon">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body class="font-sans antialiased">
    @component('layouts.navbar')
        
    @endcomponent

  <!-- Hero Section -->
  <section class="w-full relative">
      <img src="/{{$cities -> city_image}}" class="w-full relative max-h-[500px]">
      <div class=" absolute w-full h-full top-0 bg-slate-900 bg-opacity-40"></div>
      <h2 class="absolute 2xl:top-80 xl:top-80 lg:top-80 md:top-80 sm:top-80 top-56 flex w-full h-full text-white text-3xl md:text-5xl font-roboto font-bold px-8 uppercase">STAY WITH US IN {{ $cities -> city_name }}</h2>
  </section>

  <!-- Hotels Section -->
  <div class=" flex flex-col container mx-auto 2xl:w-11/12">

  <h2 class="pl-6 text-6xl mt-6 font-sans font-bold uppercase">
        {{ $cities -> city_name }}
      </h2>
  <section class="container mx-auto py-16 px-6 items-center justify-items-center">
      <p class="text-lg font-sans">
        Dikenal sebagai Pulau Jawa, Cirebon memikat pengunjung dengan pura mistis, dan matahari terbenam yang cerah. Keindahan alamnya, kekayaan budayanya, keramahtamahannya, dan santapan kelas dunia menjadikannya destinasi yang wajib dikunjungi.
      </p>
      <p class="text-lg mt-2 font-sans">
      Dari pemandangan menakjubkan dan tradisi penuh warna hingga hiburan menarik dan kuliner eksotis, Cirebon menawarkan sesuatu untuk semua orang. Baik Anda mencari relaksasi, petualangan, atau pelarian budaya, pulau surga ini menjanjikan perjalanan yang tak terlupakan.
      </p>
      <p class="text-lg mt-6 mb-12 font-sans">
      Rasakan keajaiban Cirebon bersama kami.
      </p>
    <div class="grid md:grid-cols-2 gap-8 w-full">
        @foreach ($hotels as $item)
        
        @component('fragments.cardHotel')
        @slot('hotel')
        {{ $item -> hotel_name }}
        @endslot
        @slot('city')
        {{ $item -> city -> city_name }}
        @endslot
        @slot('img')
        /{{ $item -> hotel_image  }}
        @endslot
        @slot('title')
        {{ $item -> hotel_name }}
        @endslot

        @slot('penjelasan')
        {{ $item -> hotel_description }}
        @endslot

        @endcomponent
       
    
        @endforeach
    </div>
  </section>
</div>

  <!-- Footer Section -->
  @component('layouts.footer')
    
  @endcomponent

  <script src="/js/navbar.js"></script>
</body>
</html>