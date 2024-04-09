<div id="main">
    <div class="container row row-cols-6" id="movie-list">
        @foreach($movie as $movieItem)
        <div class="movie">
            <img class="movie-img" src="{{ $movieItem['thumb'] }}" alt="">
            <h3 class="movie-title">{{ $movieItem['title'] }}</h3>
        </div>
        @endforeach
    </div>
</div>