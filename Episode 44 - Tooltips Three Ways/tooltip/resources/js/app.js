require('./bootstrap');

import Vue from 'vue';
import Example from './components/Example.vue'
import PopperTooltip from 'tooltip.js';


Vue.directive('tooltip', {
    bind(elem, bindings) {
        new PopperTooltip(elem, {
            placement: bindings.arg || 'top',
            title: bindings.value
        })
    }
})


import Tooltip from './components/Tooltip';
Vue.component('tooltip', Tooltip);

new Vue({
    el: '#app',


    components: { Example, Tooltip },

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            new PopperTooltip(elem, {
                placement: elem.dataset.tooltipPlacement || 'top',
                title: elem.dataset.tooltip
            })
        });
    }
});

