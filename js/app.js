
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
		el: 'body',
		data: {
			tweets: [],
			loading: true,
			error: false,
		},
	});


	// Reactivity.

	var swung =
		event(app.$$.swing, 'animationiteration')
		.merge(event(app.$$.swing, 'webkitAnimationIteration'));

	var tweetSource = Bacon.fromBinder( function (sink) {
		var request = qwest.get('php/tweets.php' + (debug ? '?debug' : ''), '', { responseType: 'json' });
		request.then( function (result) {
			sink(result);
			sink(new Bacon.End());
		});
		request.catch( function (error) {
			sink(new Bacon.Error(error));
			sink(new Bacon.End());
		});
		return function unsub() { };
	});

	var rawTweets =
		tweetSource
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

	tweets
	.take(1)
	.onValue( function () {
		app.loading = false;
	});

	tweetSource.onError( function () {
		app.error = true;
	})


});

