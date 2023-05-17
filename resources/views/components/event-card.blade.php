@props(['event'])

<a
    href="#"
    class="md:w-[370px] w-full md:h-[375px] rounded-lg overflow-hidden shadow-lg"
>
    <div class="w-full md:h-[222px]">
        <img src="{{asset('images/hero.png')}}" alt=""/>
    </div>
    <div class="px-6 py-5 font-work font-normal">
        <div class="flex justify-between text-base">
            <p class="text-[#E27F00]">{{$event->date}}</p>
            <p class="text-hitam-100">{{$event->quota}}</p>
        </div>
        <p
            class="mt-3 text-xl text-hitam-300 leading-[30px]"
        >
            {{$event->name}}
        </p>
    </div>
</a>
