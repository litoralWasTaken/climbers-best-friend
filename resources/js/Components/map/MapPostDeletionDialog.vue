<template>
    <DialogModal :show="openDialog" @close="closeDialog">
            <template #title> Borrar un comentario</template>
            <template #content>
                <p :class="{ 'text-green-500': success, 'text-red-500': !success }">
                    {{ comment }}
                </p>


            </template>

            <template #footer>
                <SecondaryButton class="mt-1 mr-3" @click="closeDialog">
                    Cancelar
                </SecondaryButton>

                <PrimaryButton v-if="!success"@click="deleteComment">
                    Borrar
                </PrimaryButton>
            </template>
    </DialogModal>
</template>
<script>
import DialogModal from '../DialogModal.vue';
import PrimaryButton from '../PrimaryButton.vue';
import SecondaryButton from '../SecondaryButton.vue';

export default {
    emits: ['closeDeleteDialog', 'deleteCommentCall'],
    components: {
        DialogModal,
        PrimaryButton,
        SecondaryButton
    },

    props: {
        openDialog: {
            type: Boolean,
            required: true
        },
        postId: {
            type: Number,
            required: true
        },
        comment: {
            type: String,
            required: true
        },
        success: {
            type: Boolean,
            required: true
        }
    },

    methods: {
        closeDialog() {
            this.$emit('closeDeleteDialog')
        },
        deleteComment() {
            this.$emit('deleteCommentCall', this.postId)
        }
    }
}

</script>
<style >

</style>
