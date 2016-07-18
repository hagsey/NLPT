var Vue = require('vue');

import test from './components/test.vue';


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');


new Vue ({

	el: '#nlpt',
	components:{
		test: test,

	},
	data: {
		showModal: false,
	},


});