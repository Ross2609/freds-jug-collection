<template>
    <Link class="text-blue-300 hover:underline" :class="{'font-bold underline': active}"><slot /></Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: { Link },

        props: {
            active: {
                type: Boolean,
                default: false
            }
        }
    };
</script>
