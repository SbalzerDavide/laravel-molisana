require('./bootstrap');

import Vue from "vue";

const app = new Vue({
    el: "#app",
    data:{
        saluto: 'ciao',
        showMenu: false,
        load: false,
    },
    methods:{

    },
    mounted() {
        window.addEventListener('load', () => {
            console.log('readyyy');
            this.load = true;
        })
    },
        
})