var Vue = require('vue');

import Actioncall from './components/actionCall.vue';
import Schedule from './components/schedule.vue';


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
Vue.use(require('vue-resource'));
require('es6-promise').polyfill();//this is so that promises work correctly in ie

new Vue ({

	el: '#nlpt',
	components:{
		Actioncall: Actioncall,
		Schedule: Schedule,


	},
	data: {
		showAction: false,
	},


});