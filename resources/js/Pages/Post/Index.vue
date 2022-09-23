<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import TextInput from '@/Components/TextInput.vue'
    import moment from 'moment'
    import { InertiaLink } from '@inertiajs/inertia-vue3'

    defineProps({
        posts: Object
    })
</script>

<template>
    <AppLayout title="Post">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">Post List</h2>
                <InertiaLink :href="route('dashboard.post.create')" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25">
                    Create Post
                </InertiaLink>
            </div>
        </template>

        <div class="py-10 overflow-x-auto lg:py-8">
            <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="inline-block min-w-full py-2 space-y-6 align-middle sm:px-6 lg:px-8">
                    <form autocomplete="off">
                        <TextInput id="search" name="search" type="text" class="block" placeholder="Search Post" :value="null" />
                    </form>
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Post</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Author</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Status</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Created At</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="text-center" v-if="result == 0 && route().params.search == null">
                                    <td colspan="7" class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">No list available</td>
                                </tr>

                                <tr class="text-center" v-if="result == 0 && route().params.search != null">
                                    <td colspan="7" class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">No result</td>
                                </tr>

                                <tr v-for="row in posts.data" :key="row.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <a :href="row.cover" target="_blank" class="flex-shrink-0 w-10 h-10">
                                                <img class="object-cover w-10 h-10 rounded-full" :src="row.cover" :alt="row.title" />
                                            </a>
                                            <div class="ml-4">
                                                <div class="overflow-hidden text-sm font-medium text-gray-900 w-44 overflow-ellipsis">
                                                    {{ row.title }}
                                                </div>
                                                <div class="overflow-hidden text-sm text-gray-500 w-44 overflow-ellipsis">
                                                    {{ row.subtitle }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <a :href="row.author?.profile_photo_url" target="_blank" class="flex-shrink-0 w-10 h-10">
                                                <img class="object-cover w-10 h-10 rounded-full" :src="row.author?.profile_photo_url" :alt="row.author?.name" />
                                            </a>
                                            <div class="ml-4">
                                                <div class="overflow-hidden text-sm font-medium text-gray-900 w-44 overflow-ellipsis">
                                                    {{ row.author?.name }}
                                                </div>
                                                <div class="overflow-hidden text-sm text-gray-500 w-44 overflow-ellipsis">
                                                    {{ row.author?.email }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span v-if="row.status === 'draft'" class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">Draft</span>
                                        <span v-else class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Published</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ moment(row.created_at).format("MMMM DD, YYYY") }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <div class="inline-flex items-center space-x-4">
                                            <InertiaLink :href="route('dashboard.post.show', row.slug)" class="inline-flex items-center p-2 space-x-4 text-white transition bg-gray-800 rounded-full active:hover:scale-90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </InertiaLink>

                                            <button @click="destroy(row)" class="inline-flex items-center p-2 space-x-4 text-white transition bg-red-800 rounded-full active:hover:scale-90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination here -->
                </div>
            </div>
        </div>
    </AppLayout>
</template>
