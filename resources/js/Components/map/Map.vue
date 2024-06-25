<template>
    <ErrorAlert :showAlert="showAlert" :alertErrors="alertErrors" @updateShowAlert="showAlert = false"></ErrorAlert>
    <div id="map" style="">
    </div>
    <MapResult :showResult="showResult" :pointData="pointData"></MapResult>
</template>

<script>
import "leaflet/dist/leaflet.css";
import * as  spainGeoJson from '../../../../public/spainGeo.json'
import * as L from 'leaflet';
import * as omnivore from 'leaflet-omnivore'
import ErrorAlert from '../common/ErrorAlert.vue'
import MapResult from '../map/MapResult.vue'


export default {
    components: {
        ErrorAlert,
        MapResult
    },
    data() {
        return {
            initialMap: null,
            layer: null,

            showAlert: false,
            alertErrors: [],

            showResult: false,
            pointData: {}
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

        this.initialMap.on('click', this.removeMapResult)
        this.initialMap.on('drag', this.removeMapResult)


        this.layer = omnivore.kml('/lapedriza.kml')
            .on('ready', (layerInternal) => {
                // this.addTo(this.initialMap)

                this.addClickEvent(layerInternal)
            }).addTo(this.initialMap)
    },

    methods: {
        removeMapResult() {
            this.showResult = false
        },
        addClickEvent(layer) {
            for (const key in layer.sourceTarget._layers) {
                if (Object.hasOwnProperty.call(layer.sourceTarget._layers, key)) {
                    const marker = layer.sourceTarget._layers[key];
                    if (marker.feature && marker.feature.properties) {
                        let folderName = marker.feature.properties.name
                        let leaflet_id = marker._leaflet_id

                        if (marker.feature.geometry.type == 'Point') {
                            marker.on('click', () => {
                                // TODO: cambiar api para que tenga un ID de mapa consistente y use dicha ID
                                // quizas usar lat/long??
                                axios.get(`/api/routes`)
                                    .then(resp => {
                                        this.showResult = true;
                                        this.pointData = {};
                                        this.pointData = resp.data
                                        Object.assign(this.pointData, {'point_name': folderName})
                                    }).catch(error => {
                                        this.alertErrors = [];
                                        this.alertErrors.push(error.response.status)
                                        this.alertErrors.push(error.response.data.message)
                                        this.showAlert = true;
                                    })
                            })
                        }
                    }
                }
            }
        },
    },


    updateShowResult() {
        console.log('no implementado');
    },

    created() {
    }
};

</script>


<style>
#map {
    flex-grow: 1;
    position: absolute;
    height: 96%;
    width: 100%;
}
</style>
