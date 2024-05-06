const { createApp } = Vue;

createApp({
    data() {
        return {
            discs:[],
            infoDisc: {
                title: '',
                author: '',
                year: '',
                poster:''
            },
            info: false
        };
    },
    methods: {
        getTodosFromApi() {
            axios.get('dischi.php').
            then((response) => {
                this.discs = response.data;
                
            }); 
        },
        getDiscInfo(index){
            this.infoDisc.title = this.discs[index].title;
            this.infoDisc.author = this.discs[index].author;
            this.infoDisc.year = this.discs[index].year;
            this.infoDisc.poster = this.discs[index].poster;
            this.info = true
        },
        removeInfo(){
            this.info = false
            // alert('ciao')
        }
    },
    mounted() {
        this.getTodosFromApi();
    }
}).mount('#app');