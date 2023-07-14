<nav class="flex items-center justify-between">
    <a href="/">
        <img class="w-40" src="{{asset('images/logo.png')}}" alt="logo"/>
    </a>
    <div
        class="flex gap-[69px] text-hitam-200 text-xl font-work font-normal"
    >
        <a href="/" class="hover:font-medium">Home</a>
        <a href="#" class="hover:font-medium">Activity</a>
        <a href="#" class="hover:font-medium">Article</a>
        <a href="#" class="hover:font-medium">About</a>
    </div>
    @auth()
        <a
            href="/profile/{{auth()->user()->id}}"
            class="bg-hijau-200 px-8 py-4 font-work font-medium text-white rounded-xl"
        >
            Profile
        </a>
        <form action="/logout" method="post">
            @csrf
            @method('POST')
            <button
                type="submit"
                class="bg-hijau-200 px-8 py-4 font-work font-medium text-white rounded-xl"
            >
                Logout
            </button>
    @else
        <a
            href="/registerForm"
            class="bg-hijau-200 px-8 py-4 font-work font-medium text-white rounded-xl"
        >
            Register
        </a>
    @endauth
</nav>
