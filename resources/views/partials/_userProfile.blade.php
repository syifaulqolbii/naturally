<header class="bg-[#F8F8F8] pt-8 h-[240px]">
    <div class="md:container">
        <nav class="flex items-center justify-between">
            <a href="/">
                <img class="w-40" src="{{asset('images/logo.png')}}" alt="logo" />
            </a>
            <div class="flex gap-[69px] text-hitam-200 text-xl font-work font-normal">
                <a href="/" class="hover:font-medium">Home</a>
                <a href="/moreEvents" class="hover:font-medium">Activity</a>
                <a href="/moreArticle" class="hover:font-medium">Article</a>
            </div>
            <form action="/logout" method="post">
                @csrf
                @method('POST')
                <button type="submit" class="bg-hijau-200 px-8 py-4 font-work font-medium text-white rounded-xl">
                    Log out
                </button>
            </form>
        </nav>
    </div>
    <div class="flex pt-[100px] pl-[84px]">
        <img src="{{$user->image ? asset('storage/'.$user->image) : asset('images/ava.png')}}" alt=""/>
        <div class="flex flex-col pt-11 pl-5">
            <p class="font-playfair text-hitam-300 font-medium text-4xl pb-1">{{$user->name}}</p>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_438_777)">
                        <path
                            d="M17.1834 7.04158C16.3084 3.19159 12.9501 1.45825 10.0001 1.45825C10.0001 1.45825 10.0001 1.45825 9.99175 1.45825C7.05008 1.45825 3.68341 3.18325 2.80841 7.03325C1.83341 11.3333 4.46675 14.9749 6.85008 17.2666C7.73341 18.1166 8.86675 18.5416 10.0001 18.5416C11.1334 18.5416 12.2667 18.1166 13.1417 17.2666C15.5251 14.9749 18.1584 11.3416 17.1834 7.04158ZM10.0001 11.2166C8.55008 11.2166 7.37508 10.0416 7.37508 8.59158C7.37508 7.14159 8.55008 5.96658 10.0001 5.96658C11.4501 5.96658 12.6251 7.14159 12.6251 8.59158C12.6251 10.0416 11.4501 11.2166 10.0001 11.2166Z"
                            fill="#323232" />
                    </g>
                    <defs>
                        <clipPath id="clip0_438_777">
                            <rect width="20" height="20" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p class="font-work text-[#999999] text-lg pl-1">Surakarta, Jawa Tengah</p>
            </div>

        </div>
        <div class="ml-[808px] pt-20">
            <a href="" class="py-[10px] px-4 border border-[#CECECE] rounded-lg font-medium hover:text-white hover:bg-hitam-300">Edit Profile</a>
        </div>
    </div>
</header>
<div class="flex pt-40 pl-[100px]">
    <a href="/profile/{{auth()->user()->id}}" class="text-hitam-300 border border-[#CECECE] px-4 py-[10px] mr-6 rounded-full hover:text-white hover:bg-hitam-300 focus:text-white focus:bg-hitam-300">About me</a>
    <a href="/profile/{{auth()->user()->id}}/followedEvent" class="text-hitam-300 border border-[#CECECE] px-4 py-[10px] mr-6 rounded-full hover:text-white hover:bg-hitam-300 ">My activity</a>
    <a href="/profile/{{auth()->user()->id}}/article" class="text-hitam-300 border border-[#CECECE] px-4 py-[10px] mr-6 rounded-full hover:text-white hover:bg-hitam-300 ">My article</a>
</div>
