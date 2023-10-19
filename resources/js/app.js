import './bootstrap';


import { createApp } from 'vue';
import Index from '../js/Index.vue';


import axios from 'axios';

// axios.defaults.baseURL = 'http://localhost:8000';
axios.defaults.baseURL = 'https://api.ebitans.store/api';

axios.defaults.withCredentials = true;


const app = createApp();

app.component('index', Index);

app.mount("#app");
