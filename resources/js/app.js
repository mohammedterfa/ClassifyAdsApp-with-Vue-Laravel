require('./bootstrap');
window.Vue = require('vue').default;
window.axios = require('axios').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});
