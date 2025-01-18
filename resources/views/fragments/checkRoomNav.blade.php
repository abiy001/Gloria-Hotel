<nav id="checkRoomNav" class="flex 2xl:flex-row xl:flex-row lg:flex-row 2xl:9/12 xl:w-10/12 lg:w-11/12  w-11/12 flex-col mx-auto items-center justify-between  translate-x-1/2 right-1/2 gap-5 absolute justify-center shadow-inner bg-slate-50 p-2 text-slate-900">

    <div id="close_checkRoomNav" class="  2xl:hidden xl:hidden lg:hidden hover:cursor-pointer w-full flex justify-end font-bold text-2xl">
        <h1>x</h1>
    </div>

    <div class=" 2xl:w-72 xl:w-72 lg:w-72 w-full flex flex-col gap-2 justify-between">
        <h1 class="text-lg font-bold" style="color:{{ env('COLOR_1'); }}">Destination</h1>

        <select name="city" id="" required aria-placeholder="City" class=" w-full border-none  ">
            <option value="" class="bg-slate-50">Jakarta</option>
            <option value="">Cirebon</option>
        </select>
    </div>

    
<div id="date-range-picker" date-rangepicker class="flex 2xl:w-72 xl:w-72 lg:w-72 w-full items-center">
    <div class="flex flex-col gap-2">
    <h1 class="text-sm font-bold" style="color:{{ env('COLOR_1'); }}">Check in</h1>
    <div class="relative">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
          </svg>
      </div>

      <input required id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
    </div>
    </div>
    <span class="mx-4 text-gray-500">to</span>
    <div class="flex flex-col gap-2">

        <h1 class="text-sm font-bold" style="color:{{ env('COLOR_1'); }}">Check out</h1>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input required id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
        </div>
  </div>
  </div>
  
  <div class="2xl:w-60 xl:w-60 lg:w-60 w-full flex flex-col justify-between gap-2">
    <h1 class="text-sm font-bold" style="color:{{ env('COLOR_1'); }}">Guest</h1>

  <input required type="number" name="guest" placeholder="guest" class=" w-full px-2 py-2 rounded-md border border-slate-900" />
</div>

<a href="" class=" 2xl:w-32 xl:w-32 lg:w-32 w-full h-14 flex justify-center items-center  text-slate-50 text-sm rounded-md font-bold" style="background-color: {{ env('COLOR_3') }}">CHECK NOW</a>

</nav>