<template>
    <div>
        <input
            type="radio"
            :id="index"
            :value="inputValue + updateInputValue"
            v-model="model"
        />
        <label :for="index" class="radio__label"> {{ label }} см.</label>
        <span class="radio__price">{{ inputValue.toFixed(2) }} руб.</span>
    </div>
</template>

<script>
export default {
    name: "InputRadio",

    props: {
        label: {
            type: String,
            default: "",
            required: true
        },
        index: {
            type: Number
        },
        inputValue: {
            type: Number
        },
        value: {
            default: ""
        }
    },

    computed: {
        model: {
            get() {
                return this.value;
            },
            set(value) {
                this.$emit("input", value);
            }
        },

        updateInputValue: function() {
            let updateIndex = this.index / 100000;
            return updateIndex;
        }
    }
};
</script>

<style></style>
