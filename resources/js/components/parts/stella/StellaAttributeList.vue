<template>
    <div class="attribute__item">
        <span class="attribute__title">
            Стелла:
        </span>
        <div class="attribute__description-box">
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    размер:
                </span>
                <span class="attribute__data">
                    {{ data.stella.full_size }}
                    см.
                </span>
            </span>
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    материал:
                </span>
                <span class="attribute__data">
                    {{ data.stella.material.full_data }}
                </span>
            </span>
            <span class="attribute__description">
                <span class="attribute__subtitle">
                    стоимость:
                </span>
                <span class="attribute__data">
                    {{ data.stella.price.toFixed(2) }}
                    руб.
                </span>
            </span>
        </div>
        <div class="container__separator"></div>
    </div>
</template>

<script>
export default {
    name: "StellaAttributeList",

    props: {
        data: {
            type: Object
        }
    }
};
</script>

<style></style>
