const { createApp } = Vue;

createApp({
    data() {
        return {
            movies: [],
        }
    },
    methods: {
        getMovies() {
            axios.get("server.php", { params: { key: "movies" } }).then(response => {
                if (response.status === 200) {
                    this.movies = response.data;
                }
            }
            )
        }
    },
    mounted() {

    }
}).mount('#app')