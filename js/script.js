Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        disks: []
    },
    methods: {
        getDisks: function() {
            axios.get('http://localhost:8888/Lezione-51/php-ajax-dischi/server.php')
            .then((response) => {
                this.disks = response.data;
            });
        }
    },
    created: function() {
        this.getDisks();
    }
});