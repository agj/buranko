
define( function (require) {

	var Vue = require('vue');

	var html = require('text!components/tweet/template.html');

	console.log(html);
	Vue.component('tweet', {
		template: html,
		data: function () {
			return {
				datos: { },
			};
		}
	});

});

