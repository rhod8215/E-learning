import './bootstrap';
import { createApp } from 'vue';



// const app = createApp({});

import app from './components/app.vue';
import router from './router';
createApp(app).use(router).mount('#app')

