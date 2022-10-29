<script setup>
    import { onMounted, ref } from 'vue'

    defineProps({
        modelValue: String,
        rows: [Number, String]
    });

    defineEmits(['update:modelValue'])

    const input = ref(null);

    onMounted(() => {
        if (input.value.hasAttribute('autofocus')) {
            input.value.focus()
        }
    })

    defineExpose({ focus: () => input.value.focus() })
</script>

<template>
    <textarea ref="input" :rows="rows ?? 3" class="transition rounded-md border-slate-200 focus:border-slate-300 focus:ring focus:ring-slate-200 focus:ring-opacity-50" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)"></textarea>
</template>
