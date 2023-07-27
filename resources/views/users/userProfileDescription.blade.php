<x-layout>
    @include('partials._userProfile')
    <div class="flex flex-col">
        <p class="font-work font-medium text-hitam-300 text-xl pl-[100px] pt-8">Description</p>
        <div class="h-[255px] w-[920px] ml-[100px] mt-6  border border-[#EDEDED] rounded-md py-7 px-7">
            <p class="font-work">{{auth()->user()->description}}</p>
        </div>
    </div>
</x-layout>
