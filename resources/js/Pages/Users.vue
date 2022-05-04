<template>
    <Head>
        <title>Users</title>
        <meta name="description" content="Users Information" head-key="description">
    </Head>
    <h1  class="text-2xl fond-bold">Users</h1>
    <ul>
        <li v-for="user in users" :key="user.id" v-text="user.name"></li>
    </ul>
</template>
<script>

export default {
    components:{
        
    },
    props: {
       users:Array
    },
};
</script>