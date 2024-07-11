<template>
    <div id="map-result-bg" class="rounded-t-3xl" style="z-index: 9999 !important;" v-if="showResult">

        <h2 class="text-4xl font-extrabold dark:text-white">{{ pointData.point_name }}</h2>
        <p class="my-4 text-lg text-gray-500">Bloques encontrados:</p>
        <MapResultTable @getPosts="getPosts" :myRoutes="myBoulders"></MapResultTable>

        <p class="my-4 text-lg text-gray-500">Vías deportivas encontradas:</p>
        <MapResultTable @getPosts="getPosts" :myRoutes="mySportRoutes"></MapResultTable>

        <p class="my-4 text-lg text-gray-500">Vías tradicionales encontradas:</p>
        <MapResultTable @getPosts="getPosts" :myRoutes="myTradRoutes"></MapResultTable>
    </div>
</template>
<script>

import MapResultTable from './MapResultTable.vue';
export default {
    components: {
        MapResultTable,
    },
    props: {
        showResult: {
            type: Boolean,
            required: false,
        },

        pointData: {
            type: Object,
            required: true
        },
    },

    data() {
        return {
            myBoulders: [],
            mySportRoutes: [],
            myTradRoutes: [],
        }
    },

    watch: {
        pointData(newValue) {
            if (newValue) {
                this.myBoulders = [];
                this.mySportRoutes = [];
                this.myTradRoutes = [];
                newValue.forEach(element => {
                    switch (element.type) {
                        case 'boulder':
                            this.myBoulders.push(element)
                            break;
                        case 'sport':
                            this.mySportRoutes.push(element);
                            break;
                        default:
                            this.myTradRoutes.push(element);
                            break;
                    }
                });

            }
        }
    },
    methods: {
        getPosts(id, name) {
            axios.get(`/api/posts/${id}`).then(response => {
                this.$emit('updateShowResult', response.data);
            }).catch(error => {
                // chapuza para poder pescar datos del
                Object.assign(error, {'name': name, 'folder_name': this.pointData.point_name, 'id': id})
                this.$emit('updateShowError', error)
            })
        }
    },
}
</script>
<style>
#map-result-bg {
    text-align: center;
    height: 75%;
    width: 100%;
    position: fixed;
    background-color: #fff;
    z-index: 9999 !important;
    bottom: 0;
    overflow: scroll;

    *:not(svg) {
        padding-top: 1em;
        padding-left: 1em;
        padding-right: 1em;
    }

}
</style>
