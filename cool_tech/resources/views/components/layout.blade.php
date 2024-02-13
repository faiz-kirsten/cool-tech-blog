<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Document</title>
</head>

<body>
    {{-- Layout of every page in the website --}}
    <header class="header">
        <div class="logo">COOL TECH</div>
        <a href="/"><button class="btn-return_home">Home</button></a>
    </header>
    <main class="container-main">
        {{ $slot }} {{-- Content goes here --}}
    </main>
    <footer class="footer">
        <div class="copyright">Copyright &copy; 2020-{{ $date = now()->format('Y') }} Cool Tech LLC.</div>
        <div class="footer_links">
            <a href="/legal/tos">Terms Of Use</a>
            <a href="/legal/privacy">Privacy Policy</a>
            <a href="/search">Search</a>
        </div>
    </footer>
    <x-cookie-notice></x-cookie-notice>
</body>

</html>
