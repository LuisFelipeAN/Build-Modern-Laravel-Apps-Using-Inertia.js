<template>
    <nav class="mt-6">
        <ul class="list-disc">

            <NavLink href="/" :active="$page.component==='Home'">Home </NavLink>
            <NavLink href="/users" :active="$page.component==='Users'">Users </NavLink>
            <NavLink href="/settings" :active="$page.component==='Settings'">Settings </NavLink>
            <li><Link href="/logout" method="post" as='button' :data="{foo : 'bar'}" class="text-blue-500 hover:underline">Log Out</Link></li>
        </ul>
    </nav>
</template>
<script>
import {Link} from '@inertiajs/inertia-vue3'
import NavLink from './NavLink.vue'
export default {
    components:{
        Link,NavLink
    },
};
</script>