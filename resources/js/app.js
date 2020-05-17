
require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/* Register our new component: */
Vue.component('caesar-form', require('./components/CaesarForm.vue'));

const app = new Vue({
    el: '#app'
});
