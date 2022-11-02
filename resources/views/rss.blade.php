@php
    $currentURL = url()->full();
@endphp
<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<rss version="2.0">
    <channel>
        <title>{{ $user->name }} Arabic Creator</title>
        <atom:link href="https://feed.podbean.com/ErikaBodor/feed.xml" rel="self" type="application/rss+xml"/>
        <link>https://arabicreators.com</link>
        <description>arabicreators </description>
        <pubDate>{{ now()->toRssString()  }}</pubDate>
        <generator>https://arabicreators.com</generator>
        <language>en</language>
        <itunes:author>{{ $user->name }}</itunes:author>
        <itunes:owner>
        <itunes:name>{{ $user->name }}</itunes:name>
        <itunes:email>{{ $user->email }}/itunes:email>
        </itunes:owner>
        <itunes:image href="https://pbcdn1.podbean.com/imglogo/image-logo/4333547/podcast_image_01877625-5597-4BEA-A55A-9E2A7C9B4100.jpg"/>
        <image>
        <url>https://pbcdn1.podbean.com/imglogo/image-logo/4333547/podcast_image_01877625-5597-4BEA-A55A-9E2A7C9B4100.jpg</url>
        <title>{{ $user->name }} Arabic Creator</title>
        <link>https://arabicreators.com</link>
       
        </image>
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
