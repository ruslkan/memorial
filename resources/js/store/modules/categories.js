const state = {
    all: []
};

const getters = {
    GET_CATEGORY: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_CATEGORY_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    }
};

const mutations = {
    SET_CATEGORIES(state, categories) {
        state.all = categories;
    }
};

const actions = {
    GET_CATEGORIES(context) {
        axios.get("/api/categories").then(response => {
            let categories = response.data.data;
            context.commit("SET_CATEGORIES", categories);
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
