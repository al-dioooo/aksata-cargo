<script setup>
    const year = new Date().getFullYear()
</script>


<template>
    <footer class="flex justify-center w-full min-w-full text-xs border-t">
        <div class="flex w-full max-w-6xl py-10">
            <div>
                &copy; {{ year }} Aksata Cargo. All Rights Reserved.
            </div>
        </div>
    </footer>
</template>
