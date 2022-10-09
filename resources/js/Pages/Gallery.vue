<template>
    <Layout>
        <PageHeader>Gallery</PageHeader>
        <section class="grid grid-cols-5 gap-8">
            <GalleryItem v-for="item in items" :key="item.id" :item="item" />
        </section>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout';
import PageHeader from '../Shared/PageHeader'
import GalleryItem from '../Components/GalleryItem.vue';

export default {
    components: { Layout, PageHeader, GalleryItem },

    props: {
        items: Array
    },
};
</script>
