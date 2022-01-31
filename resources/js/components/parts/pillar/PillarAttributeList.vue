<template>
    <div class="attribute__item">
        <span class="attribute__title">
            Столбик:
        </span>
        <div class="attribute__description-box">
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    размер:
                </span>
                <span class="attribute__data">
                    {{ data.pillar.full_size }}
                    см.
                </span>
            </span>
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    материал:
                </span>
                <span class="attribute__data">
                    {{ data.pillar.material.full_data }}
                </span>
            </span>
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    стоимость:
                </span>
                <span class="attribute__data">
                    {{ data.pillar.price.toFixed(2) }}
                    руб.
                </span>
            </span>
        </div>
        <div class="container__separator"></div>
    </div>
</template>

<script>
export default {
    name: "PillarAttributeList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
