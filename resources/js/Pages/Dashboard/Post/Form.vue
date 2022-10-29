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
    import axios from 'axios'

    const submitButton = ref(null)

    const props = defineProps({
        categories: Object,
        post: Object
    })

    const form = useForm({
        cover: null,
        title: props.post?.title ?? undefined,
        slug: props.post?.slug ?? undefined,
        subtitle: props.post?.subtitle ?? undefined,
        category_id: props.post?.category_id ?? undefined,
        content: props.post?.content ?? undefined,
        status: props.post?.status ?? 'published'
    })

    const isLoading = ref(false)

    const submitHandler = () => {
        if (props.post) {
            form.put(route('dashboard.post.update', { post: props.post }), {
                errorBag: 'updatePost'
            })
        } else {
            form.post(route('dashboard.post.store'), {
                errorBag: 'storePost'
            })
        }
    }

    const updateSlug = () => {
        isLoading.value = true

        axios.get(route('api.slug', { text: form.title })).then((res) => {
            form.slug = res.data
            isLoading.value = false
        }).catch((error) => {
            console.log(`Update slug error: `, error)
            isLoading.value = false
        })
    }

    const updateStatus = (value) => {
        form.status = value

        submitButton.value.click()
    }
</script>

<template>
    <FormSection @submitted="submitHandler">
        <template #title>Post Information</template>

        <template #description>Post's main information like title, subtitle, content, category, etc.</template>

        <template #form>
            <!-- Cover -->
            <div class="col-span-6">
                <InputLabel for="cover" value="Cover" />
                <ImageInput :src="post?.cover" v-model="form.cover" class="mt-1 aspect-cinema" name="cover" id="cover" />
                <InputError :message="form.errors.cover" class="mt-2" />
            </div>

            <!-- Title -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="title" value="Title" />
                <TextInput @change="updateSlug" id="title" v-model="form.title" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.title" class="mt-2" />
            </div>

            <!-- Slug -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="slug" value="Slug" />
                <TextInput id="slug" v-model="form.slug" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.slug" class="mt-2" />
            </div>

            <!-- Subtitle -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="subtitle" value="Subtitle" />
                <TextInput id="subtitle" v-model="form.subtitle" type="text" class="block w-full mt-1" />
                <InputError :message="form.errors.subtitle" class="mt-2" />
            </div>

            <!-- Category -->
            <div class="col-span-6 sm:col-span-3">
                <InputLabel for="category_id" value="Category" />
                <select name="category_id" id="category_id" v-model="form.category_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <template v-for="row in categories" :key="row">
                        <option :value="row.id" :selected="row.id === post?.category_id">{{ row.name }}</option>
                    </template>
                </select>
                <InputError :message="form.errors.category_id" class="mt-2" />
            </div>

            <!-- Content -->
            <div class="col-span-6">
                <InputLabel for="content" value="Content" />
                <Textarea rows="8" id="content" v-model="form.content" class="block w-full mt-1" />
                <InputError :message="form.errors.content" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="mr-3">Saved.</ActionMessage>

            <div class="flex items-center space-x-2">
                <SecondaryButton v-if="form.status === 'published'" @click="updateStatus('draft')" type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Draft</SecondaryButton>
                <SecondaryButton v-if="form.status === 'draft'" @click="updateStatus('published')" type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Publish</SecondaryButton>

                <PrimaryButton v-if="props.post" ref="submitButton" :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Save</PrimaryButton>
                <PrimaryButton v-if="!props.post" ref="submitButton" :class="{ 'opacity-25': form.processing }" :disabled="form.processing || isLoading">Publish</PrimaryButton>
            </div>
        </template>
    </FormSection>
</template>
