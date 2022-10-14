<script setup>
    import { computed } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    const props = defineProps({
        active: Boolean,
        href: String,
        as: String,
    });

    const classes = computed(() => {
        return props.active
            ? 'block pl-8 pr-4 py-2 border-l-4 border-blue-400 text-base font-medium text-blue-700 bg-blue-50 focus:outline-none focus:text-blue-800 focus:bg-blue-100 focus:border-blue-700 transition'
            : 'block pl-8 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition';
    });
</script>

<template>
    <div>
        <button v-if="as == 'button'" :class="classes" class="w-full text-left">
            <slot />
        </button>

        <Link v-else :href="href" :class="classes">
            <slot />
        </Link>
    </div>
</template>
