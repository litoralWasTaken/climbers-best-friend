<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <Navbar/>

</template>

<script>
import { Head } from "@inertiajs/vue3";
import Map from '@/Components/map/Map.vue';
import Navbar from '@/Components/common/Navbar.vue'

export default {
    components: {
        Head,
        Map,
        Navbar
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
Navbar {
    position: absolute;
    z-index: 9999;
}
</style>
