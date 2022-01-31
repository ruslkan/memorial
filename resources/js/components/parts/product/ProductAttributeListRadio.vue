<template>
    <div class="radio__item">
        <input
            type="radio"
            :id="data.id"
            :value="data.price"
            class="radio__input"
        />
        <label :for="data.price" class="radio__label">
            {{ data.full_size }} см.
            <span class="radio__label-price">
                + {{ data.price.toFixed(2) }}
                руб.
            </span>
        </label>
    </div>
</template>

<script>
export default {
    name: "ProductAttributeListRadio",

    props: {
        data: {
            type: Object,
            default: () => ({})
        }
    }
};
</script>

<style></style>
