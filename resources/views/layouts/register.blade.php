<div id="register-form" class=" fixed bg-slate-900 z-50 text-slate-900 flex flex-col gap-4 bg-opacity-30 h-full w-full py-4 ">
    <form method="post" action="{{ route('register.submit') }}" class="bg-slate-50 p-4 w-[340px] ">
        @csrf
        
        <div id="close_register" class=" cursor-pointer flex justify-end  text-slate-900 font-bold p-2 rounded-full items-center text-center mb-2">
            <h1>X</h1>
        </div>
        <h1 class=" text-center font-bold text-2xl mb-5 " style="{{ env('COLOR_3') }}">Register Form</h1>

        <div class=" flex flex-col gap-2">
            <label class=" font-semibold text-slate-900">Name</label>
            <input type="text" name="name" class=" w-full px-2 py-2 rounded-md border border-slate-900">
        </div>

        <div class=" flex flex-col gap-2">
            <label class=" font-semibold text-slate-900">No HP</label>
            <input type="number" name="nohp" class=" w-full px-2 py-2 rounded-md border border-slate-900">
        </div>

        <div class=" flex flex-col gap-2">
            <label class=" font-semibold text-slate-900">Email</label>
            <input type="text" name="email" class=" w-full px-2 py-2 rounded-md border border-slate-900">
        </div>
        
        <div class=" flex flex-col gap-2">
            <label class=" font-semibold text-slate-900" >Username</label>
            <input type="text" name="username" class=" w-full px-2 py-2 rounded-md border border-slate-900">
        </div>

        <div class=" flex flex-col gap-2">
            <label class=" font-semibold text-slate-900" >Password</label>
            <input type="password" name="password" class=" w-full px-2 py-2 rounded-md border border-slate-900">
        </div>

        {{-- <div class=" flex flex-col gap-2">
            <label class=" font-semibold text-slate-900" for="password_confirmation" :value="__('Confirm Password')" >Confirm Password</label>
            <input type="password" name="password_confirmation" class=" w-full px-2 py-2 rounded-md border border-slate-900">
        </div> --}}

            <div class=" flex flex-col gap-2 mt-2">
                <button class=" w-full text-slate-50 px-2 py-2 rounded-md font-bold"
                style="background-color: {{ env('COLOR_3') }}"
                >Register</button>
            </div>
        </div>

       
    </form>
</div>
