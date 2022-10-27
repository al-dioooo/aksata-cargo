<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
</script>

<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">About Us</h1>
            </div>
        </section>

        <!-- About Section -->
        <section class="min-w-full px-8 py-8 bg-white px:0 md:py-16">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div>
                        <h1 class="text-xl font-medium md:text-4xl w-max">Tentang Kami</h1>
                    </div>
                    <div class="mt-8">
                        <p class="text-xs leading-relaxed md:text-base">Kami adalah perusahaan spesialis jasa pengiriman & titipan barang di Indonesia. Kami melayani jasa kirim barang murah via darat, laut dan udara. Dengan tim yang telah berpengalaman melayani ratusan customer terpilih dari Sabang sampai Merauke. kami bisa diandalkan untuk semua pengiriman barang yang anda butuhkan. Jangan ragu untuk menghubungi Tim kami untuk membantu pengiriman anda dengan sepenuh hati.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="min-w-full px-8 py-8 bg-white md:px-0 md:py-16">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div>
                        <h1 class="text-xl font-medium md:text-4xl w-max">Our Team</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-3 md:mt-16">
                        <!-- Management -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/img/team-management.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl">Management</h5>
                                <p class="text-xs">Management kami terdiri dari tim yang telah berpengalaman dibidang usaha ekspedisi.</p>
                            </div>
                        </div>

                        <!-- Operational -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/img/team-operational.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl">Operational</h5>
                                <p class="text-xs">Tim operasional didukung oleh tim yang telah berpengalaman telah mengirim jutaan kilo barang ke seluruh Indonesia.</p>
                            </div>
                        </div>

                        <!-- Armada -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/img/team-armada.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl">Armada</h5>
                                <p class="text-xs">Kami memlilki armada yang dapat menjangkau hingga wilayah timur Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
