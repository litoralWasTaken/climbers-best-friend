<template>
    <MapPostCommentDialog :openModal="openModal" :commentError="commentError" :commentSuccess="commentSuccess"
        @close-modal="closeModal" @addComment="addComment"></MapPostCommentDialog>
    <MapPostDeletionDialog :openDialog="openDeleteDialog" :postId="commentDeleteId" :comment="deleteMessage"
        :success="deleteSuccess" @closeDeleteDialog="closeDeleteDialog" @deleteCommentCall="deleteCommentCall" />
    <div class="h-3/4 w-full bg-white fixed z-[9999] bottom-0 rounded-t-3xl p-4 divide-y overflow-scroll"
        v-if="showPosts">
        <div class="flex flex-row justify-between">
            <div class="pt-3 mr-3 ml-3 flex flex-row" @click="goBack">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 mt-3 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
                </svg>
                <div>
                    <h2 class="text-4xl font-extrabold">{{ posts.route.name }}</h2>

                    <p class="mb-6 text-lg font-normal text-gray-500 ">Parte de sector: {{ posts.folder_name }}</p>
                </div>
            </div>
            <div class="md:pr-16 pt-3 flex flex-col" v-if="averageRating">
                <p>Valoración media: </p>

                <h2 class="text-2xl font-bold text-center">{{ averageRating }}/5</h2>
            </div>

        </div>

        <div class="w-full" v-if="posts.route_media && posts.route_media.length > 0">

            <h3 class="text-xl font-bold pl-3 mt-3 pb-3">Galería</h3>


            <Carousel :items-to-show="3" class="mb-3">
                <Slide v-for="(media, i) in posts.route_media" :key="i">
                    <!-- {{ media.photo_or_video_url }} -->
                    <template v-if="isImage(media)">
                        <img :src="'storage/' + media.photo_or_video_url" :alt="i" class="w-auto h-32"
                            @click="fullscreenImage('storage/' + media.photo_or_video_url)">
                    </template>

                    <template v-else-if="isVideo(media)">
                        <video class="w-auto h-32" :src="'storage/' + media.photo_or_video_url" controls muted></video>
                    </template>

                </Slide>

                <template #addons>
                    <Navigation />
                    <Pagination />
                </template>
            </Carousel>
        </div>

        <div class="w-full h-full flex flex-col items-center overflow-y-scroll">

            <h3 v-if="!posts.posts" class="text-4xl font-extrabold text-center mt-3 ">
                No hay ningún comentario :(
            </h3>

            <PrimaryButton class="mt-4" @click="openModal = !openModal">Añade un comentario</PrimaryButton>

            <div class="w-full divide-y" v-if="postArray && postArray.length > 0">
                <template v-for="(post, i) in postArray">
                    <MapPostComment :commentData="post" @deleteComment="deleteComment"></MapPostComment>
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
import MapPostDeletionDialog from './MapPostDeletionDialog.vue';
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
        MapPostDeletionDialog
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
            deleteMessage: '',
            deleteSuccess: false,
            imageExtensions: ['png', 'jpg'],
            videoExtensions: ['mkv', 'mp4'],
            openDeleteDialog: false,
            commentDeleteId: NaN,

            postArray: [],
        }
    },

    watch: {
        posts(newValue) {

            if (newValue) {
                let sum = 0;
                this.posts.posts.forEach(post => {
                    sum += post.rating


                    let auxPost = post
                    Object.assign(auxPost, { 'media': [] })
                    this.posts.route_media.forEach(media => {
                        if (media.route_post_id == post.id) {
                            auxPost.media.push(media)
                        }
                    })

                    this.postArray.push(auxPost)
                })

                this.averageRating = sum / this.posts.posts.length
                this.averageRating = this.averageRating.toFixed(2)
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
            Object.assign(formCommentOptions, { 'route_id': this.posts.route.id })


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

        isImage(media) {
            return this.imageExtensions.includes(media.photo_or_video_url.split('.')[1].toLowerCase())

        },
        isVideo(media) {
            return this.videoExtensions.includes(media.photo_or_video_url.split('.')[1].toLowerCase())
        },

        deleteComment(commentId) {
            this.commentDeleteId = commentId
            this.openDeleteDialog = true
            this.deleteMessage = `¿Estás seguro que quieres borrar el comentario con ID ${commentId}? Los medios audiovisuales incluidos serán borrados también.`

        },
        closeDeleteDialog() {
            this.openDeleteDialog = false
            this.deleteSuccess = false

        },

        deleteCommentCall(index) {
            axios.post('/api/posts/delete', { 'index': index }).then(resp => {
                this.deleteMessage = resp.data.message
                this.deleteSuccess = true
            }).catch(err => {
                this.deleteMessage = err.response.data
            })
        }
    },
}
</script>
<style></style>
