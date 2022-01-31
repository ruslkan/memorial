<template>
    <li class="attribute__item attribute__item-set">
        <span class="attribute__title attribute__title-set">
            Цветник:
        </span>
        <span class="attribute__data"> {{ data.parterre.full_size }} см. </span>
    </li>
</template>

<script>
export default {
    name: "ParterreList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
