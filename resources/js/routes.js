import Vue from 'vue'
import VueRouter from 'vue-router'


import Create from './components/employee/Create.vue'
import Employee from "./components/employee/Employee";
import Edit from "./components/employee/Edit";
//import Register from './components/views/authentication/Register.vue'

Vue.use(VueRouter)

const router =new VueRouter({
    routes: [
        {
            name: 'home',
            path: '/home',
            component: Employee
        },
        {
            name: 'create',
            path: '/create',
            component: Create
        },
        {
            name: 'edit',
            path: "/edit/:id",
            component: Edit
        }
    ]
})

export default router


