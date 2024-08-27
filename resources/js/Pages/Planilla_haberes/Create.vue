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
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Agregar detalle de planilla de haberes</h2>
                <Link :href="route('payroll.index')">Planillas de Haberes</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">

                    <form action="">

                        <div>
                            Datos del trabajador
                            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                                <div class="">
                                    <InputLabel for="codigo_planilla" value="Codigo de planilla" class="text-xs"/>
                                    <TextInput id="codigo_planilla" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Ingresa codigo de planilla" />
                                </div>
                                <div class="">
                                    <InputLabel for="codigo_planilla" value="Nombre del trabajador" class="text-xs" />
                                    <TextInput id="codigo_planilla" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Ingresa nombre del trabajador" />
                                </div>
                                <div class="">
                                    <InputLabel for="codigo_planilla" value="Cargo del trabajador" class="text-xs" />
                                    <TextInput id="codigo_planilla" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Ingresa nombre del trabajador" />
                                </div>
                                <div class="">
                                    <InputLabel for="codigo_planilla" value="Categoria / grado / nivel" class="text-xs" />
                                    <TextInput id="codigo_planilla" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Ingresa nombre del trabajador" />
                                </div>
                            </div>
                        </div>

                        <div>
                            Remuneraciones
                            <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-2">
                                <div>
                                    <InputLabel for="rem_basico" value="Rem Basico" class="text-xs"/>
                                    <TextInput id="rem_basico" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_aguinaldo" value="Aguinaldo" class="text-xs"/>
                                    <TextInput id="r_aguinaldo" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_al_cargo" value="Al Cargo" class="text-xs"/>
                                    <TextInput id="r_al_cargo" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_bon_anos_servicio" value="Bon Años Serv" class="text-xs"/>
                                    <TextInput id="r_bon_anos_servicio" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_bon_frontera" value="Bon Frontera" class="text-xs"/>
                                    <TextInput id="r_bon_frontera" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_bon_comp_serv" value="Comp Viv" class="text-xs"/>
                                    <TextInput id="r_bon_comp_serv" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_costo_vida" value="Costo Vida" class="text-xs"/>
                                    <TextInput id="r_costo_vida" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_dedicac_exclusiva" value="Dedicac Exc" class="text-xs"/>
                                    <TextInput id="r_dedicac_exclusiva" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_especializacion_especial" value="Esp / Especial" class="text-xs"/>
                                    <TextInput id="r_especializacion_especial" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_familia" value="Familia" class="text-xs"/>
                                    <TextInput id="r_familia" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_familia_numerosa" value="Fam Numerosa" class="text-xs"/>
                                    <TextInput id="r_familia_numerosa" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_fonavi" value="Fonavi" class="text-xs"/>
                                    <TextInput id="r_fonavi" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_fondo_est" value="Fondo Est" class="text-xs"/>
                                    <TextInput id="r_fondo_est" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_gastos_representacion" value="Gastos Rep" class="text-xs"/>
                                    <TextInput id="r_gastos_representacion" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_gratificacion" value="Gratificacion" class="text-xs"/>
                                    <TextInput id="r_gratificacion" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_gratificacion_altura" value="Grati Altura" class="text-xs"/>
                                    <TextInput id="r_gratificacion_altura" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_inc_afp" value="Inc Afp" class="text-xs"/>
                                    <TextInput id="r_inc_afp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_micro" value="Micro" class="text-xs"/>
                                    <TextInput id="r_micro" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_personal" value="Personal" class="text-xs"/>
                                    <TextInput id="r_personal" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_refri_y_movil" value="Refri Y Movil" class="text-xs"/>
                                    <TextInput id="r_refri_y_movil" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_reintegro" value="Reintegro" class="text-xs"/>
                                    <TextInput id="r_reintegro" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_reunific" value="Reunific" class="text-xs"/>
                                    <TextInput id="r_reunific" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_s_eventual" value="S Eventual" class="text-xs"/>
                                    <TextInput id="r_s_eventual" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_t_no_pensionable" value="T No Pensionab" class="text-xs"/>
                                    <TextInput id="r_t_no_pensionable" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_t_pensionable" value="T Pensionab" class="text-xs"/>
                                    <TextInput id="r_t_pensionable" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_t_homol" value="T Homol" class="text-xs"/>
                                    <TextInput id="r_t_homol" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_tiempo_de_servicio" value="T De Servicio" class="text-xs"/>
                                    <TextInput id="r_tiempo_de_servicio" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_viaticos" value="Viaticos" class="text-xs"/>
                                    <TextInput id="r_viaticos" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ley_13455" value="Ley 13455" class="text-xs"/>
                                    <TextInput id="r_ley_13455" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ley_13455_16710" value="Ley 13455-16710" class="text-xs"/>
                                    <TextInput id="r_ley_13455_16710" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ley_26504" value="Ley 26504" class="text-xs"/>
                                    <TextInput id="r_ley_26504" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_dl_21394" value="Dl 21394" class="text-xs"/>
                                    <TextInput id="r_dl_21394" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_dl_25697" value="Dl 25697" class="text-xs"/>
                                    <TextInput id="r_dl_25697" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_dl_25897" value="Dl 25897" class="text-xs"/>
                                    <TextInput id="r_dl_25897" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_dl_26504" value="Dl 26504" class="text-xs"/>
                                    <TextInput id="r_dl_26504" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_dl_31394" value="Dl 31394" class="text-xs"/>
                                    <TextInput id="r_dl_31394" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_dl_21899_21394" value="Dl 21899-21394" class="text-xs"/>
                                    <TextInput id="r_dl_21899_21394" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_25759" value="Ds 257-59" class="text-xs"/>
                                    <TextInput id="r_ds_25759" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_3887" value="Ds 38-87" class="text-xs"/>
                                    <TextInput id="r_ds_3887" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_03188" value="Ds 031-88" class="text-xs"/>
                                    <TextInput id="r_ds_03188" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_15588" value="Ds 155-88" class="text-xs"/>
                                    <TextInput id="r_ds_15588" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_13289" value="Ds 132-89" class="text-xs"/>
                                    <TextInput id="r_ds_13289" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_28589" value="Ds 285-89" class="text-xs"/>
                                    <TextInput id="r_ds_28589" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_05191" value="Ds 051-91" class="text-xs"/>
                                    <TextInput id="r_ds_05191" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_27691" value="Ds 276-91" class="text-xs"/>
                                    <TextInput id="r_ds_27691" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_du_3794" value="Du 37-94" class="text-xs"/>
                                    <TextInput id="r_du_3794" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_du_9096" value="Du 90-96" class="text-xs"/>
                                    <TextInput id="r_du_9096" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_25697" value="Ds 256-97" class="text-xs"/>
                                    <TextInput id="r_ds_25697" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_du_7397" value="Du 73-97" class="text-xs"/>
                                    <TextInput id="r_du_7397" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_du_01199" value="Du 01-99" class="text-xs"/>
                                    <TextInput id="r_du_01199" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_1605" value="Ds 16-05" class="text-xs"/>
                                    <TextInput id="r_ds_1605" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_1705" value="Ds 17-05" class="text-xs"/>
                                    <TextInput id="r_ds_1705" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_11006" value="Ds 110-06" class="text-xs"/>
                                    <TextInput id="r_ds_11006" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_3907" value="Ds 39-07" class="text-xs"/>
                                    <TextInput id="r_ds_3907" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_12008" value="Ds 120-08" class="text-xs"/>
                                    <TextInput id="r_ds_12008" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="r_ds_1409" value="Ds 14-09" class="text-xs"/>
                                    <TextInput id="r_ds_1409" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                            </div>
                            <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-2 mt-3">
                                <div>
                                    <InputLabel for="rem_basico" value="Rem Basico" class="text-xs"/>
                                    <TextInput id="rem_basico" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Concepto"/>
                                    <TextInput id="rem_basico" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rem_basico" value="Rem Basico" class="text-xs"/>
                                    <TextInput id="rem_basico" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="rem_basico" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rem_basico" value="Rem Basico" class="text-xs"/>
                                    <TextInput id="rem_basico" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="rem_basico" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                            </div>
                        </div>

                        <div>
                            Descuentos
                        </div>

                        <div>
                            Aportes
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
