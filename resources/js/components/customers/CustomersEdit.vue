<template>
    <form @submit.prevent="saveCustomer" v-if="customer">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label mb-1">Nome</label>
                    <input id="name" type="text"  class="form-control" v-model="customer.name">
                    <div class="form-text text-danger" v-if="errors.property.name">{{errors.property.name[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="rg" class="form-label mb-1">RG</label>
                    <input id="rg" type="number"  class="form-control" v-model="customer.rg">
                    <div class="form-text text-danger" v-if="errors.property.rg">{{errors.property.rg[0]}}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="email" class="form-label mb-1">Email</label>
                    <input id="email" type="email"  class="form-control" v-model="customer.email">
                    <div class="form-text text-danger" v-if="errors.property.email">{{errors.property.email[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="phone" class="form-label mb-1">Telefone</label>
                    <input id="phone" type="number"  class="form-control phone" v-model="customer.cellphone">
                    <div class="form-text text-danger" v-if="errors.property.cellphone">{{errors.property.cellphone[0]}}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="uf" class="form-label mb-1">UF</label>
                    <input id="uf" type="text" maxlength="2"  class="form-control" v-model="customer.address.uf">
                    <div class="form-text text-danger" v-if="errors.property.uf">{{errors.property.uf[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="city" class="form-label mb-1">Cidade</label>
                    <input id="city" type="text" class="form-control" v-model="customer.address.city">
                    <div class="form-text text-danger" v-if="errors.property.city">{{errors.property.city[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="place" class="form-label mb-1">Endereço</label>
                    <input id="place" type="text" class="form-control" v-model="customer.address.place">
                    <div class="form-text text-danger" v-if="errors.property.place">{{errors.property.place[0]}}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="customerPhoto" class="form-label mb-1 d-block">Foto</label>
                    <img
                        :src="customer.photoPreviewUrl"
                        class="mb-1 border"
                        style="width: 145px;height: 145px;overflow: hidden;object-fit: cover;"
                        alt="foto do cliente"
                    />
                    <input id="customerPhoto" class="form-control" type="file" accept="image/*" @change="handleImageChange">
                    <div class="form-text text-danger d-none" v-if="errors.property.photo">{{errors.property.photo[0]}}</div>
                </div>
            </div>
        </div>

        <div v-if="loading" class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <button v-if="!loading" type="submit" class="btn btn-primary mt-3 rounded-0">Salvar</button>
    </form>

</template>

<script>
import { onMounted, ref } from 'vue';
import useCustomers from '../../composables/customers';

export default {

    props: {
        id: {
            required: true,
            type: String
        }
    },

    setup(props) {
        const { loading, customer, errors, getCustomer, updateCustomer } = useCustomers();

        onMounted(getCustomer(props.id));

        /**
         * Cria uma uma url de preview da foto
         * E converte a imagem em base64
         */
        const handleImageChange = (e) => {
            const imgFile = e.target.files[0];

            if(customer.value.photoPreviewUrl.length > 0){
                URL.revokeObjectURL(customer.value.photoPreviewUrl);
            }
            customer.value.photoPreviewUrl = URL.createObjectURL(imgFile);

            const reader = new FileReader();
            reader.onloadend = () => {
                const base64string = reader.result;
                customer.value.photo = ''+base64string;
            };
            reader.readAsDataURL(imgFile);
        }

        const saveCustomer = async () => {
            const data = {
                name: customer.value.name,
                rg: customer.value.rg,
                email: customer.value.email,
                cellphone: customer.value.cellphone,
                ...customer.value.address
            };
            if(customer.value.photo){ data.photo = customer.value.photo };

            await updateCustomer(props.id, data);
        }

        return {
            errors,
            customer,
            saveCustomer,
            handleImageChange,
            loading
        }
    },
}
</script>
