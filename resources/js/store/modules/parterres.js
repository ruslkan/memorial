const state = {
    all: []
};

const getters = {
    GET_PARTERRE: state => state.all,

    GET_PARTERRE_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_PARTERRE_BY_MATERIAL: state => materialId => {
        return state.all.filter(parterre => {
            return parterre.material_id == materialId;
        });
    }
};

const mutations = {
    SET_PARTERRE(state, parterres) {
        state.all = parterres;
    }
};

const actions = {
    GET_PARTERRES(context) {
        axios.get("/api/parterres").then(response => {
            let parterres = response.data.data;
            context.commit("SET_PARTERRE", parterres);
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
