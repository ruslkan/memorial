<template>
    <li class="attribute__item attribute__item-set">
        <span class="attribute__title attribute__title-set">
            Надгробная плита:
        </span>
        <span class="attribute__data">
            {{ data.tombstone.full_size }} см.
        </span>
    </li>
</template>

<script>
export default {
    name: "TombstoneList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
