@props(['event'])

<a
    href="/event/{{$event->id}}"
    class="w-1/3 md:h-[375px] rounded-lg overflow-hidden shadow-lg"
>
    <div class="w-full md:h-[222px]">
        <img src="{{$event->image ? asset('storage/'.$event->image) : asset('images/event.png')}}" alt="" class="w-full h-[222px]"/>
    </div>
    <div class="px-6 py-5 font-work font-normal">
        <div class="flex justify-between text-base">
            <p class="text-[#E27F00]">{{$event->date->format('d M Y')}}</p>
            <p class="text-hitam-100">{{$event->quota}} Persons</p>
        </div>
        <p
            class="mt-3 text-xl text-hitam-300 leading-[30px]"
        >
            {{$event->name}}
        </p>
    </div>
</a>
