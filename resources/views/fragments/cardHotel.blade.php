<div class="bg-white rounded-lg shadow-lg overflow-hidden w-full min-h-full h-full">
    <img src="{{$img}}" class="w-full max-h-[400px]">
    <div class="p-4 flex flex-col gap-2">
      <h4 class="text-3xl font-bold line-clamp-2">{{ $title }} </h4>
      <p class="  line-clamp-2 text-justify">{{ $penjelasan }}</p>
      <a href="{{ route('detailHotel', ['city' => $city, 'hotel' => $hotel]) }}" class="mt-4 bg-blue-900 text-white py-2 w-[120px] text-center flex justify-center items-center font-bold px-4 rounded-lg hover:bg-blue-800">
        View Hotel
    </a>
    </div>
  </div>
