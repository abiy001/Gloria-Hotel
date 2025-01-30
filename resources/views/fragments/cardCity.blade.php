<a href={{$link}} class="relative group">
    <!-- Gambar -->
    <img class="h-48 w-full object-cover" src="{{$img}}" alt="">

    <!-- Overlay dan Teks -->
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
      <h1 class="text-white text-lg font-bold">{{$city}}</h1>
    </div>
</div>