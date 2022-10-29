<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import { InertiaLink, useForm } from '@inertiajs/inertia-vue3'
    import InputError from '@/Components/InputError.vue'
    import InputLabel from '@/Components/InputLabel.vue'
    import GuestTextInput from '@/Components/GuestTextInput.vue'
    import GuestTextarea from '@/Components/GuestTextarea.vue'

    const form = useForm({
        name: null,
        email: null,
        phone: null,
        receipt: null,
        message: null
    })

    const submitHandler = () => {
        form.post(route('message'), {
            errorBag: 'sendMessage'
        })
    }
</script>

<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">Contact Us</h1>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="min-w-full py-8 md:py-0 bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="flex flex-col-reverse w-full max-w-6xl md:flex-row md:items-center">
                    <div class="w-full px-8 md:w-1/2 md:px-16 md:p-16">
                        <iframe class="object-cover w-full mt-8 overflow-hidden bg-white border md:mt-0 ring ring-slate-100 rounded-3xl aspect-square" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.607267662712!2d106.8164587!3d-6.1438887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x260d65e70008f908!2sAksata%20Cargo!5e0!3m2!1sen!2sid!4v1666124666197!5m2!1sen!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w-full px-8 md:w-1/2 md:px-16 md:p-16">
                        <div class="text-[0.5rem] md:text-xs tracking-widest uppercase">Contact Us</div>
                        <div>
                            <h1 class="text-xl font-medium md:text-4xl w-max">Let's Get in Touch</h1>
                        </div>
                        <div class="mt-16 space-y-4">
                            <a href="http://g.co/kgs/VUaC2Y" target="_blank" class="flex space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="11" r="3"></circle>
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                    </svg>
                                </div>
                                <div class="text-xs md:text-base">Gedung Murata Lantai 2, Ruko Glodok Plaza, Mangga Besar, Kec. Taman Sari, Daerah Khusus Ibukota Jakarta 11180</div>
                            </a>

                            <a href="mailto:info@aksatacargo.id" target="_blank" class="flex space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                        <polyline points="3 7 12 13 21 7"></polyline>
                                    </svg>
                                </div>
                                <div class="text-xs md:text-base">info@aksatacargo.id</div>
                            </a>

                            <a href="https://instagram.com/aksatacargo" target="_blank" class="flex space-x-4">
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

                            <a href="https://facebook.com/aksatacargo" target="_blank" class="flex space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                    </svg>
                                </div>
                                <div class="text-xs md:text-base">aksatacargo</div>
                            </a>

                            <a href="https://wa.me/628973130809" target="_blank" class="flex space-x-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                                    </svg>
                                </div>
                                <div>+62 897-3130-809</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Section -->
        <section class="min-w-full py-8 md:py-16 bg-slate-50">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-lg px-8 space-y-8 md:space-y-16 md:px-0 md:items-center">
                    <div>
                        <h1 class="text-xl font-medium md:text-4xl w-max">Send Message</h1>
                    </div>
                    <form class="w-full space-y-8 text-xs" @submit.prevent="submitHandler">
                        <div class="space-y-4">
                            <div>
                                <InputLabel for="name" value="Name" />
                                <GuestTextInput id="name" v-model="form.name" type="text" class="block w-full mt-1" />
                                <InputError :message="form.errors.name" class="mt-2" />
                            </div>

                            <div>
                                <InputLabel for="email" value="Email" />
                                <GuestTextInput id="email" v-model="form.email" type="text" class="block w-full mt-1" />
                                <InputError :message="form.errors.email" class="mt-2" />
                            </div>

                            <div>
                                <InputLabel for="phone" value="Phone" />
                                <GuestTextInput id="phone" v-model="form.phone" type="text" class="block w-full mt-1" />
                                <InputError :message="form.errors.phone" class="mt-2" />
                            </div>

                            <div>
                                <InputLabel for="receipt" value="Receipt (Resi)" />
                                <GuestTextInput id="receipt" v-model="form.receipt" type="text" class="block w-full mt-1" />
                                <InputError :message="form.errors.receipt" class="mt-2" />
                            </div>

                            <div>
                                <InputLabel for="message" value="Message" />
                                <GuestTextarea id="message" v-model="form.message" class="block w-full mt-1" />
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <button class="flex justify-center w-full px-4 py-2 text-lg transition bg-blue-100 rounded-full hover:bg-blue-200">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
