const state = {
    all: []
};

const getters = {
    GET_TOMBSTONE: state => state.all,

    GET_TOMBSTONE_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_TOMBSTONE_BY_MATERIAL: state => materialId => {
        return state.all.filter(tombstone => {
            return tombstone.material_id == materialId;
        });
    }
};

const mutations = {
    SET_TOMBSTONE(state, tombstones) {
        state.all = tombstones;
    }
};

const actions = {
    GET_TOMBSTONES(context) {
        axios.get("/api/tombstones").then(response => {
            let tombstones = response.data.data;
            context.commit("SET_TOMBSTONE", tombstones);
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
