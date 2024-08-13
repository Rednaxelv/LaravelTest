<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const initialValues = {
    dni: '',
    first_name: '',
    last_name: '',
}
const form = useForm(initialValues);

const submit = () =>{
    form.post(route('employee.store'));
}


</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Agregar trabajadores</h2>
                <Link :href="route('employee.index')">Lista de trabajadores</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="flex justify-center">
                <!-- <div class="w-1/4 bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 px-5"> -->
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form @submit.prevent="submit">

                        <div class="py-3">
                            <InputLabel for="dni" value="DNI" />
                            <TextInput id="dni" type="text" class="mt-1 block w-full" v-model="form.dni"
                                placeholder="Ingresa DNI" />
                            <InputError class="mt-2" :message="form.errors.dni" />
                        </div>

                        <div class="py-3">
                            <InputLabel for="first_name" value="Nombres" />
                            <TextInput id="first_name" type="text" class="mt-1 block w-full" v-model="form.first_name"
                                placeholder="Ingresa nombres" />
                            <InputError class="mt-2" :message="form.errors.first_name" />
                        </div>

                        <div class="py-3">
                            <InputLabel for="last_name" value="Apellidos" />
                            <TextInput id="last_name" type="text" class="mt-1 block w-full" v-model="form.last_name"
                                placeholder="Ingresa apellidos" />
                            <InputError class="mt-2" :message="form.errors.last_name" />
                        </div>

                        <div class="flex justify-center py-3">
                            <PrimaryButton>
                                AGREGAR TRABAJADOR
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
