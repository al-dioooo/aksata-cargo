<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'

    defineProps({
        products: Array
    })
</script>

<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">Shop</h1>
            </div>
        </section>

        <!-- Product List Section -->
        <section class="min-w-full px-8 py-8 bg-white md:px-0 md:py-16">
            <div class="flex justify-center w-full">
                <a href="https://shop.aksatacargo.id" target="_blank" class="flex items-center space-x-4 group">
                    <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">Go to <span class="font-semibold">shop.aksatacargo.id</span></div>
                    <div class="p-2 transition border rounded-full border-slate-300 group-hover:border-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="17" y1="7" x2="7" y2="17"></line>
                            <polyline points="8 7 17 7 17 16"></polyline>
                        </svg>
                    </div>
                </a>
            </div>
        </section>
    </GuestLayout>
</template>
