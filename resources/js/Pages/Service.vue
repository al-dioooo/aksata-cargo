<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
</script>

<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">Services</h1>
            </div>
        </section>

        <!-- Team Section -->
        <section class="min-w-full px-8 py-8 bg-white md:px-0 md:py-16">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div>
                        <h1 class="text-xl font-medium md:text-4xl w-max">Layanan Kami</h1>
                    </div>
                    <div class="mt-8 space-y-16 md:mt-24">
                        <!-- Service Cargo Darat -->
                        <div class="space-y-2 md:space-y-4">
                            <div>
                                <img class="object-cover overflow-hidden bg-white md:max-w-lg rounded-3xl aspect-video" src="/img/cargo-land.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl md:mt-8">Service Cargo Darat</h5>
                                <p class="text-xs md:text-base">Kami melayani pengiriman cargo via darat. Barang-Barang Dangerous Good yang tidak bisa diangkut via pesawat. Anda yang membutuhkan biaya murah untuk pengiriman barang-barang dengan jumlah banyak atau berdimensi besar.</p>
                            </div>
                        </div>

                        <!-- Service Cargo Laut -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover overflow-hidden bg-white md:max-w-lg rounded-3xl aspect-video" src="/img/cargo-sea.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl md:mt-8">Service Cargo Laut</h5>
                                <p class="text-xs md:text-base">Pengiriman melalu Laut menjadi pilihan ketika biaya dan waktu bukan menjadi prioritas utama atau mengirimkan barang- barang Dangerous Good yang tidak bisa diangkut via pesawat, namun tetap memperhatikan faktor keamanan dari barang kiriman untuk sampai ke lokasi tujuan dengan baik.</p>
                            </div>
                        </div>

                        <!-- Service Cargo Udara -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover overflow-hidden bg-white md:max-w-lg rounded-3xl aspect-video" src="/img/cargo-plane.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl md:mt-8">Service Cargo Udara</h5>
                                <p class="text-xs md:text-base">Jasa Cargo Udara menjadi salah satu alternatif yang dapat digunakan untuk proses pengiriman dengan cepat. Barang anda akan sampai di tempat tujuan walaupun terpisah oleh lautan dan pulau.</p>
                            </div>
                        </div>

                        <!-- Jasa Titip Beli -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover overflow-hidden bg-white md:max-w-lg rounded-3xl aspect-video" src="/img/service-jastip.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl md:mt-8">Jasa Titip</h5>
                                <p class="text-xs md:text-base">Kami membantu memperluas usaha anda bagi yang memiliki produk/barang untuk menawarkan kepada konsumen yang membutuhkan dan membantu konsumen untuk mencarikan produk/barang yang dibutuhkan. Sangat efektif, efisien, hemat dan lebih</p>
                            </div>
                        </div>

                        <!-- Cargo Pindahan & Alat Berat -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover overflow-hidden bg-white md:max-w-lg rounded-3xl aspect-video" src="/img/cargo-truck.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:text-2xl md:mt-8">Cargo Pindahan & Alat Berat</h5>
                                <p class="text-xs md:text-base">Kami melayani pengiriman cargo bagi Anda yang membutuhkan biaya murah untuk pengirman barang-barang dengan jumlah banyak atau berdimensi besar. Melayani sewa Truk, dll.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
