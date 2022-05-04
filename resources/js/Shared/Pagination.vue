<template>
    <div class="mt-6 space-x-2">
        <Component :is="link.url?'Link':'span'" 
        v-for="link in links"
         :href="link.url" 
         v-html="link.label" 
         :class="{'text-blue-500':link.url, 'underline':link.active}" :key="link"/>
    </div>  
</template>
<script>
export default {
    props:{
       links:Array
    }
};
</script>