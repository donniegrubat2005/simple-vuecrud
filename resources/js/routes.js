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
            path: "/home",
            component: Employee
        },
        {
            path: "/create",
            component: Create
        },
        {
            path: "/edit",
            component: Edit
        }
    ]
})

export default router


