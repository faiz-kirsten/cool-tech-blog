<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="https://kit.fontawesome.com/540a71fd64.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <x-layout>
        <h1>Latest Articles</h1>
        {{-- Displays the title and first paragraph of the first five articles in $articles --}}
        @foreach ($articles as $article)
            <div class="article_idx">
                <h2><a href="/article/{{ $article->id }}">{{ $article->title }}<i
                            class="fa-solid fa-arrow-up-right-from-square fa-2xs arrow_link"></i></a></h2>
                @php
                    $substring = substr($article->content, 0, 200) . '...';
                @endphp
                <p>{{ $substring }}</p>
            </div>
        @endforeach
    </x-layout>
</body>

</html>
