<template>
    <li><Link :href="href" class="text-black hover:underline" :class="{'font-bold underline': active}" :method="method??'get'"><slot/></Link></li>    
</template>
<script>
import {Link} from '@inertiajs/inertia-vue3'
export default {
    components:{
        Link
    },
    props:{
        href: String,
        active: Boolean,
        method: String
    }
};
</script>