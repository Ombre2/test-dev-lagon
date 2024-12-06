// resources/js/app.js
import { createApp } from 'vue';
import './bootstrap';

// Importer les composants
import Collapse from '../views/components/designSystem/Collapse.vue';
import Statistic from '../views/components/designSystem/Statistic.vue';
import CarouselAvis from '../views/components/designSystem/CarouselAvis.vue';

// Créer la première application Vue pour #app
const app = createApp({});

// Enregistrer les composants globalement pour la première instance
app.component('collapse-component', Collapse);

// Monter la première application Vue sur #app
app.mount('#app');

// Créer une deuxième application Vue pour #second-app
const secondApp = createApp({});

// Enregistrer les composants globalement pour la deuxième instance
secondApp.component('statistic-component', Statistic);

// Monter la deuxième application Vue sur #second-app
secondApp.mount('#second-app');

// Créer une deuxième application Vue pour #second-app
const thirtyApp = createApp({});

// Enregistrer les composants globalement pour la deuxième instance
thirtyApp.component('avis-component', CarouselAvis);

// Monter la deuxième application Vue sur #second-app
thirtyApp.mount('#thirty-app');
