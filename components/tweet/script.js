
define( function (require) {

	var Vue = require('vue');

	var html = require('text!components/tweet/template.html');

	Vue.component('tweet', {
		template: html,
		methods: {
			transform: function (position) {
				var pos = 180 * position - 90;
				var transforms = [
					'rotateX(' + pos + 'deg)',
					'translate(0, 500px)',
				];
				return transforms.join(' ');
			},
		},
	});

});

