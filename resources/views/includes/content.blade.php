<div id="content">
    <div class="container">
        <div class="cdComics">
            <div class="currentSeries text-white">CURRENT SERIES</div>
            <div class="cdComics-list">
                @foreach ($comics as $comic)
                    <div class="card">
                        <figure>
                            <a href="{{ route('details', ['id' => $loop->index]) }}">
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
                <button class="button text-white clickable">LOAD MORE</button>
            </div>
        </div>
    </div>
</div>
