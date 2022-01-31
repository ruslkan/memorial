const state = {
    all: []
};

const getters = {
    GET_STELLA: state => state.all,

    GET_STELLA_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_STELLA_BY_MATERIAL: state => materialId => {
        return state.all.filter(stella => {
            return stella.material_id == materialId;
        });
    }
};

const mutations = {
    SET_STELLAS(state, stellas) {
        state.all = stellas;
    }
};

const actions = {
    GET_STELLAS(context) {
        axios.get("/api/stellas").then(response => {
            let stellas = response.data.data;
            context.commit("SET_STELLAS", stellas);
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
