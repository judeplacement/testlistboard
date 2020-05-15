require('./bootstrap');

import Vue from 'vue'
import Vuex from 'vuex'
import 'es6-promise/auto'

// Import components here
import TableDraggable from './components/TableDraggable.vue';

const app = new Vue({
  el: '#app',
  components: {
    TableDraggable
  }
});

Vue.use(Vuex)