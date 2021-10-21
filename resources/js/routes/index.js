import Login from '../pages/auth/Login.vue'
import Register from '../pages/auth/Register.vue'
import Home from '../pages/Home.vue'

import VueRouter from "vue-router";
import Vue from "vue";

Vue.use(VueRouter);

const router = new VueRouter({


    mode: "history",
    routes: [
        {
            path: '/',
            component: Login,
            name: 'login',
            meta:{
                layout:'AuthLayout',
            }
        },
        {
            path: '/register',
            component: Register,
            name: 'register',
            meta:{
                layout:'AuthLayout',
            }
        },
        {
            path: '/home',
            component: Home,
            name: 'home',
            meta:{
                layout:'DashboardLayout',
            }
        },
        {
            path: '/logout',
            name: 'logout',
            component: () => import('../pages/auth/Logout.vue'),
            
        },
        {
            path: '/new_employee',
            name: 'newemp',
            component: () => import('../pages/employee/CreateEmployee.vue'),
            meta:{
                layout:'DashboardLayout',
            }
            
        },
        {
            path: '/all_employee',
            name: 'allemp',
            component: () => import('../pages/employee/Index.vue'),
            meta:{
                layout:'DashboardLayout',
            }
            
        }
    ]
})
export default router;
