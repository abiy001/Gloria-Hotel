
<div id="login-form" class="  z-50 text-slate-900 flex flex-col gap-4  h-full  w-[340px] px-4 py-4 ">
    <form method="POST" action="{{ route('login.submit') }}" class="bg-slate-50 px-4 py-7 flex justify-center items-center flex-col ">

        @csrf
        <h1 class=" text-center font-bold text-2xl mb-5 ">Login Your Account</h1>

        <div class=" flex flex-col gap-4">
            <div class=" flex flex-col gap-2">
                <label class=" font-semibold text-slate-900" for="email">Email</label>
                <input type="text" name="email" class=" w-full px-2 py-2 rounded-md border border-slate-900">
            </div>

            <div class=" flex flex-col gap-2">
                <label class=" font-semibold text-slate-900" for="password">Password</label>
                <input type="password" name="password" class=" w-full px-2 py-2 rounded-md border border-slate-900">
            </div>

            <div class=" flex flex-col gap-2 mt-2">
                <button type="submit" class=" w-full text-slate-50 px-2 py-2 rounded-md font-bold"
                style="background-color: {{ env('COLOR_3') }}"
                > Login </button>

                <p class=" font-semibold">Don't have an account ? <span id="register-span" class=" text-blue-600 cursor-pointer">Register</span> Now</p>
            </div>
        </div>

       
    </form>
</div>