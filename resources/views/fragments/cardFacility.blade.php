<div class=" flex flex-col  min-h-full justify-between  shadow-inner min-w-[400px]">
    <div class="">
        <img class=" w-full h-[300px]" src="{{ url ($img) }}" alt="">
    </div>

    <div class=" flex flex-col px-3 py-3">

        <div class=" flex flex-col gap-3 mt-2">
            <h1 class=" font-bold text-2xl" style="color: {{ env('COLOR_1')  }}">{{ $name }}</h1>
            <p class=" text-sm font-semibold text-gray-700 line-clamp-2 truncate text-wrap">Enjoy some fun family time or simply unwind in the peaceful surroundings. Featuring 3 large outdoor swimming pools surrounded by attractive gardens.</p>
        </div>
        
        <div class=" text-sm text-slate-900 mt-4">
            <h1 class=" font-bold">Operational hours</h1>
            <p>6 am - 6 pm</p>
        </div>
    </div>
</div>