<template>
    <AppLayout title="Mapa">

    </AppLayout>
    <div class="spacer"></div>
    <Map></Map>
</template>

<script>
import Map from '@/Components/map/Map.vue'
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
        Map

    }
}
</script>

<style>

</style>
