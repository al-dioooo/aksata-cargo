<template>
    <Splide :options="{ rewind: true }" aria-label="Vue Splide Example">
        <SplideSlide>
            <iframe class="w-full overflow-hidden rounded-3xl aspect-video" src="https://www.youtube.com/embed/migPqv1MKH0" title="aesthetic macbook air m2 (starlight) unboxing + setup ✨" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </SplideSlide>
        <SplideSlide>
            <iframe class="w-full overflow-hidden rounded-3xl aspect-video" src="https://www.youtube.com/embed/migPqv1MKH0" title="aesthetic macbook air m2 (starlight) unboxing + setup ✨" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </SplideSlide>
    </Splide>
</template>

<script>
    import { Splide, SplideSlide } from '@splidejs/vue-splide';
    import { defineComponent } from 'vue';
    import '@splidejs/vue-splide/css';

    export default defineComponent({
        components: { Splide, SplideSlide },
    });
</script>
