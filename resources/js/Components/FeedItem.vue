<script setup>
import { useForm } from '@inertiajs/vue3';

const feed = defineProps([
    'feeditem',
]);

</script>

<template>
    <div class="p-6 flex space-x-2">
        <div class="flex-1">
            {{ feeditem.title }} <br>
            {{ feeditem.description }} <br>
            <a :href="feeditem.link">{{ feeditem.link }}</a> <br>
            {{ feeditem.pubDate }} <br><br>
        </div>
    </div>
</template>