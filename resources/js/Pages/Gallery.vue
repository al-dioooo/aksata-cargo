<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    const photos = [
        {
            url: "/storage/img/galleries/1.jpg"
        },
        {
            url: "/storage/img/galleries/2.jpg"
        },
        {
            url: "/storage/img/galleries/3.jpg"
        },
        {
            url: "/storage/img/galleries/4.jpg"
        },
        {
            url: "/storage/img/galleries/5.jpg"
        },
        {
            url: "/storage/img/galleries/6.jpg"
        },
        {
            url: "/storage/img/galleries/7.jpg"
        },
        {
            url: "/storage/img/galleries/8.jpg"
        }
    ]

</script>

<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">Gallery</h1>
            </div>
        </section>

        <!-- Photo Section -->
        <section class="min-w-full px-8 py-8 bg-white md:px-0 md:py-16">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                        <template v-for="row in photos" :key="row">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white rounded-3xl aspect-square" :src="row.url" alt="" />
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
