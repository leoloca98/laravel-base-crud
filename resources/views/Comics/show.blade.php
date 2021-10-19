{{-- <!DOCTYPE html>
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

</html> --}}

@extends('layouts.main')

@section('title', $comic['title'])

@section('cdns')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
@endsection
@section('content')
    @include('includes.info', $comic)
@endsection
@section('scripts')
    <script>
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDEfault();
                const conf = confirm('Are you sure you want to delete this post?');
                if (conf) this.submit();
            });
        });
    </script>
@endsection
