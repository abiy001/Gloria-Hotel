<div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row flex-col gap-4 bg-gray-50 p-4 rounded-md shadow">
    <!-- Room Image -->
    <div class="2xl:w-1/3 xl:w-1/3 lg:w-1/3 md:w-2/3 w-full">
        <div class="relative">
            <img src="{{$img}}" alt="Room" class="rounded-md w-full">
        </div>
    </div>

    <!-- Room Details -->
    <div class="2xl:w-2/3 xl:w-2/3 lg:w-2/3 w-full flex flex-col justify-between">
        <!-- Room Title -->
        <div>
            <h1 class="text-xl font-extrabold mb-2">{{ $jenis }}</h1>
            <h1 class="text-gray-600 text-sm">{{ $keterangan }}</h1>
        </div>

        <!-- Price & Button -->
        <div class="mt-4">
            <div>
                <p class="text-2xl font-bold text-blue-600" style="color:{{ env('COLOR_1')  }};">{{ $harga }}</p>
                {{-- <p class="line-through text-gray-400 text-sm">{{ $harga }}</p> --}}
                <p class="text-gray-500 text-xs">Taxes included for 1 night</p>
            </div>
            <button style="background-color:{{ env('COLOR_1') }};" class=" font-bold text-lg px-2 py-2 mt-2 hover:bg-blue-800 rounded-lg text-white w-full">
                Reserve
            </button>
        </div>
    </div>
</div>