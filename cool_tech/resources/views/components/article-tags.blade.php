{{-- Article tags component which outputs the tags of a specific article --}}
@props(['article_id'])
<div>
    @php
        // Stores the rows in 'article_tags_map'  where the 'article_id' is equal to $article_id
        $article_tags_num = DB::table('article_tags_map')
            ->where('article_id', $article_id)
            ->get();

    @endphp
    @if ($article_tags_num)
        @foreach ($article_tags_num as $article_tag_num)
            @php
                // stores all the rows in 'tags' where the 'id' is equal to $article_tag_num->tag_id
                $article_tags = DB::table('tags')
                    ->where('id', $article_tag_num->tag_id)
                    ->get();
            @endphp
            @if ($article_tags)
                {{-- Outputs all tags of a specific article --}}
                @foreach ($article_tags as $article_tag)
                    <a href="/tag/{{ $article_tag->slug }}"><button class="tag">{{ $article_tag->tag }}
                        </button>
                    </a>
                @endforeach
            @endif
        @endforeach
    @endif
</div>
