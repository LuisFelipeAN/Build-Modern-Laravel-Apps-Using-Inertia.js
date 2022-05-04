<template>
    <Head>
        <title>Users</title>
        <meta name="description" content="Users Information" head-key="description">
    </Head>
    <h1  class="text-2xl fond-bold">Users</h1>
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
                                    <Link :href="'/users/'+user.id+'/edit'" class="text-sm text-center text-blue-500 hover:underline">Edit</Link>
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
<script>
import Pagination from '../Shared/Pagination.vue'
export default {

    components:{
        Pagination
    },
    props: {
       users:Object
    },
};
</script>