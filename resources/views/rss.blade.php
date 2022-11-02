@php
    $currentURL = url()->full();
@endphp
<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ ItSolutionStuff.com ]]></title>
        <link><![CDATA[ https://your-website.com/feed ]]></link>
        <description><![CDATA[ Your website description ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>
        @foreach ($sounds as $post)
            <item>
                <author><![CDATA[{{ $user->name }}]]></author>
                <title>{{ $post->title }}</title>
                <link>{{ asset('public/audio/' . $post->sound) }}</link>
                <enclosure type="audio/mpeg" url="{{ asset('public/audio/' . $post->sound) }}" length="2444" />
                <description>{!! 'تجربة' !!}</description>
                <guid>{{ asset('public/audio/' . $post->sound) }}</guid>
                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
