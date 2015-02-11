
define( function (require) {

	var Vue = require('vue');
	var qwest = require('qwest');
	var R = require('ramda');
	var Bacon = require('bacon');


	// Components require.

	require('components/tweet/script');


	// Utils.

	function fixRawTweet(tweet, index, tweets) {
		return {
			text: tweet.text,
			position: index / (showTotal - 1),
		}
	}

	var grab = R.curry( function (amount, list) {
		var r = [];
		var len = list.length;
		var i = 0;
		while (i < amount) {
			var rand = Math.floor(Math.random() * len);
			r[i] = list[rand]
			i++;
		}
		return r;
	});

	var log = console.log.bind(console);
	var event = Bacon.fromEventTarget;


	// Preparation.

	var showTotal = 10;

	var debug = location.search === '?debug';
	Vue.config.debug = debug;

	var app = new Vue({
		el: '#content',
		data: {
			tweets: [],
		},
	});


	// Reactivity.

	var swung =
		event(app.$$.swing, 'animationiteration')
		.merge(event(app.$$.swing, 'webkitAnimationIteration'));

	var rawTweets =
		Bacon.fromPromise(qwest.get('php/tweets.php' + (debug ? '?debug' : ''), '', { responseType: 'json' }))
		.map(R.prop('statuses'))
		.toProperty();

	var update = swung.merge(rawTweets.changes());

	var tweets =
		rawTweets.sampledBy(update)
		.filter(R.identity)
		.map(grab(showTotal))
		.map( function (rawTweets) {
			return rawTweets.map(fixRawTweet);
		});

	tweets.onValue( function (tweets) {
		app.tweets = tweets;
	});


});

