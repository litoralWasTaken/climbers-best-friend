<template>
    <table class="table-auto w-full">
        <thead class="border-b border-r border-l border-neutral-200">
            <tr>
                <th class="w-1/3">Nombre</th>
                <th class="w-1/3">Grado</th>
                <th class="w-1/3">Valoración media</th>
            </tr>
        </thead>
        <tbody class="border-b border-neutral-200">
            <template v-for="route in myRoutes">
                <tr @click="getPosts(route.id, route.name)" class="border-b border-neutral-200">
                    <td>{{ route.name }}</td>
                    <td>{{ route.grade }}</td>
                    <td>5/5</td>
                </tr>
            </template>
        </tbody>
    </table>
</template>
<script>
export default {
    props: {
        myRoutes: {
            type: Array,
            required: true,
        }
    },
    methods: {
        getPosts(id, name) {
            this.$emit('getPosts', id, name)
        }
    },
}
</script>
