<div id="details">
    <div class="line-blue">
        <div class="currentComic">
            <span class="top-text uppercase">{{ $comic->type }}</span>
            <img src="{{ $comic->thumb }}" />
            <span class="bot-text">VIEW GALLERY</span>
        </div>
    </div>
    <div class="container p-center justify-content-end align-items-end">
        <div class="row-info">
            <div class="col-8">
                <h1 class="fs-25 uppercase text-details-color">{{ $comic->title }}</h1>
                <div class="status-row text-white">
                    <div class="status-col-70 p-between">
                        <span>U.S. Price: {{ $comic->price }}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="status-col-30">
                        <span>Check Availability <i class="fas fa-sort-down"></i></span>
                    </div>
                </div>
                <p class="my-lh">{{ $comic->description }}</p>
            </div>
            <div class="col-4">
                <span class="text-right bold">ADVERTISEMENT</span>
                <div class="adv"></div>
            </div>
        </div>
        <a href="{{ route('comics.create') }}">
            <button class="btn btn-success text-white clickable">ADD</button>
        </a>
        <a href="{{ route('comics.edit', $comic->id) }}" class="mx-3">
            <button class="btn btn-warning text-white clickable">EDIT</button>
        </a>
        <a href="{{ route('comics.destroy', $comic->id) }}">
            <button class="btn btn-danger text-white clickable">DELETE</button>
        </a>
    </div>

</div>
