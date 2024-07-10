<template>
    <div class="w-full pb-3 pl-3">
        <div class="pt-3 flex flex-row">
            <img v-if="commentData.user_profile_photo_path" :src="`storage/${commentData.user_profile_photo_path}`"
                :alt="commentData.user_name" class="rounded-full h-12 w-12 object-cover">
            <img v-else
                :src="'https://ui-avatars.com/api/?name=' + commentData.user_name + '&color=7F9CF5&background=EBF4FF'"
                alt="commentData.user_name" class="rounded-full h-12 w-12 object-cover">
            <div class="flex flex-col pl-3">
                <Link :href="userUrl" class="hover:underline">{{ commentData.user_name }}</Link>
                <div class="flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="rgb(107, 114, 128)" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                    </svg>
                    <p class="text-gray-500">
                        {{ commentData.ascent_date }}
                    </p>

                </div>
                <div class="flex flex-row" v-if="commentData.route_name">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="rgb(107, 114, 128)" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>

                    <p class="text-gray-500">
                        {{ commentData.route_name }}
                    </p>

                </div>
            </div>

            <div class="ml-auto mr-5"> Valoración: {{ commentData.rating }}/5
                <svg v-if="$page.props.auth.user.id == commentData.user_id" @click="deleteComment"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="ml-3 size-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>

            </div>
        </div>


        <div>
            {{ commentData.comment }}
        </div>


        <Carousel v-if="commentData.media.length > 0" :items-to-show="1" class="mb-3">
            <Slide v-for="(media, i) in commentData.media" :key="i">
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
</template>
<script>

import { Link } from '@inertiajs/vue3';
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css'

export default {


    emits: ['deleteComment'],
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
        Link
    },

    data() {
        return {
            imageExtensions: ['png', 'jpg'],
            videoExtensions: ['mkv', 'mp4'],
        }
    },
    props: {
        commentData: {
            type: Object,
            required: true,
        },
    },


    computed: {
        userUrl() {
            return `/user/${this.commentData.id}`
        }
    },

    methods: {
        deleteComment() {
            this.$emit('deleteComment', this.commentData.id)
        },
        isImage(media) {
            return this.imageExtensions.includes(media.photo_or_video_url.split('.')[1].toLowerCase())

        },
        isVideo(media) {
            return this.videoExtensions.includes(media.photo_or_video_url.split('.')[1].toLowerCase())
        },

        fullscreenImage(src) {
            window.open(src, '_blank')
        },
    },
}
</script>
<style></style>
