<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@component('layouts/navbar')
@endcomponent   

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('/images/offers/Bali.jpg')}}" class="bd-placeholder-img" width="100%"  style="height: 550px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%"  fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('/images/offers/laut.jpeg')}}" class="bd-placeholder-img" width="100%" style="height: 550px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%"  fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('/images/offers/pantai.jpg')}}" class="bd-placeholder-img" width="100%"  style="height: 550px;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%"  fill="var(--bs-secondary-color)"/></svg>
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

  <div class="container mx-auto justify-center items-center px-4 pt-7">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pl- gap-6 lg w-full">
<div>
  @component('fragments/cardOffer')

  @slot('img')
  images/offers/foto1.jpg
  @endslot
  @slot('title')
  BOOK EARLY, SAVE MORE
  @endslot
  @slot('penjelasan')
  Get up to 20 % when you book early
  @endslot

  @endcomponent

  
</div>

<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto2.jpg
@endslot
@slot('title')
BEST PICKS
@endslot
@slot('penjelasan')
Complimentary and handpicked perks
@endslot

@endcomponent

</div>

<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto3.jpg
@endslot
@slot('title')
EXTRA NIGHT ON US
@endslot
@slot('penjelasan')
Stay another night at no extra cost
@endslot

@endcomponent

</div>
<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto4.jpg
@endslot
@slot('title')
January Fresh
@endslot
@slot('penjelasan')
Benefit :
@endslot

@endcomponent

</div>
<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto5.jpg
@endslot
@slot('title')
Secret Deals
@endslot
@slot('penjelasan')
Secret Deal: Staycation at Aston Inn Batu, book now!
@endslot

@endcomponent

</div>
<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto6.jpg
@endslot
@slot('title')
EXTRA NIGHT ON US
@endslot
@slot('penjelasan')
Stay another night at no extra cost
@endslot

@endcomponent

</div>
<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto7.jpg
@endslot
@slot('title')
BEST PICKS
@endslot
@slot('penjelasan')
Complimentary and handpicked perks
@endslot

@endcomponent

</div>
<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto8.jpg
@endslot
@slot('title')
BOOK EARLY, SAVE MORE
@endslot
@slot('penjelasan')
Get up to 20 % when you book early
@endslot

@endcomponent

</div>
<div>
@component('fragments/cardOffer')

@slot('img')
images/offers/foto9.jpg
@endslot
@slot('title')
Secret Deal
@endslot
@slot('penjelasan')
Secret Deal up to 32% OFF
@endslot

@endcomponent

</div>
</div>
</div>

  <script src="/js/navbar.js"></script>

</body>
</html>