<script setup>
    import { InertiaLink } from '@inertiajs/inertia-vue3'
    import { ref } from '@vue/reactivity'
    import GuestResponsiveNavLink from '@/Components/GuestResponsiveNavLink.vue'

    const showingNavigationDropdown = ref(false)
</script>


<template>
    <div class="sticky inset-x-0 top-0 z-50 flex justify-center py-2 text-white bg-blue-400">
        <ul class="flex items-center max-w-3xl space-x-8 text-xs list-none">
            <li>
                <a class="flex items-center space-x-2" href="mailto:info@aksatacargo.id" target="_blank">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <polyline points="3 7 12 13 21 7"></polyline>
                        </svg>
                    </div>
                    <span class="hidden underline underline-offset-4 md:block">info@aksatacargo.id</span>
                </a>
            </li>
            <li>
                <a class="flex items-center space-x-2" href="https://instagram.com/aksatacargo" target="_blank">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                            <circle cx="12" cy="12" r="3"></circle>
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                        </svg>
                    </div>
                    <span class="hidden underline underline-offset-4 md:block">@aksatacargo</span>
                </a>
            </li>
            <li>
                <a class="flex items-center space-x-2" href="https://instagram.com/aksatacargo" target="_blank">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                    </div>
                    <span class="hidden underline underline-offset-4 md:block">aksatacargo</span>
                </a>
            </li>
            <li>
                <a class="flex items-center space-x-2" href="https://wa.me/628973130809" target="_blank">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                            <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                        </svg>
                    </div>
                    <span class="hidden underline underline-offset-4 md:block">+62 897-313-0809</span>
                </a>
            </li>
        </ul>
    </div>
    <header class="sticky inset-x-0 z-50 justify-center py-4 bg-white border-b md:flex top-8">
        <nav class="flex items-center justify-between w-full max-w-6xl px-8 md:px-0">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <div><img class="w-12 h-auto" src="/storage/img/aksata-cargo-logo.png" alt="Aksata Cargo Logo" /></div>
                <div class="flex-col hidden text-xs font-medium md:flex">
                    <span>Aksata Cargo</span>
                    <span>Jagonya Jasa Cargo Murah</span>
                </div>
            </div>
            <!-- Links -->
            <ul class="items-center hidden space-x-12 text-sm md:flex">
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
                    <inertia-link :href="route('gallery.index')" :class="route().current('gallery.index') && 'underline underline-offset-4'">Gallery</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('blog.index')" :class="route().current('blog.index') && 'underline underline-offset-4'">Blog</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('contact.index')" :class="route().current('contact.index') && 'underline underline-offset-4'">Contact Us</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('shop.index')" :class="route().current('shop.index') && 'underline underline-offset-4'">Shop</inertia-link>
                </li>
            </ul>
            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500" @click="showingNavigationDropdown = !showingNavigationDropdown">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ hidden: showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ hidden: !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </nav>
        <!-- Responsive Navigation Menu -->
        <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="mt-8 sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <GuestResponsiveNavLink :href="route('index')" :active="route().current('index')">Discover</GuestResponsiveNavLink>
                <GuestResponsiveNavLink :href="route('about.index')" :active="route().current('about.index')">About Us</GuestResponsiveNavLink>
                <GuestResponsiveNavLink :href="route('service.index')" :active="route().current('service.index')">Services</GuestResponsiveNavLink>
                <GuestResponsiveNavLink :href="route('gallery.index')" :active="route().current('gallery.index')">Gallery</GuestResponsiveNavLink>
                <GuestResponsiveNavLink :href="route('blog.index')" :active="route().current('blog.index')">Blog</GuestResponsiveNavLink>
                <GuestResponsiveNavLink :href="route('contact.index')" :active="route().current('contact.index')">Contact Us</GuestResponsiveNavLink>
                <GuestResponsiveNavLink :href="route('shop.index')" :active="route().current('shop.index')">Shop</GuestResponsiveNavLink>
            </div>
        </div>
    </header>
</template>
