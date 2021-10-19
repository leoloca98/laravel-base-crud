@if ($comic->exists)
    <form action="" method="POST"></form>
@endif
@section('content')
    <h1>Create a new Comic</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH');

        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Add a title" value="{{ $comic->title }}">


        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5" placeholder="Add a description"
            value="{{ $comic->description }}">

                                <label for="thumb">Image</label>
                                <input type="text" name="thumb" id="thumb" placeholder="Add an url of an image" value="{{ $comic->thumb }}">

                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" placeholder="Add a price" value="{{ $comic->price }}">

                                <label for="type">Type</label>
                                <input type="text" name="type" id="type" placeholder="Add a type" value="{{ $comic->type }}">

                                <button type="submit" class="btn-btn-success">Save</button>

                            </form>
@endsection
