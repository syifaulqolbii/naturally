<nav class="flex items-center justify-between">
    <a href="/">
        <img class="w-40" src="{{asset('images/logo.png')}}" alt="logo"/>
    </a>
    <div
        class="flex gap-[69px] text-hitam-200 text-xl font-work font-normal"
    >
        <a href="/" class="hover:font-medium">Home</a>
        <a href="/moreEvents" class="hover:font-medium">Activity</a>
        <a href="/moreArticle" class="hover:font-medium">Article</a>
    </div>
    @auth()
        @if(auth()->user()->role === 'user')
            <a href="/profile/{{auth()->user()->id}}" class="bg-hijau-200 px-8 py-4 font-work font-medium text-white rounded-xl">
                Profile
            </a>
        @elseif(auth()->user()->role === 'admin')
            <a href="/dashboard" class="bg-hijau-200 px-8 py-4 font-work font-medium text-white rounded-xl">
                Dashboard
            </a>
        @endif
    @else
        <a
            href="/loginForm"
            class="bg-hijau-200 px-8 py-4 font-work font-medium text-white rounded-xl"
        >
            Login
        </a>
    @endauth
</nav>
