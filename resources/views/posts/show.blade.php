<x-site-layout>
    <div style="font-size: 40px; padding-top: 30px; text-align: center">
        {{ $Post->title }}
    </div>
    <div style="text-align: center">
        by <b>{{ $Post->author->name }}</b>
    </div>

    <div style="padding: 50px">
        {{ $Post->text }}
    </div>

</x-site-layout>
