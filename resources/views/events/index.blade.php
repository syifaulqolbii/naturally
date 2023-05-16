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
                <a href="#" class="flex items-center md:gap-2 gap-1">
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
                class="flex md:mt-10 mt-7 md:gap-12 md:flex-row flex-col gap-4 mx-auto w-full"
            >
                <a
                    href="#"
                    class="md:w-[370px] w-full md:h-[375px] rounded-lg overflow-hidden shadow-lg"
                >
                    <div class="w-full md:h-[222px]">
                        <img src="images/activity1.png" alt=""/>
                    </div>
                    <div class="px-6 py-5 font-work font-normal">
                        <div class="flex justify-between text-base">
                            <p class="text-[#E27F00]">17 Feb 2023</p>
                            <p class="text-hitam-100">150 Orang</p>
                        </div>
                        <p
                            class="mt-3 text-xl text-hitam-300 leading-[30px]"
                        >
                            Kerja Bakti Hutan Kota Manahan Dalam Rangka HUT
                            Kota Solo
                        </p>
                    </div>
                </a>
                <a
                    href="#"
                    class="md:w-[370px] w-full md:h-[375px] rounded-lg overflow-hidden shadow-lg"
                >
                    <div class="w-full md:h-[222px]">
                        <img src="images/activity2.png" alt=""/>
                    </div>
                    <div class="px-6 py-5 font-work font-normal">
                        <div class="flex justify-between text-base">
                            <p class="text-[#E27F00]">21 Mei 2023</p>
                            <p class="text-hitam-100">25 Orang</p>
                        </div>
                        <p
                            class="mt-3 text-xl text-hitam-300 leading-[30px]"
                        >
                            Menjaga Keasrian Objek Wisata: Waduk Cengklik
                        </p>
                    </div>
                </a>
                <a
                    href="#"
                    class="md:w-[370px] w-full md:h-[375px] rounded-lg overflow-hidden shadow-lg"
                >
                    <div class="w-full md:h-[222px]">
                        <img src="images/activity2.png" alt=""/>
                    </div>
                    <div class="px-6 py-5 font-work font-normal">
                        <div class="flex justify-between text-base">
                            <p class="text-[#E27F00]">17 Juni 2023</p>
                            <p class="text-hitam-100">50 Orang</p>
                        </div>
                        <p
                            class="mt-3 text-xl text-hitam-300 leading-[30px]"
                        >
                            Kegiatan Penjaringan Sampah di Area Jembatan
                            Jurug
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</x-layout>
