const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: []
        };
    },
    methods: {
        getDiscs() {
            axios.get('dischi.php')
                .then(response => {
                    this.discs = response.data;
                })
        }
    },
    mounted() {
        this.getDiscs();
    }
}).mount('#app');