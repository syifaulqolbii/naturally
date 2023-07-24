<html>
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
</html>
