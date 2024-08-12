<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
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

                        <input id="inputSearch" type="text" placeholder="Ingresa DNI" class="block w-80 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>

                        <input id="inputSearch" type="text" placeholder="Ingresa apellido" class="block w-80 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>

                        <input id="inputSearch" type="text" placeholder="Ingresa nombre" class="block w-80 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>

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
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">00000000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">xxxxxxxx</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">xxxxxxxx</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>

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
