<template>
    <MapPostCommentDialog :openModal="openModal" :commentError="commentError" :commentSuccess="commentSuccess" @close-modal="closeModal" @addComment="addComment"></MapPostCommentDialog>
    <div class="h-3/4 w-full bg-white fixed z-[9999] bottom-0 rounded-t-3xl p-4 divide-y" v-if="showPosts">
        <div class="flex flex-row">
            <div class="pt-3 mr-3 ml-3" @click="goBack">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </div>

            <div>
                <h2 class="text-4xl font-extrabold">{{ posts.route.name }}</h2>

                <p class="mb-6 text-lg font-normal text-gray-500 ">Parte de sector: {{ posts.folder_name }}</p>
            </div>

            <div class="right-0 fixed pr-16 flex flex-col" v-if="averageRating">
                <p>Valoración media: </p>

                <h2 class="text-2xl font-bold text-center">{{ averageRating }}/5</h2>
            </div>

        </div>

        <div class="w-full" v-if="posts.route_media && posts.route_media.length > 0">

            <h3 class="text-xl font-bold pl-3 mt-3 pb-3">Galería</h3>


            <Carousel :items-to-show="3" class="mb-3">
                <Slide v-for="(media, i) in posts.route_media" :key="i">
                    <!-- {{ media.photo_or_video_url }} -->
                    <img :src="'storage/' + media.photo_or_video_url" :alt="i"
                        @click="fullscreenImage('storage/' + media.photo_or_video_url)">
                </Slide>

                <template #addons>
                    <Navigation />
                    <Pagination />
                </template>
            </Carousel>
        </div>

        <div class="w-full h-full flex flex-col items-center overflow-scroll">

            <h3 v-if="!posts.posts" class="text-4xl font-extrabold text-center mt-3 ">
                No hay ningún comentario :(
            </h3>

            <PrimaryButton class="mt-4" @click="openModal = !openModal">Añade un comentario</PrimaryButton>

            <div class="w-full divide-y" v-if="posts.posts && posts.posts.length > 0">
                <template v-for="(post, i) in posts.posts">
                    <MapPostComment :commentData="post"></MapPostComment>
                </template>
            </div>
        </div>


    </div>
</template>
<script>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import MapPostComment from '@/Components/map/MapPostComment.vue';
import MapPostCommentDialog from './MapPostCommentDialog.vue';
export default {
    emits: ['goBackResult'],
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
        PrimaryButton,
        MapPostComment,
        MapPostCommentDialog,
    },

    props: {
        showPosts: {
            type: Boolean,
            required: true,
        },
        posts: {
            type: Object,
            required: true
        }
    },

    data() {
        return {
            averageRating: null,
            openModal: false,
            commentError: '',
            commentSuccess: '',
        }
    },

    watch: {
        posts(newValue) {
            if (newValue.length > 0) {
                let sum = 0;
                this.posts.posts.forEach(post => {
                    sum += post.rating
                })

                this.averageRating = sum / this.posts.posts.length
            }

        }
    },


    methods: {
        closeModal() {
            this.openModal = !this.openModal
            this.commentError = ''
        },
        goBack() {
            this.$emit('goBackResult', null)
        },

        fullscreenImage(src) {
            window.open(src, '_blank')
        },

        addComment(formCommentOptions) {
            Object.assign(formCommentOptions, {'route_id': this.posts.route.id})


            axios.post('/api/posts/upload', formCommentOptions, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(resp => {
                this.commentSuccess = JSON.stringify(resp.data.message)
            }).catch(err => {
                this.commentError = JSON.stringify(err.response.data.message)
            })
        },

    },
}
</script>
<style></style>
