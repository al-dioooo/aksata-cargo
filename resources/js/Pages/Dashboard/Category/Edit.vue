<script setup>
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    import AppLayout from '@/Layouts/AppLayout.vue'
    import Form from '@/Pages/Dashboard/Category/Form.vue'

    const props = defineProps({
        category: Object
    })
</script>

<template>
    <AppLayout title="Edit Category">
        <template #header>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-medium leading-tight text-gray-800">Edit Category</h2>
                    <div class="inline-flex items-center space-x-2 text-xs text-gray-500">
                        <InertiaLink :href="route('dashboard.category.index')">Category</InertiaLink>
                        <span>/</span>
                        <span>Edit</span>
                    </div>
                </div>
            </div>
        </template>

        <div>
            <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <Form :category="category" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
