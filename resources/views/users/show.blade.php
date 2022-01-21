<x-site-layout>
    <div style=" padding: 30px">
        <div style="font-size: 25px">
            {{ $user->name }}
        </div>
        <div>
            Email: <b>{{ $user->email }}</b>
        </div>
    </div>

</x-site-layout>
