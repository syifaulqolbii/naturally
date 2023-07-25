<x-layout>
    <div class="flex">
        <!-- sidebar -->
        <div class="flex flex-col justify-start items-center bg-[#284450] min-h-screen w-1/4 gap-16">
            <div class="flex items-center gap-3 pt-12">
                <img src="{{asset('images/logo-daun.png')}}" alt="logo" class="w-7" />
                <p class="font-playfair text-3xl font-medium text-[#d6d6d6]">
                    Natur<span class="text-white">ally</span>
                </p>
            </div>
            <div class="flex flex-col gap-9">
                <a href="#" class="flex gap-4 items-center border-b pb-8 w-64 text-[#D8D8D8] hover:text-white hover:fill-white focus:text-white fill-[#D8D8D8] focus:fill-white focus:font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="fill-current">
                        <path d="M17.9166 9.58341V3.91675C17.9166 2.66675 17.3833 2.16675 16.0583 2.16675H12.6916C11.3666 2.16675 10.8333 2.66675 10.8333 3.91675V9.58341C10.8333 10.8334 11.3666 11.3334 12.6916 11.3334H16.0583C17.3833 11.3334 17.9166 10.8334 17.9166 9.58341Z" fill="fill-current" />
                        <path d="M9.16659 11.4167V17.0834C9.16659 18.3334 8.63325 18.8334 7.30825 18.8334H3.94159C2.61659 18.8334 2.08325 18.3334 2.08325 17.0834V11.4167C2.08325 10.1667 2.61659 9.66675 3.94159 9.66675H7.30825C8.63325 9.66675 9.16659 10.1667 9.16659 11.4167Z" fill="fill-current" />
                        <path d="M17.9166 17.0833V14.75C17.9166 13.5 17.3833 13 16.0583 13H12.6916C11.3666 13 10.8333 13.5 10.8333 14.75V17.0833C10.8333 18.3333 11.3666 18.8333 12.6916 18.8333H16.0583C17.3833 18.8333 17.9166 18.3333 17.9166 17.0833Z" fill="fill-current" />
                        <path d="M9.16659 6.25008V3.91675C9.16659 2.66675 8.63325 2.16675 7.30825 2.16675H3.94159C2.61659 2.16675 2.08325 2.66675 2.08325 3.91675V6.25008C2.08325 7.50008 2.61659 8.00008 3.94159 8.00008H7.30825C8.63325 8.00008 9.16659 7.50008 9.16659 6.25008Z" fill="fill-current" />
                    </svg>
                    <p class="font-work text-xl">Overview</p>
                </a>
                <a href="#" class="flex items-center gap-4 text-[#D8D8D8] hover:text-white hover:fill-white focus:text-white fill-[#D8D8D8] focus:fill-white focus:font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="fill-current">
                        <path d="M9.99992 10.5001C12.3011 10.5001 14.1666 8.6346 14.1666 6.33341C14.1666 4.03223 12.3011 2.16675 9.99992 2.16675C7.69873 2.16675 5.83325 4.03223 5.83325 6.33341C5.83325 8.6346 7.69873 10.5001 9.99992 10.5001Z" fill="fill-current" />
                        <path d="M10 12.5833C5.82505 12.5833 2.42505 15.3833 2.42505 18.8333C2.42505 19.0666 2.60838 19.2499 2.84172 19.2499H17.1584C17.3917 19.2499 17.575 19.0666 17.575 18.8333C17.575 15.3833 14.175 12.5833 10 12.5833Z" fill="fill-current" />
                    </svg>
                    <p class="font-work text-xl">User</p>
                </a>
                <a href="#" class="flex items-center gap-4 text-[#D8D8D8] hover:text-white hover:fill-white focus:text-white fill-[#D8D8D8] focus:fill-white focus:font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="fill-current">
                        <path d="M15.2834 12.2751L13.4668 10.8167C13.2084 10.6167 12.8834 10.5001 12.5501 10.5001H10.6251V8.00008H14.3501C15.1584 8.00008 15.8084 7.35008 15.8084 6.54175V3.62508C15.8084 2.81675 15.1584 2.16675 14.3501 2.16675H7.46678C7.14178 2.16675 6.81678 2.28341 6.55845 2.48341L4.73345 3.94175C4.00845 4.52508 4.00845 5.64175 4.73345 6.22508L6.55845 7.68341C6.81678 7.88341 7.14178 8.00008 7.46678 8.00008H9.37511V10.5001H5.66678C4.85845 10.5001 4.20845 11.1501 4.20845 11.9584V14.8751C4.20845 15.6834 4.85845 16.3334 5.66678 16.3334H9.37511V18.2084H7.50011C7.15845 18.2084 6.87511 18.4917 6.87511 18.8334C6.87511 19.1751 7.15845 19.4584 7.50011 19.4584H12.5001C12.8418 19.4584 13.1251 19.1751 13.1251 18.8334C13.1251 18.4917 12.8418 18.2084 12.5001 18.2084H10.6251V16.3334H12.5501C12.8834 16.3334 13.2084 16.2167 13.4668 16.0167L15.2834 14.5584C16.0168 13.9751 16.0168 12.8584 15.2834 12.2751Z" fill="fill-current" />
                    </svg>
                    <p class="font-work text-xl">Activity</p>
                </a>
                <a href="#" class="flex items-center gap-4 text-[#D8D8D8] hover:text-white hover:fill-white focus:text-white fill-[#D8D8D8] focus:fill-white focus:font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="fill-current">
                        <path d="M6.9082 5.7415C6.5582 5.7415 6.2832 5.45817 6.2832 5.1165V2.7915C6.2832 2.44984 6.5582 2.1665 6.9082 2.1665C7.2582 2.1665 7.5332 2.44984 7.5332 2.7915V5.10817C7.5332 5.45817 7.2582 5.7415 6.9082 5.7415Z" fill="fill-current" />
                        <path d="M13.0918 5.7415C12.7418 5.7415 12.4668 5.45817 12.4668 5.1165V2.7915C12.4668 2.4415 12.7501 2.1665 13.0918 2.1665C13.4418 2.1665 13.7168 2.44984 13.7168 2.7915V5.10817C13.7168 5.45817 13.4418 5.7415 13.0918 5.7415Z" fill="fill-current" />
                        <path d="M17.9167 13.6835C17.9167 13.8085 17.875 13.9335 17.7667 14.0418C16.5584 15.2585 14.4084 17.4251 13.175 18.6668C13.0667 18.7835 12.925 18.8335 12.7834 18.8335C12.5084 18.8335 12.2417 18.6168 12.2417 18.3001V15.3835C12.2417 14.1668 13.275 13.1585 14.5417 13.1585C15.3334 13.1501 16.4334 13.1501 17.375 13.1501C17.7 13.1501 17.9167 13.4085 17.9167 13.6835Z" fill="fill-current" />
                        <path d="M17.9167 13.6835C17.9167 13.8085 17.875 13.9335 17.7667 14.0418C16.5584 15.2585 14.4084 17.4251 13.175 18.6668C13.0667 18.7835 12.925 18.8335 12.7834 18.8335C12.5084 18.8335 12.2417 18.6168 12.2417 18.3001V15.3835C12.2417 14.1668 13.275 13.1585 14.5417 13.1585C15.3334 13.1501 16.4334 13.1501 17.375 13.1501C17.7 13.1501 17.9167 13.4085 17.9167 13.6835Z" fill="fill-current" />
                        <path d="M16.3085 4.24984C15.7585 3.8415 14.9668 4.23317 14.9668 4.92484V5.00817C14.9668 5.98317 14.2668 6.88317 13.2918 6.98317C12.1668 7.09984 11.2168 6.2165 11.2168 5.1165V4.24984C11.2168 3.7915 10.8418 3.4165 10.3835 3.4165H9.61683C9.1585 3.4165 8.7835 3.7915 8.7835 4.24984V5.00817C8.7835 5.7415 8.39183 6.42484 7.7835 6.75817C7.75016 6.78317 7.71683 6.79984 7.6835 6.8165C7.67516 6.8165 7.67516 6.82484 7.66683 6.82484C7.6085 6.84984 7.55016 6.87484 7.4835 6.89984C7.46683 6.90817 7.45016 6.90817 7.4335 6.9165C7.3335 6.94984 7.22516 6.97484 7.1085 6.98317H7.10016C6.97516 6.99984 6.84183 6.99984 6.71683 6.98317H6.7085C6.59183 6.97484 6.4835 6.94984 6.3835 6.9165C6.30016 6.8915 6.21683 6.85817 6.1335 6.8165C5.4835 6.52484 5.0335 5.87484 5.0335 5.1165V4.92484C5.0335 4.28317 4.35016 3.89984 3.8085 4.17484C3.80016 4.18317 3.79183 4.18317 3.7835 4.1915H3.77516C3.71683 4.23317 3.66683 4.27484 3.6085 4.3165C3.51683 4.3915 3.42516 4.4665 3.34183 4.54984C3.2835 4.60817 3.22516 4.6665 3.17516 4.72484C3.1085 4.7915 3.05016 4.85817 2.99183 4.93317C2.95016 4.98317 2.90016 5.03317 2.86683 5.0915C2.82516 5.1415 2.79183 5.19984 2.7585 5.24984C2.75016 5.25817 2.74183 5.2665 2.7335 5.28317C2.6585 5.3915 2.59183 5.5165 2.5335 5.63317C2.51683 5.64984 2.5085 5.65817 2.5085 5.67484C2.4585 5.77484 2.4085 5.87484 2.37516 5.98317C2.35016 6.02484 2.34183 6.05817 2.32516 6.09984C2.3085 6.13317 2.30016 6.17484 2.2835 6.20817C2.2585 6.2915 2.2335 6.38317 2.2085 6.47484C2.17516 6.5915 2.15016 6.7165 2.1335 6.8415C2.11683 6.93317 2.1085 7.02484 2.10016 7.12484C2.09183 7.2415 2.0835 7.35817 2.0835 7.47484V14.7748C2.0835 17.0165 3.90016 18.8332 6.14183 18.8332H10.1585C10.6168 18.8332 10.9918 18.4582 10.9918 17.9998V15.3832C10.9918 13.4665 12.5835 11.9082 14.5418 11.9082C14.9835 11.8998 16.0585 11.8998 17.0835 11.8998C17.5418 11.8998 17.9168 11.5248 17.9168 11.0665V7.47484C17.9168 6.14984 17.2835 4.9915 16.3085 4.24984ZM9.27516 13.7582C9.20016 14.0082 8.96683 14.1832 8.69183 14.1832H5.6585C5.61683 14.1832 5.5835 14.1832 5.55016 14.1665C5.25016 14.1248 5.0335 13.8665 5.0335 13.5582C5.0335 13.2082 5.3085 12.9248 5.6585 12.9248H8.69183C9.0335 12.9248 9.31683 13.2082 9.31683 13.5582C9.31683 13.6248 9.3085 13.6998 9.27516 13.7582ZM11.5918 10.6665C11.5168 10.9165 11.2835 11.0915 11.0085 11.0915H5.6585C5.61683 11.0915 5.5835 11.0915 5.55016 11.0748C5.25016 11.0332 5.0335 10.7748 5.0335 10.4665C5.0335 10.1165 5.3085 9.83317 5.6585 9.83317H11.0085C11.3585 9.83317 11.6335 10.1165 11.6335 10.4665C11.6335 10.5332 11.6252 10.6082 11.5918 10.6665Z" fill="fill-current" />
                    </svg>
                    <p class="font-work text-xl">Article</p>
                </a>
                <a href="#" class="flex gap-4 items-center border-t mt-56 pt-8 w-64 text-[#D8D8D8] hover:text-white hover:stroke-white focus:text-white stroke-[#D8D8D8] focus:stroke-white focus:font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.4399 14.62L19.9999 12.06L17.4399 9.5" stroke="fill-current" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.76001 12.0601H19.93" stroke="fill-current" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.76 20C7.34001 20 3.76001 17 3.76001 12C3.76001 7 7.34001 4 11.76 4" stroke="fill-current" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="font-work text-xl">Log out</p>
                </a>
            </div>
        </div>
        <!-- content -->
        <div class="w-3/4 p-12 bg-white">
            <div class="mb-6">
                <h1 class="font-playfair text-3xl text-[#FFAA04]">
                    New Article
                </h1>
                <p class="font-work text-base text-hitam-200 pt-2">
                    Insert for the new article!
                </p>
            </div>
            <form action="/blog" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="flex gap-4 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <circle cx="7" cy="7" r="7" fill="#FFAA04" />
                            <circle cx="7" cy="7" r="5" fill="white" />
                            <circle cx="7" cy="7" r="2" fill="#FFAA04" />
                        </svg>
                        <h2 class="font-work text-xl text-[#1E1E1E]">Photo</h2>
                    </div>
                    <div class="border rounded-md border-[#EDEDED] w-full h-[178px] ml-6 mt-3 p-6">
                        <div class="border rounded-sm border-dashed border-[#BABABA] flex flex-col justify-center items-center h-full gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9 10C10.1046 10 11 9.10457 11 8C11 6.89543 10.1046 6 9 6C7.89543 6 7 6.89543 7 8C7 9.10457 7.89543 10 9 10Z" stroke="#9A9A9A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V10" stroke="#9A9A9A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.75 5H21.25" stroke="#9A9A9A" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M18.5 7.75V2.25" stroke="#9A9A9A" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M2.67 18.9501L7.6 15.6401C8.39 15.1101 9.53 15.1701 10.24 15.7801L10.57 16.0701C11.35 16.7401 12.61 16.7401 13.39 16.0701L17.55 12.5001C18.33 11.8301 19.59 11.8301 20.37 12.5001L22 13.9001" stroke="#9A9A9A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <input type="file" name="image" id="image" placeholder="Blog Image" class="font-work text-sm font-medium text-[#9A9A9A] border rounded-sm" />
                            @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="font-work text-xs text-[#9A9A9A]">
                                min. 1240 x 1240
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="flex gap-4 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <circle cx="7" cy="7" r="7" fill="#FFAA04" />
                            <circle cx="7" cy="7" r="5" fill="white" />
                            <circle cx="7" cy="7" r="2" fill="#FFAA04" />
                        </svg>
                        <h2 class="font-work text-xl text-[#1E1E1E]">
                            Details
                        </h2>
                    </div>
                    <div class="border rounded-md border-[#EDEDED] w-full h-auto p-6 flex flex-col gap-5 ml-6 mt-3">
                        <div>
                            <p class="text-base text-hitam-200 mb-3">Title</p>
                            <input type="text" name="title" id="title" value="{{old('title')}}" placeholder="Max. 10 words" class="border rounded-md border-[#EDEDED] focus:border-[#3C4D27] placeholder-[#9A9A9A] font-work outline-0 px-6 py-3 w-full text-sm" />
                            @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex gap-14">
                            <div>
                                <p class="font-work text-base text-hitam-200 mb-3">
                                    Type Article
                                </p>
                                <select name="tag" id="tag" class="border border-[#EDEDED] focus:border-[#3C4D27] rounded-md font-work outline-0 h-10 text-sm">
                                    @foreach($tags as $item)
                                    <option value="{{$item->tag}}">{{$item->tag}}</option>
                                    @endforeach
                                </select>
                                @error('tag')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div>
                            <p class="font-work text-base text-hitam-200 mb-3">
                                Description
                            </p>
                            <textarea id="summernote" name="article" value="{{old('article')}}" class=""></textarea>
                            @error('article')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-hijau-100 rounded-md font-work text-white text-base px-4 py-2">
                                Add +
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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
</x-layout>

<!-- <html>
<head>
    <title> Create Blog</title>
</head>
<body>
<h1> Create Blog</h1>
<form action="/blog" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" placeholder="News Title" value="{{old('title')}}">
    @error('title')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="tag">Tag</label>
    <select name="tag" id="tag">
        @foreach($tags as $item)
            <option value="{{$item->tag}}">{{$item->tag}}</option>
        @endforeach
    </select>
    @error('tag')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="article">article</label>
    <input type="text" name="article" id="article" placeholder="Event Quota" value="{{old('article')}}">
    @error('article')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="image">Image</label>
    <input type="file" name="image" id="image" placeholder  ="Event Image">
    @error('image')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <button type="submit">Submit</button>
</form>
</body>
</html> -->