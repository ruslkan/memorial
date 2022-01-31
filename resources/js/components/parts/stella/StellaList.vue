<template>
    <li class="attribute__item attribute__item-set">
        <span class="attribute__title attribute__title-set">
            Стелла:
        </span>
        <span class="attribute__data"> {{ data.stella.full_size }} см. </span>
    </li>
</template>

<script>
export default {
    name: "StellaList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
