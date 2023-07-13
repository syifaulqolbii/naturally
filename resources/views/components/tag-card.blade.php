@props(['tag'])

<a
    href="/?tag={{$tag->tag}}"
    class="w-20 md:w-32 h-8 md:h-12 md:text-xl hover:bg-hijau-100 hover:text-white flex items-center justify-center border-[1px] text-hijau-100 text-xs text-center font-work border-hijau-100 rounded-full"
>
    {{$tag->tag}}
</a>
