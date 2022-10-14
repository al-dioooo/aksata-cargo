<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
</script>

<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">Contact Us</h1>
            </div>
        </section>

        <!-- About Section -->
        <section class="min-w-full py-8 md:py-0 bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="flex flex-col-reverse w-full max-w-6xl md:flex-row md:items-center">
                    <div class="w-full px-8 md:w-1/2 md:px-16 md:p-16">
                        <iframe class="object-cover w-full mt-8 overflow-hidden bg-white border md:mt-0 ring ring-slate-100 rounded-3xl aspect-square" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9009553988253!2d106.81433511485419!3d-6.144004295551553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f77bed1b2a0b%3A0xaf173312f50686df!2sGEDUNG%20MURATA!5e0!3m2!1sen!2sid!4v1665506597120!5m2!1sen!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w-full px-8 md:w-1/2 md:px-16 md:p-16">
                        <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Contact Us</div>
                        <div>
                            <h1 class="text-xl font-medium md:text-4xl w-max">Let's Get in Touch</h1>
                        </div>
                        <div class="mt-16 space-y-4">
                            <a href="https://www.google.com/maps?ll=-6.144004,106.816524&z=16&t=m&hl=en&gl=ID&mapclient=embed&cid=12616609037615007455" target="_blank" class="flex items-center space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="11" r="3"></circle>
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                    </svg>
                                </div>
                                <div class="text-xs md:text-base">Gedung Murata Lantai 2, Ruko Glodok Plaza</div>
                            </a>

                            <a href="mailto:info@aksatacargo.id" target="_blank" class="flex items-center space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                        <polyline points="3 7 12 13 21 7"></polyline>
                                    </svg>
                                </div>
                                <div class="text-xs md:text-base">info@aksatacargo.id</div>
                            </a>

                            <a href="https://instagram.com/aksatacargo" target="_blank" class="flex items-center space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                    </svg>
                                </div>
                                <div class="text-xs md:text-base">@aksatacargo</div>
                            </a>

                            <a href="https://facebook.com/aksatacargo" target="_blank" class="flex items-center space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                    </svg>
                                </div>
                                <div class="text-xs md:text-base">aksatacargo</div>
                            </a>

                            <a href="https://wa.me/628973130809" target="_blank" class="flex items-center space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                                    </svg>
                                </div>
                                <div>+62 897-313-0809</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
