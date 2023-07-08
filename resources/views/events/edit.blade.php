<html>
<head>
    <title> Edit Event</title>
</head>
<body>
<h1> Create Event</h1>
<h2>Edit : {{$event->name}}</h2>
<form action="/event/{{$event->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Event Name" value="{{$event->name}}">
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <input type="text" name="description" id="description" placeholder="Event Description" value="{{$event->description}}">
    @error('description')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="date">Date</label>
    <input type="date" name="date" id="date" placeholder="Event Date" value="{{$event->date}}">
    @error('date')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="quota">Kuota</label>
    <input type="number" name="quota" id="quota" placeholder="Event Quota" value="{{$event->quota}}">
    @error('quota')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="location">Lokasi</label>
    <input type="text" name="location" id="location" placeholder="Event Location" value="{{$event->location}}">
    @error('location')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror


    <label for="image">Image</label>
    <input type="file" name="image" id="image" placeholder  ="Event Image">
    <img src="{{$event->image ? asset('storage/'.$event->image) : asset('images/hero.png')}}" alt=""/>
    @error('image')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <button type="submit">Submit</button>
</form>
</body>
</html>
