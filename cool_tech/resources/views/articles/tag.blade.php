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
        <h1>Articles with tag: <span class="type">{{ $tag->tag }}</span></h1>
        @php
            // select all the rows in the 'article_tags_map' where the 'tag_id' is equal to $tag->id
            $tag_maps = DB::table('article_tags_map')
                ->where('tag_id', $tag->id)
                ->get();
        @endphp
        @if ($tag_maps)
            @foreach ($tag_maps as $tag_map)
                <div class="article_idx">
                    @php
                        // stores all the articles with the specific tag
                        $article = DB::table('articles')->find($tag_map->article_id);
                    @endphp
                    {{-- Displays the title and first paragraph of the article in $articles of a specific category --}}
                    <h2><a href="/article/{{ $article->id }}"> {{ $article->title }}<i
                                class="fa-solid fa-arrow-up-right-from-square fa-2xs arrow_link"></i></a></h2>
                    @php
                        $paragraph = substr($article->content, 0, 200) . '...';
                    @endphp
                    <p>{{ $paragraph }}</p>
                </div>
            @endforeach
        @endif

    </x-layout>
</body>

</html>
