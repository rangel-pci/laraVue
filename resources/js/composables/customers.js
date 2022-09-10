import axios from "axios";
import { reactive, ref } from "vue";
import { useRouter } from "vue-router";

export default function useCustomers(){
    const customers = ref([]);
    const customer = ref();
    const errors = reactive({ property: {} });
    const router = useRouter();
    const loading = ref(false);

    const getCustomers = async () => {
        let res = await axios.get('/api/customers');
        customers.value = res.data;
        console.log(res.data);
    }

    const getCustomer = async (id) => {
        let res = await axios.get(`/api/customers/${id}`);
        customer.value = res.data;

        customer.value.photoPreviewUrl = res.data.photo;
        customer.value.photo = '';
    }

    const createCustomer = async (data) => {
        loading.value = true;

        try {
            await axios.post('/api/customers', data);
            await router.push({ name: 'customers.index' });
        } catch (e) {
            if(e.response.status === 422){
                console.log(e.response.data.errors);
                errors.property = e.response.data.errors;
            }

            loading.value = false;
        }
    }

    const updateCustomer = async (id, data) => {
        loading.value = true;

        try {
            await axios.put(`/api/customers/${id}`, data);
            await router.push({ name: 'customers.index' });
        } catch (e) {
            if(e.response.status === 422){
                console.log(e.response.data.errors);
                errors.property = e.response.data.errors;
            }

            loading.value = false;
        }
    }

    const destroyCustomer = async (id) => {
        await axios.delete(`/api/customers/${id}`);
    }

    return {
        errors,
        customers,
        customer,
        getCustomers,
        getCustomer,
        createCustomer,
        updateCustomer,
        destroyCustomer,
        loading
    }
}
