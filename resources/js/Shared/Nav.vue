<template>
    <nav>
        <ul class="flex space-x-6 list-inside list-none">
            <li><NavLink href="/" :active="$page.component === 'Home'">Home</NavLink></li>
            <li><NavLink href="/gallery" :active="$page.component === 'Gallery'">Gallery</NavLink></li>
        </ul>
    </nav>
</template>

<script>
    import NavLink from './NavLink';
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: { NavLink, Link }
    };
</script>
