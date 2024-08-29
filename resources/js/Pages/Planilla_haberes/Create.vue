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

                <form action="">

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
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
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3 mt-2">
                        <div>
                            REMUNERACIONES
                            <!-- Conceptos de remuneraciones -->
                            <div class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 gap-2">
                                <div>
                                    <InputLabel for="rem_basico" value="Rem Basico" class="text-xs"/>
                                    <TextInput id="rem_basico" type="number" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_aguinaldo" value="Aguinaldo" class="text-xs"/>
                                    <TextInput id="rh_aguinaldo" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_al_cargo" value="Al Cargo" class="text-xs"/>
                                    <TextInput id="rh_al_cargo" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_bon_anos_servicio" value="Bon Años Serv" class="text-xs"/>
                                    <TextInput id="rh_bon_anos_servicio" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_bon_frontera" value="Bon Frontera" class="text-xs"/>
                                    <TextInput id="rh_bon_frontera" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_comp_serv" value="Comp Viv" class="text-xs"/>
                                    <TextInput id="rh_comp_serv" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_costo_vida" value="Costo Vida" class="text-xs"/>
                                    <TextInput id="rh_costo_vida" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_dedicac_exclusiva" value="Dedicac Exc" class="text-xs"/>
                                    <TextInput id="rh_dedicac_exclusiva" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_especializacion_especial" value="Esp / Especial" class="text-xs"/>
                                    <TextInput id="rh_especializacion_especial" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_familia" value="Familia" class="text-xs"/>
                                    <TextInput id="rh_familia" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_familia_numerosa" value="Fam Numerosa" class="text-xs"/>
                                    <TextInput id="rh_familia_numerosa" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_fonavi" value="Fonavi" class="text-xs"/>
                                    <TextInput id="rh_fonavi" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_fondo_est" value="Fondo Est" class="text-xs"/>
                                    <TextInput id="rh_fondo_est" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_gastos_representacion" value="Gastos Rep" class="text-xs"/>
                                    <TextInput id="rh_gastos_representacion" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_gratificacion" value="Gratificacion" class="text-xs"/>
                                    <TextInput id="rh_gratificacion" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_gratificacion_altura" value="Grati Altura" class="text-xs"/>
                                    <TextInput id="rh_gratificacion_altura" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_inc_afp" value="Inc Afp" class="text-xs"/>
                                    <TextInput id="rh_inc_afp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_micro" value="Micro" class="text-xs"/>
                                    <TextInput id="rh_micro" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_personal" value="Personal" class="text-xs"/>
                                    <TextInput id="rh_personal" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_refri_y_movil" value="Refri Y Movil" class="text-xs"/>
                                    <TextInput id="rh_refri_y_movil" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_reintegro" value="Reintegro" class="text-xs"/>
                                    <TextInput id="rh_reintegro" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_reunific" value="Reunific" class="text-xs"/>
                                    <TextInput id="rh_reunific" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_s_eventual" value="S Eventual" class="text-xs"/>
                                    <TextInput id="rh_s_eventual" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_t_no_pensionable" value="T No Pensionab" class="text-xs"/>
                                    <TextInput id="rh_t_no_pensionable" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_t_pensionable" value="T Pensionab" class="text-xs"/>
                                    <TextInput id="rh_t_pensionable" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_t_homol" value="T Homol" class="text-xs"/>
                                    <TextInput id="rh_t_homol" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_tiempo_de_servicio" value="T De Servicio" class="text-xs"/>
                                    <TextInput id="rh_tiempo_de_servicio" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_viaticos" value="Viaticos" class="text-xs"/>
                                    <TextInput id="rh_viaticos" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ley_13455" value="Ley 13455" class="text-xs"/>
                                    <TextInput id="rh_ley_13455" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ley_13455_16710" value="Ley 13455-16710" class="text-xs"/>
                                    <TextInput id="rh_ley_13455_16710" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ley_26504" value="Ley 26504" class="text-xs"/>
                                    <TextInput id="rh_ley_26504" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_dl_21394" value="Dl 21394" class="text-xs"/>
                                    <TextInput id="rh_dl_21394" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_dl_25697" value="Dl 25697" class="text-xs"/>
                                    <TextInput id="rh_dl_25697" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_dl_25897" value="Dl 25897" class="text-xs"/>
                                    <TextInput id="rh_dl_25897" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_dl_26504" value="Dl 26504" class="text-xs"/>
                                    <TextInput id="rh_dl_26504" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_dl_31394" value="Dl 31394" class="text-xs"/>
                                    <TextInput id="rh_dl_31394" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_dl_21899_21394" value="Dl 21899-21394" class="text-xs"/>
                                    <TextInput id="rh_dl_21899_21394" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_25759" value="Ds 257-59" class="text-xs"/>
                                    <TextInput id="rh_ds_25759" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_3887" value="Ds 38-87" class="text-xs"/>
                                    <TextInput id="rh_ds_3887" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_03188" value="Ds 031-88" class="text-xs"/>
                                    <TextInput id="rh_ds_03188" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_15588" value="Ds 155-88" class="text-xs"/>
                                    <TextInput id="rh_ds_15588" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_13289" value="Ds 132-89" class="text-xs"/>
                                    <TextInput id="rh_ds_13289" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_28589" value="Ds 285-89" class="text-xs"/>
                                    <TextInput id="rh_ds_28589" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_05191" value="Ds 051-91" class="text-xs"/>
                                    <TextInput id="rh_ds_05191" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_27691" value="Ds 276-91" class="text-xs"/>
                                    <TextInput id="rh_ds_27691" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_du_3794" value="Du 37-94" class="text-xs"/>
                                    <TextInput id="rh_du_3794" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_du_9096" value="Du 90-96" class="text-xs"/>
                                    <TextInput id="rh_du_9096" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_25697" value="Ds 256-97" class="text-xs"/>
                                    <TextInput id="rh_ds_25697" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_du_7397" value="Du 73-97" class="text-xs"/>
                                    <TextInput id="rh_du_7397" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_du_01199" value="Du 01-99" class="text-xs"/>
                                    <TextInput id="rh_du_01199" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_1605" value="Ds 16-05" class="text-xs"/>
                                    <TextInput id="rh_ds_1605" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_1705" value="Ds 17-05" class="text-xs"/>
                                    <TextInput id="rh_ds_1705" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_11006" value="Ds 110-06" class="text-xs"/>
                                    <TextInput id="rh_ds_11006" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_3907" value="Ds 39-07" class="text-xs"/>
                                    <TextInput id="rh_ds_3907" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_12008" value="Ds 120-08" class="text-xs"/>
                                    <TextInput id="rh_ds_12008" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="rh_ds_1409" value="Ds 14-09" class="text-xs"/>
                                    <TextInput id="rh_ds_1409" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                            </div>
                            <!-- Otras remuneraciones -->
                            <div class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 gap-2 mt-3">
                                <div class="item-center gap-2">
                                    <InputLabel for="rh_otro_1" value="Otra rem1" class="text-xs"/>
                                    <TextInput id="rh_otro_1" type="text" class="py-1 text-xs mt-1 block w-full text-center" placeholder="Concepto"/>
                                    <TextInput id="rh_otro_1" type="text" class="py-1 text-xs mt-1 block w-full text-center" placeholder="Monto"/>
                                </div>
                                <div class="item-center gap-2">
                                    <InputLabel for="rh_otro_2" value="Otra rem2" class="text-xs"/>
                                    <TextInput id="rh_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="rh_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div class="item-center gap-2">
                                    <InputLabel for="rh_otro_3" value="Otra rem3" class="text-xs"/>
                                    <TextInput id="rh_otro_3" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="rh_otro_3" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                            </div>
                            <!-- Observaaciones -->
                            <div class="mt-3">
                                <InputLabel for="rh_obervaciones" value="OBSERVACIONES" class="text-xs"/>
                                <TextInput id="rh_obervaciones" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Ingresa obervaciones de remuneraciones"/>
                            </div>
                            <!-- Remuneracion total -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 mt-3">
                                <div class="flex items-center text-center gap-2">
                                    <InputLabel for="total_rh" value="REMUNERACION TOTAL" class="text-xs"/>
                                    <TextInput id="total_rh" type="text" class="py-1 text-xs mt-1 block w-full"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2 mt-2">
                        <div>
                            DESCUENTOS
                            <!-- Concepto de Descuentos -->
                            <div class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 gap-2">
                                <div>
                                    <InputLabel for="dh_adelanto_sueldo" value="Adel. Sueldo" class="text-xs"/>
                                    <TextInput id="dh_adelanto_sueldo" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_buena_cuenta" value="Buena Cuenta" class="text-xs"/>
                                    <TextInput id="dh_buena_cuenta" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_caja_pen" value="Caja Pension" class="text-xs"/>
                                    <TextInput id="dh_caja_pen" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_caja_pen_1" value="C. Pension 1%" class="text-xs"/>
                                    <TextInput id="dh_caja_pen_1" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_caja_pen_3" value="C. Pension 3%" class="text-xs"/>
                                    <TextInput id="dh_caja_pen_3" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_cuarta_cat" value="Cuarta Cat" class="text-xs"/>
                                    <TextInput id="dh_cuarta_cat" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_quinta_cat" value="Quinta Cat" class="text-xs"/>
                                    <TextInput id="dh_quinta_cat" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_derrama_adm" value="Derrama Adm" class="text-xs"/>
                                    <TextInput id="dh_derrama_adm" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_voluntario" value="Desc Vol" class="text-xs"/>
                                    <TextInput id="dh_voluntario" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_judicial" value="Desc. Judicial" class="text-xs"/>
                                    <TextInput id="dh_judicial" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_falta_tard" value="Falta Y Tard" class="text-xs"/>
                                    <TextInput id="dh_falta_tard" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fonavi_1" value="Fonavi 1%" class="text-xs"/>
                                    <TextInput id="dh_fonavi_1" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fonavi" value="Fonavi" class="text-xs"/>
                                    <TextInput id="dh_fonavi" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fonavi_05" value="Fonavi 0.5%" class="text-xs"/>
                                    <TextInput id="dh_fonavi_05" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fondo" value="Fondo" class="text-xs"/>
                                    <TextInput id="dh_fondo" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fondo_10" value="Fondo 10%" class="text-xs"/>
                                    <TextInput id="dh_fondo_10" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fondo_pen_6" value="F Pension 6%" class="text-xs"/>
                                    <TextInput id="dh_fondo_pen_6" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fondo_pen_847" value="F Pens 8 4 7%" class="text-xs"/>
                                    <TextInput id="dh_fondo_pen_847" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fondo_spp_8" value="F Spp 8%" class="text-xs"/>
                                    <TextInput id="dh_fondo_spp_8" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_fondo_spp" value="Fondo-Spp" class="text-xs"/>
                                    <TextInput id="dh_fondo_spp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_aporte_afp" value="Aporte Afp" class="text-xs"/>
                                    <TextInput id="dh_aporte_afp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_dev_afp" value="Dev Afp" class="text-xs"/>
                                    <TextInput id="dh_dev_afp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_pll_afp" value="Pll Afp" class="text-xs"/>
                                    <TextInput id="dh_pll_afp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_r_afp" value="R Afp" class="text-xs"/>
                                    <TextInput id="dh_r_afp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ret" value="Retencion" class="text-xs"/>
                                    <TextInput id="dh_ret" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ret_afp" value="Retencion Afp" class="text-xs"/>
                                    <TextInput id="dh_ret_afp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_snp" value="Snp" class="text-xs"/>
                                    <TextInput id="dh_snp" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_snp_2" value="Snp 2%" class="text-xs"/>
                                    <TextInput id="dh_snp_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_snp_25" value="Snp 2.5%" class="text-xs"/>
                                    <TextInput id="dh_snp_25" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_snp_3" value="Snp 3%" class="text-xs"/>
                                    <TextInput id="dh_snp_3" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_snp_11" value="Snp 11%" class="text-xs"/>
                                    <TextInput id="dh_snp_11" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_snp_13" value="Snp 13%" class="text-xs"/>
                                    <TextInput id="dh_snp_13" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_goce_6" value="Goce 6%" class="text-xs"/>
                                    <TextInput id="dh_goce_6" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_goce_8" value="Goce 8%" class="text-xs"/>
                                    <TextInput id="dh_goce_8" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_grati" value="Gratificacion" class="text-xs"/>
                                    <TextInput id="dh_grati" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_grav_nomb" value="Grav Nombr" class="text-xs"/>
                                    <TextInput id="dh_grav_nomb" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_imp_rent" value="Imp Rent" class="text-xs"/>
                                    <TextInput id="dh_imp_rent" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_imp_sueldo" value="Imp Sueldo" class="text-xs"/>
                                    <TextInput id="dh_imp_sueldo" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ips" value="Ips" class="text-xs"/>
                                    <TextInput id="dh_ips" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ips_25" value="Ips 2.5%" class="text-xs"/>
                                    <TextInput id="dh_ips_25" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ips_3" value="Ips 3%" class="text-xs"/>
                                    <TextInput id="dh_ips_3" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ips_4" value="Ips 4%" class="text-xs"/>
                                    <TextInput id="dh_ips_4" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_montepio" value="Montepio" class="text-xs"/>
                                    <TextInput id="dh_montepio" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_prestamo_adm" value="Prest Adm" class="text-xs"/>
                                    <TextInput id="dh_prestamo_adm" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_quincena" value="Quincena" class="text-xs"/>
                                    <TextInput id="dh_quincena" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_seg_soc" value="Seguro Soc" class="text-xs"/>
                                    <TextInput id="dh_seg_soc" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_seg_soc_15" value="Seg Soc 1.5%" class="text-xs"/>
                                    <TextInput id="dh_seg_soc_15" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_seg_soc_21" value="Seg Soc 2.1%" class="text-xs"/>
                                    <TextInput id="dh_seg_soc_21" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_seg_soc_25" value="Seg Soc 2.5%" class="text-xs"/>
                                    <TextInput id="dh_seg_soc_25" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_seg_vida" value="Seguro Vida" class="text-xs"/>
                                    <TextInput id="dh_seg_vida" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_tesoreria" value="Tesoreria" class="text-xs"/>
                                    <TextInput id="dh_tesoreria" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_vacac" value="Vacaciones" class="text-xs"/>
                                    <TextInput id="dh_vacac" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_viaticos" value="Viaticos" class="text-xs"/>
                                    <TextInput id="dh_viaticos" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ley_7904" value="Ley 7904" class="text-xs"/>
                                    <TextInput id="dh_ley_7904" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_dl_20530" value="Dl 20530" class="text-xs"/>
                                    <TextInput id="dh_dl_20530" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_dl_22161" value="Dl 22161" class="text-xs"/>
                                    <TextInput id="dh_dl_22161" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                                <div>
                                    <InputLabel for="dh_ds_043" value="Ds 043" class="text-xs"/>
                                    <TextInput id="dh_ds_043" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>

                            </div>
                            <!-- Otros descuentos -->
                            <div class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 gap-2 mt-3">
                                <div class="item-center gap-2">
                                    <InputLabel for="ah_otro_1" value="Otro desc1" class="text-xs"/>
                                    <TextInput id="dh_otro_1" type="text" class="py-1 text-xs mt-1 block w-full text-center" placeholder="Concepto"/>
                                    <TextInput id="dh_otro_1" type="text" class="py-1 text-xs mt-1 block w-full text-center" placeholder="Monto"/>
                                </div>
                                <div class="item-center gap-2">
                                    <InputLabel for="dh_otro_2" value="Otro desc2" class="text-xs"/>
                                    <TextInput id="dh_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="dh_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div class="item-center gap-2">
                                    <InputLabel for="dh_otro_3" value="Otro desc3" class="text-xs"/>
                                    <TextInput id="dh_otro_3" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="dh_otro_3" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                            </div>
                            <!-- Observaciones descuentos-->
                            <div class="mt-3">
                                <InputLabel for="dh_obervaciones" value="OBSERVACIONES" class="text-xs"/>
                                <TextInput id="dh_obervaciones" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Ingresa obervaciones de los descuentos"/>
                            </div>
                            <!-- Descuento total -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 mt-3">
                                <div class="flex items-center text-center gap-2">
                                    <InputLabel for="total_dh" value="DESCUENTO TOTAL" class="text-xs"/>
                                    <TextInput id="total_dh" type="text" class="py-1 text-xs mt-1 block w-full"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2 mt-2">
                        <div>
                            TOTAL RECIBIDO / TOTAL A PAGAR
                            <!-- Total haberes recibidos -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 mt-3">
                                <div class="flex items-center text-center gap-2">
                                    <InputLabel for="total_haberes" value="TOTAL" class="text-xs"/>
                                    <TextInput id="total_haberes" type="text" class="py-1 text-xs mt-1 block w-full"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2 mt-2">
                        <div>
                            APORTES
                            <!-- Concepto de Aportes -->
                            <div class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 gap-2">
                                <div >
                                    <InputLabel for="ah_ss_cuota_pat" value="Ss Cuota Pat" class="text-xs"/>
                                    <TextInput id="ah_ss_cuota_pat" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_cp_cuota_pat" value="Cp Cuota Pat" class="text-xs"/>
                                    <TextInput id="ah_cp_cuota_pat" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_caja_pens" value="Caja Pens" class="text-xs"/>
                                    <TextInput id="ah_caja_pens" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_cem_3" value="Cem 3%" class="text-xs"/>
                                    <TextInput id="ah_cem_3" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_cem_5" value="Cem 5%" class="text-xs"/>
                                    <TextInput id="ah_cem_5" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_cen" value="Cen" class="text-xs"/>
                                    <TextInput id="ah_cen" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_cen_5" value="Cen 5%" class="text-xs"/>
                                    <TextInput id="ah_cen_5" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_cen_6" value="Cen 6%" class="text-xs"/>
                                    <TextInput id="ah_cen_6" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_seg_soc" value="Seg Soc" class="text-xs"/>
                                    <TextInput id="ah_seg_soc" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_essalud_9" value="Essalud 9%" class="text-xs"/>
                                    <TextInput id="ah_essalud_9" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_fonavi" value="Fonavi" class="text-xs"/>
                                    <TextInput id="ah_fonavi" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_fon_4" value="Fon 4%" class="text-xs"/>
                                    <TextInput id="ah_fon_4" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_fon_5" value="Fon 5%" class="text-xs"/>
                                    <TextInput id="ah_fon_5" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_fon_8" value="Fon 8%" class="text-xs"/>
                                    <TextInput id="ah_fon_8" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_fon_9" value="Fon 9%" class="text-xs"/>
                                    <TextInput id="ah_fon_9" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_fon_7" value="Fon 7%" class="text-xs"/>
                                    <TextInput id="ah_fon_7" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_ipss" value="Ipss" class="text-xs"/>
                                    <TextInput id="ah_ipss" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_ies_7" value="Ies 1.7%" class="text-xs"/>
                                    <TextInput id="ah_ies_7" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_ies_2" value="Ies 2%" class="text-xs"/>
                                    <TextInput id="ah_ies_2" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_ipss_6" value="Ipss 6%" class="text-xs"/>
                                    <TextInput id="ah_ipss_6" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_ipss_9" value="Ipss 9%" class="text-xs"/>
                                    <TextInput id="ah_ipss_9" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_snp" value="Snp" class="text-xs"/>
                                    <TextInput id="ah_snp" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_snp_5" value="Snp 5%" class="text-xs"/>
                                    <TextInput id="ah_snp_5" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_snp_6" value="Snp 6%" class="text-xs"/>
                                    <TextInput id="ah_snp_6" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                                <div>
                                    <InputLabel for="ah_dl_20530" value="Dl 20530" class="text-xs"/>
                                    <TextInput id="ah_dl_20530" type="text" class="py-1 text-xs text-center mt-1 block w-full" />
                                </div>
                            </div>
                            <!-- Otros aportes -->
                            <div class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 gap-2 mt-3">
                                <div class="item-center gap-2">
                                    <InputLabel for="ah_otro_1" value="Otro aporte1" class="text-xs"/>
                                    <TextInput id="ah_otro_1" type="text" class="py-1 text-xs mt-1 block w-full text-center" placeholder="Concepto"/>
                                    <TextInput id="ah_otro_1" type="text" class="py-1 text-xs mt-1 block w-full text-center" placeholder="Monto"/>
                                </div>
                                <div class="item-center gap-2">
                                    <InputLabel for="ah_otro_2" value="Otro aporte2" class="text-xs"/>
                                    <TextInput id="ah_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="ah_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                                <div class="item-center gap-2">
                                    <InputLabel for="ah_otro_2" value="Otro aporte3" class="text-xs"/>
                                    <TextInput id="ah_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                    <TextInput id="ah_otro_2" type="text" class="py-1 text-xs mt-1 block w-full" />
                                </div>
                            </div>
                            <!-- Observaciones aportes-->
                            <div class="mt-3">
                                <InputLabel for="ah_obervaciones" value="OBSERVACIONES" class="text-xs"/>
                                <TextInput id="ah_obervaciones" type="text" class="py-1 text-xs mt-1 block w-full" placeholder="Ingresa obervaciones de los aportes"/>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center py-3">
                            <PrimaryButton>
                                AGREGAR DATOS
                            </PrimaryButton>
                    </div>

                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
    /* Ocultar flechas en navegadores Webkit (Chrome, Safari) */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Ocultar flechas en Firefox */
    input[type="number"] {
        appearance: textfield;
    }
</style>
