<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    links: Array,
});
</script>

<template>
    <div v-if="links.length > 3" class="mt-4">
        <div class="flex flex-wrap justify-center -mb-1">
            <template v-for="(link, key) in links" :key="key">
                <div v-if="link.url === null"
                    class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded" v-html="link.label" />
                    <Link v-else class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-gray-100 focus:border-indigo-500 focus:text-indigo-500 transition duration-150 ease-in-out" :class="{
                    'bg-blue-900 text-white hover:bg-sky-950': link.active,
                    'bg-white text-gray-700': !link.active
                    }"
                    :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>
