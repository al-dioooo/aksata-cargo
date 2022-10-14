<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import TextInput from '@/Components/TextInput.vue'
    import { InertiaLink } from '@inertiajs/inertia-vue3'
    import { reactive, watch } from '@vue/runtime-core'
    import { Inertia } from '@inertiajs/inertia'

    const params = reactive({
        search: route().params.search
    })

    defineProps({
        categories: Object,
        result: Number
    })

    watch(params, (newParams, oldParams) => {
        Object.keys(params).forEach(key => {
            if (params[key] == '') {
                delete params[key]
            }
        })

        Inertia.get(route('dashboard.category.index'), params, {
            replace: true,
            preserveState: true
        })
    }, {
        deep: true
    })
</script>

<template>
    <AppLayout title="Category">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">Category List</h2>
                <InertiaLink :href="route('dashboard.category.create')" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25"> Create Category </InertiaLink>
            </div>
        </template>

        <div class="py-10 overflow-x-auto lg:py-8">
            <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="inline-block min-w-full py-2 space-y-6 align-middle sm:px-6 lg:px-8">
                    <form autocomplete="off">
                        <TextInput v-model="params.search" id="search" name="search" type="text" class="block" placeholder="Search Category" />
                    </form>
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Category</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Slug</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Created At</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Updated At</th>
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

                                <tr v-for="row in categories.data" :key="row.id">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{ row.name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ row.slug }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ row.created_at }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ row.updated_at }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <div class="inline-flex items-center space-x-2">
                                            <InertiaLink :href="route('dashboard.category.edit', row.slug)" class="inline-flex items-center p-2 space-x-4 text-white transition bg-gray-800 rounded-full active:hover:scale-90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                                    <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                                </svg>
                                            </InertiaLink>

                                            <button @click="destroy(row)" class="inline-flex items-center p-2 space-x-4 text-white transition bg-red-800 rounded-full active:hover:scale-90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
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
