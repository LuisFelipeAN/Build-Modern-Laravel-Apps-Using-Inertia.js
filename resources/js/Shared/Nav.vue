<template>
    <nav class="ml-6">
        <ul class="flex space-x-6">

            <NavLink href="/" :active="$page.component==='Home'">Home </NavLink>
            <NavLink href="/users" :active="$page.component==='Users'">Users </NavLink>
            <NavLink href="/settings" :active="$page.component==='Settings'">Settings </NavLink>
            <NavLink href="/logout" method="post">Log Out </NavLink>
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