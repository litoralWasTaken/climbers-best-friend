<template>
    <DialogModal :show="openModal" @close="closeModal">
        <template #title>Añadir un comentario</template>

        <template #content>
            <div class="mt-4">
                <div class="flex flex-col">
                    <label for="ascentDate-selector">Fecha de ascensión</label>
                    <input class="rounded-md" type="date" name="ascentDate" id="ascentDate-selector"
                        v-model="formCommentOptions.ascentDate">

                    <label for="comment-selector" class="mt-4">Comentario</label>

                    <textarea name="comment" id="comment-selector" v-model="formCommentOptions.comment" maxlength="256"
                        rows="3" class="resize-none rounded-md"
                        placeholder="Escribe aquí qué pensaste de este bloque..."></textarea>

                    <label for="rating-selector" class="mt-4">Valoración</label>
                    <input type="number" name="rating" id="rating-selector" min="0" max="5" class="rounded-md"
                        v-model="formCommentOptions.rating">
                </div>
                <div class="mt-4">
                <label for="file-upload-selector">Añade tu croquis o beta (máx. 4 fotos o vídeos)</label>
                    <label
                        class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                        <span class="flex items-center space-x-2">

                            <template v-if="areAllFilesEmpty">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <span class="font-medium text-gray-600">
                                    Arrastra y suelta archivos para añadir, o
                                    <span class="text-indigo-700 underline">buscar</span>
                                    <p class="block">
                                        (extensiones aceptadas: JPG,PNG,MP4,MKV)
                                    </p>



                                </span>
                            </template>
                            <template v-else>
                                <template v-for="(file, index) in getValidFilenames">
                                    <span class="font-medium text-gray-600 z-[9999]">
                                        {{ file }}
                                        <span class="text-indigo-700 hover:underline" @click="deleteFileItem(index, $event)">(Borrar)</span>
                                    </span>
                                </template>
                            </template>

                        </span>
                        <input type="file" name="file-upload" class="hidden" id="file-upload-selector" v-on:change="addFiles">
                    </label>
                </div>


                <InputError v-if="commentError.length > 0 && commentSuccess <= 0" :message="commentError.slice(1, -1)" class="mt-2" />
                <InputError v-if="error.length > 0" :message="error" class="mt-2"/>


                <p class="text-green-500 mt-3">{{ commentSuccess.slice(1, -1) }}</p>

            </div>
        </template>

        <template #footer>
            <SecondaryButton class="mt-1 mr-3" @click="closeModal">
                Cancelar
            </SecondaryButton>

            <PrimaryButton @click="addComment">
                Añadir
            </PrimaryButton>
        </template>
    </DialogModal>

</template>


<script>
import axios from 'axios';
import DialogModal from '../DialogModal.vue';
import InputError from '../InputError.vue';
import PrimaryButton from '../PrimaryButton.vue';
import SecondaryButton from '../SecondaryButton.vue';
import ActionMessage from '../ActionMessage.vue';

export default {
    emits: ['closeModal', 'addComment'],
    components:{
        PrimaryButton,
        SecondaryButton,
        InputError,
        DialogModal,
        ActionMessage
    },
    props: {
        openModal: {
            type: Boolean,
            required: true,
        },
        commentError: {
            type: String,
            required: false,
        },
        commentSuccess: {
            type: String,
            required: false,
        }
    },
    data() {
        return {
            formCommentOptions: {
                ascentDate: '',
                rating: 0,
                comment: '',
                route_id: 0,
                media: [undefined, undefined, undefined, undefined],

            },
            error: '',
        }
    },


    computed: {
        areAllFilesEmpty() {
            return this.formCommentOptions.media.every(e => {return e === undefined})
        },
        getValidFilenames() {
            let aux = []
            this.formCommentOptions.media.forEach(file => {
                if (file !== undefined ) {
                    if (file.name.length <= 16) {
                        aux.push(file.name)
                    } else {
                        let auxName = file.name
                        let firstSection = auxName.substring(0, 3)
                        let lastIndex = auxName.lastIndexOf('.');
                        let secondSection = auxName.substring(0, lastIndex).slice(-3);
                        let extension = auxName.substring(lastIndex + 1)
                        aux.push(firstSection + '...' + secondSection + '.' + extension)

                    }

                }
            })
            return aux
        }
    },
    methods: {
        closeModal() {
            this.formCommentOptions = {
                ascentDate: '',
                rating: 0,
                comment: '',
                media: [undefined, undefined, undefined, undefined],
            }

            this.error = ''

            this.$emit('closeModal')
        },


        addFiles(event) {
            const allowedTypes = ['image/jpeg', 'image/png', 'video/x-matroska', 'video/mp4'];
            const selectedFiles = Array.from(event.target.files);
            selectedFiles.forEach(file => {
                const index = this.formCommentOptions.media.indexOf(undefined);
                if (index !== -1) {
                    if (allowedTypes.includes(file.type)) {
                        this.formCommentOptions.media[index] = file;
                    } else {
                        this.error = 'Extensión no soportada. Extensiones aceptadas: JPG, PNG, MKV, MP4'
                    }
                }
            });
            event.target.value = null;
        },

        deleteFileItem(index, $event) {
            $event.stopPropagation();
            this.formCommentOptions.media[index] = undefined
        },

        addComment() {
            let canSendComment = true
            if (this.formCommentOptions.comment.length <= 0) {
                this.error = 'El campo de comentario debe estar cubierto'
                canSendComment = false
            } else if (this.formCommentOptions.ascentDate.length <= 0) {
                this.error = 'La fecha de ascensión debe estar rellena'
                canSendComment = false
            }


            if (canSendComment) {
                this.error = '';
                this.$emit('addComment', this.formCommentOptions)
            }

        }
    },

}
</script>

<style>


</style>
