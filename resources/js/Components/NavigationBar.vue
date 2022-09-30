<script setup>
    import { InertiaLink } from '@inertiajs/inertia-vue3'
</script>


<template>
    <header class="fixed inset-x-0 top-0 z-50 flex justify-center py-8 text-white mix-blend-difference">
        <nav class="flex items-center justify-between w-full max-w-6xl">
            <!-- Logo -->
            <div class="flex flex-col text-xs font-semibold">
                <span>aksata</span>
                <span>cargo.</span>
            </div>
            <!-- Links -->
            <ul class="flex items-center space-x-16">
                <li>
                    <inertia-link :href="route('index')" :class="route().current('index') && 'underline underline-offset-4'">Discover</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('about.index')" :class="route().current('about.index') && 'underline underline-offset-4'">About Us</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('service.index')" :class="route().current('service.index') && 'underline underline-offset-4'">Services</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('blog.index')" :class="route().current('blog.index') && 'underline underline-offset-4'">Blog</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('shop.index')" :class="route().current('shop.index') && 'underline underline-offset-4'">Shop</inertia-link>
                </li>
            </ul>
            <!-- E-Commerce -->
            <ul class="flex items-center space-x-8">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                    </svg>
                </li>
            </ul>
        </nav>
    </header>
</template>
