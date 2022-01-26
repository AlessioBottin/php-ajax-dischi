Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        disks: [],
        genreFilter: 'All',
    },
    methods: {
        getDisks: function() {
            axios.get('http://localhost:8888/Lezione-51/php-ajax-dischi/server.php')
            .then((response) => {
                this.disks = response.data;
            });
        },
        getFilteredDisks: function() {
            axios.get('http://localhost:8888/Lezione-51/php-ajax-dischi/server.php',
            {
                params: {
                    genre: this.genreFilter
                }
            })
            .then((response) => {
                this.disks = response.data;
                console.log(response);
            });
        }
    },
    created: function() {
        this.getDisks();
    }
});