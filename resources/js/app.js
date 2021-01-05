require('./bootstrap');

import Vue from "vue";

const app = new Vue({
    el: "#app",
    data:{
        saluto: 'ciao',
        showMenu: false,
        load: false,
    },
    created(){

    },
    methods:{
        goDown(){
            document.documentElement.scrollTop = this.$refs.hero.scrollHeight + this.$refs.header.scrollHeight;
        },
    },
    mounted() {
        window.addEventListener('load', () => {
            this.load = true;
        })
    },
})