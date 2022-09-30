<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
</script>

<template>
    <GuestLayout>
        <!-- Sorry -->
        <div class="flex items-center justify-center min-w-full min-h-screen py-16">
            <div class="w-full max-w-6xl">
                <div class="flex flex-col items-center w-full">
                    <div class="text-xs tracking-widest uppercase">Oops, sorry!</div>
                    <div>
                        <h1 class="text-4xl font-medium">This page is not available yet</h1>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
