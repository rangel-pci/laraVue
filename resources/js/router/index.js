import { createRouter , createWebHistory} from "vue-router";

import CustomersIndex from '../components/customers/CustomersIndex';
import CustomersCreate from '../components/customers/CustomersCreate'
import CustomersEdit from '../components/customers/CustomersEdit'

const routes = [
    {
        path: '/clientes',
        name: 'customers.index',
        component: CustomersIndex
    },
    {
        path: '/clientes/cadastro',
        name: 'customers.create',
        component: CustomersCreate
    },
    {
        path: '/clientes/editar/:id',
        name: 'customers.edit',
        component: CustomersEdit,
        props: true
    },
    {
        path: '/clientes:after(.*)',
        redirect: { name: 'customers.index' },
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})
