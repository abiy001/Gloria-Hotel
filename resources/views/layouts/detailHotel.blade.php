<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Detail Hotel</title>
    <style>
        #show-all-btn :hover{
            background-color: {{ env('COLOR_1') }};
            color:{{ env('COLOR_2') }};
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

/* For IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
    <link rel="stylesheet" href="css/detailHotel.css">
</head>
<body class="pb-4">
 @component('fragments.toast')
     
 @endcomponent
 
 @component('layouts.navbar')
 @endcomponent
 
 <div class="h-[300px] overflow-y-scroll scrollbar-hide min-h-screen scrollbar-hide ">

     <div class=" w-full">
         <div class=" w-full ">
             <img class=" w-full max-h-[500px]" src=" {{ url('/images/hotels/hotel3.jpg') }}" alt="">
            </div>
        </div>
        
        <nav class=" bg-slate-50 text-slate-700 shadow-xl px-4 py-3 font-bold  gap-4 text-lg flex items-center">
            <a href="">Overview</a>
            <a href="">Room Type</a>
            <a href="">Facilities</a>
        </nav>
        
        <div class=" container mx-auto p-7 2xl:w-11/12 xl:w-11/12 w-full ">
            <div class=" grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-7 items-center">

            <div class="flex flex-col justify-between py-4 gap-3">
                <div class=" text-4xl font-bold" style="color: {{ env('COLOR_1') }}">
                    <h1>HOTEL CONTAINER</h1>
                </div>
                <div class=" mt-5">
                    <div class=" 2xl:w-[200px] xl:w-[200px] lg:w-[200px] w-full font-semibold">
                        <p>Jl. Gatot Subroto No. 81 Garuntang, Teluk Betung Selatan - Bandar Lampung</p>
                    </div>
                    <div></div>
                </div>
                
                <div class=" w-full h-[1px] bg-black rounded-full"></div>
                
                <div class="  text-sm text-justify">
                    <p>Aston Lampung City Hotel is a modern and stylish 3-star hotel in the heart of Bandar Lampung. Featuring 119 comfortable guest rooms and suites, five state-of-the-art meeting rooms and a wide range of facilities including, Azalea Restaurant with all-day dining, Cana Lounge for sunset cocktails, The Spa with a range of pampering treatments and an outdoor pool for some family fun. 
                        
                        With stunning views of the beach and the rolling hills of Sumatra, Aston Lampung City Hotel is suited for both business and leisure travelers. Located in the city center, close to the city’s business district, it is also within close proximity of Pasir Putih Beach and Pahawang Island.
                        
                    </p>
                </div>
        </div>

        <div class="flex flex-col gap-4">
            <div class=" text-4xl font-bold flex flex-col gap-5" style="color: {{ env('COLOR_1') }}">
                <h1 class="text-3xl mb-3">Facilities</h1>
                
                <div class=" flex flex-row items-center justify-start gap-9">
                    @component('fragments.facility')
                    @slot('icon')
                    <i class="ph-bold ph-fork-knife"></i>
                    @endslot
                    
                    @slot('name')
                    Restaurant
                    @endslot
                    @endcomponent
                    
                    @component('fragments.facility')
                    @slot('icon')
                    <i class="ph-bold ph-coffee"></i>
                    @endslot

                    @slot('name')
                    Caffe Shop
                    @endslot
                    @endcomponent
                    
                    @component('fragments.facility')
                      @slot('icon')
                      <i class="ph-bold ph-swimming-pool"></i>
                      @endslot
                      
                      @slot('name')
                      Swimming Pool
                      @endslot
                      @endcomponent
                      
                      @component('fragments.facility')
                      @slot('icon')
                      <i class="ph-bold ph-wifi-high"></i>                      @endslot
                      
                      @slot('name')
                      Wifi Connection
                      @endslot
                      @endcomponent
                      
                      @component('fragments.facility')
                      @slot('icon')
                      <i class="ph-bold ph-car"></i>
                      @endslot
                      @slot('name')
                      Car Park
                      @endslot
                      @endcomponent
                    </div>
                    
                    <div class=" text-3xl font-bold flex flex-col gap-5" style="color: {{ env('COLOR_1') }}">
                        <h1 class="mb-3">Services</h1>
                        
                    <div class=" flex flex-row items-center justify-start gap-9">
                        @component('fragments.facility')
                            @slot('icon')
                            <i class="ph-bold ph-fork-knife"></i>
                            @endslot
                            
                            @slot('name')
                            Restaurant
                            @endslot
                            @endcomponent
                            
                            @component('fragments.facility')
                            @slot('icon')
                            <i class="ph-bold ph-coffee"></i>
                            @endslot
                            
                            @slot('name')
                            Caffe Shop
                            @endslot
                            @endcomponent
                            
                            @component('fragments.facility')
                            @slot('icon')
                            <i class="ph-bold ph-swimming-pool"></i>
                            @endslot
                            
                            @slot('name')
                            Swimming Pool
                            @endslot
                            @endcomponent
                            
                            @component('fragments.facility')
                            @slot('icon')
                            <i class="ph-bold ph-wifi-high"></i>                      @endslot
                            
                            @slot('name')
                            Wifi Connection
                            @endslot
                            @endcomponent
                            
                            @component('fragments.facility')
                            @slot('icon')
                            <i class="ph-bold ph-car"></i>
                            @endslot
                            @slot('name')
                            Car Park
                            @endslot
                            @endcomponent
                      </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div id="show-all-btn" class="flex justify-center items-center mx-auto w-full mt-3 font-bold">
        <div  class=" flex justify-center items-center px-3 py-1 border border-black" >
            <h1>Show All</h1>
        </div>
    </div>
    
    <div class=" w-full h-[1px] my-7 bg-black rounded-full"></div>

    
    <div class=" flex flex-col gap-5">
        <div class=" text-4xl font-bold flex flex-col gap-5" style="color: {{ env('COLOR_1') }}">
            <h1>ROOM TYPE</h1>
        </div>  
        
        <div class=" grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-10 min-h-full">
            @foreach ($roomtype as $item)
                
            @component('fragments.cardDetailRoom')

            @slot('img')
            {{ $item-> roomtype_image  }}
            @endslot

            @slot('name')
            {{ $item-> roomtype_name  }}
            @endslot

            @slot('price')
            Rp. {{ number_format($item-> price_per_day, 0, ',', '.') }}  
            @endslot
            @endcomponent
          
            @endforeach
            
        </div>
    </div>
    
    {{-- Facilities --}}
    <div class=" flex flex-col gap-5 mt-5">
        <h1 class=" text-4xl font-bold flex flex-col gap-5" style="color: {{ env('COLOR_1') }}">FACILITIES</h1>
        
        <div class="  flex gap-3 whitespace-nowrap overflow-auto scrollbar-hide">
            @foreach ($facility as $item)
                
            @component('fragments.cardFacility')
            @slot('img')
            {{ $item -> facility_image }}
            @endslot
            
            @slot('name')
            {{ $item -> facility_name }}
            @endslot

            @slot('description')
            {{ $item -> facility_description }}
            @endslot
            
            @endcomponent
            @endforeach

          
            
              
            </div>
        </div>
        {{-- Facilities --}}
    </div>
    </div>
    
    <script src="js/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>