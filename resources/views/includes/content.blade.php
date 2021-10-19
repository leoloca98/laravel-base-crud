<div id="content">
    <div class="container">
        <div class="cdComics">
            <div class="currentSeries text-white">CURRENT SERIES</div>
            <div class="cdComics-list">
                @foreach ($comics as $comic)
                    <div class="card">
                        <figure>
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic['thumb'] }}" />
                            </a>
                        </figure>
                        <div class="nameDc">
                            <span class="text-white uppercase">{{ $comic['title'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                <a href="{{ route('comics.create') }}">
                    <button class="btn-create text-white clickable">ADD COMIC</button>
                </a>
            </div>
        </div>
    </div>
</div>
