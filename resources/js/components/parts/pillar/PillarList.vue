<template>
    <li class="attribute__item attribute__item-set">
        <span class="attribute__title attribute__title-set">
            Столбик:
        </span>
        <span class="attribute__data"> {{ data.pillar.full_size }} см. </span>
    </li>
</template>

<script>
export default {
    name: "PillarList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
