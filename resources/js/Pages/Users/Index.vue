<template>
    <Head>
        <title>Users</title>
        <meta name="description" content="Users Information" head-key="description">
    </Head>
    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1  class="text-2xl fond-bold">Users</h1>
            <Link v-if="can.createUser" href="/users/create" class="text-blue-500 text-sm ml-3">New User</Link>
        </div>
        <input type="text" name="" id="" placeholder="Search..." class="border px-2 rounded-lg" v-model="search">
    </div>
   
    <div class="flex flex-col h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <tbody class="text-sm divide-y divide-gray-100">
                            <tr v-for="user in users.data" :key="user.id">
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{user.name}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <Link v-if="user.can.edit"  :href="'/users/'+user.id+'/edit'" class="text-sm text-center text-blue-500 hover:underline">Edit</Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <Pagination :links="users.links"/>
    </div>
</template>
<script setup>
import Pagination from '../../Shared/Pagination.vue'
import {ref, watch} from 'vue'
import {Inertia } from '@inertiajs/inertia'
import debounce from 'lodash/debounce'
let props = defineProps({ 
    users:Object,
    filters:Object,
    can:Object
})
let search = ref(props.filters.search);
watch(search,debounce(function(value){
    Inertia.get('/users',{search:value}, {preserveState:true, replace: true});
},300));

</script>