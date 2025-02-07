<div class="card pb-2"> 
    <img src="{{$img}}" width="100%" class="card-img-top h-[300px] object-cover" alt="...">
    <div class="card-body flex flex-col gap-2">
      <div class="heading_container heading_center">
        <h1 class=" font-bold text-lg">{{$title}}</h1>
      </div>
      <p class="card-text text-justify line-clamp-3">{{$penjelasan}}</p>
      
      <!-- Tombol yang lebih panjang dan tetap responsif -->
      <div class="flex justify-center gap-4 px-4 pt-4 w-full"> 
        <a href="#" class=" text-slate-50 hover:text-slate-50 py-1 font-bold  text-sm hover:bg-slate-900 bg-amber-900  flex items-center justify-center w-full sm:w-[180px] max-w-[200px]" >
          <i class='bx bxl-whatsapp'></i>
        </a>
        <a href="#" class="text-slate-50  py-1  font-bold text-sm hover:text-slate-50 hover:bg-slate-900  bg-amber-900 text-center w-full sm:w-[180px] max-w-[200px]" style=" ">
          Detail
        </a>
      </div>
  
    </div>
  </div>