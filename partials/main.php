<main>
    <h3>My movies</h3>

    <button class="btn btn-primary my-5" @click="getMovies()">Get Movies</button>
    <ul class="movies">
        <li class="movie" v-for="movie in movies">
            <div class="info">
                <h4>{{movie.title}}</h4>
                <p>{{movie.year}}</p>
                <ul class="genres">
                    <li v-for="genre in movie.genres">
                        {{genre}}
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</main>