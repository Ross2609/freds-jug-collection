<template>
    <div class="border rounded-lg my-3 flex flex-col place-items-center">
        <img src="" alt="jug.jpg" class="w-32 h-32 m-2 border border-gray-200">
        <p class="mt-5">{{ item.name }}</p>
    </div>
</template>

<script>
    export default {
        props: {
            item: Object
        }
    }
</script>
