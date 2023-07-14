<html>
<head>
    <title>Register</title>
</head>
<body>
<h1>Register</h1>
<form action="/users" method="post">
    @csrf
    @method('POST')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    @error('name')
    <p style="color: red; font-size: small;">{{ $message }}</p>
    @enderror

    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{old('email')}}">
    @error('email')
    <p style="color: red; font-size: small;">{{ $message }}</p>
    @enderror

    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="{{old('password')}}">
    @error('password')
    <p style="color: red; font-size: small;">{{ $message }}</p>
    @enderror

    <button type="submit">Register</button>
</form>
</body>
</html>
