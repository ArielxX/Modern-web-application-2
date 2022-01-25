<x-site-layout>
    <div style="font-size: 40px; padding-top: 30px; text-align: center">
        {{ $post->title }}
    </div>
    <div style="text-align: center">
        by <b>{{ $post->author->name }}</b>
    </div>
    <div style="text-align: center">
        @foreach ($post->tags as $tag)
            <a href="/" style="margin-right: 15px">
                <span class="w3-blue px-2 bg-green-50 text-green-500 rounded-lg" onclick="/">{{ $tag->name }}
                </span>
            </a>
        @endforeach
    </div>

    <div style="white-space: pre-wrap">
        {{ $post->text }}
    </div>

</x-site-layout>
