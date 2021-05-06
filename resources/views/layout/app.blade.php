<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{"css/app.css"}}">
    <title>@yield('pageTitle') | La Molisana</title>
</head>
<body>

    @include("partials.header")

    <main>

        @yield("content")

    </main>
    

    @include("partials.footer")

</body>
</html>