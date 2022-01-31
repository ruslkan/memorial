<template>
    <div>
        <input
            type="checkbox"
            :id="index"
            :value="inputValue"
            v-model="model"
            class="checkbox__input"
        />
        <label :for="index" class="checkbox__label">
            {{ label }}
        </label>
        <span class="checkbox__price text-right"
            >{{ inputValue.toFixed(2) }} руб.
        </span>
    </div>
</template>

<script>
export default {
    name: "InputChekbox",

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
        }
    }
};
</script>
