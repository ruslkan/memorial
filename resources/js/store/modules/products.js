const state = {
    all: []
};

const getters = {
    GET_PRODUCTS: state => state.all,

    GET_PRODUCT_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_PRODUCT_BY_CATEGORY: state => categoryId => {
        return state.all.filter(product => {
            return product.category_id == categoryId;
        });
    }
};

const mutations = {
    SET_PRODUCTS: function(state, products) {
        state.all = products;
    }
};

const actions = {
    GET_PRODUCTS(context) {
        axios
            .get("/api/products")
            .then(response => {
                let products = response.data.data;
                context.commit("SET_PRODUCTS", products);
            })
            .catch(function(response) {
                console.log(response);
                alert("Не удалось загрузить памятники");
            });
    }
};

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
