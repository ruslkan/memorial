const state = {
    all: []
};

const getters = {
    GET_ACCESSORIES: state => state.all,

    GET_ACCESSORY_BY_ID: state => id => {
        return _.find(state.all, { id: id });
    },

    GET_ACCESSORY_BY_CATEGORY: state => categoryId => {
        return state.all.filter(accessory => {
            return accessory.accessory_category_id == categoryId;
        });
    }
};

const mutations = {
    SET_ACCESSORIES: function(state, accessories) {
        state.all = accessories;
    }
};

const actions = {
    GET_ACCESSORIES(context) {
        axios
            .get("/api/accessories")
            .then(response => {
                let accessories = response.data.data;
                context.commit("SET_ACCESSORIES", accessories);
            })
            .catch(function(response) {
                console.log(response);
                alert("Не удалось загрузить аксессуары");
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
