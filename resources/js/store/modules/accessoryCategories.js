const state = {
    all: []
};

const getters = {
    GET_ACCESSORY_CATEGORY: state => state.all,

    GET_ACCESSORY_CATEGORY_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    }
};

const mutations = {
    SET_ACCESSORY_CATEGORIES(state, accessoryCategories) {
        state.all = accessoryCategories;
    }
};

const actions = {
    GET_ACCESSORY_CATEGORIES(context) {
        axios.get("/api/accessoryCategories").then(response => {
            let accessoryCategories = response.data.data;
            context.commit("SET_ACCESSORY_CATEGORIES", accessoryCategories);
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
