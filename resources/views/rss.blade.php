@php
    $currentURL = url()->full();
@endphp
<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title>{{ $user->first_name }} {{ $user->last_name }}</title>
        <link>https://www.arabicreators.com</link>
        <description>arabicreators</description>
        <language>en</language>
        <pubDate>{{ now()->toRssString() }}</pubDate>
        <image>
            <url>https://i1.sndcdn.com/avatars-Pghd90aexdU8iziD-D0ullg-original.jpg</url>
            <title>بزنس على الطريق | مع الغندور</title>
            <link>https://mghandour.com/</link>
          </image>
          <author>author@w3schools.com</author>
          @foreach($sounds as $post)
            <item>
                <title>{{ $post->title }}</title>
                <link>{{ asset('public/audio/'.$post->sound) }}</link>
                <enclosure type="audio/mpeg" url="{{ asset('public/audio/'.$post->sound) }}" length="2444"/>
                <description>{!! 'تجربة' !!}</description>
                <author>{{ $user->first_name }}.{{ $user->email }}</author>
                <guid isPermaLink="false">{{ $post->id }}</guid>
            

                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>