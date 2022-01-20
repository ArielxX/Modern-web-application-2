<x-site-layout>

    <main class="bg-white p-6 max-w-6xl flex flex-row" style="min-height: 60vh;">
        <div class="w-2/3">
            <b> Most Recent Posts </b>
            @foreach ($posts as $post)
                <div style='border: 1px solid black; border-radius: 4px; margin-top: 20px'>
                    <div style=" padding: 15px">
                        <div>
                            <a href="/posts/{{ $post->id }}">
                                <b>
                                    <span class=" text-gray-800" style=>{{ $post->title }}</span>
                                </b>
                            </a>
                        </div>

                        <div>
                            <span>{{ $post->abstract }}</span>
                        </div>

                        <div style="padding-top: 10px">
                            Author: {{ $post->author->name }}
                        </div>
                    </div>
                </div>
            @endforeach

            <div style="padding: 20px">
                <a href="/posts" style="color: blue">See all >></a>
            </div>
        </div>

        <div class="w-1/3"
            style='border: 1px solid black; border-radius: 4px; margin-top: 40px; margin-left: 20px'>
            <div style="padding: 15px">
                <b>
                    Tags
                </b>

                <div style="padding-top: 15px">
                    @foreach ($tags as $tag)
                        <a href="/" style="margin-right: 15px">
                            <span class="w3-blue px-2 bg-green-50 text-green-500 rounded-lg"
                                onclick="/">{{ $tag->name }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</x-site-layout>
