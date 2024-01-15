<main>
    <section class="movies-section d-flex flex-column">
        <h3 class="section-title text-center text-uppercase mb-3">My movies</h3>
        <ul class="row movies d-flex scrolling-container">
            <li class="col-12 col-md-6 movie p-5 scroll-snap" v-for="movie in movies">
                <div class="custom-card">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="card-inner d-flex flex-column justify-content-center p-3">
                        <div class="info">
                            <h4 class="text-capitalize">{{movie.title}}</h4>
                            <p class="text-uppercase">Anno: {{movie.year}}</p>
                            <ul class="genres">
                                <li>Generi: </li>
                                <li v-for="genre in movie.genres">
                                    {{genre}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <button class="add-btn shadow__btn mt-auto mb-5" @click="">Add Movie</button>
    </section>
</main>