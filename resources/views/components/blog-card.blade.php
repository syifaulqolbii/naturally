@props(['blog'])

<a
    href="/blog/{{$blog->id}}"
    class="md:w-[370px] w-full md:h-[375px] rounded-lg overflow-hidden shadow-lg"
>
    <div class="w-full md:h-[222px]">
        <img src="{{$blog->image ? asset('storage/'.$blog->image) : asset('images/kambing.png')}}" alt=""/>
    </div>
    <div
        class="px-6 md:flex md:flex-col md:justify-between py-5 font-work font-normal"
    >
        <p
            class="text-xl md:-mt-6 text-hitam-300 leading-[30px]"
        >
            {{$blog->title}}
        </p>
        <p
            class="mt-5 md:mt-[30px] text-base font-normal text-[#7B370C]"
        >
            {{$blog->tag}}
        </p>
    </div>
</a>
