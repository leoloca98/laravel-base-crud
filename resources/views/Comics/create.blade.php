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
        <h1>Edit Comic</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back</a>
    </header>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Add a title">

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5" placeholder="Add a description"></textarea>

        <label for=" thumb">Image</label>
        <input type="text" name="thumb" id="thumb" placeholder="Add an url of an image">

        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Add a price">

        <label for="type">Type</label>
        <input type="text" name="type" id="type" placeholder="Add a type">

        <button type="submit" class="btn-btn-success">Save</button>

    </form>
@endsection
