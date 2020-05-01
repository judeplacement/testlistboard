require('./bootstrap');
import Vue from 'vue'
import Vuex from 'vuex'
import 'es6-promise/auto'

Vue.use(Vuex)

Vue.component('record-draggable', require('/tabledraggable.vue'));