<x-layout>
    <h1>
        {{ $event->name }}
    </h1>
    <p>
        {{ $event->description }}
    </p>
    <p>
        {{ $event->date }}
    </p>
    <p>
        {{ $event->quota }}
    </p>
    <p>
        {{ $event->location }}
    </p>

    <form method="post" action="/event/{{$event->id}}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</x-layout>
