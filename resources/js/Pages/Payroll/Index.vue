<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Planillas" />

    <AuthenticatedLayout>

            <template #header>
                <div class="flex justify-between">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Planillas</h2>
                    <Link :href="route('payroll.create')">Agregar planilla</Link>
                </div>
            </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <!-- Search input -->

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-2 px-5">

                        <!-- Filtros -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 p-2">
                            <input type="text" placeholder="Codigo de Planilla" class="block w-full rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Tipo de Planilla" class="block w-full rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Año de Planilla" class="block w-full rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Mes de Planilla" class="block w-full rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="DNI trabajador" class="block w-full rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Nombre trabajador" class="block w-full rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Apellido trabajador" class="block w-full rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                        </div>

                        <!-- Botones -->
                        <div class="flex justify-center gap-4 p-6">
                            <button class="bg-blue-900 text-white font-semibold py-1 px-1 w-1/6 rounded-lg shadow-md hover:bg-sky-950 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                                Buscar
                            </button>
                            <button class="bg-rose-700 text-white font-semibold w-1/6 rounded-lg shadow-md hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                                Limpiar
                            </button>

                        </div>

                        <!-- Table -->

                        <div class="overflow-x-auto hide-scrollbar">

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">CODIGO PLANILLA</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">AÑO</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">MES</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">TIPO</th>
                                        <th class="px-1 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">ARCHIVO</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">ACCION</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">TITULO</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Año</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Mes</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">tipo</td>
                                        <td class="px-1 py-4 whitespace-nowrap text-center text-sm text-gray-500">Archivo</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">

                                            <div class="space-x-4 text-blue-800">
                                                <!-- <Link> -->
                                                    Editar
                                                <!-- </Link>
                                                <Link> -->
                                                    Eliminar
                                                <!-- </Link> -->

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- <Pagination :links="employees.links"/> -->

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
