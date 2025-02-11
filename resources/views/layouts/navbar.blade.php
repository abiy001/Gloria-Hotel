<nav class="z-50 relative flex justify-between px-4 items-center py-3 " style="background-color: {{ env('COLOR_1') }};  color: {{ env('COLOR_2') }}">
    <div id="menu_div" class=" 2xl:hidden xl:hidden lg:hidden flex hover:cursor-pointer text-slate-50 text-2xl">
        <i class="ph-bold ph-list"></i>
    </div>
    
    <div>
        <h1 class=" font-bold text-3xl">GLORIA HOTEL</h1>
    </div>

    
    <div class=" 2xl:flex xl:flex lg:flex  hidden gap-4 text-lg font-semibold">
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">HOME</a>
        <a href="{{ route('hotels') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">HOTELS</a>
        <a href="{{ route('offers') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">OFFERS</a>
        <a href="{{ route('wedding') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">WEDDING</a>
    </div>
    
    <div id="navbar-sidebar" class="2xl:hidden xl:hidden lg:hidden flex flex-col gap-4 text-lg font-semibold w-[300px] p-4 justify-center text-slate-50" style="background-color: {{ env('COLOR_3') }}">
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-4 flex justify-start items-center  py-3 ">HOME</a>
        <a href="{{ route('hotels') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-4 flex justify-start items-center  py-3 ">HOTELS</a>
        <a href="{{ route('offers') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-4 flex justify-start items-center  py-3 ">OFFERS</a>
        <a href="{{ route('wedding') }}" class="hover:bg-slate-50 hover:bg-opacity-10 px-4 flex justify-start items-center  py-3">WEDDING</a>
        <div id="booking2" class=" flex justify-center font-semibold hover:cursor-pointer hover:bg-slate-50 hover:bg-opacity-20 text-lg items-center px-3 border border-white py-3" style="color:{{ env('COLOR_2') }}">
            <h1>BOOKING NOW</h1>
        </div>
    </div>

    <div class="  flex flex-row items-center gap-3">
        <div id="booking1" class=" 2xl:flex xl:flex lg:flex hidden justify-center font-semibold hover:cursor-pointer hover:bg-slate-50 hover:bg-opacity-20 text-lg items-center px-3 border border-white py-3" style="color:{{ env('COLOR_2') }}">
            <h1>BOOKING NOW</h1>
        </div>

        <div id="account" class=" hover:cursor-pointer text-slate-50 font-bold px-2 py-3 rounded-md" style="background-color: {{ env('COLOR_2') }}">
            <img class=" w-10" src="{{ url('/images/logo-hotel/logo-hotel.png') }}" alt="">
        </div>
    </div>



    
    @if ( ! Auth::user())
    @component('layouts.login')
    
    @endcomponent
        
    @component('layouts.register')
    
    @endcomponent
    @endif
    
@if (Auth::user())
    

@endif
@component('fragments.checkRoomNav')

@endcomponent

    @if (Auth::user() )

    <div id="navbar_dropdown" class="text-slate-900 font-bold">
        <a href="{{ route('logout') }}" class=" hover:bg-slate-200 bg-slate-50 shadow-sm px-6 py-2">Logout</a>
        <a href="{{ route('profile.dashboard.view') }}" class=" hover:bg-slate-200 bg-slate-50 shadow-sm px-6 py-2">Profile</a>
    </div>
    @endif
</nav>