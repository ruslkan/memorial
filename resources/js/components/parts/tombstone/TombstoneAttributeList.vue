<template>
    <div class="attribute__item">
        <span class="attribute__title">
            Надгробная плита:
        </span>
        <div class="attribute__description-box">
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    размер:
                </span>
                <span class="attribute__data">
                    {{ data.tombstone.full_size }}
                    см.
                </span>
            </span>
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    материал:
                </span>
                <span class="attribute__data">
                    {{ data.tombstone.material.full_data }}
                </span>
            </span>
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    стоимость:
                </span>
                <span class="attribute__data">
                    {{ data.tombstone.price.toFixed(2) }}
                    руб.
                </span>
            </span>
        </div>
        <div class="container__separator"></div>
    </div>
</template>

<script>
export default {
    name: "TombstoneAttributeList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
