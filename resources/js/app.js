import './bootstrap';


import { createApp } from 'vue';
import Index from '../js/Index.vue';

const app = createApp();

app.component('index', Index);

app.mount("#app");