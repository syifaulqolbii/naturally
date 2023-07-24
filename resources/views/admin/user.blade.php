<x-layout>
    <div class="flex">
        @include('partials._sidebar')
        {{--Content--}}
        <div class="w-3/4 p-12 bg-white h-screen">
            <div class="flex justify-between items-end mb-10">
                <div class="">
                    <h1 class="font-playfair text-3xl text-[#3C4D27]">
                        User
                    </h1>
                    <p class="font-work text-base text-hitam-200 mt-2">
                        This page contains basic information of users
                    </p>
                </div>
                <form action="/dashboard/user">
                    <div
                        class="border border-[#3C4D27] rounded-md w-[267px] h-9 flex items-center gap-4 py-2 px-4"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                            <path
                                d="M7.66668 13.9999C11.1645 13.9999 14 11.1644 14 7.66659C14 4.16878 11.1645 1.33325 7.66668 1.33325C4.16887 1.33325 1.33334 4.16878 1.33334 7.66659C1.33334 11.1644 4.16887 13.9999 7.66668 13.9999Z"
                                stroke="#3C4D27"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M14.6667 14.6666L13.3333 13.3333"
                                stroke="#3C4D27"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                        <input
                            name="search"
                            class="search-form font-work text-sm placeholder-[#D8D8D8] w-full h-full border-0"
                            type="text"
                            placeholder="Search user by name or email"
                        />
                    </div>
                </form>
            </div>
            <div
                class="flex justify-between items-center border border-[#A2A2A2] rounded-md text-hitam-300 py-3 font-work text-base w-full"
            >
                <div class="flex justify-center items-center gap-2 w-1/4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="10"
                        height="10"
                        viewBox="0 0 10 10"
                        fill="none"
                    >
                        <circle cx="5" cy="5" r="5" fill="#FFAA04"/>
                        <circle cx="5" cy="5" r="2" fill="white"/>
                    </svg>
                    <p>Name</p>
                </div>
                <div class="flex justify-center items-center gap-2 w-1/4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="10"
                        height="10"
                        viewBox="0 0 10 10"
                        fill="none"
                    >
                        <circle cx="5" cy="5" r="5" fill="#7A9C46"/>
                        <circle cx="5" cy="5" r="2" fill="white"/>
                    </svg>
                    <p>Email</p>
                </div>
                <div class="flex justify-center items-center gap-2 w-1/4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="10"
                        height="10"
                        viewBox="0 0 10 10"
                        fill="none"
                    >
                        <circle cx="5" cy="5" r="5" fill="#7B370C"/>
                        <circle cx="5" cy="5" r="2" fill="white"/>
                    </svg>
                    <p>Date Joined</p>
                </div>
                <div class="flex justify-center items-center gap-2 w-1/4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="10"
                        height="10"
                        viewBox="0 0 10 10"
                        fill="none"
                    >
                        <circle cx="5" cy="5" r="5" fill="#D8BBAD"/>
                        <circle cx="5" cy="5" r="2" fill="white"/>
                    </svg>
                    <p>Activity</p>
                </div>
            </div>
            @foreach($users as $user)
                <div
                    class="border border-[#A2A2A2] w-full mt-4 rounded-md py-3"
                >
                    <div
                        class="flex items-center justify-between text-center font-work text-sm text-[#555555]"
                    >
                        <div class="w-1/4">
                            <p>{{$user->name}}</p>
                        </div>
                        <div class="w-1/4">
                            <p>{{$user->email}}</p>
                        </div>
                        <div class="w-1/4">
                            <p>{{$user->created_at}}</p>
                        </div>
                        <div class="w-1/4">
                            <p>{{  $user->transaksis()->count()  }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="flex pt-4">
                <!-- Previous Button -->
                <a
                    href="#"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                >
                    Previous
                </a>

                <!-- Next Button -->
                <a
                    href="#"
                    class="flex items-center justify-center px-3 h-8 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                >
                    Next
                </a>
            </div>
        </div>
    </div>
</x-layout>
