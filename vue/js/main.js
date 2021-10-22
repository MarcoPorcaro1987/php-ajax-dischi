const app = new Vue({
    el : "#root",
    data : {
        selectedGenre: "",
        albums: null,
        genre: "",
    },
    created() {
        axios.get('http://localhost/Lezione%2048%20-%20PHP%20Include/php-ajax-dischi/vue/api//index.php')
        .then((res) => {
            this.albums = res.data;
        });
    },
    // methods: {
    //     selectGenres(selectedGenre) {
    //       this.selectedGenre = selectedGenre;
    //     },
    // },
    // computed: {
    //     albumsFiltered() {
    //       const arrFiltered = this.albums.filter((elm) => {
    //         if (
    //           elm.genre.toLowerCase().includes(this.selectedGenre.toLowerCase())
    //         ) {
    //           return true;
    //         }
    //         return false;
    //       });
    //       return arrFiltered;
    //     },
    // },
}
);