import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './components/pages/Home'
import Ads from './components/pages/Ads'
import EmailCopy from './components/pages/email/EmailCopy'
Vue.use(VueRouter)


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: EmailCopy
        },
        {
            path: '/ads',
            name: 'Ads',
            component: Ads
        },
        {
            path: '/email-copy',
            name: 'Email Copy',
            component: EmailCopy
        }
    ],
});

export default router;