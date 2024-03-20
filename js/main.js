const { createApp } = Vue;

createApp({
    data() {
        return {
            albumList:[],
           
        }
    },
    mounted() {
            axios.get('./server.php').then(res => {
                console.log(res.data);
                this.albumList = res.data;
            })
    },
}).mount('#app');
