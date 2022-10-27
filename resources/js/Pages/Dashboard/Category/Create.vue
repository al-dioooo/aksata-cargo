<script setup>
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    import AppLayout from '@/Layouts/AppLayout.vue'
    import Form from '@/Pages/Dashboard/Category/Form.vue'

    defineProps({
        types: Array
    })
</script>

<template>
    <AppLayout title="Create Category">
        <template #header>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-medium leading-tight text-gray-800">Create Category</h2>
                    <div class="inline-flex items-center space-x-2 text-xs text-gray-500">
                        <InertiaLink :href="route('dashboard.category.index')">Category</InertiaLink>
                        <span>/</span>
                        <span>Create</span>
                    </div>
                </div>
            </div>
        </template>

        <div>
            <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <Form :types="types" />
            </div>
        </div>
    </AppLayout>
</template>
