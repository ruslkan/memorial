<template>
    <li class="attribute__item attribute__item-set">
        <span class="attribute__title attribute__title-set">
            Тумба:
        </span>
        <span class="attribute__data"> {{ data.pedestal.full_size }} см. </span>
    </li>
</template>

<script>
export default {
    name: "PedestalList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
