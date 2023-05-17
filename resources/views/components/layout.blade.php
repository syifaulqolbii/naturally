<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Work+Sans:wght@400;500&display=swap"
        rel="stylesheet"
    />

    <title>Naturally</title>
</head>
<body class="md:p-4 p-2">

{{--View Output--}}
<main>
    {{$slot}}
</main>

</body>
</html>