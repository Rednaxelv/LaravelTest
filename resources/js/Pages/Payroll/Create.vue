<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Agregar planilla</h2>
                <Link :href="route('employee.index')">Lista de planillas</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="flex justify-center">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                    <form @submit.prevent="submit">

                        <div class="py-3">
                            <InputLabel for="title" value="Titulo de la planilla" />
                            <TextInput id="title" type="text" class="mt-1 block w-full"
                                placeholder="Ingresa titulo de la planilla" />
                            <!-- <InputError class="mt-2" :message="form.errors.dni" /> -->
                        </div>

                        <div class="py-3">
                            <InputLabel for="year" value="Año" />
                            <TextInput id="year" type="text" class="mt-1 block w-full"
                                placeholder="Ingresa nombres" />
                            <!-- <InputError class="mt-2" :message="form.errors.first_name" /> -->
                        </div>

                        <div class="py-3">
                            <InputLabel for="month" value="Mes" />
                            <TextInput id="month" type="text" class="mt-1 block w-full"
                                placeholder="Ingresa apellidos" />
                            <!-- <InputError class="mt-2" :message="form.errors.last_name" /> -->
                        </div>

                        <div class="py-3">
                            <InputLabel for="type" value="Tipo" />
                            <TextInput id="type" type="text" class="mt-1 block w-full"
                                placeholder="Trabajadores" />
                            <!-- <InputError class="mt-2" :message="form.errors.last_name" /> -->
                        </div>

                        <div class="py-3">
                            <InputLabel for="file" value="Archivo" />
                            <TextInput id="file" type="file" class="mt-1 block w-full"
                                placeholder="Trabajadores" />
                            <!-- <InputError class="mt-2" :message="form.errors.last_name" /> -->
                        </div>

                        <div class="py-3">
                            <InputLabel for="employee" value="Trabajadores" />
                            <TextInput id="id_employee" type="text" class="mt-1 block w-full"
                                placeholder="Trabajadores" />
                            <!-- <InputError class="mt-2" :message="form.errors.last_name" /> -->
                        </div>

                        <div class="flex justify-center py-3">
                            <PrimaryButton>
                                AGREGAR PLANILLA
                            </PrimaryButton>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
