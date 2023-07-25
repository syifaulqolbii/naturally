<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Work+Sans:wght@400;500&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: "85px",
                },
                extend: {
                    colors: {
                        hijau: {
                            100: "#7A9C46",
                            200: "#3C4D27",
                            300: "#1A2310",
                        },
                        kuning: "#FFAA04",
                        emas: "#A98032",
                        hitam: {
                            100: "#A9A9A9",
                            200: "#424242",
                            300: "#121212",
                        },
                    },
                    fontFamily: {
                        playfair: ["Playfair Display", "serif"],
                        work: ["Work Sans", "sans-serif"],
                    },
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
        }
    </style>
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo-daun.png')}}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Naturally</title>
</head>

<body>

    {{--View Output--}}
    <main>
        {{$slot}}
    </main>

    <x-flash-message />
</body>

</html>