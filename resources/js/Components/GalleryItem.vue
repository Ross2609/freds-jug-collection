<template>
    <div class="border rounded-lg my-3 flex flex-col place-items-center shadow-lg">
        <img :src="item.img_url" :alt="item.img_name" class="w-44 m-2 border border-gray-200 object-cover border rounded mt-4">
        <p class="mt-5 text-center mb-3">{{ item.name }}</p>
    </div>
</template>

<script>
export default {

    props: {
        item: Object
    },
}
</script>
