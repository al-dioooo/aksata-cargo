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
                <h1 class="text-xl font-medium md:text-4xl">Register</h1>
            </div>
        </section>

        <!-- Choose Form Section -->
        <section class="min-w-full bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl py-8 space-y-8 md:space-y-0 md:py-0 md:items-center md:flex">
                    <div class="w-full px-8 md:px-16 md:w-1/2 md:p-16">
                        <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Daftar</div>
                        <div>
                            <h1 class="text-xl font-medium md:text-4xl w-max">Member</h1>
                        </div>
                        <div class="mt-8">
                            <p>Klik link di bawah untuk mengisi formulir.</p>
                        </div>
                        <div class="mt-8">
                            <a href="https://docs.google.com/forms/d/1OOBOYdjCjYvRjos661-zonJybgctjdZY-8tioD2BSgY/edit" target="_blank" class="inline-flex items-center space-x-4 group">
                                <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">Selengkapnya</div>
                                <div class="p-2 transition border rounded-full border-slate-300 group-hover:border-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="17" y1="7" x2="7" y2="17"></line>
                                        <polyline points="8 7 17 7 17 16"></polyline>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-full px-8 md:px-16 md:w-1/2 md:p-16">
                        <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Daftar</div>
                        <div>
                            <h1 class="text-xl font-medium md:text-4xl w-max">Aksata Shop</h1>
                        </div>
                        <div class="mt-8">
                            <p>Klik link di bawah untuk mengisi formulir.</p>
                        </div>
                        <div class="mt-8">
                            <a href="https://docs.google.com/forms/d/1Mv488IQgs2nDPweZFRdjtBgELZ2pBuERex2cDybdZFk/edit" target="_blank" class="inline-flex items-center space-x-4 group">
                                <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">Selengkapnya</div>
                                <div class="p-2 transition border rounded-full border-slate-300 group-hover:border-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="17" y1="7" x2="7" y2="17"></line>
                                        <polyline points="8 7 17 7 17 16"></polyline>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
