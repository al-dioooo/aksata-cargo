<script setup>
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    const year = new Date().getFullYear()
</script>


<template>
    <footer class="flex flex-col items-center w-full min-w-full py-4 md:py-10 text-[0.5rem] md:text-xs border-t">
        <div class="justify-between w-full max-w-6xl px-8 pb-4 space-y-8 md:px-0 md:space-y-0 md:pb-8 md:flex">
            <div class="space-y-8">
                <!-- Logo -->
                <div class="flex flex-col text-2xl font-medium">
                    <span>aksata</span>
                    <span>cargo.</span>
                </div>
                <ul class="flex items-center space-x-4 text-xl font-medium">
                    <li>
                        <a class="flex items-center justify-center p-3 text-white bg-blue-400 rounded-full" href="mailto:info@aksatacargo.id" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                <polyline points="3 7 12 13 21 7"></polyline>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center p-3 text-white bg-blue-400 rounded-full" href="https://instagram.com/aksatacargo" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                <circle cx="12" cy="12" r="3"></circle>
                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center p-3 text-white bg-blue-400 rounded-full" href="https://facebook.com/aksatacargo" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center p-3 text-white bg-blue-400 rounded-full" href="https://wa.me/628973130809" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex space-x-16">
                <div class="space-y-4 md:space-y-8">
                    <p class="text-sm font-medium md:text-xl"><inertia-link :href="route('index')">Discover</inertia-link></p>
                    <ul class="space-y-2 md:space-y-4">
                        <li><inertia-link :href="route('about.index')">About Us</inertia-link></li>
                        <li><inertia-link :href="route('service.index')">Services</inertia-link></li>
                        <li><inertia-link :href="route('gallery.index')">Gallery</inertia-link></li>
                        <li><inertia-link :href="route('contact.index')">Contact Us</inertia-link></li>
                    </ul>
                </div>
                <div class="space-y-4 md:space-y-8">
                    <p class="text-sm font-medium md:text-xl"><inertia-link :href="route('blog.index')">Blog</inertia-link></p>
                    <ul class="space-y-2 md:space-y-4">
                        <li><inertia-link :href="route('blog.index')">See All</inertia-link></li>
                    </ul>
                </div>
                <div class="space-y-4 md:space-y-8">
                    <p class="text-sm font-medium md:text-xl"><inertia-link :href="route('shop.index')">Shop</inertia-link></p>
                    <ul class="space-y-2 md:space-y-4">
                        <li><inertia-link :href="route('shop.index')">See All</inertia-link></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full max-w-6xl pt-4 space-y-2 text-center border-t md:pt-8 md:text-left md:justify-between md:space-y-0 md:flex">
            <div>&copy; {{ year }} Aksata Cargo. All Rights Reserved.</div>
            <div>
                Created in Buitenzorg City by <span><a class="underline underline-offset-4" href="https://bit.ly/al-dioooo" target="_blank">Al-(ice)</a></span
                >.
            </div>
        </div>
    </footer>
</template>
