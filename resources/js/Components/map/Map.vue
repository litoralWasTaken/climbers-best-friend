<template>
    <ErrorAlert :showAlert="showAlert" :alertErrors="alertErrors" @updateShowAlert="showAlert = false"></ErrorAlert>
    <div id="map" style="">
    </div>
    <MapResult :showResult="showResult" :pointData="pointData" @updateShowResult="updateShowResult" @updateShowError="updateShowError"></MapResult>
    <MapPost :showPosts="showPosts" :posts="posts" @goBackResult="goBackResult"></MapPost>
</template>

<script>
import "leaflet/dist/leaflet.css";
import * as  spainGeoJson from '../../../../public/spainGeo.json'
import * as L from 'leaflet';
import * as omnivore from 'leaflet-omnivore'
import ErrorAlert from '../common/ErrorAlert.vue'
import MapResult from '../map/MapResult.vue'
import MapPost from "./MapPost.vue";


export default {
    components: {
        ErrorAlert,
        MapResult,
        MapPost
    },
    data() {
        return {
            initialMap: null,
            layer: null,

            showAlert: false,
            alertErrors: [],

            showResult: false,
            pointData: {},

            showPosts: false,
            posts: [],
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
            this.showPosts = false
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
                                        if (this.showPosts) {
                                            this.showPosts = false
                                        }
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

        updateShowResult(response) {
            // this.showResult = false;
            this.showPosts = true
            this.posts = response
            Object.assign(this.posts, {'folder_name': this.pointData.point_name})
        },
        updateShowError(error) {
            if (error.response.data.message.includes('Ruta sin comentarios')) {
                this.posts = {
                    'route': {
                        'name': error.name,
                        'folder_name': error.folder_name
                    },
                    'folder_name': this.pointData.point_name
                }

                this.showPosts = true
            } else {
                this.alertErrors = []
                this.alertErrors.push(error.response.status)
                this.alertErrors.push(error.response.data.message)
                this.showAlert = true
            }
        },

        goBackResult() {
            this.showPosts = false
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
    height: 96%;
    width: 100%;
}
</style>
