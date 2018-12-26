import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';

export const serverBus = new Vue();
// importing routes
import Routes from '@/js/routes.js';
//importing the component file
import App from '@/js/views/App';

Vue.use(Vuetify)

const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App),
});

export default app;
