<script setup>
    import { ref } from 'vue'
    import { Inertia } from '@inertiajs/inertia'
    import { Link, useForm } from '@inertiajs/inertia-vue3'
    import ActionMessage from '@/Components/ActionMessage.vue'
    import FormSection from '@/Components/FormSection.vue'
    import InputError from '@/Components/InputError.vue'
    import InputLabel from '@/Components/InputLabel.vue'
    import PrimaryButton from '@/Components/PrimaryButton.vue'
    import SecondaryButton from '@/Components/SecondaryButton.vue'
    import TextInput from '@/Components/TextInput.vue'
    import Textarea from '@/Components/Textarea.vue'
    import ImageInput from '@/Components/ImageInput.vue'

    const props = defineProps({
        user: Object,
    })

    const form = useForm({
        name: props.user.name,
        email: props.user.email,
        photo: null,
    })

    const verificationLinkSent = ref(null)
    const photoPreview = ref(null)
    const photoInput = ref(null)

    const updateProfileInformation = () => {
        if (photoInput.value) {
            form.photo = photoInput.value.files[0]
        }

        form.post(route('user-profile-information.update'), {
            errorBag: 'updateProfileInformation',
            preserveScroll: true,
            onSuccess: () => clearPhotoFileInput(),
        })
    }

    const sendEmailVerification = () => {
        verificationLinkSent.value = true
    }

    const selectNewPhoto = () => {
        photoInput.value.click()
    }

    const updatePhotoPreview = () => {
        const photo = photoInput.value.files[0]

        if (!photo) return

        const reader = new FileReader()

        reader.onload = (e) => {
            photoPreview.value = e.target.result
        }

        reader.readAsDataURL(photo)
    }

    const deletePhoto = () => {
        Inertia.delete(route('current-user-photo.destroy'), {
            preserveScroll: true,
            onSuccess: () => {
                photoPreview.value = null
                clearPhotoFileInput()
            },
        })
    }

    const clearPhotoFileInput = () => {
        if (photoInput.value?.value) {
            photoInput.value.value = null
        }
    }
</script>

<template>
    <FormSection @submitted="updateProfileInformation">
        <template #title>Post Information</template>

        <template #description>Post's main information like title, subtitle, content, category, etc. </template>

        <template #form>
            <!-- Cover -->
            <div class="col-span-6">
                <InputLabel for="cover" value="Cover" />
                <ImageInput class="mt-1 aspect-cinema" name="cover" id="cover" />
                <InputError :message="form.errors.cover" class="mt-2" />
            </div>

            <!-- Title -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="title" value="Title" />
                <TextInput id="title" v-model="form.title" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.title" class="mt-2" />
            </div>

            <!-- Subtitle -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="subtitle" value="Subtitle" />
                <TextInput id="subtitle" v-model="form.subtitle" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.subtitle" class="mt-2" />
            </div>

            <!-- Category -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="category" value="Category" />
                <TextInput id="category" v-model="form.category" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.category" class="mt-2" />
            </div>

            <!-- Tag -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="tag" value="Tag" />
                <TextInput id="tag" v-model="form.tag" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.tag" class="mt-2" />
            </div>

            <!-- Content -->
            <div class="col-span-6">
                <InputLabel for="content" value="Content" />
                <Textarea id="content" v-model="form.content" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.content" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </ActionMessage>

            <div class="flex items-center space-x-2">
                <SecondaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Draft</SecondaryButton>

                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Publish</PrimaryButton>
            </div>
        </template>
    </FormSection>
</template>
