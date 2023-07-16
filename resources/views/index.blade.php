<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <!-- Activity Section -->
    <section>
        <div class="md:container px-4 md:mt-28 mt-16">
            <div class="flex justify-between items-center">
                <h1
                    class="font-playfair text-hijau-300 md:text-[28px] text-2xl font-medium"
                >
                    Events on Naturally
                </h1>
                <a href="/moreEvents" class="flex items-center md:gap-2 gap-1">
                    <h2
                        class="font-work font-normal md:text-xl text-xs text-hijau-100"
                    >
                        Find more
                    </h2>
                    <svg
                        class="md:w-6 md:h-6 h-3 w-3"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M14.43 5.93L20.5 12L14.43 18.07"
                            stroke="#7A9C46"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M3.5 12H20.33"
                            stroke="#7A9C46"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
            </div>
            <div
                class="flex md:mt-10 flex-wrap justify-center mt-7 md:gap-12 md:flex-row flex-col gap-4 mx-auto w-full"
            >
                @unless(count($events) == 0)
                    @foreach($events as $event)
                        <x-event-card :event="$event"/>
                    @endforeach
                @else
                    <p class="text-center">No events found</p>
                @endunless
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section>
        <div class="md:container px-4 md:mt-28 mt-20 mb-24">
            <div class="flex justify-between items-center">
                <h1
                    class="font-playfair text-hijau-300 md:text-[28px] text-2xl font-medium"
                >
                    Article by Naturally
                </h1>
                <a href="/moreArticle" class="flex items-center md:gap-2 gap-1">
                    <h2
                        class="font-work font-normal md:text-xl text-xs text-hijau-100"
                    >
                        Find more
                    </h2>
                    <svg
                        class="md:w-6 md:h-6 h-3 w-3"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M14.43 5.93L20.5 12L14.43 18.07"
                            stroke="#7A9C46"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M3.5 12H20.33"
                            stroke="#7A9C46"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
            </div>
            <div
                class="flex mt-3 md:mt-7 flex-wrap gap-2 md:gap-4 md:px-4 px-2"
            >
                @unless(count($tags) == 0)
                    @foreach($tags as $tag)
                        <x-tag-card :tag="$tag"/>
                    @endforeach
                @else
                    <p class="text-center">No tags found</p>
                @endunless
            </div>
            <div
                class="md:mt-9 mt-4 md:gap-12 gap-6 flex flex-col md:flex-row md:px-4 px-2"
            >
                @unless(count($blogs) == 0)
                    @foreach($blogs as $blog)
                        <x-blog-card :blog="$blog"/>
                    @endforeach
                @else
                    <p class="text-center">No news found</p>
                @endunless
            </div>
        </div>
    </section>
    @include('partials._footer')
</x-layout>
