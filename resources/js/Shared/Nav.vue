<template>
    <nav class="ml-6">
        <ul class="flex list-disc space-x-4 list-inside">

            <NavLink href="/" :active="$page.component==='Home'">Home </NavLink>
            <NavLink href="/users" :active="$page.component==='Users'">Users </NavLink>
            <NavLink href="/settings" :active="$page.component==='Settings'">Settings </NavLink>
            <li><Link href="/logout" method="post" as='button' :data="{foo : 'bar'}" class="text-blue-500 hover:underline">Log Out</Link></li>
        </ul>
    </nav>
</template>
<script>
import NavLink from './NavLink.vue'
export default {
    components:{
        NavLink
    },
};
</script>