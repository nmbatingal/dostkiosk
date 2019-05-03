
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// window.$ = window.jQuery = require('jquery');
// // window.Popper = require('popper.js').default; // default is very important.
// // require('bootstrap/dist/js/bootstrap');

// import Popper from 'popper.js/dist/umd/popper.js';
// window.Popper = Popper;

require('./bootstrap');
require('bootstrap-material-design');
require('moment');
require('bootstrap-datetimepicker-npm');
require('nouislider');

// require('bootstrap-material-design/js/dropdown');
// require('bootstrap-material-design/js/ripples');
// require('bootstrap-material-design/js/util');
// console.log(Popper);


import Swiper from 'swiper';

window.Vue = require('vue');
window.Swiper = Swiper;

// window.pJS = pJS;

/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
// particlesJS.load('particles-js', 'assets/particles.json', function() {
//   console.log('callback - particles-js config loaded');
// });



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('particles-js', require('./components/ParticleComponent.vue').default);
// Vue.component('swiper-component', require('./components/SwiperComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted() {
        new Swiper();
    }
});
