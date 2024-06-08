<template>
    <div id="map" style="">
    </div>
</template>

<script>
import "leaflet/dist/leaflet.css";
import * as  spainGeoJson from '../../../../public/spainGeo.json'
import * as L from 'leaflet';
import * as omnivore from 'leaflet-omnivore'

export default {
    components: {},
    data() {
        return {
            initialMap: null,
        };
    },
    mounted() {
        this.initialMap = L.map('map').setView([40.416775, -3.703790], 6)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(this.initialMap)


        L.geoJSON(spainGeoJson, {
            style: {
                color: '#008000',
                weight: 3,
                opacity: 1,

                fillOpacity: 0.1
            }
        }).addTo(this.initialMap)


        omnivore.kml('/lapedriza.kml').addTo(this.initialMap)
    },

    created() {
    }
};

</script>


<style>
    #map {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
