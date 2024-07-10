<template>
    <MapPostDeletionDialog :openDialog="openDeleteDialog" :postId="commentDeleteId" :comment="deleteMessage" :success="deleteSuccess" @closeDeleteDialog="closeDeleteDialog" @deleteCommentCall="deleteCommentCall"/>
    <AppLayout title="Inicio">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Inicio
            </h2>
        </template>
    </AppLayout>
    <div class="flex flex-row divide-x-3 divide-gray-500">
        <div class="hidden lg:block md:w-1/3 h-full "></div>
        <div class="sm:w-full h-full divide-y ">

            <div class="h-16 w-full flex flex-row justify-center items-center">
                <p class="pr-3">Todos los comentarios</p>
                <Toggle @toggleMethod="toggleMethod"></Toggle>
                <p class="pl-3">Comentarios de tus cuentas seguidas</p>
            </div>


            <template v-if="posts.length > 0">
                <template v-for="(post, index) in posts" :key="index">
                    <MapPostComment :commentData="post" @deleteComment="deleteComment"></MapPostComment>
                </template>
            </template>
            <template v-else>
                <h2 class="text-bold text-xl text-center pt-6">{{ message }}</h2>

            </template>

        </div>
        <div class="hidden lg:block md:w-1/3 h-full"></div>
    </div>

    <!-- {{ $page.props.auth.user }} -->
</template>

<script>
import MapPostComment from '@/Components/map/MapPostComment.vue';
import MapPostDeletionDialog from '@/Components/map/MapPostDeletionDialog.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import Toggle from '@/Components/common/Toggle.vue'

export default {
    components: {
        AppLayout,
        MapPostComment,
        MapPostDeletionDialog,
        Toggle
    },
    data() {
        return {
            posts: [],
            openDeleteDialog: false,
            postId: NaN,
            commentDeleteId: NaN,
            deleteMessage: '',
            deleteSuccess: false,
            toggle: false,

            message: '',
        }
    },

    created() {
        this.toggle = false;

        this.loadPosts()
        this.message = 'No sigues a ningún usuario.'
    },

    methods: {
        loadPosts() {
            if (!this.toggle) {
                // todos los posts de la app
                axios.get('/api/posts').then(resp => {
                    this.posts = resp.data
                }).catch(err => {
                    this.message = err
                })
            } else {
                // posts de usuarios seguidos
                axios.get(`/api/posts/followed/${this.$page.props.user.id}`, ).then(resp => {
                    this.posts = resp.data
                }).catch(err => {
                    this.message = err
                })
            }
        },

        toggleMethod(toggle) {
            this.toggle = toggle

            this.loadPosts()
        },

        deleteComment(id) {
            this.commentDeleteId = id
            this.openDeleteDialog = true
            this.deleteMessage = `¿Estás seguro que quieres borrar el comentario con ID ${commentId}? Los medios audiovisuales incluidos serán borrados también.`
        },

        closeDeleteDialog() {
            this.openDeleteDialog = false
            this.deleteSuccess = false

        },

        deleteCommentCall(id) {
            axios.post('/api/posts/delete', {'index': index}).then(resp => {
                this.deleteMessage = resp.data.message
                this.deleteSuccess = true
            }).catch(err => {
                this.deleteMessage = err.response.data
            })
        }

    },
}
</script>
