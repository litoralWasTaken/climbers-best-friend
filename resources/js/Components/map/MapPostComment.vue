<template>
    <div class="h- w-full">
        <div class="pt-3 flex flex-row">
            <!-- TODO: cambiar por datos datos de usuario de verdad -->
            <img src="storage/profile-photos/kTdShmNiBY6VjRYgg8qcxOjB3yqpqvaqbbU2Jt4K.jpg" :alt="1"
                class="rounded-full h-12 w-12 object-cover">
            <div class="flex flex-col pl-3">
                <p>Nombre de usuario</p>
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
            </div>

            <div class="ml-auto"> Valoración: {{ commentData.rating }}</div>
        </div>


        <div>
            {{ commentData.comment }}
        </div>

    </div>
</template>
<script>
export default {
    props: {
        commentData: {
            type: Object,
            required: true,
        }
    }

}
</script>
<style></style>
