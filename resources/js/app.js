import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import App from './modules/app.vue'
import { createApp } from 'vue';

createApp(App).mount("#app")