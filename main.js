const { createApp } = Vue

createApp({
    data() {
        return {
            php_url: "movies.php",
            movies: []
        }
    }, methods:{
        readMovies(url){
            axios
                .get(url)
                .then(response => {
                    this.movies = response.data
                    console.log(this.movies);
                })
                .catch(err => {
                    console.error(err.message);
            })
        }
    }, mounted(){
        console.log("aaaaa")
        this.readMovies(this.php_url)
    }
}).mount('#app')

