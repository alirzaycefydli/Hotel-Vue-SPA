import Vue from 'vue';
import Router from 'vue-router';
Vue.use(Router);

import home from './components/pages/Home';
import room from './components/pages/RoomDetail';
import gallery from './components/pages/GalleryDetail';
import contact from './components/pages/Contact';
const routes = [
    {
        path:'/',
        component:home,
        meta:{
            title:'Home'
        }
    },
    {
        path:'/rooms',
        component:room,
        meta:{
            title:'Rooms'
        }
    },
    {
        path:'/gallery',
        component:gallery,
        meta:{
            title:'Our Gallery'
        }
    },
    {
        path:'/contact',
        component:contact,
        meta:{
            title:'Contact Us'
        }
    },
];

export default new Router ({
    mode :'history',
    routes
});
