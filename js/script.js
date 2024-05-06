const { createApp } = Vue;

createApp({
    data() {
        return {
            discs:[]
        };
    },
    methods: {
        getTodosFromApi() {
            axios.get('dischi.php').
            then((response) => {
                this.discs = response.data;
                
            }); 
        }
    },
    mounted() {
        this.getTodosFromApi();
    }
}).mount('#app');