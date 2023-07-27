@props(['blog'])

<a href="/blog/{{$blog->id}}" class="bg-white w-[30%] min-h-[290px] flex flex-col justify-between rounded-md shadow-md">
    <div class=" w-full md:h-[222px]">
        <img src="{{$blog->image ? asset('storage/'.$blog->image) : asset('images/kambing.png')}}" alt="" class="w-full h-[200px] inset-0 object-cover rounded-t-md" />
    </div>
    <div class="px-6 flex flex-col justify-between font-work font-normal h-full">
        <p class="text-base mt-3 text-hitam-300 leading-[30px]">
            {{ Str::limit($blog->title, 40) }}
        </p>
        <p class="mt-3 mb-4 md:mt-[12px] text-sm font-normal text-[#7B370C]">
            {{$blog->tag}}
        </p>
    </div>
</a>