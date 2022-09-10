<template>
    <form @submit.prevent="saveCustomer">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label mb-1">Nome *</label>
                    <input id="name" type="text"  class="form-control" v-model="form.name">
                    <div class="form-text text-danger" v-if="errors.property.name">{{errors.property.name[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="rg" class="form-label mb-1">RG *</label>
                    <input id="rg" type="number"  class="form-control" v-model="form.rg">
                    <div class="form-text text-danger" v-if="errors.property.rg">{{errors.property.rg[0]}}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="email" class="form-label mb-1">Email *</label>
                    <input id="email" type="email"  class="form-control" v-model="form.email">
                    <div class="form-text text-danger" v-if="errors.property.email">{{errors.property.email[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="phone" class="form-label mb-1">Telefone *</label>
                    <input id="phone" type="number"  class="form-control phone" v-model="form.cellphone">
                    <div class="form-text text-danger" v-if="errors.property.cellphone">{{errors.property.cellphone[0]}}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="uf" class="form-label mb-1">UF *</label>
                    <input id="uf" type="text" maxlength="2"  class="form-control" v-model="form.uf">
                    <div class="form-text text-danger" v-if="errors.property.uf">{{errors.property.uf[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="city" class="form-label mb-1">Cidade</label>
                    <input id="city" type="text" class="form-control" v-model="form.city">
                    <div class="form-text text-danger" v-if="errors.property.city">{{errors.property.city[0]}}</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="place" class="form-label mb-1">Endereço</label>
                    <input id="place" type="text" class="form-control" v-model="form.place">
                    <div class="form-text text-danger" v-if="errors.property.place">{{errors.property.place[0]}}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="customerPhoto" class="form-label mb-1 d-block">Foto</label>
                    <img
                        :src="photoPreviewUrl"
                        class="mb-1 border"
                        style="width: 145px;height: 145px;overflow: hidden;object-fit: cover;"
                        alt="foto do cliente"
                    />
                    <input id="customerPhoto" class="form-control" type="file" accept="image/*" @change="handleImageChange">
                    <div class="form-text text-danger" v-if="errors.property.photo">{{errors.property.photo[0]}}</div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 rounded-0">Salvar</button>
    </form>

</template>

<script>
import { reactive, ref } from 'vue';
import useCustomers from '../../composables/customers';

export default {
    setup() {
        const { createCustomer, errors, getCustomers } = useCustomers();

        const form = reactive({
            name: '',
            rg: '',
            email: '',
            cellphone: '',
            uf: '',
            city: '',
            place: '',
        });

        const photoPreviewUrl = ref(window.location.origin + '/storage/defaultImage.jpg');

        /**
         * Cria uma uma url de preview da foto
         * E converte a imagem em base64
         */
        const handleImageChange = (e) => {
            const imgFile = e.target.files[0];

            if(photoPreviewUrl.value.length > 0){
                URL.revokeObjectURL(photoPreviewUrl.value);
            }
            photoPreviewUrl.value = URL.createObjectURL(imgFile);

            const reader = new FileReader();
            reader.onloadend = () => {
                const base64string = reader.result;
                form.photo = ''+base64string;
            };
            reader.readAsDataURL(imgFile);
        }

        const saveCustomer = async () => {
            await createCustomer({...form});
        }

        return {
            form,
            errors,
            saveCustomer,
            photoPreviewUrl,
            handleImageChange,
        }
    },
}
</script>
