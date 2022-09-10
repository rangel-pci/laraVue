<template>

    <router-link :to="{ name: 'customers.create' }" class="btn btn-primary rounded-0">Novo Cliente</router-link>

    <div class="row">
        <div class="col-9" style="overflow-y: scroll;max-height: 80vh;">
            <table class="table table-striped table-bordered mt-4">
                <thead class="text-secondary">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">UF</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="customer in customers" :key="customer.id" @mouseenter="onPreviewCustomer(customer)">
                        <!-- <td><img :src="customer.photo" class="img-thumbnail" style="width:100px;" alt=""></td> -->
                        <td>{{ customer.name }}</td>
                        <td>{{ customer.email }}</td>
                        <td>{{ customer.cellphone }}</td>
                        <td>{{ customer.address.uf }}</td>
                        <td>
                            <router-link :to="{ name: 'customers.edit', params: { id: customer.id} }" class="btn btn-success mx-1 rounded-0">Editar</router-link>
                            <button @click="deleteCustomer(customer.id)" class="btn btn-danger mx-1 rounded-0">Excluir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;" v-if="previewedCustomer">
                <img
                    :src="previewedCustomer.photo"
                    class="card-img-top mx-auto my-2 rounded"
                    style="width: 200px;height: 200px;overflow: hidden;object-fit: cover;"
                    alt="foto do cliente"
                />

                <div class="card-body">
                    <h5 class="card-title bg-light p-1">{{previewedCustomer.name}}</h5>
                    <span class="d-block">RG: <small>{{previewedCustomer.rg}}</small></span>
                    <span class="d-block">Email: <small>{{previewedCustomer.email}}</small></span>
                    <span class="d-block">Telefone: <small>{{previewedCustomer.cellphone}}</small></span>
                    <span class="d-block">UF: <small>{{previewedCustomer.address.uf}}</small></span>
                    <span class="d-block">Cidade: <small>{{previewedCustomer.address.city}}</small></span>
                    <span class="d-block">Endereço: <small>{{previewedCustomer.address.place}}</small></span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted, reactive, ref } from 'vue';
import useCustomers from '../../composables/customers';

export default {
    setup() {
        const { customers, getCustomers, destroyCustomer } = useCustomers();

        const previewedCustomer = ref(null);

        onMounted(getCustomers);

        const onPreviewCustomer = (customer) => {
            previewedCustomer.value = customer;
        }

        /**
         * Pede confirmação antes de excluir
         */
        const deleteCustomer = async (id) => {
            if(!window.confirm('Tem certeza que deseja excluir este cliente?')){
                return;
            }

            await destroyCustomer(id);
            await getCustomers();
        }

        return {
            customers,
            deleteCustomer,
            onPreviewCustomer,
            previewedCustomer
        }
    },
}
</script>
