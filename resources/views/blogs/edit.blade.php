<html>
<head>
    <title> Edit Blog</title>
</head>
<body>
<h1> Edit blog</h1>
<h2>Edit : {{$blog->title}}</h2>
<form action="/blog/{{$blog->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" id="title" placeholder="News Title" value="{{$blog->title}}">
    @error('title')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="tag">Tag</label>
    <p>{{$blog->tag}}</p>
    <select name="tag" id="tag">
        @foreach($tags as $item)
            <option value="{{$item->tag}}">{{$item->tag}}</option>
        @endforeach
    </select>
    @error('tag')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="article">article</label>
    <input type="text" name="article" id="article" placeholder="Event Quota" value="{{$blog->article}}">
    @error('article')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <label for="image">Image</label>
    <input type="file" name="image" id="image" placeholder  ="Event Image">
    <img src="{{$blog->image ? asset('storage/'.$blog->image) : asset('images/hero.png')}}" alt=""/>
    @error('image')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <button type="submit">Submit</button>
</form>
</body>
</html>
