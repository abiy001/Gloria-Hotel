<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding</title>
    <link rel="stylesheet" href="boxicons.min.css">
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css" />
<link rel="stylesheet" href="/css/navbar.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script><link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link href="/images/logo-hotel/logo-hotel.png" rel="icon">
<link href="/images/logo-hotel/logo-hotel.png" rel="apple-touch-icon">


<!-- Custom styles for this template -->
 
<link href="asset/css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="asset/css/responsive.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body  >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@component('layouts.navbar')
    
@endcomponent
    
<div class=" 2xl:container xl:container lg:container md:container  mx-auto 2xl:px-5 xl:px-5 lg:px-5 md:px-5 px-3 py-7">

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/wedding/ceremonyy.jpg" class="bd-placeholder-img w-[2000px] max-h-[600px]" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%"  fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/wedding/love.jpg" class="bd-placeholder-img w-[2000px] max-h-[600px]" width="100%"  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/wedding/reception.jpg" class="bd-placeholder-img w-[2000px] max-h-[600px]" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%"  fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 
  <section class="shop_section layout_padding">
 

      <div class="grid 2xl:grid-cols-4 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
    

<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/standar 1.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/standar 2.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/standar 3.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/standar 4.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/standar 5.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/standar 6.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>

<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/silver 1.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/silver 2.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/silver 3.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/silver 4.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/silver 5.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/silver 6.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
 
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/gold 1.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/gold 2.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/gold 3.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/gold 4.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/gold 5.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
<div>
  @component('fragments/cardWedding')
  @slot('img')
  images/wedding/gold 6.jpg
  @endslot
  @slot('title')
  nikah
  @endslot
  @slot('penjelasan')
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque aliquid sequi, vitae aliquam amet earum minus fuga, asperiores laboriosam voluptates voluptate maiores deserunt.
  @endslot
  @endcomponent
</div>
 
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@component('layouts.footer')
    
@endcomponent
  <script src="/js/navbar.js"></script>
</body>
</html>