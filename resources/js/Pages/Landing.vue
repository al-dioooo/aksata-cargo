<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
</script>

<template>
    <GuestLayout>
        <!-- Hero Section -->
        <section class="relative flex items-center justify-center min-w-full min-h-screen pt-12 bg-slate-50">
            <div class="flex w-full max-w-6xl">
                <div class="flex flex-col justify-center w-1/2">
                    <h1 class="font-light text-8xl w-min">Aksata Cargo</h1>
                    <div class="flex flex-col mt-12 tracking-widest uppercase">
                        <span>Kirim cargo ke seluruh Indonesia.</span>
                        <span>Murah, aman, dan cepat.</span>
                    </div>
                </div>
                <div class="w-1/2 space-y-8">
                    <img class="object-cover w-full overflow-hidden rounded-3xl aspect-square" src="/storage/img/what-is-aksata-cargo.jpg" alt="" />
                    <div>
                        <p class="text-2xl font-medium">Title</p>
                        <p class="text-xs">Subtitle</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Superiority Bar -->
        <section class="flex justify-center min-w-full py-16">
            <div class="w-full max-w-6xl">
                <div class="flex flex-col items-center w-full">
                    <div class="text-xs tracking-widest uppercase">Why Us?</div>
                    <div>
                        <h1 class="text-4xl font-medium">Ship throughout Indonesia</h1>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-8 mt-24">
                    <!-- Fast Delivery -->
                    <div class="flex items-start space-x-4">
                        <div class="p-4 bg-white border ring ring-slate-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="7" cy="17" r="2"></circle>
                                <circle cx="17" cy="17" r="2"></circle>
                                <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                <line x1="3" y1="9" x2="7" y2="9"></line>
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-medium">Fast and Safe Delivery</h4>
                            <p>Armada sendiri menjadikan pengiriman cepat aman dan murah.</p>
                        </div>
                    </div>

                    <!-- Cash on Delivery -->
                    <div class="flex items-start space-x-4">
                        <div class="p-4 bg-white border ring ring-slate-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                                <line x1="12" y1="12" x2="20" y2="7.5"></line>
                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                <line x1="12" y1="12" x2="4" y2="7.5"></line>
                                <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-medium">Cash on Delivery</h4>
                            <p>Kemudahan pembayaran, biaya kirim dibayarkan setelah barang diterima.</p>
                        </div>
                    </div>

                    <!-- Reasonable Price -->
                    <div class="flex items-start space-x-4">
                        <div class="p-4 bg-white border ring ring-slate-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="9" y1="15" x2="15" y2="9"></line>
                                <circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
                                <circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
                                <path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-medium">Reasonable Price</h4>
                            <p>Harga kompetitif cenderung lebih murah dibanding competitor sejenis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="min-w-full bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="flex items-center w-full max-w-6xl">
                    <div class="w-1/2 p-16">
                        <img class="object-cover w-full overflow-hidden rounded-3xl aspect-square" src="/storage/img/what-is-aksata-cargo.jpg" alt="" />
                    </div>
                    <div class="w-1/2 p-16">
                        <div class="text-xs tracking-widest uppercase">About Us</div>
                        <div>
                            <h1 class="text-4xl font-medium w-max">What is Aksata Cargo?</h1>
                        </div>
                        <p class="mt-16 leading-loose">Aksata Cargo adalah perusahaan jasa cargo yang berdiri sejak 2019, dan telah berpengalaman dalam pendistribusian barang barang besar. Kepemilikan armada sendiri yang banyak, kami berfokus pada kecepatan, jaminan keamanan dalam pengiriman dan juga harga yang sangat kompetitif.</p>
                        <a href="/storage/pdf/al's-cv.pdf" target="_blank" class="flex items-center mt-8 space-x-4 group">
                            <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">Download PDF</div>
                            <div class="p-2 transition border rounded-full border-slate-300 group-hover:border-black">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="20" x2="20" y2="20"></line>
                                    <line x1="12" y1="14" x2="12" y2="4"></line>
                                    <line x1="12" y1="14" x2="16" y2="10"></line>
                                    <line x1="12" y1="14" x2="8" y2="10"></line>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section -->
        <section class="min-w-full py-16">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div class="text-xs tracking-widest uppercase">Services</div>
                    <div>
                        <h1 class="text-4xl font-medium w-max">It's not about limitations, it's something about we focused on.</h1>
                    </div>
                    <div class="grid grid-cols-3 gap-16 mt-24">
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
                            <h5 class="text-4xl font-medium">Land</h5>
                            <p>Freight forwarding services by land transportation.</p>
                            <div class="mt-8">
                                <ul class="mt-8 space-y-2 text-xl font-medium">
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>Pickup</div>
                                    </li>
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>Container</div>
                                    </li>
                                </ul>
                            </div>
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
                            <h5 class="text-4xl font-medium">Sea</h5>
                            <p>Freight forwarding services by sea transportation.</p>
                            <div class="mt-8">
                                <ul class="mt-8 space-y-2 text-xl font-medium">
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>Cargo</div>
                                    </li>
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>PELNI</div>
                                    </li>
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>Ro-Ro</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Sky -->
                        <div class="p-8 space-y-4 overflow-hidden bg-indigo-100 rounded-3xl">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z"></path>
                                </svg>
                            </div>
                            <h5 class="text-4xl font-medium">Sky</h5>
                            <p>Freight forwarding services by sky transportation.</p>
                            <div class="mt-8">
                                <ul class="mt-8 space-y-2 text-xl font-medium">
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>General Cargo</div>
                                    </li>
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>Special Shipment</div>
                                    </li>
                                    <li class="flex items-center space-x-4">
                                        <div class="w-4 border-t border-black"></div>
                                        <div>Specialized</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-16">
                        <inertia-link :href="route('service.index')" class="flex items-center space-x-4 group">
                            <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">More Services</div>
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
    </GuestLayout>
</template>
