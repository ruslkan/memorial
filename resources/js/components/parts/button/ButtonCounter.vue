<template>
    <div>
        <button
            @click="counter -= 1"
            :disabled="counter <= 1"
            class="button-main radio__button"
        >
            -
        </button>
        <input
            type="text"
            v-model.number="counter"
            readonly
            class="quantity__input"
        />
        <button
            @click="counter += 1"
            :disabled="counter >= 2"
            class="button-main radio__button"
        >
            +
        </button>
    </div>
</template>

<script>
export default {
    name: "ButtonCounter",

    props: ["value", "disabled"],

    watch: {
        counter(val) {
            this.newValue = val;
        }
    },

    computed: {
        counter: {
            get() {
                return this.value;
            },
            set(newValue) {
                this.$emit("input", newValue);
            }
        }
    }
};
</script>
