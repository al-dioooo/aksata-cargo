<script setup>
    import { ref } from "@vue/reactivity"
    import { watch } from "@vue/runtime-core"

    const props = defineProps({
        src: {
            type: String,
            default: `https://placehold.co/900x900/e2e8f0/f1f5f9?font=source-sans-pro&text=Upload%20image%20here`
        },
        name: {
            type: String,
            default: "Picture"
        },
        id: {
            type: String,
            default: "Picture"
        }
    })

    const emits = defineEmits(['update:modelValue'])

    const imageFile = ref('')
    const imageUrl = ref(props.src)

    const updatePreview = (e) => {
        emits('update:modelValue', e.target.files[0])

        if (e.target.files.length !== 0) {
            imageFile.value = e.target.files[0]

            console.log(imageFile)
        }
    }

    watch(imageFile, (newImageFile, oldImageFile) => {
        let fileReader = new FileReader()

        fileReader.readAsDataURL(imageFile.value)

        fileReader.addEventListener('load', () => {
            imageUrl.value = fileReader.result
        })
    })
</script>

<template>
    <div class="relative">
        <img ref="preview" id="preview" class="object-cover w-full h-full rounded-md bg-neutral200" :src="imageUrl" alt="" />
        <label :for="id" class="absolute inset-0 flex items-center justify-center w-full cursor-pointer group">
            <div class="px-4 py-2 text-sm font-semibold text-gray-700 transition bg-white border border-gray-300 rounded-lg shadow-sm pointer-events-none bg-opacity-70 group-hover:bg-opacity-90 group-active:border-indigo-300 group-active:ring group-active:ring-indigo-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition transform group-active:scale-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
        </label>
        <input type="file" :name="name" :id="id" class="hidden" accept="image/*" v-on:change="updatePreview" />
    </div>
</template>
