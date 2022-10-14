<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import HeroCarousel from '@/Components/HeroCarousel.vue'
    import YoutubeCarousel from '@/Components/YoutubeCarousel.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
</script>

<template>
    <GuestLayout>
        <!-- Hero Section -->
        <!-- <section class="relative flex items-center justify-center min-w-full bg-slate-50">
            <img class="object-cover w-full overflow-hidden aspect-cinema" src="/storage/img/bg-main.jpg" alt="" />
        </section> -->
        <hero-carousel />

        <!-- Superiority Bar -->
        <section class="flex justify-center min-w-full py-8 bg-white md:py-16">
            <div class="w-full max-w-6xl">
                <div class="flex flex-col items-center w-full">
                    <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Aksata Cargo</div>
                    <div>
                        <h1 class="text-xl font-medium md:text-4xl">Jagonya Cargo Indonesia Timur</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="min-w-full bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl py-8 space-y-8 md:space-y-0 md:py-0 md:items-center md:flex">
                    <div class="w-full px-8 md:px-16 md:p-16 md:w-1/2">
                        <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-square" src="/storage/img/bg-main.jpg" alt="" />
                    </div>
                    <div class="w-full px-8 md:px-16 md:p-16 md:w-1/2">
                        <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">About Us</div>
                        <div>
                            <h1 class="text-xl font-medium md:text-4xl">Aksata Cargo</h1>
                        </div>
                        <p class="mt-8 leading-loose">Kami adalah perusahaan spesialis jasa pengiriman & titipan barang di Indonesia. Kami melayani jasa kirim barang murah via darat, laut dan udara. Dengan tim yang telah berpengalaman melayani ratusan customer terpilih dari Sabang sampai Merauke. kami bisa diandalkan untuk semua pengiriman barang yang anda butuhkan. Jangan ragu untuk menghubungi Tim kami untuk membantu pengiriman anda dengan sepenuh hati.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section -->
        <section class="min-w-full px-8 py-8 bg-white md:py-16 md:px-0">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Services</div>
                    <div>
                        <h1 class="text-xl font-medium md:text-4xl w-max">Layanan Kami</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-24 md:grid-cols-4">
                        <!-- Land -->
                        <div class="p-8 space-y-4 overflow-hidden bg-orange-100 rounded-3xl">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="7" cy="17" r="2"></circle>
                                    <circle cx="17" cy="17" r="2"></circle>
                                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                </svg>
                            </div>
                            <h5 class="text-lg font-medium md:text-2xl">Cargo Darat</h5>
                            <p class="text-xs md:text-base">Berbagai keperluan pengiriman kargo via darat.</p>
                        </div>

                        <!-- Sea -->
                        <div class="p-8 space-y-4 overflow-hidden bg-blue-100 rounded-3xl">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M2 20a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1"></path>
                                    <path d="M4 18l-1 -5h18l-2 4"></path>
                                    <path d="M5 13v-6h8l4 6"></path>
                                    <path d="M7 7v-4h-1"></path>
                                </svg>
                            </div>
                            <h5 class="text-lg font-medium md:text-2xl">Cargo Laut</h5>
                            <p class="text-xs md:text-base">Berbagai keperluan pengiriman kargo via laut.</p>
                        </div>

                        <!-- Sky -->
                        <div class="p-8 space-y-4 overflow-hidden bg-indigo-100 rounded-3xl">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z"></path>
                                </svg>
                            </div>
                            <h5 class="text-lg font-medium md:text-2xl">Cargo Udara</h5>
                            <p class="text-xs md:text-base">Berbagai keperluan pengiriman kargo via udara.</p>
                        </div>

                        <!-- Project Cargo -->
                        <div class="p-8 space-y-4 overflow-hidden bg-green-100 rounded-3xl">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                                    <line x1="12" y1="12" x2="20" y2="7.5"></line>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                    <line x1="12" y1="12" x2="4" y2="7.5"></line>
                                </svg>
                            </div>
                            <h5 class="text-lg font-medium md:text-2xl">Cargo Pindahan & Alat Berat</h5>
                            <p class="text-xs md:text-base">Jasa pindahan & pengiriman Cargo ke berbagai tempat dalam jumlah besar dengan biaya minimal.</p>
                        </div>
                    </div>
                    <div class="flex justify-center mt-8 md:mt-16">
                        <inertia-link :href="route('service.index')" class="flex items-center space-x-4 group">
                            <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">Selengkapnya</div>
                            <div class="p-2 transition border rounded-full border-slate-300 group-hover:border-black">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="17" y1="7" x2="7" y2="17"></line>
                                    <polyline points="8 7 17 7 17 16"></polyline>
                                </svg>
                            </div>
                        </inertia-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Service Section -->
        <section class="min-w-full bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl py-8 space-y-8 md:space-y-0 md:py-0 md:items-center md:flex">
                    <div class="w-full px-8 md:px-16 md:w-1/2 md:p-16">
                        <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Additional Services</div>
                        <div>
                            <h1 class="text-xl font-medium md:text-4xl w-max">Jasa Titip</h1>
                        </div>
                        <div class="mt-8">
                            <p>Beli apapun di pusat perbelanjaan terlengkap</p>
                        </div>
                        <div class="mt-8">
                        <inertia-link :href="route('shop.index')" class="flex items-center space-x-4 group">
                            <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">Selengkapnya</div>
                            <div class="p-2 transition border rounded-full border-slate-300 group-hover:border-black">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="17" y1="7" x2="7" y2="17"></line>
                                    <polyline points="8 7 17 7 17 16"></polyline>
                                </svg>
                            </div>
                        </inertia-link>
                    </div>
                    </div>
                    <div class="w-full px-8 md:px-16 md:w-1/2 md:p-16">
                        <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/storage/img/service-jastip.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="min-w-full px-8 py-8 bg-white md:py-16 md:px-0">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Teams</div>
                    <div>
                        <h1 class="text-xl font-medium md:text-4xl w-max">Our Team</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-3 md:mt-24">
                        <!-- Management -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/storage/img/team-management.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:mt-8 md:text-2xl">Management</h5>
                                <p class="text-xs md:text-base">Management kami terdiri dari tim yang telah berpengalaman dibidang usaha ekspedisi.</p>
                            </div>
                        </div>

                        <!-- Operational -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/storage/img/team-operational.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:mt-8 md:text-2xl">Operational</h5>
                                <p class="text-xs md:text-base">Tim operasional didukung oleh tim yang telah berpengalaman telah mengirim jutaan kilo barang ke seluruh Indonesia.</p>
                            </div>
                        </div>

                        <!-- Armada -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/storage/img/team-armada.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:mt-8 md:text-2xl">Armada</h5>
                                <p class="text-xs md:text-base">Kami memlilki armada yang dapat menjangkau hingga wilayah timur Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Youtube Section -->
        <section class="min-w-full py-8 bg-white">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl md:flex md:items-center">
                    <div class="w-full px-8 md:w-1/2 md:px-16 md:p-16">
                        <youtube-carousel />
                    </div>
                    <div class="w-full px-8 md:w-1/2 md:px-16 md:p-16">
                        <!-- <div class="text-xs tracking-widest uppercase">Additional Services</div>
                        <div>
                            <h1 class="text-4xl font-medium w-max">Aksata Jastip</h1>
                        </div>
                        <div class="mt-8">
                            <p>Beli apapun di pusat perbelanjaan terlengkap</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
