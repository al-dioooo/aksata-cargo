<template>
    <Splide :options="{ type: 'loop', autoplay: true }" aria-label="Vue Splide Example">
        <template v-for="row in banners" :key="row">
            <SplideSlide>
                <img class="object-cover w-full" :src="row.url" alt="" />
            </SplideSlide>
        </template>
    </Splide>
</template>

<script setup>
    import { Splide, SplideSlide } from '@splidejs/vue-splide'
    import '@splidejs/vue-splide/css'

    const banners = [
        {
            url: '/img/banners/1.jpg'
        },
        {
            url: '/img/banners/2.jpg'
        },
        {
            url: '/img/banners/3.jpg'
        },
        {
            url: '/img/banners/4.jpg'
        }
    ]
</script>
