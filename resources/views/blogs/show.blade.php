<x-layout>
    <div class="pt-12 min-h-full bg-[#fafafa]">
        <div class="md:container">
            @include('partials._navbar')
            <section class="pt-12 mb-[120px]">
                <div class="flex items-start gap-12 justify-center">
                    <div class="w-[452px] h-[737px] relative bg-cover bg-center rounded-2xl" style="background-image: url('{{ $blog->image ? asset('storage/'.$blog->image) : asset('images/kambing.png') }}')">
                    </div>
                    <div class="flex flex-col gap-8">
                        <div class="flex items-center font-work">
                            <a href="" class="px-6 py-3 bg-[#7B370C] rounded-full text-base text-white mr-6">{{$blog->tag}}</a>
                            <div class="text-hitam-200 text-xl flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M12.9833 10C12.9833 11.65 11.6499 12.9833 9.99993 12.9833C8.34993 12.9833 7.0166 11.65 7.0166 10C7.0166 8.35 8.34993 7.01666 9.99993 7.01666C11.6499 7.01666 12.9833 8.35 12.9833 10Z" stroke="#7B370C" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.0001 16.8917C12.9418 16.8917 15.6834 15.1583 17.5918 12.1583C18.3418 10.9833 18.3418 9.00834 17.5918 7.83334C15.6834 4.83334 12.9418 3.10001 10.0001 3.10001C7.05845 3.10001 4.31678 4.83334 2.40845 7.83334C1.65845 9.00834 1.65845 10.9833 2.40845 12.1583C4.31678 15.1583 7.05845 16.8917 10.0001 16.8917Z" stroke="#7B370C" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="">{{ $blog->readers }} Readers</p>
                            </div>
                        </div>
                        <div class="font-work flex flex-col w-[731px] gap-5 overflow-y-auto h-screen pr-5">
                            <h1 class="text-4xl w-[565px] text-hitam-300">
                                {{ $blog->title }}
                            </h1>
                            <p class="text-hitam-200 text-xl indent-8 text-justify leading-8">
                                {!! $blog->article !!}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#summernote").summernote({
                placeholder: "",
                tabsize: 2,
                height: 100,
            });
        });
    </script>

    {{-- <form method="post" action="/blog/{{$blog->id}}">--}}
    {{-- @csrf--}}
    {{-- @method('DELETE')--}}
    {{-- <button>Delete</button>--}}
    {{-- </form>--}}
</x-layout>