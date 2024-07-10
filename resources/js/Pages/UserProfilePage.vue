<template>
    <MapPostDeletionDialog :openDialog="openDeleteDialog" :postId="postId" :comment="deleteMessage"
        :success="deleteSuccess" @closeDeleteDialog="closeDeleteDialog" @deleteCommentCall="deleteCommentCall" />
    <AppLayout title='Perfil de usuario'></AppLayout>
    <div class="flex flex-row divide-x-3 divide-gray-500 sm:ml-3 sm:mr-3">
        <div class="hidden lg:block md:w-1/3 h-full "></div>
        <div class="sm:w-full h-full divide-y ">

            <div class="h-48 w-full flex flex-row  items-center">
                <!-- <p class="pr-3">Todos los comentarios</p>
                <Toggle @toggleMethod="toggleMethod"></Toggle>
                <p class="pl-3">Comentarios de tus cuentas seguidas</p> -->
                <img :src="user.profile_photo_url"
                    :alt="user.name" @click="fullscreenImage(user.profile_photo_url)" class="rounded-full h-36 w-36 object-cover">

                    <div class="flex flex-col ml-6">
                        <h2 class="text-4xl font-extrabold">{{ user.name }}</h2>
                        <div class="flex flex-row">
                            <p class="text-gray-500"> Registrad@: {{ new Date(user.created_at).toLocaleDateString('es-ES') }}</p>
                        </div>

                        <template v-if="!isStatusEmpty">
                            <template v-if="!myStatus.areYouFollowing">
                                <PrimaryButton class="w-fit mt-2" @click="changeFollow(true)">
                                    Seguir
                                </PrimaryButton>
                            </template>
                            <template v-else>
                                <SecondaryButton class="w-fit mt-2" @click="changeFollow(false)">
                                    Dejar de seguir
                                </SecondaryButton>
                            </template>


                            <template v-if="myStatus.areTheyFollowing">
                                <p class="text-sm text-gray-500 w-full mt-2 rounded-md">Te siguen</p>
                            </template>
                        </template>

                        <template v-if="errorMessage.length > 0">
                            <div>
                                {{errorMessage}}
                            </div>
                        </template>



                    </div>
            </div>

            <h3 class="text-2xl font-bold !border-0">Comentarios: </h3>

            <template v-for="(post, index) in posts" :key="index">
                <MapPostComment :commentData="post" @deleteComment="deleteComment"></MapPostComment>
            </template>
        </div>
        <div class="hidden lg:block md:w-1/3 h-full"></div>
    </div>

    <div>{{ user }}</div>
    <div>{{ posts }}</div>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import MapPostComment from '@/Components/map/MapPostComment.vue';
import MapPostDeletionDialog from '@/Components/map/MapPostDeletionDialog.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
export default {
    components: {
        AppLayout,
        MapPostComment,
        MapPostDeletionDialog,
        PrimaryButton,
        SecondaryButton
    },

    props: {
        user: {
            type: Object,
            required: true
        },
        posts: {
            type: Object,
            required: true
        },
        status: {
            type: Object,
            required: true,
        },
    },


    data() {
        return {
            openDeleteDialog: false,
            postId: NaN,
            deleteMessage: '',
            deleteSuccess: false,
            errorMessage: '',

            myStatus: {},
        }
    },

    created() {
        this.myStatus = this.status
    },


    computed: {
        isStatusEmpty() {
            return Object.keys(this.myStatus).length === 0;
        }
    },

    methods: {
        fullscreenImage(url) {
            window.open(url, '_blank')
        },

        closeDeleteDialog() {
            this.openDeleteDialog = false
            this.deleteSuccess = false
        },


        deleteComment(id) {
            this.postId = id
            this.openDeleteDialog = true
            this.deleteMessage = `¿Estás seguro que quieres borrar el comentario con ID ${this.postId}? Los medios audiovisuales incluidos serán borrados también.`
        },
        deleteCommentCall(index) {
            axios.post('/api/posts/delete', { 'index': index }).then(resp => {
                this.deleteMessage = resp.data.message
                this.deleteSuccess = true
            }).catch(err => {
                this.deleteMessage = err.response.data
            })
        },

        changeFollow(add) {
            if (add) {
                axios.post('/api/user/follow/', {'id': this.user.id}).then(resp => {
                    this.myStatus.areYouFollowing = true
                    this.errorMessage = ''
                }).catch(err => {
                    this.errorMessage = err
                })
            } else {
                axios.post('/api/user/unfollow/', {'id': this.user.id}).then(resp => {
                    this.myStatus.areYouFollowing = false
                    this.errorMessage = ''
                }).catch(err => {
                    this.errorMessage = err
                })

            }
        }
    },
}
</script>
<style>

</style>
