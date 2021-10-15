<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <br>
    <div><span class="bolder">TITOLO: </span>{{ $comic->title }}</div><br>
    <div>PREZZO: {{ $comic->price }}$</div><br>
    <div>TRAMA: {{ $comic->description }}</div><br>
    <div>COPERTINA: <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></div><br>
    <div>TIPOLOGIA: {{ $comic->type }}</div>
</body>

</html>
