<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add custom CSS for animations and background */
        body {
            background-color: #f0f0f0; /* Set main background color */
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%); /* Add gradient background */
            animation: gradientAnimation 10s ease infinite alternate; /* Apply animation */
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0%;
            }
            100% {
                background-position: 100%;
            }
        }
    </style>
</head>
<body>
    @include('include.header')

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
