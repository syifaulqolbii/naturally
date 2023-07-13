<x-layout>
    <h1>
        {{ $blog->title }}
    </h1>
    <p>
        {{ $blog->tag }}
    </p>
    <p>
        {{ $blog->article }}
    </p>
    <img src="{{$blog->image ? asset('storage/'.$blog->image) : asset('images/kambing.png')}}" alt="" width="200" height="200"/>
    <p>
        {{ $blog->readers }}
    </p>

    <form method="post" action="/blog/{{$blog->id}}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</x-layout>
