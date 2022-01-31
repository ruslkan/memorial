const state = {
    all: [],
    currentServiceId: []
};

const getters = {
    GET_SERVICE: state => state.all,

    GET_SERVICE_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_CURRENT_SERVICE: state => {
        return state.currentServiceId ? state.all[state.currentServiceId] : {};
    }
};

const mutations = {
    SET_SERVICE(state, services) {
        state.all = services;
    }
};

const actions = {
    GET_SERVICES(context) {
        axios.get("/api/services").then(response => {
            let services = response.data.data;
            context.commit("SET_SERVICE", services);
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
