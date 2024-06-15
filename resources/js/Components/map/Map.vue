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
            layer: null,
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


        this.layer = omnivore.kml('/lapedriza.kml')
        .on('ready', (layerInternal) => {
            // this.addTo(this.initialMap)

            this.addClickEvent(layerInternal)
        }).addTo(this.initialMap)
    },

    methods: {
        addClickEvent(layer) {
            console.log(layer);
            for (const key in layer.sourceTarget._layers) {
                if (Object.hasOwnProperty.call(layer.sourceTarget._layers, key)) {
                    const marker = layer.sourceTarget._layers[key];
                    if (marker.feature && marker.feature.properties) {
                        let folderName = marker.feature.properties.name
                        let leaflet_id = marker._leaflet_id

                        if (marker.feature.geometry.type == 'Point') {
                            marker.on('click', () => {
                                axios.get('/routes').then(resp => {
                                    console.log(resp)
                                })
                            })
                        }
                    }
                }
            }
        },
    },

    created() {
    }
};

</script>


<style>
    #map {
        flex-grow: 1;
        position: absolute;
        height: 100%;
        width: 100%;
    }
</style>
