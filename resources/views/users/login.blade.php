<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="/users/authenticate" method="post">
    @csrf
    @method('POST')

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

    <button type="submit">Login</button>
</form>
</body>
</html>
