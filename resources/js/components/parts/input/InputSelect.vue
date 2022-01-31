<template>
    <select :value="value" @input="onChange">
        <option value="" disabled selected>{{ disabledOptionName }}</option>
        <option v-for="option in options" :key="option.id" :value="option.id">
            {{ option.full_data }}
        </option>
    </select>
</template>

<script>
export default {
    name: "InputSelect",

    props: {
        value: { type: String },
        options: { type: Array },
        disabledOptionName: { type: String, required: true }
    },

    methods: {
        onChange(event) {
            this.$emit("input", event.target.value);
        }
    }
};
</script>

<style></style>
