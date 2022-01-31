const state = {
    all: []
};

const getters = {
    GET_PEDESTAL: state => state.all,

    GET_PEDESTAL_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_PEDESTAL_BY_MATERIAL: state => materialId => {
        return state.all.filter(pedestal => {
            return pedestal.material_id == materialId;
        });
    }
};

const mutations = {
    SET_PEDESTAL(state, pedestals) {
        state.all = pedestals;
    }
};

const actions = {
    GET_PEDESTALS(context) {
        axios.get("/api/pedestals").then(response => {
            let pedestals = response.data.data;
            context.commit("SET_PEDESTAL", pedestals);
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
