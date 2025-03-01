<div class=" flex flex-col ">
    <div class="relative">
        <img class="max-h-[400px] w-full" src=" /{{ $img }}" alt="card_room">
        <a href={{ $link }} class="hover:cursor-pointer absolute bottom-3 right-4 bg-gray-500 bg-opacity-50 text-white px-3 py-2">
            <h1>More Details</h1>
        </a>
    </div>

    <div class="  flex flex-col p-3 pb-7 bg-slate-50 shadow-md">
       <div>

           <h1 class=" font-bold text-3xl" style="color: {{ env('COLOR_1') }}">{{ $name }}</h1>
           <h1 class="text-lg text-gray-700 font-semibold">Room Size: 24 sqm</h1>
        </div>

        <div class=" w-full h-[1px] my-4 bg-black rounded-full"></div>
        
        <div class="flex flex-row gap-3 items-center justify-between">
            <div class=" 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl text-2xl" style="color: {{ env('COLOR_1') }}">
                <h1>{{ $price }}</h1>
            </div>

            <a href="{{ $link }}" class=" hover:cursor-pointer flex justify-center items-center px-3 py-2" style="background-color: {{ env('COLOR_3') }}; color:{{ env('COLOR_2') }}">
                <h1>BOOK NOW</h1>
            </a>
        </div>
    </div>
</div>