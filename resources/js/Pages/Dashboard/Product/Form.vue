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
    import ImageInput from '@/Components/ImageInput.vue'
    import axios from 'axios'

    const props = defineProps({
        categories: Object,
        product: Object
    })

    const form = useForm({
        photo: null,
        name: props.product?.name ?? undefined,
        slug: props.product?.slug ?? undefined,
        description: props.product?.description ?? undefined,
        category_id: props.product?.category_id ?? undefined,
        status: props.post?.status ?? 'published'
    })

    const isLoading = ref(false)

    const submitHandler = () => {
        if (props.post) {
            form.put(route('dashboard.product.update', { product: props.product }), {
                errorBag: 'updateProduct'
            })
        } else {
            form.post(route('dashboard.product.store'), {
                errorBag: 'storeProduct'
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
        <template #title>Product Information</template>

        <template #description>Product's main information like name, description, category, etc.</template>

        <template #form>
            <!-- Photo -->
            <div class="col-span-3">
                <InputLabel for="photo" value="Photo" />
                <ImageInput :src="product?.photo" v-model="form.photo" class="mt-1 aspect-product-thumbnail" name="photo" id="photo" />
                <InputError :message="form.errors.photo" class="mt-2" />
            </div>

            <div class="col-span-3 space-y-4">
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

                <!-- Description -->
                <div class="col-span-6 sm:col-span-3">
                    <InputLabel for="description" value="Description" />
                    <TextInput id="description" v-model="form.description" type="text" class="block w-full mt-1" />
                    <InputError :message="form.errors.description" class="mt-2" />
                </div>

                <!-- Category -->
                <div class="col-span-6 sm:col-span-3">
                    <InputLabel for="category_id" value="Category" />
                    <select name="category_id" id="category_id" v-model="form.category_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <template v-for="row in categories" :key="row">
                            <option :value="row.id" :selected="row.id === product?.category_id">{{ row.name }}</option>
                        </template>
                    </select>
                    <InputError :message="form.errors.category_id" class="mt-2" />
                </div>
            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="mr-3">Saved.</ActionMessage>

            <div class="flex items-center space-x-2">
                <SecondaryButton v-if="!props.product || form.status === 'published'" type="submit" @click="form.status = 'draft'" :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Draft</SecondaryButton>
                <SecondaryButton v-if="props.product && form.status === 'draft'" type="submit" @click="form.status = 'published'" :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Publish</SecondaryButton>

                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Save</PrimaryButton>
            </div>
        </template>
    </FormSection>
</template>
