<html>
<head>
    <title> Create Event</title>
</head>
<body>
<h1> Create Event</h1>
<form action="/event" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Event Name" value="{{old('name')}}">
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <input type="text" name="description" id="description" placeholder="Event Description" value="{{old('description')}}">
    @error('description')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="date">Date</label>
    <input type="date" name="date" id="date" placeholder="Event Date" value="{{old('date')}}">
    @error('date')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="quota">Kuota</label>
    <input type="number" name="quota" id="quota" placeholder="Event Quota" value="{{old('quota')}}">
    @error('quota')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="location">Lokasi</label>
    <input type="text" name="location" id="location" placeholder="Event Location" value="{{old('location')}}">
    @error('location')
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
</html>
