
define( function (require) {

	var Vue = require('vue');
	var qwest = require('qwest');
	var R = require('ramda');

	require('components/tweet/script');

	Vue.config.debug = true;

	var log = R.unary(console.log.bind(console));

	var app = new Vue({
		el: '#content',
		data: {
			tweets: [],
		},
	});


	qwest.get('php/tweets.php?debug', '', { responseType: 'json' })
	.then( function (data) {
		log(data);

		var tweets = data.statuses.slice(0, 15);

		app.tweets = tweets;

		app.$log();
	})
	.catch(console.error.bind(console));

});

