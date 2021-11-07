<html>

<head>
    <title>Coba View Blade</title>

    <style>
        .female {
            background: red;
            color: white;
        }

        /* .male {
            background: red;
        } */

    </style>
</head>

<body>
    @if ($name == '')
        <h1>Hallo, Kamu siapa?</h1>
    @else
        <h1>Hallo, {{ $name }}</h1>
    @endif

    @switch($menu)
        @case(1)
            <h5>Kami memilih menu 1</h5>
        @break
        @case(2)
            <h5>Kami memilih menu 2</h5>
        @break
        @default
            <h5>Kami memilih menu basic</h5>
    @endswitch

    @foreach ($siswa as $s)
        <h5 @class([
            'female' => $s->gender == 'female',
        ])>{{ $s->name }}</h5>
        <p>{{ $s->age }}</p>
    @endforeach
</body>

</html>
