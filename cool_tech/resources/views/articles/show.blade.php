<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="https://kit.fontawesome.com/540a71fd64.js" crossorigin="anonymous"></script>
    <title>{{ $article->title }}</title>
</head>

<body>
    <x-layout>
        {{-- Displays all the article information --}}
        <h1>{{ $article->title }}</h1>
        <span>Tags: </span>
        <div class="show_metadata">
            <x-article-tags :article_id="$article->id" />
            <div class="show_metadata_inner">
                <div>
                    Published: {{ $article->created_at }}
                </div>
                <div>
                    @php
                        // gets the category of the article in the categories table
                        $category = DB::table('categories')->find($article->category_id);
                    @endphp
                    @if ($category)
                        Category: <a href="/category/{{ $category->slug }}">
                            {{ $category->category }}
                            <i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <p>{{ $article->content }}</p>
    </x-layout>
</body>

</html>
