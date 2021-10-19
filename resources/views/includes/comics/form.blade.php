<h1>Create a new Comic</h1>
<form action="{{ route('comics.update', $comic->id) }}" method="POST" class="mb-5">
    @csrf
    @method('PATCH');
    {{-- Title --}}
    <div class="form-group mb-4">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Add a title"
            value="{{ $comic->title }}">
    </div>
    {{-- Description --}}
    <div class="form-group mb-4">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Add a description"
            value="{{ $comic->decription }}"></textarea>
    </div>
    {{-- Image --}}
    <div class="form-group mb-4">
        <label for="thumb">Image</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Add an url of an image"
            value="{{ $comic->thumb }}">
    </div>
    {{-- Price --}}
    <div class="form-group mb-4">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Add a price"
            value="{{ $comic->price }}">
    </div>
    {{-- Type --}}
    <div class="form-group mb-4">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Add a type"
            value="{{ $comic->type }}">
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
