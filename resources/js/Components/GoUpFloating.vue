<script setup>
    const scrollTop = () => {
        window.scrollTo(0, 0)
    }
</script>


<template>
    <div class="fixed inset-0 flex items-end p-8 pointer-events-none">
        <button @click="scrollTop" class="p-2 text-xs rounded-full pointer-events-auto bg-neutral-800 text-neutral-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="6 15 12 9 18 15"></polyline>
            </svg>
        </button>
    </div>
</template>
