<!-- resources/js/Components/FormField.vue -->
<template>
    <div>
      <InputLabel :for="id" :value="label" class="text-xs" />
      <TextInput :id="id" :type="type" class="py-1 text-xs mt-1 block w-full" :placeholder="placeholder" />
    </div>
  </template>

  <script setup>
  import InputLabel from '@/Components/InputLabel.vue';
  import TextInput from '@/Components/TextInput.vue';

  const props = defineProps({
    id: String,
    label: String,
    type: {
      type: String,
      default: 'text'
    },
    placeholder: String
  });
  </script>
