<template>
    <GuestLayout>
        <!-- Page Title Section -->
        <section class="relative flex items-center justify-center min-w-full border-b topography">
            <div class="max-w-6xl p-16 md:p-24">
                <h1 class="text-xl font-medium md:text-4xl">Shop</h1>
            </div>
        </section>

        <!-- Product List Section -->
        <section class="min-w-full px-8 py-8 bg-white md:px-0 md:py-16">
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-full max-w-6xl">
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                        <!-- Product -->
                        <template v-for="row in products" :key="row">
                            <div class="space-y-2">
                                <div>
                                    <img class="object-cover w-full overflow-hidden bg-white rounded-xl aspect-[4/5]" :src="row.imageSrc" :alt="row.imageAlt" />
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between w-full text-xs md:text-sm">
                                        <h5>{{ row.name }}</h5>
                                        <h5 class="font-medium">{{ row.price }}</h5>
                                    </div>
                                    <a :href="`https://wa.me/628973130809?text=Permisi, Saya ingin memesan ${row.name}`" target="_blank" class="flex justify-center w-full px-4 py-2 text-xs bg-blue-100 rounded-xl"> Order on WhatsApp </a>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'

    const products = [
        {
            id: 1,
            name: 'Basic Tee',
            href: '#',
            imageSrc: 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg',
            imageAlt: "Front of men's Basic Tee in black.",
            price: '$35',
            color: 'Black',
        }
    ]
</script>
