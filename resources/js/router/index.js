
import { createRouter, createWebHistory } from "vue-router";
import homeAdminIndex from '../components/admin/home/index.vue';
import ElearningPage from '../components/pages/home/app.vue';
import notFound from '../components/pages/home/notFound.vue';


const routes =[
    {
        path:'/admin/home',
        component: homeAdminIndex
    },
    {
        path:'/',
        component: ElearningPage
    },
    {
        path:'/:pathMatch(.*)*',
        component:notFound
    },

]
const router = createRouter ({
    history: createWebHistory(),
    routes,
})

export default router

