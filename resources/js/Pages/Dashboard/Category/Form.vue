<script setup>
    import { ref } from 'vue'
    import { Inertia } from '@inertiajs/inertia'
    import { Link, useForm } from '@inertiajs/inertia-vue3'
    import ActionMessage from '@/Components/ActionMessage.vue'
    import FormSection from '@/Components/FormSection.vue'
    import InputError from '@/Components/InputError.vue'
    import InputLabel from '@/Components/InputLabel.vue'
    import PrimaryButton from '@/Components/PrimaryButton.vue'
    import TextInput from '@/Components/TextInput.vue'
    import Textarea from '@/Components/Textarea.vue'
    import ImageInput from '@/Components/ImageInput.vue'
    import axios from 'axios'

    const props = defineProps({
        category: Object
    })

    const form = useForm({
        name: props.category?.name ?? undefined,
        slug: props.category?.slug ?? undefined,
    })

    const isLoading = ref(false)

    const submitHandler = () => {
        if (props.category) {
            form.put(route('dashboard.category.update', props.category), {
                errorBag: 'updatePost'
            })
        } else {
            form.post(route('dashboard.category.store'), {
                errorBag: 'storePost'
            })
        }
    }

    const updateSlug = () => {
        isLoading.value = true

        axios.get(route('api.slug', { text: form.name })).then((res) => {
            form.slug = res.data
            isLoading.value = false
        }).catch((error) => {
            console.log(`Update slug error: `, error)
            isLoading.value = false
        })
    }
</script>

<template>
    <FormSection @submitted="submitHandler">
        <template #title>Category Information</template>

        <template #description>Category's main information like name, and slug.</template>

        <template #form>
            <!-- Name -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="name" value="Name" />
                <TextInput @change="updateSlug" id="name" v-model="form.name" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Slug -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="slug" value="Slug" />
                <TextInput id="slug" v-model="form.slug" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.slug" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="mr-3">Saved.</ActionMessage>

            <div class="flex items-center space-x-2">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Save</PrimaryButton>
            </div>
        </template>
    </FormSection>
</template>
