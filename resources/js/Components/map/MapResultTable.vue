<template>
    <table class="table-auto result-table">
        <thead class="border-b border-r border-l border-neutral-200">
            <tr>
                <th>Nombre</th>
                <th>Grado</th>
                <th>Valoración media</th>
            </tr>
        </thead>
        <tbody class="border-b border-neutral-200">
            <template v-for="route in myRoutes">
                <tr class="border-b border-neutral-200">
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
    }
}
</script>
<style>
.result-table {
    width: 100%;
}

th {
    width: 33%;
}
</style>
