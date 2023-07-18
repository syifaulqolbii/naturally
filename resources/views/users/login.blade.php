<x-layout>
    <div class="pt-14">
        <div class="flex flex-col items-center justify-center gap-4">
            <img src="{{asset('images/logo-daun.png')}}" alt="" class="w-16" />
            <h1 class="font-playfair text-[32px]">Welcome to Naturally</h1>
            <p class="font-work text-[16px]">
                Login to Naturally to get unforgetable experience!
            </p>
        </div>
    </div>
    <!-- login section -->
    <section class="p-14">
        <form action="/users/authenticate" method="post">
            <div class="flex flex-col items-center font-work text-xl">
                @csrf
                <div class="flex flex-col w-[40%] gap-4">
                    <p>Email</p>
                    <input type="email" name="email" id="email" value="{{old('email')}}" class="rounded-xl h-16 bg-[#f1f1f1] focus:outline-0 focus:ring-1 focus:ring-hijau-200 px-4" />
                    @error('email')
                    <p style="color: red; font-size: small;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-[40%] gap-4 pt-6">
                    <p>Password</p>
                    <input type="password" name="password" id="password" value="{{old('password')}}" class="rounded-xl h-16 bg-[#f1f1f1] focus:outline-0 focus:ring-1 focus:ring-hijau-200 px-4" />
                    @error('password')
                    <p style="color: red; font-size: small;">{{ $message }}</p>
                    @enderror
                </div>
                <button class="bg-hijau-200 p-5 w-[40%] rounded-xl mt-12">
                    <a href="#" class="text-[#ffffff]">Login</a>
                </button>
                <div class="flex pt-16 text-base">
                    <p class="text-[#717171]">Have no account?</p>
                    &nbsp;
                    <a href="/registerForm" class="text-hijau-100">Register!</a>
                </div>
            </div>
        </form>
    </section>
</x-layout>
