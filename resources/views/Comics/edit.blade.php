@extends('layouts.main')

@section('title', 'Home')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $errors }}</li>
                </ul>
            @endforeach
        </div>
    @endif
    <header class="d-flex justify-content-between align-items-center">
        <h1>Create a new Comic</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back</a>
    </header>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @include('includes.posts.form')
    </form>
@endsection
