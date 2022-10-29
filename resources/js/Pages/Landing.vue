<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import HeroCarousel from '@/Components/HeroCarousel.vue'
    import YoutubeCarousel from '@/Components/YoutubeCarousel.vue'
    import GuestTextInput from '@/Components/GuestTextInput.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
    import { ref } from '@vue/reactivity'

    const length = ref(null)
    const width = ref(null)
    const height = ref(null)

    const cubic = ref(0)
    const landAndSeaVolume = ref(0)
    const airVolume = ref(0)

    const submitHandler = (e) => {
        e.preventDefault()

        cubic.value = Math.ceil(length.value * width.value * height.value / 1000000)
        landAndSeaVolume.value = Math.ceil(length.value * width.value * height.value / 4000)
        airVolume.value = Math.ceil(length.value * width.value * height.value / 6000)
    }
</script>

<template>
    <GuestLayout>
        <!-- Hero Section -->
        <!-- <section class="relative flex items-center justify-center min-w-full bg-slate-50">
            <img class="object-cover w-full overflow-hidden aspect-cinema" src="/img/bg-main.jpg" alt="" />
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
                        <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-square" src="/img/bg-main.jpg" alt="" />
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
                            <inertia-link :href="route('shop.index')" class="inline-flex items-center space-x-4 group">
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
                        <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/img/service-jastip.jpg" alt="" />
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
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/img/team-management.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:mt-8 md:text-2xl">Management</h5>
                                <p class="text-xs md:text-base">Management kami terdiri dari tim yang telah berpengalaman dibidang usaha ekspedisi.</p>
                            </div>
                        </div>

                        <!-- Operational -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/img/team-operational.jpg" alt="" />
                            </div>
                            <div class="space-y-4">
                                <h5 class="mt-4 text-lg font-medium md:mt-8 md:text-2xl">Operational</h5>
                                <p class="text-xs md:text-base">Tim operasional didukung oleh tim yang telah berpengalaman telah mengirim jutaan kilo barang ke seluruh Indonesia.</p>
                            </div>
                        </div>

                        <!-- Armada -->
                        <div class="space-y-4">
                            <div>
                                <img class="object-cover w-full overflow-hidden bg-white border ring ring-slate-100 rounded-3xl aspect-video" src="/img/team-armada.jpg" alt="" />
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

        <!-- Check Section -->
        <section class="min-w-full bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl py-8 space-y-8 md:space-y-0 md:py-0 md:items-center md:flex">
                    <div class="w-full px-8 md:px-16 md:w-1/2 md:p-16">
                        <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Tool</div>
                        <div>
                            <h1 class="text-xl font-medium md:text-4xl w-max">Hitung Kubikasi</h1>
                        </div>
                        <form class="mt-8 text-xs" @submit="submitHandler">
                            <label for="">Dimensi</label>
                            <div class="grid grid-cols-3 gap-4 mt-1">
                                <div class="flex items-center">
                                    <GuestTextInput id="length" placeholder="L" v-model="length" type="number" class="block w-full text-xs" />
                                    <div class="flex items-center h-full px-2">cm</div>
                                </div>
                                <div class="flex items-center">
                                    <GuestTextInput id="length" placeholder="W" v-model="width" type="number" class="block w-full text-xs" />
                                    <div class="flex items-center h-full px-2">cm</div>
                                </div>
                                <div class="flex items-center">
                                    <GuestTextInput id="length" placeholder="H" v-model="height" type="number" class="block w-full text-xs" />
                                    <div class="flex items-center h-full px-2">cm</div>
                                </div>
                            </div>
                        </form>
                        <div class="mt-8">
                            <button @click="submitHandler" class="inline-flex items-center space-x-4 group">
                                <div class="underline transition decoration-slate-300 group-hover:decoration-black underline-offset-4">Hitung</div>
                                <div class="p-2 transition border rounded-full border-slate-300 group-hover:border-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="9 6 15 12 9 18"></polyline>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="w-full px-8 md:px-16 md:w-1/2 md:p-16">
                        <div class="p-8 space-y-8 overflow-hidden border rounded-3xl">
                            <div>
                                <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Kubikasi</div>
                                <div>
                                    <h1 class="text-lg font-medium md:text-2xl w-max">{{ cubic }} m&sup3;</h1>
                                </div>
                            </div>
                            <div>
                                <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Volume Darat dan Laut</div>
                                <div>
                                    <h1 class="text-lg font-medium md:text-2xl w-max">{{ landAndSeaVolume }} kg</h1>
                                </div>
                            </div>
                            <div>
                                <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Volume Udara</div>
                                <div>
                                    <h1 class="text-lg font-medium md:text-2xl w-max">{{ airVolume }} kg</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Youtube Section -->
        <!-- <section class="min-w-full py-8 bg-white">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl md:flex md:items-center">
                    <div class="w-full px-8 md:w-1/2 md:px-16 md:p-16">
                        <youtube-carousel />
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Instagram Section -->
        <section class="min-w-full py-8 border-t bg-slate-100">
            <div class="flex justify-center w-full">
                <div class="w-full max-w-6xl md:flex md:items-center">
                    <div class="grid w-full grid-cols-3 gap-24 px-8 md:px-16 md:p-16">
                        <blockquote class="bg-white" data-instgrm-permalink="https://www.instagram.com/tv/CjijwGLrxQ1/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14">
                            <div style="padding: 16px">
                                <a href="https://www.instagram.com/tv/CjijwGLrxQ1/?utm_source=ig_embed&amp;utm_campaign=loading" style="background: #ffffff; line-height: 0; padding: 0 0; text-align: center; text-decoration: none; width: 100%" target="_blank">
                                    <div style="display: flex; flex-direction: row; align-items: center">
                                        <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px"></div>
                                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center">
                                            <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px"></div>
                                            <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px"></div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0"></div>
                                    <div style="display: block; height: 50px; margin: 0 auto 12px; width: 50px">
                                        <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div style="padding-top: 8px"><div style="color: #3897f0; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: 550; line-height: 18px">View this post on Instagram</div></div>
                                    <div style="padding: 12.5% 0"></div>
                                    <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center">
                                        <div>
                                            <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px)"></div>
                                            <div style="background-color: #f4f4f4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px"></div>
                                            <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px)"></div>
                                        </div>
                                        <div style="margin-left: 8px">
                                            <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px"></div>
                                            <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                        </div>
                                        <div style="margin-left: auto">
                                            <div style="width: 0px; border-top: 8px solid #f4f4f4; border-right: 8px solid transparent; transform: translateY(16px)"></div>
                                            <div style="background-color: #f4f4f4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px)"></div>
                                            <div style="width: 0; height: 0; border-top: 8px solid #f4f4f4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px)"></div>
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px">
                                        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px"></div>
                                        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px"></div></div
                                ></a>
                                <p style="color: #c9c8cd; font-family: Arial, sans-serif; font-size: 14px; line-height: 17px; margin-bottom: 0; margin-top: 8px; overflow: hidden; padding: 8px 0 7px; text-align: center; text-overflow: ellipsis; white-space: nowrap"><a href="https://www.instagram.com/tv/CjijwGLrxQ1/?utm_source=ig_embed&amp;utm_campaign=loading" style="color: #c9c8cd; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px; text-decoration: none" target="_blank">A post shared by Aksata Cargo (@aksatacargo)</a></p>
                            </div>
                        </blockquote>

                        <blockquote class="bg-white" data-instgrm-permalink="https://www.instagram.com/p/CjexCcfhhjJ/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14">
                            <div style="padding: 16px">
                                <a href="https://www.instagram.com/p/CjexCcfhhjJ/?utm_source=ig_embed&amp;utm_campaign=loading" style="background: #ffffff; line-height: 0; padding: 0 0; text-align: center; text-decoration: none; width: 100%" target="_blank">
                                    <div style="display: flex; flex-direction: row; align-items: center">
                                        <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px"></div>
                                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center">
                                            <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px"></div>
                                            <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px"></div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0"></div>
                                    <div style="display: block; height: 50px; margin: 0 auto 12px; width: 50px">
                                        <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div style="padding-top: 8px"><div style="color: #3897f0; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: 550; line-height: 18px">View this post on Instagram</div></div>
                                    <div style="padding: 12.5% 0"></div>
                                    <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center">
                                        <div>
                                            <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px)"></div>
                                            <div style="background-color: #f4f4f4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px"></div>
                                            <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px)"></div>
                                        </div>
                                        <div style="margin-left: 8px">
                                            <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px"></div>
                                            <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                        </div>
                                        <div style="margin-left: auto">
                                            <div style="width: 0px; border-top: 8px solid #f4f4f4; border-right: 8px solid transparent; transform: translateY(16px)"></div>
                                            <div style="background-color: #f4f4f4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px)"></div>
                                            <div style="width: 0; height: 0; border-top: 8px solid #f4f4f4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px)"></div>
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px">
                                        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px"></div>
                                        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px"></div></div
                                ></a>
                                <p style="color: #c9c8cd; font-family: Arial, sans-serif; font-size: 14px; line-height: 17px; margin-bottom: 0; margin-top: 8px; overflow: hidden; padding: 8px 0 7px; text-align: center; text-overflow: ellipsis; white-space: nowrap"><a href="https://www.instagram.com/p/CjexCcfhhjJ/?utm_source=ig_embed&amp;utm_campaign=loading" style="color: #c9c8cd; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px; text-decoration: none" target="_blank">A post shared by Aksata Cargo (@aksatacargo)</a></p>
                            </div>
                        </blockquote>

                        <blockquote class="bg-white" data-instgrm-permalink="https://www.instagram.com/p/CjXRPKtOtyQ/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14">
                            <div style="padding: 16px">
                                <a href="https://www.instagram.com/p/CjXRPKtOtyQ/?utm_source=ig_embed&amp;utm_campaign=loading" style="background: #ffffff; line-height: 0; padding: 0 0; text-align: center; text-decoration: none; width: 100%" target="_blank">
                                    <div style="display: flex; flex-direction: row; align-items: center">
                                        <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px"></div>
                                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center">
                                            <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px"></div>
                                            <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px"></div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0"></div>
                                    <div style="display: block; height: 50px; margin: 0 auto 12px; width: 50px">
                                        <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div style="padding-top: 8px"><div style="color: #3897f0; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: 550; line-height: 18px">View this post on Instagram</div></div>
                                    <div style="padding: 12.5% 0"></div>
                                    <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center">
                                        <div>
                                            <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px)"></div>
                                            <div style="background-color: #f4f4f4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px"></div>
                                            <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px)"></div>
                                        </div>
                                        <div style="margin-left: 8px">
                                            <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px"></div>
                                            <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                        </div>
                                        <div style="margin-left: auto">
                                            <div style="width: 0px; border-top: 8px solid #f4f4f4; border-right: 8px solid transparent; transform: translateY(16px)"></div>
                                            <div style="background-color: #f4f4f4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px)"></div>
                                            <div style="width: 0; height: 0; border-top: 8px solid #f4f4f4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px)"></div>
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px">
                                        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px"></div>
                                        <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px"></div></div
                                ></a>
                                <p style="color: #c9c8cd; font-family: Arial, sans-serif; font-size: 14px; line-height: 17px; margin-bottom: 0; margin-top: 8px; overflow: hidden; padding: 8px 0 7px; text-align: center; text-overflow: ellipsis; white-space: nowrap"><a href="https://www.instagram.com/p/CjXRPKtOtyQ/?utm_source=ig_embed&amp;utm_campaign=loading" style="color: #c9c8cd; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px; text-decoration: none" target="_blank">A post shared by Aksata Cargo (@aksatacargo)</a></p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
