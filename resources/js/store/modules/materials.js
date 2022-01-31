const state = {
    all: []
};

const getters = {
    GET_MATERIAL: state => state.all,

    GET_MATERIAL_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    }
};

const mutations = {
    SET_MATERIALS(state, materials) {
        state.all = materials;
    }
};

const actions = {
    GET_MATERIALS(context) {
        axios.get("/api/materials").then(response => {
            let materials = response.data.data;
            context.commit("SET_MATERIALS", materials);
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
