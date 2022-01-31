const state = {
    all: []
};

const getters = {
    GET_PILLAR: state => state.all,

    GET_PILLAR_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_PILLAR_BY_MATERIAL: state => materialId => {
        return state.all.filter(pillar => {
            return pillar.material_id == materialId;
        });
    }
};

const mutations = {
    SET_PILLARS(state, pillars) {
        state.all = pillars;
    }
};

const actions = {
    GET_PILLARS(context) {
        axios.get("/api/pillars").then(response => {
            let pillars = response.data.data;
            context.commit("SET_PILLARS", pillars);
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
