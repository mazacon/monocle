<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FeedItem from '@/Components/FeedItem.vue';
import { Head } from '@inertiajs/vue3';

defineProps(['rssfeed']);
</script>

<template>
    <Head title="RSS Reader" />

    <AuthenticatedLayout>
        <div class="p-3">
            <h3>FEED LENGTH:</h3>
            {{ rssfeed.item.length }} <br><br>
            <h3>Feed INFO:</h3>
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                <div class="p-6 flex space-x-2">
                    <div class="flex-1">
                        {{ rssfeed.title }} <br>
                        {{ rssfeed.description }} <br>
                        <a :href="rssfeed.link">{{ rssfeed.link }}</a> <br>
                        {{ rssfeed.pubDate }} <br><br>
                    </div>
                </div>
            </div>

            <br>
            <h3>INDIVIDUAL ITEM INFO:</h3>
            
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                <FeedItem
                    v-for="item in rssfeed.item"
                    :feeditem="item"
                />
            </div>
        </div>
    </AuthenticatedLayout>
</template>