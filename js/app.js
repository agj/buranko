
define( function (require) {

	var Vue = require('vue');
	var qwest = require('qwest');

	require('components/tweet/script');

	Vue.config.debug = true;

	var app = new Vue({
		el: '#content',
		data: {
			tweets: [],
		},
	});


	qwest.get('php/tweets.php', '', { responseType: 'json' })
	.then( function (data) {
		console.log(data);

		var tweets = data.statuses;

		app.tweets = tweets;

	})
	.catch(console.error.bind(console));

});

