<script setup>
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    import AppLayout from '@/Layouts/AppLayout.vue'
    import Form from '@/Pages/Dashboard/Post/Form.vue'

    defineProps({
        categories: Array,
        post: Array
    })
</script>

<template>
    <AppLayout :title="`Edit ${post.title}`">
        <template #header>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-medium leading-tight text-gray-800">Edit {{ post.title }}</h2>
                    <div class="inline-flex items-center space-x-2 text-xs text-gray-500">
                        <InertiaLink :href="route('dashboard.post.index')">Post</InertiaLink>
                        <span>/</span>
                        <span>Edit</span>
                    </div>
                </div>
            </div>
        </template>

        <div>
            <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                    <Form :categories="categories" :post="post" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
