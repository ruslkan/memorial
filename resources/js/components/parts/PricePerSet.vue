<template>
    <div>
        <ul class="attribute__list attribute__list-set">
            <span class="attribute__headline attribute__headline-set">
                Цена за комплект:
            </span>
            <div class="attribute__container">
                <stella-list v-show="product.stella.id" :data="product" />
                <pillar-list v-show="product.pillar.id" :data="product" />
                <parterre-list v-show="product.parterre.id" :data="product" />
                <pedestal-list v-show="product.pedestal.id" :data="product" />
                <tombstone-list v-show="product.tombstone.id" :data="product" />
            </div>
        </ul>
        <div class="container__separator"></div>
    </div>
</template>

<script>
import ParterreList from "./parterre/ParterreList.vue";
import PedestalList from "./pedestal/PedestalList.vue";
import StellaList from "./stella/StellaList.vue";
import PillarList from "./pillar/PillarList.vue";
import TombstoneList from "./tombstone/TombstoneList.vue";
export default {
    name: "PricePerSet",

    components: {
        PedestalList,
        ParterreList,
        TombstoneList,
        StellaList,
        PillarList
    },

    props: {
        product: {
            type: Object
        }
    }
};
</script>

<style></style>
