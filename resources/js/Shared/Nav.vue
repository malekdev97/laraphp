<template>

<ul>
    <li><Link href="/">Home</Link></li>
    <li><Link href="/Users">Users</Link></li>
    <li><Link href="/Settings">Settings</Link></li>
</ul>

</template>

<script>
import { Link } from '@inertiajs/vue3' 

export default {
    components: {
        Link
    }
}

</script>