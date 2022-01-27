<x-site-layout>
    <div style="text-align: right">
        @if (auth()->check() && (auth()->user()->is_admin || auth()->user()->id === $user->id))
            <a href="/posts/{{ $post->id }}/edit" class="text-green-600 hover:text-green-900"
                style="margin-right: 20px; font-size: 15px">Edit</a>
        @endif
    </div>
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
    @if (($media = $post->getMedia('images'))->count() > 0)
        <div>
            <center>
                <img src={{ $media->first()?->getUrl() }} />
            </center>
        </div>
    @endif
    <div style="white-space: pre-wrap">
        {{ $post->text }}
    </div>

</x-site-layout>
