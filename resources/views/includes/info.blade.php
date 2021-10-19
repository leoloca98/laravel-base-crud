<div id="details">
    <div class="line-blue">
        <div class="currentComic">
            <span class="top-text uppercase">{{ $comic->type }}</span>
            <img src="{{ $comic->thumb }}" />
            <span class="bot-text">VIEW GALLERY</span>
        </div>
    </div>
    <div class="container p-center">
        <div class="row">
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
        </div>
    </div>

    <div>
        {{-- Button back
        Button edit
        Button delete --}}
    </div>

</div>
