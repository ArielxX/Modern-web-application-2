<x-site-layout>
    <div style="font-size: 40px; padding-top: 30px; text-align: center">
        {{ $post->title }}
    </div>
    <div style="text-align: center">
        by <b>{{ $post->author->name }}</b>
    </div>

    <div style="padding: 50px">
        {{ $post->text }}
    </div>

</x-site-layout>
