<template>
    <h1  class="text-2xl fond-bold">Users</h1>
    <div style="margin-top: 400px">
        <p>The current time is {{time}}.</p>
        <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>Refresh</Link>
    </div>
</template>
<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout:Layout,
    props: {
       time:String
    },
};

</script>