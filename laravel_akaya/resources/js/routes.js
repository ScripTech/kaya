import Vue from 'vue';
import VueRouter from 'vue-router';


// Add New Room (NovaKaya)
import NovaKaya from '@/js/components/NovaKaya';
// Room N Rooms tamples
import Rooms from '@/js/components/Rooms';
import Room from '@/js/components/Room';

// Founders Admin Panel
import AdminPanel from '@/js/components/AdminPanel';

// Perfil N edit perfil tamplates
import Perfil from '@/js/components/Perfil';
import EditPerfil from '@/js/components/EditPerfil';
// User Casas
import PointedKaya from '@/js/components/Akaya';

// Room Reserva
import RoomReserva from '@/js/components/Reserva';
import PinHome from '@/js/components/PinHome';


    Vue.use(VueRouter);

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/',
                name: 'Akaya',
                component: Rooms,
                props: { const_nav: "_rooms" },
                linkActiveClass:'class'
            },
            {
                path: '/room/:id',
                name: 'Room',
                component: Room,
                props: { true:'true',
                    const_nav: "_room" }
            },
            {
                path: '/novo/post',
                name: 'NovaKaya',
                component: NovaKaya,
                props: { true: 'true', const_nav: "_kaya" }
            },
            {
                path: '/founder/panel',
                name: 'Founder Panel',
                component: AdminPanel,
                props: { true: 'true', const_nav: "_panel" }
            },
            /*{
                path: '*',
                name: 'notFound',
                component: notFound
            }*/

        ],
        linkActiveClass:'active-n-item'
    });

    export default router;
