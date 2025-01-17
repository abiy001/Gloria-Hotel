<nav class=" relative flex justify-between px-4 items-center py-3 " style="background-color: {{ env('COLOR_1') }};  color: {{ env('COLOR_2') }}">
    <div>
        <h1 class=" font-bold text-4xl">Hotel</h1>
    </div>

    <div class=" flex gap-4  text-lg font-semibold">
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Home</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Hotels</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Wedding</a>
    </div>

    <div id="account" class=" hover:cursor-pointer text-slate-50 font-bold px-2 py-3 rounded-md" style="background-color: {{ env('COLOR_3') }}">
        <h1>Akun</h1>
    </div>

    @if (! Auth::user())
        
    @component('layouts.login')
    
    @endcomponent
    
    @endif
    
    @if (! Auth::user())
        
    @component('layouts.register')
    
    @endcomponent
    @endif

    @if (Auth::user())
        
    <div id="navbar_dropdown" class="text-slate-900 font-bold">
        <a href="{{ route('logout') }}" class=" hover:bg-slate-200 bg-slate-50 shadow-sm px-6 py-2">Logout</a>
        <a href="{{ route('profile') }}" class=" hover:bg-slate-200 bg-slate-50 shadow-sm px-6 py-2">Profile</a>
    </div>
    @endif
</nav>