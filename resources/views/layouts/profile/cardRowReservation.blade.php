<div class="mb-2 mt-2">
    <div id="semua" class="tab-content block">
        <div class="border p-4 rounded-md mb-4 flex justify-between">
            <div>
                <h2 class="font-semibold text-lg">Pesanan Kamar Hotel Kelas {{ $roomtypename }}</h2>
   <p class="text-gray-600">Payment Status: {{ $payment_status }}</p>
   <div class="flex items-center gap-4 mt-2">
      <img src="{{$img}}" class="w-64 h-32 rounded-md" alt="Produk">
       <div class=" flex flex-col">
           <h1 class="uppercase mb-3 text-gray-800 text-3xl font-bold">{{ $hotel_name }}</h1>
           <p class="text-gray-700">Check-in  : {{ $checkin }}</p>
           <p class="text-gray-700">Check-out : {{ $checkout }}</p>
           <h1 class="text-red-600 font-bold text-xl">Rp. {{ $harga }}</h1>
       </div>
   </div>
</div>
<!-- Tombol Bayar di pojok kanan bawah -->
<div class="flex items-end">
   @if ($booking_status == 'checkout')
           <button
           onclick="giveRating({{ $index }})" class="rating-btn bg-black text-white px-4 py-2 rounded-lg hover:bg-slate-700">
               Rating
           </button>                 
   @endif

   @if ($booking_status == 'cancel')
           <button
           class="rating-btn bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-slate-700">
               Cancel
           </button>                 
   @endif

   @if ($booking_status == 'commented')
   <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
       Selesai
   </button>
   @endif

   @if ($booking_status == 'pending' && $payment_status == 'paid')
   <button class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700">
       Sedang DiProses
   </button>
   @endif

   @if ($payment_status == 'pending')
   <a href="{{ route('reservation.payment.view', ['id' => $id]) }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-400">
       Bayar
   </a>
   @endif
</div>
</div>
</div>
</div>

<div  class="rating-form absolute hidden top-0 justify-center items-center   flex-col translate-x-1/2 w-full h-full bg-opacity-25 bg-slate-800  right-1/2 ">

    <form action="{{ route('hotel.rating' , ['id' => $id]) }}" method="POST" enctype="multipart/form-data"  class="w-[250px]  flex flex-col gap-4 bg-slate-50  shadow-2xl  p-5" >
        @csrf
        @method('PUT')
        <div onclick="closeBtn()" class="close-btn hover:cursor-pointer flex justify-end items-center font-bold text-xl">X</div>

        <input type="text" name="reservation_id" value="{{ $id  }}"  disabled id="" />


        <select name="hotel_rating" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
      
        {{-- @if ($total_rating == 0)
            
        <input type="text" name="total_rating" value="1"  disabled id="" />
        @endif
        
        @if ($total_rating > 0)
        <input type="text" name="total_rating" value="{{ $total_rating + 1 }}"  disabled id="" />
        @endif --}}
        
        <button class="rating-btn bg-black text-white px-4 py-2 rounded-lg hover:bg-slate-700">
        Rating
    </button>
</form>
</div>