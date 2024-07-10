<template>
    <div @click="toggle" :class="{ 'bg-indigo-500': isOn, 'bg-gray-300': !isOn }"
        class="relative inline-block w-12 h-6 rounded-full cursor-pointer transition-colors duration-300 ease-in-out">
        <span :class="{ 'translate-x-6': isOn, 'translate-x-0': !isOn }"
            class="absolute left-0 top-0 mt-1 ml-1 w-4 h-4 bg-white rounded-full shadow transform transition-transform duration-300 ease-in-out"></span>
    </div>
</template>

<script>
export default {
    emits: ['toggleMethod'],
    data() {
        return {
            isOn: false
        };
    },
    methods: {
        toggle() {
            this.isOn = !this.isOn;
            this.$emit('toggleMethod', this.isOn)
        }
    }
};
</script>

<style scoped></style>
