<x-layout>
    @include('partials._userProfile')
    <div class="flex flex-col">
        <div class="px-4 pl-[100px] mb-20">
            <div class="flex md:mt-10 mt-7 md:gap-12 flex-wrap gap-4 mx-auto w-full justify-start">
                @unless(count($events) == 0)
                    @foreach($events as $event)
                        <div class="md:w-[370px] w-full md:h-[375px] rounded-lg overflow-hidden shadow-lg">
                            <div class="w-full md:h-[222px]">
                                <img
                                    src="{{$event->event->image ? asset('storage/'.$event->event->image) : asset('images/event.png')}}"
                                    alt=""/>
                            </div>
                            <div class="px-6 py-5 font-work font-normal">
                                <div class="flex justify-between text-base">
                                    <p class="text-[#E27F00]">{{$event->event->date}}</p>
                                    <p class="text-hitam-100">{{$event->event->quota}} Persons</p>
                                </div>
                                <p class="mt-3 text-xl text-hitam-300 leading-[30px]">
                                    {{$event->event->name}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">No activity joined</p>
                @endunless
            </div>
        </div>

    </div>
</x-layout>
