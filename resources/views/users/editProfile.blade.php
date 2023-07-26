<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
</head>
<body>
<form action="/profile/{{auth()->user()->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input name="name" type="text" value="{{auth()->user()->name}}">
    <label for="address">Alamat</label>
    <input name="address" type="text" value="{{auth()->user()->address}}">
    <label for="description">
        <textarea name="description">{{auth()->user()->description}}</textarea>
    </label>
    <label for="image">
        <input type="file" name="image" id="image">
    </label>
    <button type="submit">Update</button>
</form>

</body>
</html>
