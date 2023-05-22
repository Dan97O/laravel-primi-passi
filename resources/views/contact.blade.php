<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page_title }}</title>
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

    <main class="d-flex align-items-center flex-column mt-5">
        <h1>{{ $page_title }}</h1>
        <p>{{ $description }}</p>
        <section>
            <h2>Emails:</h2>
            <ul class="list-unstyled text-center">
                @foreach($contacts['email'] as $email)
                <li>{{ $email }}</li>
                @endforeach
            </ul>
        </section>
        <section>
            <h2>Phone Numbers:</h2>
            <ul class="list-unstyled text-center">
                @foreach($contacts['phone'] as $phone)
                <li>{{ $phone }}</li>
                @endforeach
            </ul>
        </section>
        <section>
            <h2>Members</h2>
            <ul class="list-unstyled text-center">
                @foreach($members as $member)
                <li>{{ $member }}</li>
                @endforeach
            </ul>
        </section>
    </main>
</body>

</html>
