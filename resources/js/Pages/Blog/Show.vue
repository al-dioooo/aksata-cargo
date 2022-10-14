<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    const props = defineProps({
        post: Object
    })
</script>

<template>
    <GuestLayout>
        <!-- Post Title Section -->
        <section class="min-w-full py-16 bg-white">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div class="text-sm text-slate-500">{{ `Posted on ${post.created_at}` }}</div>
                    <div>
                        <h1 class="text-4xl font-medium w-max">{{ post.title }}</h1>
                        <h2 class="mt-4 text-slate-700">{{ post.subtitle }}</h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- Post Cover Section -->
        <section class="relative flex items-center min-w-full">
            <img class="object-cover w-5/6 aspect-cinema" :src="post.cover" :alt="post.title">
        </section>

        <!-- Post Content Section -->
        <section class="min-w-full py-16 bg-white">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl">
                    <div>
                        <p>{{ post.content }}</p>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
