<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    const props = defineProps({
        posts: Array
    })

    const posts = [
        {
            id: 1,
            title: 'First Post',
            subtitle: 'Postingan pertama Aksata Cargo.',
            cover: 'https://placehold.co/1600x900/EEE/31343C?font=source-sans-pro&text=Image%20Placeholder',
            slug: 'first-post',
            categories: [
                {
                    name: 'Aksata',
                    slug: 'aksata'
                },
                {
                    name: 'Cargo',
                    slug: 'cargo'
                }
            ],
        }
    ]
</script>

<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">Blog</h1>
            </div>
        </section>

        <!-- Product List Section -->
        <section class="min-w-full px-8 py-8 bg-white md:px-0 md:py-16">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <ul class="grid mt-6 sm:gap-y-12 gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-8 md:grid-cols-3 2xl:gap-16 2xl:gap-y-16">
                        <template v-for="row in props.posts" :key="row">
                            <li class="relative">
                                <div class="text-left focus:outline-none">
                                    <inertia-link :href="route('blog.show', row.slug)">
                                        <img class="object-cover w-full h-full mb-1 transition-shadow duration-500 ease-in-out rounded-lg shadow-none group-hover:shadow-lg aspect-video" :src="row.cover" :alt="row.title" />
                                    </inertia-link>
                                    <span class="flex items-center space-x-2 text-xs">
                                        <template v-for="category in row.categories" :key="category">
                                            <a href="" class="font-semibold text-blue-500 underline decoration-[1.5px] underline-offset-2">{{ category.name }}</a>
                                        </template>
                                    </span>
                                    <span class="block max-w-sm mt-4 mb-2 leading-tight tracking-tighter">
                                        <a class="font-medium text-shark-800 line-clamp-1" href="/series/belajar-react-dari-awal-rswb0">{{ row.title }}</a>
                                    </span>
                                    <span class="flex items-center justify-between text-xs">
                                        <span class="flex items-center space-x-2 text-shark-600 text-[11px]">
                                            {{ row.subtitle }}
                                        </span>
                                    </span>
                                </div>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
