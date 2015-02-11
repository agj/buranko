
define( function (require) {

	var Vue = require('vue');
	var qwest = require('qwest');
	var R = require('ramda');
	var Bacon = require('bacon');

	require('components/tweet/script');

	Vue.config.debug = true;

	var log = console.log.bind(console);

	var app = new Vue({
		el: '#content',
		data: {
			tweets: [],
		},
	});

	var showTotal = 15;

	var tweets = Bacon.fromPromise(qwest.get('php/tweets.php?debug', '', { responseType: 'json' }))
		.map(R.prop('statuses'))
		.map( function (rawTweets) {
			return rawTweets.map(fixRawTweet);
		})
		.flatMap(Bacon.fromArray)
		.slidingWindow(showTotal, showTotal)
		.take(1);

	var swung = Bacon.fromEventTarget(app.$$.swing, 'animationiteration');
	swung.log('swung');

	tweets.onError(console.error.bind(console));
	tweets.onValue( function (tweets) {
		log('onValue', tweets);
		app.tweets = tweets;
	});


	function fixRawTweet(tweet, index, tweets) {
		log('fixRawTweet', tweet, index, tweets);
		return {
			text: tweet.text,
			index: index,
			// total: tweets.length,
			total: showTotal,
		}
	}

});

