<script setup>
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const feed = defineProps([
    'rssfeed',
]);

const form = useForm({
    rsslink: '',
});

</script>

<template>
    <div class="p-6 flex space-x-2">

        <div class="flex-1">
            <p class="mt-4 text-lg text-gray-900">{{ rssfeed.rsslink }}</p>
        </div>

        <Link :href="`reader/${rssfeed.id}`">
            <button class="bg-blue-950 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">View Feed</button>
        </Link>
    </div>
</template>