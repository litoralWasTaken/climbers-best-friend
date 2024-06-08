
<template>
    <Head>
        <title>{{ title }}</title>
    </Head>



</template>

<script>
import { Head } from "@inertiajs/vue3";
import Map from '@/Components/map/Map.vue';

export default {
    components: {
        Head,
        Map
    },
    props: {
        title: String
    },
    data() {
        return {};
    },
    mounted() {
    },

    created() {
    }
};

</script>


<style>
</style>
