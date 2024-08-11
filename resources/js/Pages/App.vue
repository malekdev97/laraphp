<template>
<h1>Vue {{ name }}</h1>
<p><Link href="/users">Users</Link></p>

</template>
<script>
import { Link } from '@inertiajs/vue3';

export default {
    props: {
        name: String
    },
    components: {
        Link
    }
}

</script>
