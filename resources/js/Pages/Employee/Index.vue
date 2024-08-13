<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const page = usePage()
// console.log(page.props);
const employees = ref(page.props.employees);

const onDeleteSuccess = (e) => {
    employees.value = e.props.employees;
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Trabajadores</h2>
                <Link :href="route('employee.create')">Agregar trabajador</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- Search input -->

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-2 px-5">

                    <div class="flex flex-wrap justify-center gap-4 p-3">

                        <input id="inputSearchDNI" type="text" placeholder="Ingresa DNI" class="block w-80 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>

                        <input id="inputSearchLastName" type="text" placeholder="Ingresa apellido" class="block w-80 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>

                        <input id="inputSearchFirstName" type="text" placeholder="Ingresa nombre" class="block w-80 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>

                    </div>

                    <div class="flex justify-center gap-4 p-3">

                        <button class="bg-blue-900 text-white font-semibold py-1 px-1 w-1/6 rounded-lg shadow-md hover:bg-sky-950 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                            Buscar
                        </button>

                        <button class="bg-rose-700 text-white font-semibold w-1/6 rounded-lg shadow-md hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                            Cancelar
                        </button>

                    </div>


                    <!-- Table -->

                    <div class="overflow-x-auto">

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">DNI</th>
                                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Apellidos</th>
                                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Nombres</th>
                                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Acción</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="employee in employees">
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{employee.dni}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{employee.last_name}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{employee.first_name}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <!-- <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a> -->
                                        <div class="space-x-4 text-blue-800">
                                            <Link :href="route('employee.edit',employee)">
                                                Editar
                                            </Link>
                                            <Link @success="onDeleteSuccess" :href="route('employee.destroy',employee)" method="delete" as="button">
                                                Eliminar
                                            </Link>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<!-- <style scoped>
    /* Ocultar flechas en navegadores Webkit (Chrome, Safari) */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Ocultar flechas en Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }
</style> -->
