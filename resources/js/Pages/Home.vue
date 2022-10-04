<template>
    <h1 class="text-4xl font-bold">Hello!</h1>

    <Nav />

    <div style="margin-top: 900px">
        <p>The current time is {{ time }}.</p>
    </div>
</template>

<script>
    import Nav from '../Shared/Nav';
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: { Nav, Link },

        props: {
            time: String
        }
    };
</script>
