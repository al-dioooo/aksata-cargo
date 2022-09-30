<script setup>
    import NavigationBar from '@/Components/NavigationBar.vue'
    import ContactFloating from '@/Components/ContactFloating.vue'
    import GoUpFloating from '@/Components/GoUpFloating.vue'
    import Footer from '@/Components/Footer.vue'
</script>

<template>
    <NavigationBar />
    <div>
        <slot />
    </div>
    <GoUpFloating />
    <ContactFloating />
    <Footer />
</template>
