<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <!-- Link Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
</head>

<body class="bg-dark text-light">
    <header class="d-flex justify-content-center align-items-center mt-5">
        <nav>
            <ul class="d-flex gap-5 m-0 list-unstyled">
                <li><a class="text-light" href="{{ route('home') }}">Home</a></li>
                <li><a class="text-light" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="d-flex justify-content-center mt-5">
        <h1><i class="fa-brands fa-laravel fa-2xl"></i> {{$page_title}} <i class="fa-brands fa-laravel fa-2xl"></i></h1>
    </main>
</body>

</html>
