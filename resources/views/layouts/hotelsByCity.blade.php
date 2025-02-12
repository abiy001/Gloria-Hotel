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
        @slot('img')
        /{{ $item -> hotel_image  }}
        @endslot
        @slot('title')
        {{ $item -> hotel_name }}
        @endslot

        @slot('penjelasan')
        {{ $item -> hotel_description }}
        @endslot

        @slot('link')
        {{ route('detailHotel', $item -> id) }}
        @endslot
        @endcomponent
       
    
        @endforeach
    </div>
  </section>
</div>

  <!-- Footer Section -->
  <footer class="text-white py-10" style="background-color: {{ env('COLOR_1') }};  color: {{ env('COLOR_2') }}">
    <div class="container mx-auto grid md:grid-cols-3 gap-8 px-6">
      <div >
        <h5 class="text-lg font-bold mb-4">Contact Us</h5>
          <a href="https://www.instagram.com/aby_olaa/?utm_source=ig_web_button_share_sheet" class="text-white block">@Hafidz_abiyyu</a>
          <a href="https://www.instagram.com/yazid.khairul3?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white block">@Yazid_Khairul</a>
          <a href="https://www.instagram.com/dweinata?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white block">@Rangga_Pandu</a>
          <a href="https://www.instagram.com/mfrdanp_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white block">@M.Fardhan</a>
          <a href="https://www.instagram.com/arfnyzeed_/?utm_source=ig_web_button_share_sheet" class="text-white block">@Arfan Yazeed</a>
          <a href="https://www.instagram.com/nopal.errr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white block">@M. Naufal</a>
          <a href="https://www.instagram.com/kpeinn?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white block">@KEVIN_LONTONG</a>
      </div>
      <div>
        <h5 class="text-lg font-bold mb-4">About Gloria-Hotel</h5>
        <ul>
          <li><a href="#" class="hover:underline">E-commerce & Global Distribution</a></li>
          <li><a href="#" class="hover:underline">Architecture & Interior Design</a></li>
          <li><a href="#" class="hover:underline">Good Governance</a></li>
          <li><a href="#" class="hover:underline">Condotels</a></li>
        </ul>
      </div>
      <div>
        <h5 class="text-lg font-bold mb-4">Our Sosmed</h5>
        <div class="flex space-x-4">
          <a href="https://www.instagram.com/aby_olaa/?utm_source=ig_web_button_share_sheet"><box-icon name='instagram' type='logo' color='#ffffff' ></box-icon></a>
          <a href=""><box-icon name='youtube' type='logo' color='#ffffff' ></box-icon></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="/js/navbar.js"></script>
</body>
</html>