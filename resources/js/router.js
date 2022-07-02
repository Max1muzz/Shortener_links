import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/', component: () => import('./components/home'),
        name: 'home'
    },
    {
        path: '/links', component: () => import('./components/links'),
        name: 'links'
    },
    {
        path: '/:link', component: () => import('./components/jump'),
        name: 'link'
    }
];

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
});

export default router;
