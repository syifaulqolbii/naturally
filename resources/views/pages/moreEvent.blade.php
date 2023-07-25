<x-layout>
    <div class="pt-12 h-full bg-[#fafafa]">
        <div class="md:container">
            @include('partials._navbar')
            <div class="flex flex-col items-center px-4 justify-center pt-[100px] sm:gap-6 gap-3">
                <h1 class="text-4xl font-playfair sm:text-[64px] text-emas">
                    Activity on Naturally
                </h1>
                <p class="font-work text-sm sm:text-[24px]">
                    Find your preference activities to gain experience!
                </p>
            </div>
            <!-- search section -->
            <section class="pt-16">
                <div class="flex flex-col w-full items-center justify-center gap-6">
                    <div class="border rounded-lg w-[80%] sm:h-16 h-9 sm:pl-8 pl-4 py-4 border-hitam-100 flex items-center gap-3 sm:gap-6">
                        <svg class="md:w-6 md:h-6 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#424242" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22 22L20 20" stroke="#424242" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="search" class="search-form bg-[#fafafa] md:pl-2 placeholder-hitam-100 md:text-2xl text-[10px] md:w-full w-60 focus:outline-0 focus:text-hitam-200" placeholder="Any Keyword ?" />
                    </div>
                </div>
            </section>
            <!-- activity section -->
            <section class="bg-[#fafafa] pt-16 flex flex-col items-center">
                <div class="px-4">
                    <div class="flex justify-between items-center">
                        <h1 class="font-playfair text-hijau-300 md:text-[28px] text-2xl font-medium">
                            Activity on Naturally
                        </h1>
                    </div>
                    <div class="flex md:mt-10 mt-7 md:gap-12 flex-wrap md:flex-row flex-col gap-4 mx-auto w-full justify-center">
                        @unless(count($events) == 0)
                        @foreach($events as $event)
                        <x-event-card :event="$event" />
                        @endforeach
                        @else
                        <p class="text-[#555555] font-work text-center text-[18px] font-medium">Keyword not found. It
                            might your keyword is
                            <span class="text-[#7B370C]">not availabe</span> yet.
                        </p>
                        @endunless
                    </div>
                </div>
                <div class="sm:py-16 py-8">
                    <button class="border rounded-lg border-hijau-100 text-hijau-100 font-work text-xl py-1 px-4 sm:text-2xl sm:py-3 sm:px-8 hover:bg-hijau-100 hover:text-white">
                        Find more
                    </button>
                </div>
            </section>
        </div>
        @include('partials._footer')
    </div>
</x-layout>