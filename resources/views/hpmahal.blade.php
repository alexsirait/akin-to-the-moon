<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hp mahal</title>
</head>
<body>
    <h1>Data HP yang satu satu</h1>
    {{ $data_satu }}
    <hr>
    <h1>Data HP yang banyak</h1>
    @foreach ($data_banyak as $bebas)
        <h4>{{ $bebas->id }}</h4>
        <h4>{{ $bebas->nama }}</h4>
        <h4>{{ $bebas->quantity }}</h4>
        <hr>
    @endforeach
</body>
</html>
