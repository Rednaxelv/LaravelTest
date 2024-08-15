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

                        <div class="flex flex-wrap justify-center gap-3 p-3">
                            <input type="text" placeholder="Ingresa titulo de la planilla" class="block w-5/6 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                        </div>

                        <div class="flex flex-wrap justify-center gap-3">
                            <input type="text" placeholder="Ingresa DNI del trabajador" class="block w-60 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Ingresa Año" class="block w-56 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Ingresa Mes" class="block w-56 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                            <input type="text" placeholder="Ingresa Tipo de planilla" class="block w-60 rounded-lg border dark:border-none dark:bg-neutral-100 text-center pr-4 text-sm focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-400"/>
                        </div>

                        <div class="flex justify-center gap-4 p-6">
                            <button class="bg-blue-900 text-white font-semibold py-1 px-1 w-1/6 rounded-lg shadow-md hover:bg-sky-950 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                                Buscar
                            </button>
                            <button class="bg-rose-700 text-white font-semibold w-1/6 rounded-lg shadow-md hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                                Cancelar
                            </button>

                        </div>

                        <!-- Title -->
                        <div class="p-2 text-center">
                            Planillas del trabajador $trabajador
                        </div>

                        <!-- Table -->

                        <div class="overflow-x-auto hide-scrollbar">

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">TITULO DE LA PLANILLA</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Año</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Mes</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                                        <th class="px-1 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Archivo</th>
                                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">Accion</th>
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
