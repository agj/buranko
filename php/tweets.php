<?php

$queries = array(
	// 'failure',
	'failure OR ashamed OR afraid',
);


$debug = array_key_exists('debug', $_REQUEST);


if (!$debug) {
	require_once 'vendor/autoload.php';
	require_once 'twitterkey.php';

	$twitter = new Freebird\Services\freebird\Client();
	$twitter->init_bearer_token($twitterKey['key'], $twitterKey['secret']);


	$query = $queries[array_rand($queries)];

	$tweets = $twitter->api_request('search/tweets.json', array(
		'q' => $query,
		'result_type' => 'recent',
		'count' => 100,
	));

	echo $tweets;
	die();
}

else {
	echo '{
	"statuses": [
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:17 +0000 2015",
			"id": 564968816388493300,
			"id_str": "564968816388493312",
			"text": "This is the funniest failure I\'ve seen in a while #dipshit @OSU_Students \"Just like 2012 Football ;)\"",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 384406985,
				"id_str": "384406985",
				"name": "TinyArtBriles",
				"screen_name": "TinyArtBriles",
				"location": "Waco",
				"profile_location": null,
				"description": "Not the real Art Briles. Just a tiny version of the greatest coach in America.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2792,
				"friends_count": 211,
				"listed_count": 36,
				"created_at": "Mon Oct 03 16:40:53 +0000 2011",
				"favourites_count": 24,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 3328,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/419164961567297537/0f89oFRZ_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/419164961567297537/0f89oFRZ_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "dipshit",
						"indices": [
							50,
							58
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "OSU_Students",
						"name": "OSU Student Section",
						"id": 2194944571,
						"id_str": "2194944571",
						"indices": [
							59,
							72
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:16 +0000 2015",
			"id": 564968811804520450,
			"id_str": "564968811804520449",
			"text": "@anetto @BioethxChat what is rate of failure to fully vax when alternative schedules are attempted? med noncompliance huge problem. #bioethx",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": 564968018045046800,
			"in_reply_to_status_id_str": "564968018045046786",
			"in_reply_to_user_id": 17331154,
			"in_reply_to_user_id_str": "17331154",
			"in_reply_to_screen_name": "anetto",
			"user": {
				"id": 10330152,
				"id_str": "10330152",
				"name": "laloca03",
				"screen_name": "laloca03",
				"location": "",
				"profile_location": null,
				"description": "freedom puts my faith in none of the above",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 27,
				"friends_count": 81,
				"listed_count": 2,
				"created_at": "Sat Nov 17 11:24:19 +0000 2007",
				"favourites_count": 80,
				"utc_offset": -21600,
				"time_zone": "Central Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 1604,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/378800000774041275/6700c58658a0cd1c8d19650bcb2f7f83_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/378800000774041275/6700c58658a0cd1c8d19650bcb2f7f83_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "bioethx",
						"indices": [
							132,
							140
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "anetto",
						"name": "Annette McKinnon",
						"id": 17331154,
						"id_str": "17331154",
						"indices": [
							0,
							7
						]
					},
					{
						"screen_name": "BioethxChat",
						"name": "BioethxChat™",
						"id": 2160016310,
						"id_str": "2160016310",
						"indices": [
							8,
							20
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:15 +0000 2015",
			"id": 564968810004750340,
			"id_str": "564968810004750337",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2985335527,
				"id_str": "2985335527",
				"name": "Leigha Antle",
				"screen_name": "LeighaAntle",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 3,
				"friends_count": 2,
				"listed_count": 0,
				"created_at": "Fri Jan 16 07:48:40 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 127,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564287638333440000/tD82PWRQ.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564287638333440000/tD82PWRQ.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564287629143719937/SHjmRbRl_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564287629143719937/SHjmRbRl_normal.jpeg",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:15 +0000 2015",
			"id": 564968808918425600,
			"id_str": "564968808918425600",
			"text": "Doubt kills more dreams than failure ever will",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 258060254,
				"id_str": "258060254",
				"name": "Theodore Jr",
				"screen_name": "sirjonesdos",
				"location": "Owasso, Ok - Stillwater, Ok",
				"profile_location": null,
				"description": "My tweets are just a compilation of my observations while trapped in this godforsaken nation - ΓΔi at Oklahoma State University",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 310,
				"friends_count": 218,
				"listed_count": 1,
				"created_at": "Sat Feb 26 21:43:34 +0000 2011",
				"favourites_count": 1774,
				"utc_offset": -21600,
				"time_zone": "Central Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 11723,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/458011353135845376/uGZ8BCLc_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/458011353135845376/uGZ8BCLc_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/258060254/1419988845",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:11 +0000 2015",
			"id": 564968792925556740,
			"id_str": "564968792925556736",
			"text": "Success is not final, failure is not fatal: it is the courage to continue that counts. ? Winston Churchill",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2943482801,
				"id_str": "2943482801",
				"name": "Tweet Lotto",
				"screen_name": "SweepsTime65558",
				"location": "",
				"profile_location": null,
				"description": "NOTE TO WINNERS: A unique invitation code is necessary 2 enter our exclusive sweepstakes. Click the link below:",
				"url": "http://t.co/zBfWxWPKtm",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/zBfWxWPKtm",
								"expanded_url": "http://bit.ly/14xGAcS",
								"display_url": "bit.ly/14xGAcS",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 36,
				"friends_count": 56,
				"listed_count": 0,
				"created_at": "Sat Dec 27 08:36:48 +0000 2014",
				"favourites_count": 0,
				"utc_offset": -39600,
				"time_zone": "International Date Line West",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 469,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/558774586779500544/lyQKIcNJ_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/558774586779500544/lyQKIcNJ_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2943482801/1422057219",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:09 +0000 2015",
			"id": 564968783543279600,
			"id_str": "564968783543279616",
			"text": "@cubtowing It hurt them though because most didn\'t want it. The fact they took it away proves it was a failure.",
			"source": "<a href=\"http://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android</a>",
			"truncated": false,
			"in_reply_to_status_id": 564967979444482050,
			"in_reply_to_status_id_str": "564967979444482048",
			"in_reply_to_user_id": 473635938,
			"in_reply_to_user_id_str": "473635938",
			"in_reply_to_screen_name": "cubtowing",
			"user": {
				"id": 216103914,
				"id_str": "216103914",
				"name": "Tony Polanco",
				"screen_name": "Romudeth",
				"location": "Flushing, New York",
				"profile_location": null,
				"description": "Geek polymath & aspiring superhero. Video Games/Pop Culture writer. Executive Editor at @TheKoalition and host of the @ThrowdownShow podcast. Enjoy the madness.",
				"url": "http://t.co/1E6T0dDCTO",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/1E6T0dDCTO",
								"expanded_url": "http://thekoalition.com/",
								"display_url": "thekoalition.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 994,
				"friends_count": 893,
				"listed_count": 28,
				"created_at": "Mon Nov 15 20:20:50 +0000 2010",
				"favourites_count": 4926,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 38840,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "022330",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/837995296/0534a4788b8d8e7dc83cbe99f6537a4e.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/837995296/0534a4788b8d8e7dc83cbe99f6537a4e.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/478250048594010112/32ih0_NA_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/478250048594010112/32ih0_NA_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/216103914/1421553781",
				"profile_link_color": "0484B3",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "C0DFEC",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "cubtowing",
						"name": "jack hannikian",
						"id": 473635938,
						"id_str": "473635938",
						"indices": [
							0,
							10
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:09 +0000 2015",
			"id": 564968783391903740,
			"id_str": "564968783391903744",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3022682015,
				"id_str": "3022682015",
				"name": "Александрина Жилкин",
				"screen_name": "Hyun7133",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Sat Feb 07 05:03:01 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 5,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://abs.twimg.com/sticky/default_profile_images/default_profile_3_normal.png",
				"profile_image_url_https": "https://abs.twimg.com/sticky/default_profile_images/default_profile_3_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": true,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:08 +0000 2015",
			"id": 564968779948785660,
			"id_str": "564968779948785664",
			"text": "Warning for city motorists after traffic light failure #Hampshire - http://t.co/PYjrzkZfML",
			"source": "<a href=\"http://uk.dotnewz.com/\" rel=\"nofollow\">UK Newz</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 198586019,
				"id_str": "198586019",
				"name": "UK Newz",
				"screen_name": "theUKNewz",
				"location": "UK",
				"profile_location": null,
				"description": "",
				"url": "http://t.co/3xcRHikj8W",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/3xcRHikj8W",
								"expanded_url": "http://uk.dotnewz.com",
								"display_url": "uk.dotnewz.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 746,
				"friends_count": 2001,
				"listed_count": 22,
				"created_at": "Mon Oct 04 18:10:18 +0000 2010",
				"favourites_count": 0,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 88079,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "131516",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme14/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme14/bg.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/536242170345181184/A88oUeRD_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/536242170345181184/A88oUeRD_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/198586019/1416685171",
				"profile_link_color": "009999",
				"profile_sidebar_border_color": "EEEEEE",
				"profile_sidebar_fill_color": "EFEFEF",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "Hampshire",
						"indices": [
							55,
							65
						]
					}
				],
				"symbols": [],
				"user_mentions": [],
				"urls": [
					{
						"url": "http://t.co/PYjrzkZfML",
						"expanded_url": "http://bit.ly/1vf1KTB",
						"display_url": "bit.ly/1vf1KTB",
						"indices": [
							68,
							90
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:07 +0000 2015",
			"id": 564968777440571400,
			"id_str": "564968777440571393",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2985684301,
				"id_str": "2985684301",
				"name": "Janie Peraza",
				"screen_name": "JaniePeraza",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1,
				"friends_count": 2,
				"listed_count": 0,
				"created_at": "Fri Jan 16 13:14:33 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 119,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564287858949644288/xoMT6k6q.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564287858949644288/xoMT6k6q.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564287848367390723/D-EOUGFR_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564287848367390723/D-EOUGFR_normal.jpeg",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:07:01 +0000 2015",
			"id": 564968752538591200,
			"id_str": "564968752538591232",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2218903837,
				"id_str": "2218903837",
				"name": "Priya Williamson",
				"screen_name": "xodawosunoti",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 367,
				"friends_count": 578,
				"listed_count": 11,
				"created_at": "Thu Nov 28 04:46:56 +0000 2013",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 11679,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "BADFCD",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme12/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme12/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/541561592635076612/iX1-EyzH_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/541561592635076612/iX1-EyzH_normal.png",
				"profile_link_color": "FF0000",
				"profile_sidebar_border_color": "F2E195",
				"profile_sidebar_fill_color": "FFF7CC",
				"profile_text_color": "0C3E53",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:59 +0000 2015",
			"id": 564968742530990100,
			"id_str": "564968742530990081",
			"text": "\"It is wise to keep in mind that neither success nor failure is ever final.\" - Roger Babson",
			"source": "<a href=\"https://www.google.com\" rel=\"nofollow\">YanaMinnn</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 225456830,
				"id_str": "225456830",
				"name": "Yana Min",
				"screen_name": "YanaMinnn",
				"location": "",
				"profile_location": null,
				"description": "I am part time volunteer, free lance web stalker:P",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 39,
				"friends_count": 494,
				"listed_count": 0,
				"created_at": "Sat Dec 11 16:11:26 +0000 2010",
				"favourites_count": 0,
				"utc_offset": -25200,
				"time_zone": "Mountain Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 247,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "277002",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/180468921/RADIO_MAR__c_pia.jpg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/180468921/RADIO_MAR__c_pia.jpg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/561108733820801024/xbT0fZb0_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/561108733820801024/xbT0fZb0_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/225456830/1422613748",
				"profile_link_color": "B3002D",
				"profile_sidebar_border_color": "010405",
				"profile_sidebar_fill_color": "ED425E",
				"profile_text_color": "261878",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:58 +0000 2015",
			"id": 564968738378612740,
			"id_str": "564968738378612736",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2363821584,
				"id_str": "2363821584",
				"name": "Azariel Kapelhof",
				"screen_name": "vofetytozef",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 290,
				"friends_count": 591,
				"listed_count": 1,
				"created_at": "Thu Feb 27 07:57:41 +0000 2014",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 189,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "BADFCD",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme12/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme12/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/442894248283623424/JUBU87J5_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/442894248283623424/JUBU87J5_normal.png",
				"profile_link_color": "FF0000",
				"profile_sidebar_border_color": "F2E195",
				"profile_sidebar_fill_color": "FFF7CC",
				"profile_text_color": "0C3E53",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:56 +0000 2015",
			"id": 564968729122181100,
			"id_str": "564968729122181121",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3007549241,
				"id_str": "3007549241",
				"name": "Горислава Ухалинa",
				"screen_name": "Caridad301A",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Sat Jan 31 12:16:46 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 16,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://abs.twimg.com/sticky/default_profile_images/default_profile_4_normal.png",
				"profile_image_url_https": "https://abs.twimg.com/sticky/default_profile_images/default_profile_4_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": true,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:53 +0000 2015",
			"id": 564968718405754900,
			"id_str": "564968718405754881",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2218902487,
				"id_str": "2218902487",
				"name": "Peti Baird",
				"screen_name": "xysocepatufy",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 372,
				"friends_count": 622,
				"listed_count": 8,
				"created_at": "Thu Nov 28 04:46:04 +0000 2013",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 12059,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "9AE4E8",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme16/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme16/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/541561608179159040/S9TcWvST_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/541561608179159040/S9TcWvST_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "BDDCAD",
				"profile_sidebar_fill_color": "DDFFCC",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:53 +0000 2015",
			"id": 564968718120153100,
			"id_str": "564968718120153088",
			"text": "Sometimes all it takes is one bad decision to be the difference between success and failure",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 238825392,
				"id_str": "238825392",
				"name": "Maria Perez",
				"screen_name": "ohSmiless",
				"location": "",
				"profile_location": null,
				"description": "you\'d lose your mind trying to understand mine. snapchat: ohsmiless             ig: _perezmariaa",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 196,
				"friends_count": 159,
				"listed_count": 0,
				"created_at": "Sun Jan 16 03:57:05 +0000 2011",
				"favourites_count": 2640,
				"utc_offset": -28800,
				"time_zone": "Pacific Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 3685,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/497233578/cute.jpg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/497233578/cute.jpg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/557099577715613697/Sw-evcwB_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/557099577715613697/Sw-evcwB_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/238825392/1423527444",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:51 +0000 2015",
			"id": 564968707567284200,
			"id_str": "564968707567284224",
			"text": "Outsourcing \'no defence for regulatory failure\': Following concerns over governance and oversight of outsourci... http://t.co/T8OrxLfGjK",
			"source": "<a href=\"http://twitterfeed.com\" rel=\"nofollow\">twitterfeed</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 120187399,
				"id_str": "120187399",
				"name": "Outsourcing Firm",
				"screen_name": "OutsourcingFirm",
				"location": "India",
				"profile_location": null,
				"description": "Outsource your SEO work. Ping me here outsourcingfirm0@gmail.com",
				"url": "http://t.co/k4NQwQ35vu",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/k4NQwQ35vu",
								"expanded_url": "http://www.facebook.com/pages/Outsourcing-Firm/109034659176558?created",
								"display_url": "facebook.com/pages/Outsourc…",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1479,
				"friends_count": 1047,
				"listed_count": 21,
				"created_at": "Fri Mar 05 18:42:50 +0000 2010",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 29607,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "4A3448",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/251136399/xf1793f947f05da46aca38e98a1286da.png",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/251136399/xf1793f947f05da46aca38e98a1286da.png",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/1396280842/diddlzone2_o_normal.jpg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/1396280842/diddlzone2_o_normal.jpg",
				"profile_link_color": "4D9993",
				"profile_sidebar_border_color": "D9D366",
				"profile_sidebar_fill_color": "82C487",
				"profile_text_color": "5A657D",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": [
					{
						"url": "http://t.co/T8OrxLfGjK",
						"expanded_url": "http://bit.ly/1y2ildn",
						"display_url": "bit.ly/1y2ildn",
						"indices": [
							114,
							136
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:48 +0000 2015",
			"id": 564968694481055740,
			"id_str": "564968694481055745",
			"text": "\"Big Data Failures Owe More To Business Culture Than Technology\" http://t.co/75HJc6bc6h",
			"source": "<a href=\"http://www.apple.com\" rel=\"nofollow\">iOS</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1702717561,
				"id_str": "1702717561",
				"name": "Kairos Technologies",
				"screen_name": "KairosTechInc",
				"location": "Irving, TX",
				"profile_location": null,
				"description": "Experts in cloud solutions, salesforce implementation & integration, http://t.co/88bih5nrqF development.",
				"url": "http://t.co/7Yq7tiqRRx",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/7Yq7tiqRRx",
								"expanded_url": "http://www.kairostech.com",
								"display_url": "kairostech.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": [
							{
								"url": "http://t.co/88bih5nrqF",
								"expanded_url": "http://Force.com",
								"display_url": "Force.com",
								"indices": [
									69,
									91
								]
							}
						]
					}
				},
				"protected": false,
				"followers_count": 10,
				"friends_count": 73,
				"listed_count": 1,
				"created_at": "Mon Aug 26 19:02:07 +0000 2013",
				"favourites_count": 1,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 33,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/520339258993692672/lIdm00vP_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/520339258993692672/lIdm00vP_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1702717561/1418282249",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": [
					{
						"url": "http://t.co/75HJc6bc6h",
						"expanded_url": "http://readwrite.com/2015/02/09/big-data-failure-blame-corporate-culture",
						"display_url": "readwrite.com/2015/02/09/big…",
						"indices": [
							65,
							87
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:46 +0000 2015",
			"id": 564968686188904450,
			"id_str": "564968686188904450",
			"text": "I can accept failure, everyone fails at something. But I can\'t accept not trying. -Michael Jordan",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2958010876,
				"id_str": "2958010876",
				"name": "Cash Connection",
				"screen_name": "JobSecret28994",
				"location": "",
				"profile_location": null,
				"description": "NOTICE: A unique invitation key is required 2 access our private jobs site. Click the link below:",
				"url": "http://t.co/B9sRwVTT84",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/B9sRwVTT84",
								"expanded_url": "http://bit.ly/1BO99Nx",
								"display_url": "bit.ly/1BO99Nx",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 9,
				"listed_count": 0,
				"created_at": "Sat Jan 03 05:58:19 +0000 2015",
				"favourites_count": 0,
				"utc_offset": -39600,
				"time_zone": "International Date Line West",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 118,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/563248706716049410/vpfwyIRb_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/563248706716049410/vpfwyIRb_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2958010876/1423123935",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:45 +0000 2015",
			"id": 564968685753106400,
			"id_str": "564968685753106432",
			"text": "RT @JonP9: Remember, the greatest failure is not to try. http://t.co/neVscB0zhr",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 34439664,
				"id_str": "34439664",
				"name": "Janelle Jordan",
				"screen_name": "theVAjmj",
				"location": "Greensboro NC",
				"profile_location": null,
				"description": "#OwnAmbassador,#Owner,Recruiter at #KI, Mother,CEO of JMJ Virtual Administrative Support, #TeamBossyGals Social Media Coordinator",
				"url": "http://t.co/4wWUuw3MeQ",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/4wWUuw3MeQ",
								"expanded_url": "http://www.jmjvirtualadminsupport.com",
								"display_url": "jmjvirtualadminsupport.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 517,
				"friends_count": 905,
				"listed_count": 5,
				"created_at": "Wed Apr 22 23:20:37 +0000 2009",
				"favourites_count": 1125,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 2103,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "642D8B",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/560776849232773120/-zreKrvr_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/560776849232773120/-zreKrvr_normal.jpeg",
				"profile_link_color": "FF0000",
				"profile_sidebar_border_color": "65B0DA",
				"profile_sidebar_fill_color": "7AC3EE",
				"profile_text_color": "3D1957",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:01:38 +0000 2015",
				"id": 564967394452709400,
				"id_str": "564967394452709379",
				"text": "Remember, the greatest failure is not to try. http://t.co/neVscB0zhr",
				"source": "<a href=\"http://ifttt.com\" rel=\"nofollow\">IFTTT</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 307424496,
					"id_str": "307424496",
					"name": "Bossy Gals Promoter",
					"screen_name": "JonP9",
					"location": "Watch CEO\'s Emancipation Video",
					"profile_location": null,
					"description": "Promoting #TeamBossyGals & the noble cause Gerri Chambers is campaigning for: http://t.co/2Y62tfl58N origin Texas USA.",
					"url": "https://t.co/eROgfTrE3i",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "https://t.co/eROgfTrE3i",
									"expanded_url": "https://www.youtube.com/watch?v=EJeYndsJLis",
									"display_url": "youtube.com/watch?v=EJeYnd…",
									"indices": [
										0,
										23
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/2Y62tfl58N",
									"expanded_url": "http://wp.me/P4xKum-3",
									"display_url": "wp.me/P4xKum-3",
									"indices": [
										78,
										100
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 32167,
					"friends_count": 31301,
					"listed_count": 216,
					"created_at": "Sun May 29 16:21:29 +0000 2011",
					"favourites_count": 370,
					"utc_offset": null,
					"time_zone": null,
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 54488,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "FFF04D",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/378800000015844075/d2048b9b040fb3bfae514fbd6cc28fe6.png",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/378800000015844075/d2048b9b040fb3bfae514fbd6cc28fe6.png",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/560530848374476800/Jao3et2v_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/560530848374476800/Jao3et2v_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/307424496/1422475753",
					"profile_link_color": "0099CC",
					"profile_sidebar_border_color": "FFFFFF",
					"profile_sidebar_fill_color": "F6FFD1",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 2,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": [
						{
							"url": "http://t.co/neVscB0zhr",
							"expanded_url": "http://ift.tt/1g1dMXH",
							"display_url": "ift.tt/1g1dMXH",
							"indices": [
								46,
								68
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 2,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "JonP9",
						"name": "Bossy Gals Promoter",
						"id": 307424496,
						"id_str": "307424496",
						"indices": [
							3,
							9
						]
					}
				],
				"urls": [
					{
						"url": "http://t.co/neVscB0zhr",
						"expanded_url": "http://ift.tt/1g1dMXH",
						"display_url": "ift.tt/1g1dMXH",
						"indices": [
							57,
							79
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:45 +0000 2015",
			"id": 564968683236503550,
			"id_str": "564968683236503553",
			"text": "RT @JohnCena: Never fear failure, fear never learning from failure. #nevergiveup https://t.co/f0ZYMe2sku",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 539677843,
				"id_str": "539677843",
				"name": "Katrina Michelle",
				"screen_name": "katrinams86",
				"location": "Bowling Green Ky",
				"profile_location": null,
				"description": "My Hero is Wwe\'s the Undertaker!!!! it is my dream to meet him 1 day!!! #creatureofthenightforlife",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 162,
				"friends_count": 292,
				"listed_count": 2,
				"created_at": "Thu Mar 29 05:06:57 +0000 2012",
				"favourites_count": 1478,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 3269,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/486604541853724672/ueATXllW_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/486604541853724672/ueATXllW_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/539677843/1415734710",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Sat Feb 07 19:24:08 +0000 2015",
				"id": 564142587674894340,
				"id_str": "564142587674894336",
				"text": "Never fear failure, fear never learning from failure. #nevergiveup https://t.co/f0ZYMe2sku",
				"source": "<a href=\"http://vine.co\" rel=\"nofollow\">Vine - Make a Scene</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 141664648,
					"id_str": "141664648",
					"name": "John Cena",
					"screen_name": "JohnCena",
					"location": "West Newbury, MA",
					"profile_location": null,
					"description": "The Champ is Here on Twitter! Leader of WWE\'s Cenation and 15-time World Champion, in 140 characters or less. IG: http://t.co/xj6TkjZhND",
					"url": "https://t.co/eGsSnoXGm5",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "https://t.co/eGsSnoXGm5",
									"expanded_url": "https://vine.co/JohnCena",
									"display_url": "vine.co/JohnCena",
									"indices": [
										0,
										23
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/xj6TkjZhND",
									"expanded_url": "http://www.instagram.com/johncena",
									"display_url": "instagram.com/johncena",
									"indices": [
										114,
										136
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 6825978,
					"friends_count": 2195,
					"listed_count": 32331,
					"created_at": "Sat May 08 17:43:50 +0000 2010",
					"favourites_count": 0,
					"utc_offset": -18000,
					"time_zone": "Eastern Time (US & Canada)",
					"geo_enabled": false,
					"verified": true,
					"statuses_count": 3680,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": true,
					"profile_background_color": "000000",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/722971585/1b563075c6f6e8a8c19c95d0c45a453a.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/722971585/1b563075c6f6e8a8c19c95d0c45a453a.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/558435037461635073/3Jlz36n7_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/558435037461635073/3Jlz36n7_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/141664648/1348254711",
					"profile_link_color": "0A1169",
					"profile_sidebar_border_color": "FFFFFF",
					"profile_sidebar_fill_color": "F7D7D7",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1527,
				"favorite_count": 2424,
				"entities": {
					"hashtags": [
						{
							"text": "nevergiveup",
							"indices": [
								54,
								66
							]
						}
					],
					"symbols": [],
					"user_mentions": [],
					"urls": [
						{
							"url": "https://t.co/f0ZYMe2sku",
							"expanded_url": "https://vine.co/v/OUZ1anv03U3",
							"display_url": "vine.co/v/OUZ1anv03U3",
							"indices": [
								67,
								90
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 1527,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "nevergiveup",
						"indices": [
							68,
							80
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "JohnCena",
						"name": "John Cena",
						"id": 141664648,
						"id_str": "141664648",
						"indices": [
							3,
							12
						]
					}
				],
				"urls": [
					{
						"url": "https://t.co/f0ZYMe2sku",
						"expanded_url": "https://vine.co/v/OUZ1anv03U3",
						"display_url": "vine.co/v/OUZ1anv03U3",
						"indices": [
							81,
							104
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:44 +0000 2015",
			"id": 564968679016656900,
			"id_str": "564968679016656896",
			"text": "RT @GeorgeVocals: Failure is not an option for me...nope ✊",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3009722558,
				"id_str": "3009722558",
				"name": "Madison Blackburn",
				"screen_name": "MadisonBlackbu9",
				"location": "nun ya... nun ya business ",
				"profile_location": null,
				"description": "there is a kind of beauty in imperfection ~~~~~~~~~~~~~~~~~~~~~~",
				"url": "http://t.co/8UpLECfYPV",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/8UpLECfYPV",
								"expanded_url": "http://tooswaggy.com",
								"display_url": "tooswaggy.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 120,
				"friends_count": 205,
				"listed_count": 1,
				"created_at": "Thu Feb 05 04:26:39 +0000 2015",
				"favourites_count": 632,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 362,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/563193078970740737/VORX4LjU_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/563193078970740737/VORX4LjU_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/3009722558/1423114183",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:03:55 +0000 2015",
				"id": 564967970108358660,
				"id_str": "564967970108358657",
				"text": "Failure is not an option for me...nope ✊",
				"source": "<a href=\"http://twitter.com/#!/download/ipad\" rel=\"nofollow\">Twitter for iPad</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 74328806,
					"id_str": "74328806",
					"name": "George Vocals",
					"screen_name": "GeorgeVocals",
					"location": "Everywhere",
					"profile_location": null,
					"description": "Be proud of who you are, and always believe in yourself. Be sure to check out my single Crazy out Now!! Oh and i do crazy things",
					"url": "http://t.co/15taO6F88P",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/15taO6F88P",
									"expanded_url": "http://youtube.com/georgevocals",
									"display_url": "youtube.com/georgevocals",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 29426,
					"friends_count": 21261,
					"listed_count": 25,
					"created_at": "Tue Sep 15 01:34:05 +0000 2009",
					"favourites_count": 19335,
					"utc_offset": -18000,
					"time_zone": "Eastern Time (US & Canada)",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 10219,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "131516",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/526134985447579649/_t7f8s3M.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/526134985447579649/_t7f8s3M.jpeg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/553914030671532032/sKZc_WQ2_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/553914030671532032/sKZc_WQ2_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/74328806/1416793956",
					"profile_link_color": "009999",
					"profile_sidebar_border_color": "000000",
					"profile_sidebar_fill_color": "EFEFEF",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 2,
				"favorite_count": 4,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 2,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "GeorgeVocals",
						"name": "George Vocals",
						"id": 74328806,
						"id_str": "74328806",
						"indices": [
							3,
							16
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:38 +0000 2015",
			"id": 564968654333546500,
			"id_str": "564968654333546496",
			"text": "It is wise to keep in mind that neither success nor failure is ever final. - Roger Babson",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2996790278,
				"id_str": "2996790278",
				"name": "Prize World",
				"screen_name": "PrizeTweet57748",
				"location": "",
				"profile_location": null,
				"description": "NOTICE TO WINNERS: A unique invite code is necessary 2 enter our private contest. Click the link below:",
				"url": "http://t.co/VQH2bWjFIc",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/VQH2bWjFIc",
								"expanded_url": "http://bit.ly/1tM9trp",
								"display_url": "bit.ly/1tM9trp",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Mon Jan 26 07:49:57 +0000 2015",
				"favourites_count": 0,
				"utc_offset": -39600,
				"time_zone": "International Date Line West",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 134,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/563261573234302977/dGcmXXex_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/563261573234302977/dGcmXXex_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2996790278/1423127002",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:37 +0000 2015",
			"id": 564968650428260350,
			"id_str": "564968650428260352",
			"text": "RT @sammyROLLSTRONG: I\'m allergic to failure",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1132348176,
				"id_str": "1132348176",
				"name": "⚪️Louie Baby⚪️",
				"screen_name": "1RichGD",
				"location": "⚫️Bos Up⚪️",
				"profile_location": null,
				"description": "Street Drea〽️ers Ent.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 212,
				"friends_count": 151,
				"listed_count": 0,
				"created_at": "Tue Jan 29 23:08:12 +0000 2013",
				"favourites_count": 98,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 1066,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "131516",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme14/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme14/bg.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/559490459744346112/exkmFDcZ_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/559490459744346112/exkmFDcZ_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1132348176/1422672701",
				"profile_link_color": "009999",
				"profile_sidebar_border_color": "EEEEEE",
				"profile_sidebar_fill_color": "EFEFEF",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:01:40 +0000 2015",
				"id": 564967404363845600,
				"id_str": "564967404363845632",
				"text": "I\'m allergic to failure",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 199629661,
					"id_str": "199629661",
					"name": "Nigerian_Hooper#⃣5⃣",
					"screen_name": "sammyROLLSTRONG",
					"location": "Tampa FL USA",
					"profile_location": null,
					"description": "ADD ME ON IG: nigerian_hooper05",
					"url": "http://t.co/3cZLy3XlOn",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/3cZLy3XlOn",
									"expanded_url": "http://www.Facebook.com/sammyjnnaji",
									"display_url": "Facebook.com/sammyjnnaji",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 50156,
					"friends_count": 36542,
					"listed_count": 21,
					"created_at": "Thu Oct 07 10:54:19 +0000 2010",
					"favourites_count": 3592,
					"utc_offset": -21600,
					"time_zone": "Central Time (US & Canada)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 26525,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/447075300/ballislife.jpg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/447075300/ballislife.jpg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/563947873390186496/cpKZG-mX_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/563947873390186496/cpKZG-mX_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/199629661/1420913597",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 5,
				"favorite_count": 5,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 5,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "sammyROLLSTRONG",
						"name": "Nigerian_Hooper#⃣5⃣",
						"id": 199629661,
						"id_str": "199629661",
						"indices": [
							3,
							19
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:36 +0000 2015",
			"id": 564968648104607740,
			"id_str": "564968648104607744",
			"text": "We have a brand new #podcast interview with @helloeddy! We talk about FAILURE…in fact, we NEED to #fail :) http://t.co/qCkSxUuOCW",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 318599062,
				"id_str": "318599062",
				"name": "Nik Parks",
				"screen_name": "Nik_Parks",
				"location": "New York City",
				"profile_location": null,
				"description": "Host of the Launching Creative #Podcast. Speaker. Writer. Entrepreneur. Co-founder of @launchcreate. We are the Anti-Starving Artists.",
				"url": "http://t.co/v10OC544R7",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/v10OC544R7",
								"expanded_url": "http://launchingcreative.com/",
								"display_url": "launchingcreative.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 5972,
				"friends_count": 4805,
				"listed_count": 213,
				"created_at": "Thu Jun 16 18:56:01 +0000 2011",
				"favourites_count": 1087,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 11504,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "333333",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/436915934565896192/-aTZR9iD.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/436915934565896192/-aTZR9iD.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/2808872014/43af184d5e3a4e11e4b8f4915af7267b_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/2808872014/43af184d5e3a4e11e4b8f4915af7267b_normal.png",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/318599062/1412718907",
				"profile_link_color": "EE3554",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "D6D6D6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "podcast",
						"indices": [
							20,
							28
						]
					},
					{
						"text": "fail",
						"indices": [
							98,
							103
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "helloeddy",
						"name": "Edwin Merino",
						"id": 16373519,
						"id_str": "16373519",
						"indices": [
							44,
							54
						]
					}
				],
				"urls": [
					{
						"url": "http://t.co/qCkSxUuOCW",
						"expanded_url": "http://launchingcreative.com/episode-39/",
						"display_url": "launchingcreative.com/episode-39/",
						"indices": [
							107,
							129
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:35 +0000 2015",
			"id": 564968643843207200,
			"id_str": "564968643843207168",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3020804849,
				"id_str": "3020804849",
				"name": "Правдина Горюшина6",
				"screen_name": "6Goryushina2016",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Fri Feb 06 00:57:01 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 18,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://abs.twimg.com/sticky/default_profile_images/default_profile_6_normal.png",
				"profile_image_url_https": "https://abs.twimg.com/sticky/default_profile_images/default_profile_6_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": true,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:35 +0000 2015",
			"id": 564968640307793900,
			"id_str": "564968640307793920",
			"text": "RT @gerri_chambers: You should fear never reaching your goals more than fearing failure. #teambossygals http://t.co/LuuCMqTQVT",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 34439664,
				"id_str": "34439664",
				"name": "Janelle Jordan",
				"screen_name": "theVAjmj",
				"location": "Greensboro NC",
				"profile_location": null,
				"description": "#OwnAmbassador,#Owner,Recruiter at #KI, Mother,CEO of JMJ Virtual Administrative Support, #TeamBossyGals Social Media Coordinator",
				"url": "http://t.co/4wWUuw3MeQ",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/4wWUuw3MeQ",
								"expanded_url": "http://www.jmjvirtualadminsupport.com",
								"display_url": "jmjvirtualadminsupport.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 517,
				"friends_count": 905,
				"listed_count": 5,
				"created_at": "Wed Apr 22 23:20:37 +0000 2009",
				"favourites_count": 1125,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 2103,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "642D8B",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/560776849232773120/-zreKrvr_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/560776849232773120/-zreKrvr_normal.jpeg",
				"profile_link_color": "FF0000",
				"profile_sidebar_border_color": "65B0DA",
				"profile_sidebar_fill_color": "7AC3EE",
				"profile_text_color": "3D1957",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:03:28 +0000 2015",
				"id": 564967856883126300,
				"id_str": "564967856883126272",
				"text": "You should fear never reaching your goals more than fearing failure. #teambossygals http://t.co/LuuCMqTQVT",
				"source": "<a href=\"http://ifttt.com\" rel=\"nofollow\">IFTTT</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 465854594,
					"id_str": "465854594",
					"name": "Gerri Chambers",
					"screen_name": "gerri_chambers",
					"location": "Texas, USA",
					"profile_location": null,
					"description": "Take a sneak peak before the Grand Opening - http://t.co/8fRHXm4NaL Get in now and be an insider  #teambossygals",
					"url": "http://t.co/HV0huKVwGK",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/HV0huKVwGK",
									"expanded_url": "http://about.me/gpuckett",
									"display_url": "about.me/gpuckett",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/8fRHXm4NaL",
									"expanded_url": "http://www.teambossygals.com",
									"display_url": "teambossygals.com",
									"indices": [
										45,
										67
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 893,
					"friends_count": 603,
					"listed_count": 35,
					"created_at": "Mon Jan 16 20:17:07 +0000 2012",
					"favourites_count": 284,
					"utc_offset": -21600,
					"time_zone": "Central Time (US & Canada)",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 6262,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "F40A61",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/449208484135849984/f1e37eej.png",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/449208484135849984/f1e37eej.png",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/520996297638047744/X0TrJ3jz_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/520996297638047744/X0TrJ3jz_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/465854594/1398279379",
					"profile_link_color": "9C2A76",
					"profile_sidebar_border_color": "736D68",
					"profile_sidebar_fill_color": "504F81",
					"profile_text_color": "232792",
					"profile_use_background_image": false,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 0,
				"entities": {
					"hashtags": [
						{
							"text": "teambossygals",
							"indices": [
								69,
								83
							]
						}
					],
					"symbols": [],
					"user_mentions": [],
					"urls": [
						{
							"url": "http://t.co/LuuCMqTQVT",
							"expanded_url": "http://bit.ly/Empowerbiz",
							"display_url": "bit.ly/Empowerbiz",
							"indices": [
								84,
								106
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "teambossygals",
						"indices": [
							89,
							103
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "gerri_chambers",
						"name": "Gerri Chambers",
						"id": 465854594,
						"id_str": "465854594",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": [
					{
						"url": "http://t.co/LuuCMqTQVT",
						"expanded_url": "http://bit.ly/Empowerbiz",
						"display_url": "bit.ly/Empowerbiz",
						"indices": [
							104,
							126
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:33 +0000 2015",
			"id": 564968635219730400,
			"id_str": "564968635219730432",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2368761432,
				"id_str": "2368761432",
				"name": "Henley Goodbur",
				"screen_name": "nocytigabyq",
				"location": "",
				"profile_location": null,
				"description": "Tidak bertindak karena menunggu hilangnya rasa malas, adalah bentuk kemalasan yang lebih parah lagi. – Mario Teguh",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 344,
				"friends_count": 351,
				"listed_count": 3,
				"created_at": "Sun Mar 02 11:48:43 +0000 2014",
				"favourites_count": 1,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 174,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/535671839410778112/5DjbZXNF_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/535671839410778112/5DjbZXNF_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:33 +0000 2015",
			"id": 564968633445928960,
			"id_str": "564968633445928961",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2985367219,
				"id_str": "2985367219",
				"name": "Cammy Hellmuth",
				"screen_name": "CammyHellmuth",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Fri Jan 16 08:16:07 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 125,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564287652799602690/Zmf8OV3f.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564287652799602690/Zmf8OV3f.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564287643559534592/Spic3EbH_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564287643559534592/Spic3EbH_normal.jpeg",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:33 +0000 2015",
			"id": 564968632006877200,
			"id_str": "564968632006877185",
			"text": "Failure bring you closer to success\n\n#Moron #BusinessIssues",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1110394441,
				"id_str": "1110394441",
				"name": "Banana.Art",
				"screen_name": "iBananaArtStyl",
				"location": "General Santos City",
				"profile_location": null,
				"description": "No Game No Life",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 68,
				"friends_count": 329,
				"listed_count": 1,
				"created_at": "Tue Jan 22 01:30:35 +0000 2013",
				"favourites_count": 341,
				"utc_offset": 28800,
				"time_zone": "Singapore",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 1585,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/378800000033096186/de75da844f2d042aef2005036d588734.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/378800000033096186/de75da844f2d042aef2005036d588734.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/540862573743046656/ia6XvND1_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/540862573743046656/ia6XvND1_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1110394441/1417786484",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "Moron",
						"indices": [
							37,
							43
						]
					},
					{
						"text": "BusinessIssues",
						"indices": [
							44,
							59
						]
					}
				],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:31 +0000 2015",
			"id": 564968625941909500,
			"id_str": "564968625941909504",
			"text": "@jftrigo9 thanks for favoriting my failure 😔",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": 564966077486997500,
			"in_reply_to_status_id_str": "564966077486997504",
			"in_reply_to_user_id": 259970002,
			"in_reply_to_user_id_str": "259970002",
			"in_reply_to_screen_name": "empodd",
			"user": {
				"id": 259970002,
				"id_str": "259970002",
				"name": "Em",
				"screen_name": "empodd",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 281,
				"friends_count": 370,
				"listed_count": 0,
				"created_at": "Wed Mar 02 23:36:06 +0000 2011",
				"favourites_count": 2702,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 3228,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "DBE9ED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/378800000000454958/a322988527fd853bfc20c092dbb76f2a.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/378800000000454958/a322988527fd853bfc20c092dbb76f2a.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/504327047527665664/F2H1kPNv_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/504327047527665664/F2H1kPNv_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/259970002/1420303260",
				"profile_link_color": "CC3366",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "E6F6F9",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": {
				"type": "Point",
				"coordinates": [
					26.10568679,
					-80.39840805
				]
			},
			"coordinates": {
				"type": "Point",
				"coordinates": [
					-80.39840805,
					26.10568679
				]
			},
			"place": {
				"id": "88a21205dd4728ea",
				"url": "https://api.twitter.com/1.1/geo/id/88a21205dd4728ea.json",
				"place_type": "city",
				"name": "Weston",
				"full_name": "Weston, FL",
				"country_code": "US",
				"country": "United States",
				"contained_within": [],
				"bounding_box": {
					"type": "Polygon",
					"coordinates": [
						[
							[
								-80.4419774,
								26.0620314
							],
							[
								-80.361426,
								26.0620314
							],
							[
								-80.361426,
								26.144367
							],
							[
								-80.4419774,
								26.144367
							]
						]
					]
				},
				"attributes": []
			},
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "jftrigo9",
						"name": "Alceé Arobin",
						"id": 358571517,
						"id_str": "358571517",
						"indices": [
							0,
							9
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:30 +0000 2015",
			"id": 564968619830829060,
			"id_str": "564968619830829056",
			"text": "RT @BaseballSecret1: I never lose, I just learn! You have to LEARN from every challenge, mistake, error, strikeout, and failure that this g…",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2147909881,
				"id_str": "2147909881",
				"name": "Ryan Jackson",
				"screen_name": "savageryvn",
				"location": "",
				"profile_location": null,
				"description": "Bread Winners Association |daijha was here|",
				"url": "http://t.co/JeWTLfPnTW",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/JeWTLfPnTW",
								"expanded_url": "http://ask.fm/Savageryvn",
								"display_url": "ask.fm/Savageryvn",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 341,
				"friends_count": 338,
				"listed_count": 1,
				"created_at": "Mon Oct 21 22:09:40 +0000 2013",
				"favourites_count": 495,
				"utc_offset": -21600,
				"time_zone": "Central Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 6393,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/557681890074066944/TafnJNbO_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/557681890074066944/TafnJNbO_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2147909881/1421684040",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Sun Feb 01 03:27:17 +0000 2015",
				"id": 561727458009837600,
				"id_str": "561727458009837568",
				"text": "I never lose, I just learn! You have to LEARN from every challenge, mistake, error, strikeout, and failure that this game throws at you!",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2161496167,
					"id_str": "2161496167",
					"name": "⚾️Baseball Secrets",
					"screen_name": "BaseballSecret1",
					"location": "Colorado Springs",
					"profile_location": null,
					"description": "Hitting Consultant - Athlete - Entrepreneur Helping players reach their full potential! #DynamiteHitting ⚾️http://t.co/vcVdQrz2NY",
					"url": "http://t.co/coHHwVjb2J",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/coHHwVjb2J",
									"expanded_url": "http://www.BaseballFitnessTips.com",
									"display_url": "BaseballFitnessTips.com",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/vcVdQrz2NY",
									"expanded_url": "http://www.DynamiteHitting.com",
									"display_url": "DynamiteHitting.com",
									"indices": [
										107,
										129
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 5824,
					"friends_count": 2012,
					"listed_count": 10,
					"created_at": "Mon Oct 28 19:39:32 +0000 2013",
					"favourites_count": 192,
					"utc_offset": null,
					"time_zone": null,
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 618,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554764395679465473/mAp99wh1_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554764395679465473/mAp99wh1_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2161496167/1421168257",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": true,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 27,
				"favorite_count": 18,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 27,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "BaseballSecret1",
						"name": "⚾️Baseball Secrets",
						"id": 2161496167,
						"id_str": "2161496167",
						"indices": [
							3,
							19
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:30 +0000 2015",
			"id": 564968619374030850,
			"id_str": "564968619374030848",
			"text": "RT @SarahPck: “Success is not final, failure is not fatal: it is the courage to continue that counts.” – Winston Churchill",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 236084085,
				"id_str": "236084085",
				"name": "Marco Pileggi",
				"screen_name": "MarcoPileggi_",
				"location": "Brampton",
				"profile_location": null,
				"description": "//P » This is my biography",
				"url": "http://t.co/uGOVMrhZeB",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/uGOVMrhZeB",
								"expanded_url": "http://www.facebook.com/#!/profile.php?id=506803256",
								"display_url": "facebook.com/#!/profile.php…",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 208,
				"friends_count": 205,
				"listed_count": 1,
				"created_at": "Sun Jan 09 19:29:23 +0000 2011",
				"favourites_count": 18,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 3980,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "000000",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543925279492542464/wsZMQme5.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543925279492542464/wsZMQme5.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/536285115400196097/iFXb8Cys_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/536285115400196097/iFXb8Cys_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/236084085/1416695261",
				"profile_link_color": "000000",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:42 +0000 2015",
				"id": 564968420303962100,
				"id_str": "564968420303962113",
				"text": "“Success is not final, failure is not fatal: it is the courage to continue that counts.” – Winston Churchill",
				"source": "<a href=\"http://www.apple.com/\" rel=\"nofollow\">OS X</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 279113308,
					"id_str": "279113308",
					"name": "sera puknl",
					"screen_name": "SarahPck",
					"location": "⚪⚪",
					"profile_location": null,
					"description": "A river cuts through rock not because of its power but because its persistence",
					"url": null,
					"entities": {
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 349,
					"friends_count": 232,
					"listed_count": 1,
					"created_at": "Fri Apr 08 16:22:08 +0000 2011",
					"favourites_count": 1632,
					"utc_offset": -21600,
					"time_zone": "Central Time (US & Canada)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 6730,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "1A1B1F",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme9/bg.gif",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme9/bg.gif",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/526736549397155841/ovX48k7G_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/526736549397155841/ovX48k7G_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/279113308/1411363353",
					"profile_link_color": "2FC2EF",
					"profile_sidebar_border_color": "181A1E",
					"profile_sidebar_fill_color": "252429",
					"profile_text_color": "666666",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 1,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "SarahPck",
						"name": "sera puknl",
						"id": 279113308,
						"id_str": "279113308",
						"indices": [
							3,
							12
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:29 +0000 2015",
			"id": 564968617272692740,
			"id_str": "564968617272692736",
			"text": "RT @TeamBossyGals: You should fear never reaching your goals more than fearing failure. #getbossy http://t.co/LxZzidQh24",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 34439664,
				"id_str": "34439664",
				"name": "Janelle Jordan",
				"screen_name": "theVAjmj",
				"location": "Greensboro NC",
				"profile_location": null,
				"description": "#OwnAmbassador,#Owner,Recruiter at #KI, Mother,CEO of JMJ Virtual Administrative Support, #TeamBossyGals Social Media Coordinator",
				"url": "http://t.co/4wWUuw3MeQ",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/4wWUuw3MeQ",
								"expanded_url": "http://www.jmjvirtualadminsupport.com",
								"display_url": "jmjvirtualadminsupport.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 517,
				"friends_count": 905,
				"listed_count": 5,
				"created_at": "Wed Apr 22 23:20:37 +0000 2009",
				"favourites_count": 1125,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 2103,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "642D8B",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/560776849232773120/-zreKrvr_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/560776849232773120/-zreKrvr_normal.jpeg",
				"profile_link_color": "FF0000",
				"profile_sidebar_border_color": "65B0DA",
				"profile_sidebar_fill_color": "7AC3EE",
				"profile_text_color": "3D1957",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:04:00 +0000 2015",
				"id": 564967991767744500,
				"id_str": "564967991767744512",
				"text": "You should fear never reaching your goals more than fearing failure. #getbossy http://t.co/LxZzidQh24",
				"source": "<a href=\"http://ifttt.com\" rel=\"nofollow\">IFTTT</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 278033589,
					"id_str": "278033589",
					"name": "The Social Butterfly",
					"screen_name": "TeamBossyGals",
					"location": "Texas, USA! ",
					"profile_location": null,
					"description": "Grand Opening February 14, 2015.                            Official Site for artists, advocates & entrepreneurs.      #TeamBossyGals",
					"url": "http://t.co/8fRHXm4NaL",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/8fRHXm4NaL",
									"expanded_url": "http://www.teambossygals.com",
									"display_url": "teambossygals.com",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 148908,
					"friends_count": 84874,
					"listed_count": 769,
					"created_at": "Wed Apr 06 13:36:29 +0000 2011",
					"favourites_count": 494,
					"utc_offset": 0,
					"time_zone": "London",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 55270,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "131516",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/554345583817666560/GH0Wgygx.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/554345583817666560/GH0Wgygx.jpeg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/552744565598220288/XsRXby0N_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/552744565598220288/XsRXby0N_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/278033589/1422299983",
					"profile_link_color": "F5ABB5",
					"profile_sidebar_border_color": "000000",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 0,
				"entities": {
					"hashtags": [
						{
							"text": "getbossy",
							"indices": [
								69,
								78
							]
						}
					],
					"symbols": [],
					"user_mentions": [],
					"urls": [
						{
							"url": "http://t.co/LxZzidQh24",
							"expanded_url": "http://bit.ly/bossyblog",
							"display_url": "bit.ly/bossyblog",
							"indices": [
								79,
								101
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "getbossy",
						"indices": [
							88,
							97
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "TeamBossyGals",
						"name": "The Social Butterfly",
						"id": 278033589,
						"id_str": "278033589",
						"indices": [
							3,
							17
						]
					}
				],
				"urls": [
					{
						"url": "http://t.co/LxZzidQh24",
						"expanded_url": "http://bit.ly/bossyblog",
						"display_url": "bit.ly/bossyblog",
						"indices": [
							98,
							120
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:29 +0000 2015",
			"id": 564968615955296260,
			"id_str": "564968615955296256",
			"text": "@WeirdBirdPal thank you. And let us all grieve for the failure of Argentinian 3rd world socialism",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": 564968248794292200,
			"in_reply_to_status_id_str": "564968248794292224",
			"in_reply_to_user_id": 1513825298,
			"in_reply_to_user_id_str": "1513825298",
			"in_reply_to_screen_name": "WeirdBirdPal",
			"user": {
				"id": 385576596,
				"id_str": "385576596",
				"name": "A New Direction",
				"screen_name": "ColonialProjekt",
				"location": "Columbus, OH",
				"profile_location": null,
				"description": "History is gonna be harder to make than I thought",
				"url": "http://t.co/izJ5fyFzqw",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/izJ5fyFzqw",
								"expanded_url": "http://colonialprojektz.com",
								"display_url": "colonialprojektz.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 361,
				"friends_count": 963,
				"listed_count": 9,
				"created_at": "Wed Oct 05 18:59:49 +0000 2011",
				"favourites_count": 3475,
				"utc_offset": -14400,
				"time_zone": "Atlantic Time (Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 11723,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/545477820206440449/34992ZIQ_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/545477820206440449/34992ZIQ_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/385576596/1419134649",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": {
				"type": "Point",
				"coordinates": [
					0,
					0
				]
			},
			"coordinates": {
				"type": "Point",
				"coordinates": [
					0,
					0
				]
			},
			"place": {
				"id": "de599025180e2ee7",
				"url": "https://api.twitter.com/1.1/geo/id/de599025180e2ee7.json",
				"place_type": "admin",
				"name": "Ohio",
				"full_name": "Ohio, USA",
				"country_code": "US",
				"country": "United States",
				"contained_within": [],
				"bounding_box": {
					"type": "Polygon",
					"coordinates": [
						[
							[
								-84.820272,
								38.403186
							],
							[
								-80.518626,
								38.403186
							],
							[
								-80.518626,
								42.327133
							],
							[
								-84.820272,
								42.327133
							]
						]
					]
				},
				"attributes": []
			},
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "WeirdBirdPal",
						"name": "Gotta Go Fast 1917",
						"id": 1513825298,
						"id_str": "1513825298",
						"indices": [
							0,
							13
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:28 +0000 2015",
			"id": 564968611107074050,
			"id_str": "564968611107074048",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2218885638,
				"id_str": "2218885638",
				"name": "Konstanczia Estes",
				"screen_name": "licerobikoza",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 398,
				"friends_count": 573,
				"listed_count": 10,
				"created_at": "Thu Nov 28 04:35:27 +0000 2013",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 12184,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/541561476016635904/3qqcp5XP_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/541561476016635904/3qqcp5XP_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:25 +0000 2015",
			"id": 564968600654454800,
			"id_str": "564968600654454784",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2986359068,
				"id_str": "2986359068",
				"name": "Dixie Gravell",
				"screen_name": "DixieGravell",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1,
				"friends_count": 27,
				"listed_count": 0,
				"created_at": "Sat Jan 17 02:51:51 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 112,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564288584480337922/iFOa6M1B.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564288584480337922/iFOa6M1B.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564288570026770434/_l9gFY6__normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564288570026770434/_l9gFY6__normal.png",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:25 +0000 2015",
			"id": 564968597928542200,
			"id_str": "564968597928542208",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3008138997,
				"id_str": "3008138997",
				"name": "Joann",
				"screen_name": "loan95220",
				"location": "",
				"profile_location": null,
				"description": "I will teach You How To make Above 500 Dollars Daily with Adsense for $5",
				"url": "http://t.co/LFsGIXmR3D",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/LFsGIXmR3D",
								"expanded_url": "http://mcaf.ee/bsxij",
								"display_url": "mcaf.ee/bsxij",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Sat Jan 31 18:37:32 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 183,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564771803910787073/rXzxC06u_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564771803910787073/rXzxC06u_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/3008138997/1423487057",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:24 +0000 2015",
			"id": 564968595449331700,
			"id_str": "564968595449331713",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2986315471,
				"id_str": "2986315471",
				"name": "Pamila Dobkin",
				"screen_name": "PamilaDobkin",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 2,
				"listed_count": 0,
				"created_at": "Sat Jan 17 01:17:32 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 112,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564288389306777600/jr_1vB8P.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564288389306777600/jr_1vB8P.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564288351885205504/adgQmvY6_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564288351885205504/adgQmvY6_normal.jpeg",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:21 +0000 2015",
			"id": 564968584586469400,
			"id_str": "564968584586469376",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3017509193,
				"id_str": "3017509193",
				"name": "Liebowitz Basta",
				"screen_name": "qorywwwx",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1,
				"friends_count": 3,
				"listed_count": 0,
				"created_at": "Wed Feb 04 13:14:08 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 18,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://abs.twimg.com/sticky/default_profile_images/default_profile_6_normal.png",
				"profile_image_url_https": "https://abs.twimg.com/sticky/default_profile_images/default_profile_6_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": true,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:19 +0000 2015",
			"id": 564968576558583800,
			"id_str": "564968576558583810",
			"text": "How did I not know about it being National Pizza Day? I had vegetables for dinner. What a failure.",
			"source": "<a href=\"http://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 329798305,
				"id_str": "329798305",
				"name": "Devon Price",
				"screen_name": "DlilliP",
				"location": "",
				"profile_location": null,
				"description": "Just a Jayhawk providing not-so-vital information for your everyday life. Rock Chalk!",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 106,
				"friends_count": 152,
				"listed_count": 0,
				"created_at": "Tue Jul 05 16:52:14 +0000 2011",
				"favourites_count": 431,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 2612,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "131516",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme14/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme14/bg.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/541066413881188352/jo2JpT9l_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/541066413881188352/jo2JpT9l_normal.jpeg",
				"profile_link_color": "009999",
				"profile_sidebar_border_color": "EEEEEE",
				"profile_sidebar_fill_color": "EFEFEF",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:19 +0000 2015",
			"id": 564968576118165500,
			"id_str": "564968576118165504",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2986221896,
				"id_str": "2986221896",
				"name": "Glynis Gentery",
				"screen_name": "GlynisGentery",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 2,
				"listed_count": 1,
				"created_at": "Fri Jan 16 23:33:11 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 117,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564288261791563776/3RfM0EaW.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564288261791563776/3RfM0EaW.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564288246897582080/VDTzu9RH_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564288246897582080/VDTzu9RH_normal.jpeg",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:19 +0000 2015",
			"id": 564968573198553100,
			"id_str": "564968573198553088",
			"text": "RT @pixilated0: Abbott is the product of the Liberals\' freak-out over climate | Jason Wilson http://t.co/VBlLB2cuZe \nLibs are a gigantic fa…",
			"source": "<a href=\"http://www.twitter.com\" rel=\"nofollow\">Twitter for Windows Phone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 875443196,
				"id_str": "875443196",
				"name": "mephisto jones",
				"screen_name": "mephistojones",
				"location": "",
				"profile_location": null,
				"description": "Im here to poke fun at Nazis, Neo-cons and Taliban like conservatism. Godwin Law is not a Law its an Excuse!",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 603,
				"friends_count": 725,
				"listed_count": 9,
				"created_at": "Fri Oct 12 11:30:49 +0000 2012",
				"favourites_count": 3529,
				"utc_offset": -36000,
				"time_zone": "Hawaii",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 17803,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "805812",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/378800000057829305/55938ef1eb759aa70dcac80e845d106a.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/378800000057829305/55938ef1eb759aa70dcac80e845d106a.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/563283228283265024/tfK2czfd_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/563283228283265024/tfK2czfd_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/875443196/1423132126",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:01:58 +0000 2015",
				"id": 564967478258716700,
				"id_str": "564967478258716672",
				"text": "Abbott is the product of the Liberals\' freak-out over climate | Jason Wilson http://t.co/VBlLB2cuZe \nLibs are a gigantic failure. #auspol",
				"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 773823318,
					"id_str": "773823318",
					"name": "pixilated0",
					"screen_name": "pixilated0",
					"location": "",
					"profile_location": null,
					"description": "Lefty on planet Oz.\r\nSlave to two Labrador dogs. arty.\r\n AUFC supporter.",
					"url": null,
					"entities": {
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 1105,
					"friends_count": 1009,
					"listed_count": 12,
					"created_at": "Wed Aug 22 14:45:32 +0000 2012",
					"favourites_count": 177,
					"utc_offset": 37800,
					"time_zone": "Adelaide",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 16022,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "940638",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme11/bg.gif",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme11/bg.gif",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/419648559659503616/M4U62ncJ_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/419648559659503616/M4U62ncJ_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/773823318/1418377986",
					"profile_link_color": "B40B43",
					"profile_sidebar_border_color": "000000",
					"profile_sidebar_fill_color": "E5507E",
					"profile_text_color": "362720",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 0,
				"entities": {
					"hashtags": [
						{
							"text": "auspol",
							"indices": [
								130,
								137
							]
						}
					],
					"symbols": [],
					"user_mentions": [],
					"urls": [
						{
							"url": "http://t.co/VBlLB2cuZe",
							"expanded_url": "http://gu.com/p/45k45/stw",
							"display_url": "gu.com/p/45k45/stw",
							"indices": [
								77,
								99
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "auspol",
						"indices": [
							139,
							140
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "pixilated0",
						"name": "pixilated0",
						"id": 773823318,
						"id_str": "773823318",
						"indices": [
							3,
							14
						]
					}
				],
				"urls": [
					{
						"url": "http://t.co/VBlLB2cuZe",
						"expanded_url": "http://gu.com/p/45k45/stw",
						"display_url": "gu.com/p/45k45/stw",
						"indices": [
							93,
							115
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:16 +0000 2015",
			"id": 564968563547467800,
			"id_str": "564968563547467776",
			"text": "Failure is simply a few errors in judgment, repeated every day. -Jim Rohn",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2989069185,
				"id_str": "2989069185",
				"name": "Money Central",
				"screen_name": "JobSecret77105",
				"location": "",
				"profile_location": null,
				"description": "NOTE: A unique invitation key is required 2 access our private jobs site. Click on the link below:",
				"url": "http://t.co/agmAve7qRd",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/agmAve7qRd",
								"expanded_url": "http://bit.ly/1BO8jQQ",
								"display_url": "bit.ly/1BO8jQQ",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1,
				"friends_count": 5,
				"listed_count": 0,
				"created_at": "Wed Jan 21 06:44:47 +0000 2015",
				"favourites_count": 0,
				"utc_offset": -39600,
				"time_zone": "International Date Line West",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 95,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/563254806949548032/yLp1wFZk_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/563254806949548032/yLp1wFZk_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2989069185/1423125388",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:15 +0000 2015",
			"id": 564968559453802500,
			"id_str": "564968559453802496",
			"text": "We\'ve all seen the Radio Shack failure coming for a few years, like watching a friend slowly decline from a terminal illness.",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 36722779,
				"id_str": "36722779",
				"name": "Rick Lierz",
				"screen_name": "RickLierz",
				"location": "Boise",
				"profile_location": null,
				"description": "I\'m a Redskins fan.  I\'ve suffered from it all my life.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 343,
				"friends_count": 478,
				"listed_count": 12,
				"created_at": "Thu Apr 30 17:43:38 +0000 2009",
				"favourites_count": 43,
				"utc_offset": -25200,
				"time_zone": "Mountain Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 4284,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "1C586E",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/595000581/qa5ossltcm3ishdn6pwr.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/595000581/qa5ossltcm3ishdn6pwr.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/870900212/Rick_and_Raider_2_normal.JPG",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/870900212/Rick_and_Raider_2_normal.JPG",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/36722779/1389064449",
				"profile_link_color": "C27055",
				"profile_sidebar_border_color": "DB294D",
				"profile_sidebar_fill_color": "3C588F",
				"profile_text_color": "9E2F54",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:13 +0000 2015",
			"id": 564968547768872960,
			"id_str": "564968547768872961",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2218886822,
				"id_str": "2218886822",
				"name": "Orthia Pickett",
				"screen_name": "xipuxixalepi",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 400,
				"friends_count": 581,
				"listed_count": 9,
				"created_at": "Thu Nov 28 04:36:15 +0000 2013",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 12027,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "BADFCD",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme12/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme12/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/541561414318440449/ili1GavB_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/541561414318440449/ili1GavB_normal.png",
				"profile_link_color": "FF0000",
				"profile_sidebar_border_color": "F2E195",
				"profile_sidebar_fill_color": "FFF7CC",
				"profile_text_color": "0C3E53",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:08 +0000 2015",
			"id": 564968529766518800,
			"id_str": "564968529766518784",
			"text": "@soylentgs they were arrested for vandalism and failure to comply. theres cameras everywhere idiots...",
			"source": "<a href=\"https://mobile.twitter.com\" rel=\"nofollow\">Mobile Web (M5)</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": 1424561394,
			"in_reply_to_user_id_str": "1424561394",
			"in_reply_to_screen_name": "soylentgs",
			"user": {
				"id": 2874519054,
				"id_str": "2874519054",
				"name": "DontHateKate",
				"screen_name": "DHK314",
				"location": "stl",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 10,
				"friends_count": 12,
				"listed_count": 0,
				"created_at": "Fri Oct 24 04:23:32 +0000 2014",
				"favourites_count": 1,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 232,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/525504277020557312/npYjjMeA_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/525504277020557312/npYjjMeA_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "soylentgs",
						"name": "Soylent Gaystapo",
						"id": 1424561394,
						"id_str": "1424561394",
						"indices": [
							0,
							10
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:06 +0000 2015",
			"id": 564968519369256960,
			"id_str": "564968519369256961",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3022656719,
				"id_str": "3022656719",
				"name": "Дионина Уховa",
				"screen_name": "AMelisa76989",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Sat Feb 07 04:26:45 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 6,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://abs.twimg.com/sticky/default_profile_images/default_profile_5_normal.png",
				"profile_image_url_https": "https://abs.twimg.com/sticky/default_profile_images/default_profile_5_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": true,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:04 +0000 2015",
			"id": 564968511160594400,
			"id_str": "564968511160594432",
			"text": "Dumb bitch set me up for failure. 😒 @Jus_DesDes",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 236707977,
				"id_str": "236707977",
				"name": "Danny",
				"screen_name": "RoadToRichess",
				"location": "",
				"profile_location": null,
				"description": "All I ever wanted in life was to be was ME❗️☺️",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 587,
				"friends_count": 186,
				"listed_count": 1,
				"created_at": "Tue Jan 11 05:39:09 +0000 2011",
				"favourites_count": 620,
				"utc_offset": -25200,
				"time_zone": "Mountain Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 10556,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "FF6699",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/419988074/tumblr_lxajeuPcLT1qib553o1_500.jpg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/419988074/tumblr_lxajeuPcLT1qib553o1_500.jpg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/555199722122534913/8urZs1P-_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/555199722122534913/8urZs1P-_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/236707977/1411752539",
				"profile_link_color": "594B59",
				"profile_sidebar_border_color": "F2E9EE",
				"profile_sidebar_fill_color": "050305",
				"profile_text_color": "991399",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "Jus_DesDes",
						"name": "februaryO7♒️",
						"id": 268327994,
						"id_str": "268327994",
						"indices": [
							36,
							47
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:03 +0000 2015",
			"id": 564968505725173760,
			"id_str": "564968505725173760",
			"text": "RT @kenzkebab: But I\'m glad I can walk away and not feel like a TOTAL failure. Lolol.",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 248016533,
				"id_str": "248016533",
				"name": "Meika Caughey",
				"screen_name": "meikamae33",
				"location": "",
				"profile_location": null,
				"description": "I Am Third. RIP Anthony ❤️ #teampeterlenz",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 483,
				"friends_count": 544,
				"listed_count": 0,
				"created_at": "Sun Feb 06 02:27:36 +0000 2011",
				"favourites_count": 737,
				"utc_offset": -21600,
				"time_zone": "Central Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 16861,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "131516",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/769025278/e6a2b7d154cff99eeb791f1dde788eb5.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/769025278/e6a2b7d154cff99eeb791f1dde788eb5.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/558354140653682688/rUl3wdsx_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/558354140653682688/rUl3wdsx_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/248016533/1407101147",
				"profile_link_color": "009991",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "EFEFEF",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:47:14 +0000 2015",
				"id": 564963773245431800,
				"id_str": "564963773245431808",
				"text": "But I\'m glad I can walk away and not feel like a TOTAL failure. Lolol.",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 428417080,
					"id_str": "428417080",
					"name": "Kenz¨̮  ",
					"screen_name": "kenzkebab",
					"location": "",
					"profile_location": null,
					"description": "Gandhi said that whatever you do in life will be insignificant. But it\'s very important that you do it. I tend to agree with the first part.",
					"url": null,
					"entities": {
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 419,
					"friends_count": 1277,
					"listed_count": 5,
					"created_at": "Sun Dec 04 18:51:40 +0000 2011",
					"favourites_count": 4859,
					"utc_offset": -25200,
					"time_zone": "Arizona",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 19375,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "1A1B1F",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme9/bg.gif",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme9/bg.gif",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/564590555644973057/p9oMHygq_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/564590555644973057/p9oMHygq_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/428417080/1421635298",
					"profile_link_color": "2FC2EF",
					"profile_sidebar_border_color": "181A1E",
					"profile_sidebar_fill_color": "252429",
					"profile_text_color": "666666",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 1,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "kenzkebab",
						"name": "Kenz¨̮  ",
						"id": 428417080,
						"id_str": "428417080",
						"indices": [
							3,
							13
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:00 +0000 2015",
			"id": 564968497152000000,
			"id_str": "564968497152000000",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2986096100,
				"id_str": "2986096100",
				"name": "Coreen Nigon",
				"screen_name": "CoreenNigon",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2,
				"friends_count": 2,
				"listed_count": 0,
				"created_at": "Fri Jan 16 20:31:34 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 119,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564288176429084672/UkhRbhoG.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564288176429084672/UkhRbhoG.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564288166991904772/TKa7yW3A_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564288166991904772/TKa7yW3A_normal.jpeg",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:06:00 +0000 2015",
			"id": 564968496413802500,
			"id_str": "564968496413802497",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2998579690,
				"id_str": "2998579690",
				"name": "Romeo",
				"screen_name": "rumetyqeevo0802",
				"location": "",
				"profile_location": null,
				"description": "I will show you how to make 100 dollars DAILY promoting clickbank products for $5",
				"url": "http://t.co/8QmHJWm59E",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/8QmHJWm59E",
								"expanded_url": "http://mcaf.ee/6bq1x",
								"display_url": "mcaf.ee/6bq1x",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Sun Jan 25 20:24:50 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 181,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564774429326991361/-8B7z8LK_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564774429326991361/-8B7z8LK_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2998579690/1423487683",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:58 +0000 2015",
			"id": 564968486762344450,
			"id_str": "564968486762344448",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3008987158,
				"id_str": "3008987158",
				"name": "Евминия Эллинская",
				"screen_name": "gloria12874",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Sun Feb 01 01:07:33 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 24,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://abs.twimg.com/sticky/default_profile_images/default_profile_2_normal.png",
				"profile_image_url_https": "https://abs.twimg.com/sticky/default_profile_images/default_profile_2_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": true,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:58 +0000 2015",
			"id": 564968486699810800,
			"id_str": "564968486699810816",
			"text": "#my600lblife I hope she realizes how beautiful she is and can get on a better lifestyle. You are not a failure!",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1548630542,
				"id_str": "1548630542",
				"name": "♡Hi, I\'m Kayla♡",
				"screen_name": "KaylaDKayriLF",
				"location": "NUN YO BIDNESS",
				"profile_location": null,
				"description": "Follow My Friend! @KayriLFYouTube!\r\n•••I Have A Degree In Sarcasm•••",
				"url": "https://t.co/wLmTGTXEOs",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "https://t.co/wLmTGTXEOs",
								"expanded_url": "https://www.youtube.com/channel/UCRXL2Q95FNFx60FmvZR8nfQ",
								"display_url": "youtube.com/channel/UCRXL2…",
								"indices": [
									0,
									23
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 41,
				"friends_count": 383,
				"listed_count": 1,
				"created_at": "Wed Jun 26 16:53:59 +0000 2013",
				"favourites_count": 39,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 169,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "DCA6DE",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/467641079966097408/9UsdL9sC.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/467641079966097408/9UsdL9sC.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564968725284421633/7yLq7foO_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564968725284421633/7yLq7foO_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1548630542/1423534015",
				"profile_link_color": "C199C2",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 1,
			"entities": {
				"hashtags": [
					{
						"text": "my600lblife",
						"indices": [
							0,
							12
						]
					}
				],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:57 +0000 2015",
			"id": 564968482958090240,
			"id_str": "564968482958090241",
			"text": "RT @stockbella: Success consists of going from failure to failure without loss of enthusiasm.   --Winston Churchill",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 499076530,
				"id_str": "499076530",
				"name": "AttiqueBoutique",
				"screen_name": "AttiqueBoutique",
				"location": "Cape Coral Florida",
				"profile_location": null,
				"description": "Attique Boutique, The unique boutique .Vintage & Antique goodies at affordable prices + get to know us via http://t.co/UgB52ywFk1 Robinson",
				"url": "http://t.co/PrhEvSO8To",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/PrhEvSO8To",
								"expanded_url": "http://www.etsy.com/shop/AttiqueBoutique?ref=ss_profile",
								"display_url": "etsy.com/shop/AttiqueBo…",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": [
							{
								"url": "http://t.co/UgB52ywFk1",
								"expanded_url": "http://Pinterest.com/Davie",
								"display_url": "Pinterest.com/Davie",
								"indices": [
									107,
									129
								]
							}
						]
					}
				},
				"protected": false,
				"followers_count": 1422,
				"friends_count": 1635,
				"listed_count": 30,
				"created_at": "Tue Feb 21 19:04:50 +0000 2012",
				"favourites_count": 59,
				"utc_offset": -36000,
				"time_zone": "Hawaii",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 10048,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/491416410757689345/97uUaNUJ_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/491416410757689345/97uUaNUJ_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/499076530/1404744919",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Wed Feb 04 22:35:12 +0000 2015",
				"id": 563103508229259260,
				"id_str": "563103508229259264",
				"text": "Success consists of going from failure to failure without loss of enthusiasm.   --Winston Churchill",
				"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 265668224,
					"id_str": "265668224",
					"name": "Bella",
					"screen_name": "stockbella",
					"location": "Boston, MA, U.S",
					"profile_location": null,
					"description": "#Decor #Health, #Food #Affiliatemarketing , #internetmarketing, Stocks, Movies, Outdoors, Quotes... Only missing - Love.  No Spam or DM\'s: http://t.co/s0S3NsdP",
					"url": "http://t.co/qazIgMTSPS",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/qazIgMTSPS",
									"expanded_url": "http://www.unitedhealthdirectory.com",
									"display_url": "unitedhealthdirectory.com",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/s0S3NsdP",
									"expanded_url": "http://www.banarsidesigns.com/",
									"display_url": "banarsidesigns.com",
									"indices": [
										139,
										159
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 144694,
					"friends_count": 94316,
					"listed_count": 692,
					"created_at": "Sun Mar 13 23:48:49 +0000 2011",
					"favourites_count": 827,
					"utc_offset": -18000,
					"time_zone": "Eastern Time (US & Canada)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 6280,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "FF6699",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/290001766/love.jpg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/290001766/love.jpg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/1271604827/187693_100001050194410_4167321_n_normal.jpg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/1271604827/187693_100001050194410_4167321_n_normal.jpg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/265668224/1400216163",
					"profile_link_color": "B40B43",
					"profile_sidebar_border_color": "CC3366",
					"profile_sidebar_fill_color": "E5507E",
					"profile_text_color": "362720",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 17,
				"favorite_count": 10,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 17,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "stockbella",
						"name": "Bella",
						"id": 265668224,
						"id_str": "265668224",
						"indices": [
							3,
							14
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:57 +0000 2015",
			"id": 564968481867579400,
			"id_str": "564968481867579392",
			"text": "\"You\'re a complete fucking failure\"\n\"I hope you enjoy working at McDonald\'s\"\n\"Have fun with summer school\"\n\nThanks dad. Thanks.",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2291745337,
				"id_str": "2291745337",
				"name": "kibbletts",
				"screen_name": "itskibbsy",
				"location": "#KibbsNation",
				"profile_location": null,
				"description": "just a little nugget with big dreams | Married to my love @TheTectonix | YT: https://t.co/6kPqAKtwcB | Twitch: http://t.co/g51gHFrTz5",
				"url": "http://t.co/fNVvQFBSf9",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/fNVvQFBSf9",
								"expanded_url": "http://totallyseriousapparel.spreadshirt.com",
								"display_url": "totallyseriousapparel.spreadshirt.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": [
							{
								"url": "https://t.co/6kPqAKtwcB",
								"expanded_url": "https://www.youtube.com/user/Kibbletts",
								"display_url": "youtube.com/user/Kibbletts",
								"indices": [
									77,
									100
								]
							},
							{
								"url": "http://t.co/g51gHFrTz5",
								"expanded_url": "http://twitch.tv/kibbletts",
								"display_url": "twitch.tv/kibbletts",
								"indices": [
									111,
									133
								]
							}
						]
					}
				},
				"protected": false,
				"followers_count": 1647,
				"friends_count": 1485,
				"listed_count": 17,
				"created_at": "Tue Jan 14 21:49:31 +0000 2014",
				"favourites_count": 24206,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 55156,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "000000",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564886698484838400/XYXqdpM0_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564886698484838400/XYXqdpM0_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2291745337/1422155604",
				"profile_link_color": "9266CC",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "000000",
				"profile_text_color": "000000",
				"profile_use_background_image": false,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:57 +0000 2015",
			"id": 564968480563150850,
			"id_str": "564968480563150849",
			"text": "My life = failure",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 909046170,
				"id_str": "909046170",
				"name": "helayna",
				"screen_name": "Helayna23",
				"location": "",
				"profile_location": null,
				"description": "good vibes|sc; helaynag",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 616,
				"friends_count": 742,
				"listed_count": 2,
				"created_at": "Sat Oct 27 22:37:01 +0000 2012",
				"favourites_count": 9430,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 29155,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/556325412054511616/UQOWYj_5_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/556325412054511616/UQOWYj_5_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/909046170/1421442656",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:55 +0000 2015",
			"id": 564968472929919000,
			"id_str": "564968472929918976",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2985742699,
				"id_str": "2985742699",
				"name": "Francisca Yonemura",
				"screen_name": "FranciscaYonemu",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2,
				"friends_count": 2,
				"listed_count": 0,
				"created_at": "Fri Jan 16 14:06:20 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 122,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "0000FF",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/564287941405454337/xhJ7zHZ4.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/564287941405454337/xhJ7zHZ4.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564287926993838081/wmmGhzEN_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564287926993838081/wmmGhzEN_normal.jpeg",
				"profile_link_color": "0000FF",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:52 +0000 2015",
			"id": 564968460241739800,
			"id_str": "564968460241739776",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2369892402,
				"id_str": "2369892402",
				"name": "Reyes Bagenal",
				"screen_name": "runarukukis",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 8,
				"friends_count": 94,
				"listed_count": 0,
				"created_at": "Mon Mar 03 05:21:42 +0000 2014",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 185,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "9AE4E8",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme16/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme16/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/442898323649748992/jl5qbw3h_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/442898323649748992/jl5qbw3h_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "BDDCAD",
				"profile_sidebar_fill_color": "DDFFCC",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:51 +0000 2015",
			"id": 564968459290046460,
			"id_str": "564968459290046464",
			"text": "@J_Johnson_3 Lol yea #Failure",
			"source": "<a href=\"http://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android</a>",
			"truncated": false,
			"in_reply_to_status_id": 564968135103885300,
			"in_reply_to_status_id_str": "564968135103885312",
			"in_reply_to_user_id": 350609167,
			"in_reply_to_user_id_str": "350609167",
			"in_reply_to_screen_name": "J_Johnson_3",
			"user": {
				"id": 367371661,
				"id_str": "367371661",
				"name": "Maciah Middleton",
				"screen_name": "callmepk_",
				"location": "",
				"profile_location": null,
				"description": "#StayHumble✌",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 695,
				"friends_count": 567,
				"listed_count": 2,
				"created_at": "Sat Sep 03 21:24:14 +0000 2011",
				"favourites_count": 580,
				"utc_offset": -28800,
				"time_zone": "Pacific Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 29318,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "8B542B",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/632564054/gfkl47n4934enlima4yl.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/632564054/gfkl47n4934enlima4yl.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/555496802439688192/0LIPVl1J_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/555496802439688192/0LIPVl1J_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/367371661/1411689987",
				"profile_link_color": "9D582E",
				"profile_sidebar_border_color": "D9B17E",
				"profile_sidebar_fill_color": "EADEAA",
				"profile_text_color": "333333",
				"profile_use_background_image": false,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "Failure",
						"indices": [
							21,
							29
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "J_Johnson_3",
						"name": "Jesse Johnson Jr.",
						"id": 350609167,
						"id_str": "350609167",
						"indices": [
							0,
							12
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:48 +0000 2015",
			"id": 564968444450603000,
			"id_str": "564968444450603008",
			"text": "RT @famousquotenet: I can accept failure, but I can\'t accept not trying. - Michael Jordan http://t.co/tbGwN825H1",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 819532794,
				"id_str": "819532794",
				"name": "NO SHARIAH!",
				"screen_name": "PoliticalNYr",
				"location": "",
				"profile_location": null,
				"description": "Islamists are still intent on holy war: Political, economic, religious, military, media, legal & marriage.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1171,
				"friends_count": 2002,
				"listed_count": 12,
				"created_at": "Wed Sep 12 13:12:04 +0000 2012",
				"favourites_count": 15,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 6095,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/481914300810809344/bVSS_ZfF_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/481914300810809344/bVSS_ZfF_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/819532794/1403732338",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Sun Jan 25 19:06:32 +0000 2015",
				"id": 559427116698443800,
				"id_str": "559427116698443776",
				"text": "I can accept failure, but I can\'t accept not trying. - Michael Jordan http://t.co/tbGwN825H1",
				"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 14367719,
					"id_str": "14367719",
					"name": "Famous-Quote.net",
					"screen_name": "famousquotenet",
					"location": "http://www.famous-quote.net",
					"profile_location": null,
					"description": "The Best Collection of Quotes on the Internet",
					"url": "http://t.co/LylfiHl5IS",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/LylfiHl5IS",
									"expanded_url": "http://www.famous-quote.net",
									"display_url": "famous-quote.net",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 101967,
					"friends_count": 107054,
					"listed_count": 1171,
					"created_at": "Sat Apr 12 08:08:01 +0000 2008",
					"favourites_count": 121,
					"utc_offset": -25200,
					"time_zone": "Mountain Time (US & Canada)",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 41927,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "000067",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/378800000079856788/d0e3f7c57085dc1aa237c178f972664e_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/378800000079856788/d0e3f7c57085dc1aa237c178f972664e_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/14367719/1353180772",
					"profile_link_color": "0000FF",
					"profile_sidebar_border_color": "87BC44",
					"profile_sidebar_fill_color": "E0FF92",
					"profile_text_color": "000000",
					"profile_use_background_image": false,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 234,
				"favorite_count": 145,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": [],
					"media": [
						{
							"id": 559427115138166800,
							"id_str": "559427115138166784",
							"indices": [
								70,
								92
							],
							"media_url": "http://pbs.twimg.com/media/B8N7_0uIMAAt_eq.jpg",
							"media_url_https": "https://pbs.twimg.com/media/B8N7_0uIMAAt_eq.jpg",
							"url": "http://t.co/tbGwN825H1",
							"display_url": "pic.twitter.com/tbGwN825H1",
							"expanded_url": "http://twitter.com/famousquotenet/status/559427116698443776/photo/1",
							"type": "photo",
							"sizes": {
								"medium": {
									"w": 500,
									"h": 500,
									"resize": "fit"
								},
								"small": {
									"w": 340,
									"h": 340,
									"resize": "fit"
								},
								"thumb": {
									"w": 150,
									"h": 150,
									"resize": "crop"
								},
								"large": {
									"w": 500,
									"h": 500,
									"resize": "fit"
								}
							}
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 234,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "famousquotenet",
						"name": "Famous-Quote.net",
						"id": 14367719,
						"id_str": "14367719",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": [],
				"media": [
					{
						"id": 559427115138166800,
						"id_str": "559427115138166784",
						"indices": [
							90,
							112
						],
						"media_url": "http://pbs.twimg.com/media/B8N7_0uIMAAt_eq.jpg",
						"media_url_https": "https://pbs.twimg.com/media/B8N7_0uIMAAt_eq.jpg",
						"url": "http://t.co/tbGwN825H1",
						"display_url": "pic.twitter.com/tbGwN825H1",
						"expanded_url": "http://twitter.com/famousquotenet/status/559427116698443776/photo/1",
						"type": "photo",
						"sizes": {
							"medium": {
								"w": 500,
								"h": 500,
								"resize": "fit"
							},
							"small": {
								"w": 340,
								"h": 340,
								"resize": "fit"
							},
							"thumb": {
								"w": 150,
								"h": 150,
								"resize": "crop"
							},
							"large": {
								"w": 500,
								"h": 500,
								"resize": "fit"
							}
						},
						"source_status_id": 559427116698443800,
						"source_status_id_str": "559427116698443776",
						"source_user_id": 14367719,
						"source_user_id_str": "14367719"
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:45 +0000 2015",
			"id": 564968433276964860,
			"id_str": "564968433276964865",
			"text": "SAY OF THE DAY: \"Success doesn\'t make you and failure doesn\'t break you\" -Zig Ziglar http://t.co/OkKzml23cq",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1685042425,
				"id_str": "1685042425",
				"name": "Startup Superstar",
				"screen_name": "StartupSupaStar",
				"location": "Atlanta, GA USA",
				"profile_location": null,
				"description": "Startup Superstar is the home of 40Billion\'s network for top startup companies & business entrepreneurs around the world. Are you a startup superstar? Join us.",
				"url": "http://t.co/E65MCufsQA",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/E65MCufsQA",
								"expanded_url": "http://www.startupsuperstar.com",
								"display_url": "startupsuperstar.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 19321,
				"friends_count": 20924,
				"listed_count": 181,
				"created_at": "Tue Aug 20 06:14:44 +0000 2013",
				"favourites_count": 3,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 185898,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/378800000327406437/a7ff9b333c330d20107456bd9a3e2b58_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/378800000327406437/a7ff9b333c330d20107456bd9a3e2b58_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": [
					{
						"url": "http://t.co/OkKzml23cq",
						"expanded_url": "http://www.40billion.com/post/17657",
						"display_url": "40billion.com/post/17657",
						"indices": [
							85,
							107
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:45 +0000 2015",
			"id": 564968431800561660,
			"id_str": "564968431800561664",
			"text": "RT @_elizabethsoto: Studying for Trig test = Studying for failure",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1038372103,
				"id_str": "1038372103",
				"name": "Brianna Rude",
				"screen_name": "justBRIlliant_",
				"location": "Royal Center",
				"profile_location": null,
				"description": "Doing what I love and loving what I do. TLHS.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 428,
				"friends_count": 303,
				"listed_count": 4,
				"created_at": "Wed Dec 26 23:55:52 +0000 2012",
				"favourites_count": 8906,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 16898,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "510AAD",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/860643875/80256a70f3a9b4370e7c81d241c65c36.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/860643875/80256a70f3a9b4370e7c81d241c65c36.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/560932994840809472/7jdSkT9E_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/560932994840809472/7jdSkT9E_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1038372103/1422587205",
				"profile_link_color": "1EFA0A",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:57:51 +0000 2015",
				"id": 564966444551532540,
				"id_str": "564966444551532544",
				"text": "Studying for Trig test = Studying for failure",
				"source": "<a href=\"http://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 376158135,
					"id_str": "376158135",
					"name": "elizabeth",
					"screen_name": "_elizabethsoto",
					"location": "Indiana ",
					"profile_location": null,
					"description": "sometimes I post cool things and sometimes I don\'t                                                                        Instagram: _ehlizahbeth",
					"url": null,
					"entities": {
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 341,
					"friends_count": 392,
					"listed_count": 3,
					"created_at": "Mon Sep 19 12:08:44 +0000 2011",
					"favourites_count": 6756,
					"utc_offset": -18000,
					"time_zone": "Indiana (East)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 26447,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "642D8B",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme10/bg.gif",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme10/bg.gif",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/562520065644310528/Jlk6fs9B_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/562520065644310528/Jlk6fs9B_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/376158135/1423368636",
					"profile_link_color": "FF0000",
					"profile_sidebar_border_color": "65B0DA",
					"profile_sidebar_fill_color": "7AC3EE",
					"profile_text_color": "3D1957",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": {
					"type": "Point",
					"coordinates": [
						40.7480464,
						-86.7647386
					]
				},
				"coordinates": {
					"type": "Point",
					"coordinates": [
						-86.7647386,
						40.7480464
					]
				},
				"place": {
					"id": "a40a1644903c2943",
					"url": "https://api.twitter.com/1.1/geo/id/a40a1644903c2943.json",
					"place_type": "city",
					"name": "Monticello",
					"full_name": "Monticello, IN",
					"country_code": "US",
					"country": "United States",
					"contained_within": [],
					"bounding_box": {
						"type": "Polygon",
						"coordinates": [
							[
								[
									-86.788082,
									40.722823
								],
								[
									-86.742604,
									40.722823
								],
								[
									-86.742604,
									40.770361
								],
								[
									-86.788082,
									40.770361
								]
							]
						]
					},
					"attributes": []
				},
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "_elizabethsoto",
						"name": "elizabeth",
						"id": 376158135,
						"id_str": "376158135",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:43 +0000 2015",
			"id": 564968422451052540,
			"id_str": "564968422451052546",
			"text": "Failure is not falling down; it is remaining there when you have fallen.",
			"source": "<a href=\"http://twittbot.net/\" rel=\"nofollow\">twittbot.net</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1024876201,
				"id_str": "1024876201",
				"name": "HappyProverbs",
				"screen_name": "AboutHappiness3",
				"location": "",
				"profile_location": null,
				"description": "Do you have a good time every day? I tweet the words that bring happiness to your life. About Love, Peace, Life, and so on.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2145,
				"friends_count": 2398,
				"listed_count": 7,
				"created_at": "Thu Dec 20 19:27:22 +0000 2012",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 19251,
				"lang": "ja",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/3001189430/0c8bc6813a2045e7604d09e39c23a61d_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/3001189430/0c8bc6813a2045e7604d09e39c23a61d_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:42 +0000 2015",
			"id": 564968420303962100,
			"id_str": "564968420303962113",
			"text": "“Success is not final, failure is not fatal: it is the courage to continue that counts.” – Winston Churchill",
			"source": "<a href=\"http://www.apple.com/\" rel=\"nofollow\">OS X</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 279113308,
				"id_str": "279113308",
				"name": "sera puknl",
				"screen_name": "SarahPck",
				"location": "⚪⚪",
				"profile_location": null,
				"description": "A river cuts through rock not because of its power but because its persistence",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 349,
				"friends_count": 232,
				"listed_count": 1,
				"created_at": "Fri Apr 08 16:22:08 +0000 2011",
				"favourites_count": 1632,
				"utc_offset": -21600,
				"time_zone": "Central Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 6730,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "1A1B1F",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme9/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme9/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/526736549397155841/ovX48k7G_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/526736549397155841/ovX48k7G_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/279113308/1411363353",
				"profile_link_color": "2FC2EF",
				"profile_sidebar_border_color": "181A1E",
				"profile_sidebar_fill_color": "252429",
				"profile_text_color": "666666",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 1,
			"favorite_count": 1,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:40 +0000 2015",
			"id": 564968410812280800,
			"id_str": "564968410812280834",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3018491296,
				"id_str": "3018491296",
				"name": "Cicenia Indelicato",
				"screen_name": "povaqyCi",
				"location": "",
				"profile_location": null,
				"description": "I will promote post your any url over 20 Million active facebook groups or Fan wall timeline wall post for $5",
				"url": "http://t.co/iuEhERqhJo",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/iuEhERqhJo",
								"expanded_url": "http://mcaf.ee/lrwv3",
								"display_url": "mcaf.ee/lrwv3",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2,
				"friends_count": 84,
				"listed_count": 0,
				"created_at": "Wed Feb 04 19:33:02 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 101,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564759005076013057/57aR-nBN_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564759005076013057/57aR-nBN_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/3018491296/1423484007",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:39 +0000 2015",
			"id": 564968406806724600,
			"id_str": "564968406806724608",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3022341707,
				"id_str": "3022341707",
				"name": "Nilsa",
				"screen_name": "nilsa570",
				"location": "",
				"profile_location": null,
				"description": "I will give you 15000 youtube subscribers for $20",
				"url": "http://t.co/B2l5ckuFPw",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/B2l5ckuFPw",
								"expanded_url": "http://mcaf.ee/v34br",
								"display_url": "mcaf.ee/v34br",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 5,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Fri Feb 06 22:53:48 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 186,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564772885101682688/CbO-xelX_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564772885101682688/CbO-xelX_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/3022341707/1423487317",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:36 +0000 2015",
			"id": 564968395398184960,
			"id_str": "564968395398184961",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2218897927,
				"id_str": "2218897927",
				"name": "Sioni Beasley",
				"screen_name": "kubohohugogi",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 420,
				"friends_count": 634,
				"listed_count": 9,
				"created_at": "Thu Nov 28 04:42:00 +0000 2013",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 12074,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "352726",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme5/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme5/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/541561447298260992/Qc3BOkC__normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/541561447298260992/Qc3BOkC__normal.png",
				"profile_link_color": "D02B55",
				"profile_sidebar_border_color": "829D5E",
				"profile_sidebar_fill_color": "99CC33",
				"profile_text_color": "3E4415",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:33 +0000 2015",
			"id": 564968382563618800,
			"id_str": "564968382563618816",
			"text": "RT @curtislepore: At the ER, doing tests RN to make sure he isn\'t going into congestive heart failure. He\'s a strong pup I\'m just glad we\'r…",
			"source": "<a href=\"https://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android Tablets</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1921794672,
				"id_str": "1921794672",
				"name": "Coni Garay",
				"screen_name": "_EternalRev_",
				"location": "Puerto Montt, Chile.",
				"profile_location": null,
				"description": "We\'ll never be as young as we are now.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 835,
				"friends_count": 649,
				"listed_count": 6,
				"created_at": "Tue Oct 01 01:17:53 +0000 2013",
				"favourites_count": 6541,
				"utc_offset": -10800,
				"time_zone": "Santiago",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 34260,
				"lang": "es",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "DBE9ED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/501967264057270272/CW3B5DMn.png",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/501967264057270272/CW3B5DMn.png",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/544966411412844544/mtGTzQUp_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/544966411412844544/mtGTzQUp_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1921794672/1421221715",
				"profile_link_color": "FF0015",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "E6F6F9",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:03:34 +0000 2015",
				"id": 564952781249716200,
				"id_str": "564952781249716224",
				"text": "At the ER, doing tests RN to make sure he isn\'t going into congestive heart failure. He\'s a strong pup I\'m just glad we\'re here 🙏",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 410186746,
					"id_str": "410186746",
					"name": "Curtis Lepore",
					"screen_name": "curtislepore",
					"location": "LA",
					"profile_location": null,
					"description": "I vine sometimes. add me on snapchat @CURTLEPORE",
					"url": "http://t.co/godKK3whPK",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/godKK3whPK",
									"expanded_url": "http://www.vine.co/curtislepore",
									"display_url": "vine.co/curtislepore",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 399761,
					"friends_count": 20316,
					"listed_count": 587,
					"created_at": "Fri Nov 11 19:16:57 +0000 2011",
					"favourites_count": 7595,
					"utc_offset": -25200,
					"time_zone": "Arizona",
					"geo_enabled": true,
					"verified": true,
					"statuses_count": 8457,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/511379757649231872/DCL4Zh5V_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/511379757649231872/DCL4Zh5V_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/410186746/1421208850",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": true,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 160,
				"favorite_count": 687,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 160,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "curtislepore",
						"name": "Curtis Lepore",
						"id": 410186746,
						"id_str": "410186746",
						"indices": [
							3,
							16
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:33 +0000 2015",
			"id": 564968381418594300,
			"id_str": "564968381418594304",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2218888008,
				"id_str": "2218888008",
				"name": "Giliam Strong",
				"screen_name": "siragiduban",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 504,
				"friends_count": 572,
				"listed_count": 5,
				"created_at": "Thu Nov 28 04:37:28 +0000 2013",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 7830,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "EDECE9",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme3/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme3/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/541561451580620800/KLzFx3E-_normal.png",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/541561451580620800/KLzFx3E-_normal.png",
				"profile_link_color": "088253",
				"profile_sidebar_border_color": "D3D2CF",
				"profile_sidebar_fill_color": "E3E2DE",
				"profile_text_color": "634047",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:31 +0000 2015",
			"id": 564968373583224800,
			"id_str": "564968373583224832",
			"text": "RT @curtislepore: At the ER, doing tests RN to make sure he isn\'t going into congestive heart failure. He\'s a strong pup I\'m just glad we\'r…",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1633654464,
				"id_str": "1633654464",
				"name": "Ashley Lawley",
				"screen_name": "Ashton_Lenzen",
				"location": "Laguna Niguel, CA",
				"profile_location": null,
				"description": "Underneath the palm trees you can leave your worries ~ ✌️",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 38,
				"friends_count": 132,
				"listed_count": 0,
				"created_at": "Tue Jul 30 19:45:11 +0000 2013",
				"favourites_count": 107,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 90,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/529489963998797824/peRtTacf_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/529489963998797824/peRtTacf_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1633654464/1415075518",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:03:34 +0000 2015",
				"id": 564952781249716200,
				"id_str": "564952781249716224",
				"text": "At the ER, doing tests RN to make sure he isn\'t going into congestive heart failure. He\'s a strong pup I\'m just glad we\'re here 🙏",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 410186746,
					"id_str": "410186746",
					"name": "Curtis Lepore",
					"screen_name": "curtislepore",
					"location": "LA",
					"profile_location": null,
					"description": "I vine sometimes. add me on snapchat @CURTLEPORE",
					"url": "http://t.co/godKK3whPK",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/godKK3whPK",
									"expanded_url": "http://www.vine.co/curtislepore",
									"display_url": "vine.co/curtislepore",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 399761,
					"friends_count": 20316,
					"listed_count": 587,
					"created_at": "Fri Nov 11 19:16:57 +0000 2011",
					"favourites_count": 7595,
					"utc_offset": -25200,
					"time_zone": "Arizona",
					"geo_enabled": true,
					"verified": true,
					"statuses_count": 8457,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/511379757649231872/DCL4Zh5V_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/511379757649231872/DCL4Zh5V_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/410186746/1421208850",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": true,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 160,
				"favorite_count": 687,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 160,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "curtislepore",
						"name": "Curtis Lepore",
						"id": 410186746,
						"id_str": "410186746",
						"indices": [
							3,
							16
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:30 +0000 2015",
			"id": 564968371121573900,
			"id_str": "564968371121573888",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2368425746,
				"id_str": "2368425746",
				"name": "Mariuszek Caswell",
				"screen_name": "gulujajygahy",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 323,
				"friends_count": 560,
				"listed_count": 1,
				"created_at": "Sun Mar 02 06:27:08 +0000 2014",
				"favourites_count": 1,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 170,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/535671104182841344/sN-RmLsi_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/535671104182841344/sN-RmLsi_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:30 +0000 2015",
			"id": 564968368386883600,
			"id_str": "564968368386883584",
			"text": "RT @sammyROLLSTRONG: I\'m allergic to failure",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1558601612,
				"id_str": "1558601612",
				"name": "✨",
				"screen_name": "KvngRed",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 452,
				"friends_count": 408,
				"listed_count": 1,
				"created_at": "Sun Jun 30 18:03:57 +0000 2013",
				"favourites_count": 628,
				"utc_offset": -14400,
				"time_zone": "Atlantic Time (Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 22213,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/563548320808071168/sQFygXKo_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/563548320808071168/sQFygXKo_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1558601612/1423508890",
				"profile_link_color": "F50C0C",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:01:40 +0000 2015",
				"id": 564967404363845600,
				"id_str": "564967404363845632",
				"text": "I\'m allergic to failure",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 199629661,
					"id_str": "199629661",
					"name": "Nigerian_Hooper#⃣5⃣",
					"screen_name": "sammyROLLSTRONG",
					"location": "Tampa FL USA",
					"profile_location": null,
					"description": "ADD ME ON IG: nigerian_hooper05",
					"url": "http://t.co/3cZLy3XlOn",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/3cZLy3XlOn",
									"expanded_url": "http://www.Facebook.com/sammyjnnaji",
									"display_url": "Facebook.com/sammyjnnaji",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 50156,
					"friends_count": 36542,
					"listed_count": 21,
					"created_at": "Thu Oct 07 10:54:19 +0000 2010",
					"favourites_count": 3592,
					"utc_offset": -21600,
					"time_zone": "Central Time (US & Canada)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 26525,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/447075300/ballislife.jpg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/447075300/ballislife.jpg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/563947873390186496/cpKZG-mX_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/563947873390186496/cpKZG-mX_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/199629661/1420913597",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 5,
				"favorite_count": 5,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 5,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "sammyROLLSTRONG",
						"name": "Nigerian_Hooper#⃣5⃣",
						"id": 199629661,
						"id_str": "199629661",
						"indices": [
							3,
							19
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:25 +0000 2015",
			"id": 564968349226897400,
			"id_str": "564968349226897408",
			"text": "I\'M NCRYING I\'M CRYING THERE IT IS THERE IT IS THERE IT IS. I\'M NOT A FAILURE YET MA THERE IT IS http://t.co/364cVjNPjS",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2532559764,
				"id_str": "2532559764",
				"name": "dirt enthusiast",
				"screen_name": "plantmoment",
				"location": "Bat ☼ 17 ☼ INTJ",
				"profile_location": null,
				"description": "Nature never did betray the heart that loved her.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 19,
				"friends_count": 15,
				"listed_count": 1,
				"created_at": "Thu May 29 12:37:27 +0000 2014",
				"favourites_count": 287,
				"utc_offset": -14400,
				"time_zone": "Atlantic Time (Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 62,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564039497612939264/_usLzsHG_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564039497612939264/_usLzsHG_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2532559764/1423338548",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": [],
				"media": [
					{
						"id": 564968348694618100,
						"id_str": "564968348694618112",
						"indices": [
							97,
							119
						],
						"media_url": "http://pbs.twimg.com/media/B9cruEVIIAAdahG.png",
						"media_url_https": "https://pbs.twimg.com/media/B9cruEVIIAAdahG.png",
						"url": "http://t.co/364cVjNPjS",
						"display_url": "pic.twitter.com/364cVjNPjS",
						"expanded_url": "http://twitter.com/plantmoment/status/564968349226897408/photo/1",
						"type": "photo",
						"sizes": {
							"large": {
								"w": 60,
								"h": 37,
								"resize": "fit"
							},
							"small": {
								"w": 60,
								"h": 37,
								"resize": "fit"
							},
							"medium": {
								"w": 60,
								"h": 37,
								"resize": "fit"
							},
							"thumb": {
								"w": 60,
								"h": 37,
								"resize": "crop"
							}
						}
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:23 +0000 2015",
			"id": 564968340574072800,
			"id_str": "564968340574072833",
			"text": "I feel like I set myself up for failure with my \"happy Monday\" post on insta this morning.. It intact was not a happy Monday 😐",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 336350554,
				"id_str": "336350554",
				"name": "Brooke Alexandria",
				"screen_name": "brooke_irwin",
				"location": "",
				"profile_location": null,
				"description": "food is happiness  | @d_howard26 and Blu are my main men, they are also my happiness.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1345,
				"friends_count": 650,
				"listed_count": 5,
				"created_at": "Sat Jul 16 04:30:28 +0000 2011",
				"favourites_count": 17650,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 40910,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564876390453878784/_espNtFw_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564876390453878784/_espNtFw_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/336350554/1422596235",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": {
				"type": "Point",
				"coordinates": [
					36.02314977,
					-95.87474716
				]
			},
			"coordinates": {
				"type": "Point",
				"coordinates": [
					-95.87474716,
					36.02314977
				]
			},
			"place": {
				"id": "cb74aaf709812e0f",
				"url": "https://api.twitter.com/1.1/geo/id/cb74aaf709812e0f.json",
				"place_type": "city",
				"name": "Tulsa",
				"full_name": "Tulsa, OK",
				"country_code": "US",
				"country": "United States",
				"contained_within": [],
				"bounding_box": {
					"type": "Polygon",
					"coordinates": [
						[
							[
								-96.0656278,
								35.968624
							],
							[
								-95.761656,
								35.968624
							],
							[
								-95.761656,
								36.250159
							],
							[
								-96.0656278,
								36.250159
							]
						]
					]
				},
				"attributes": []
			},
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:22 +0000 2015",
			"id": 564968336815968260,
			"id_str": "564968336815968256",
			"text": "It\'s best to have failure happen early in life. It wakes up the Phoenix bird in you so you rise from the ashes. -Anne Baxter",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2987047408,
				"id_str": "2987047408",
				"name": "Cash Hookup",
				"screen_name": "JobCentral23532",
				"location": "",
				"profile_location": null,
				"description": "NOTE: A unique invite key is needed to access our exclusive job network. Click on the link below:",
				"url": "http://t.co/mYJSgE9dR2",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/mYJSgE9dR2",
								"expanded_url": "http://bit.ly/1BO7S97",
								"display_url": "bit.ly/1BO7S97",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2,
				"friends_count": 5,
				"listed_count": 0,
				"created_at": "Tue Jan 20 08:41:05 +0000 2015",
				"favourites_count": 0,
				"utc_offset": -39600,
				"time_zone": "International Date Line West",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 111,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/563254507069403136/83Lo8iZ0_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/563254507069403136/83Lo8iZ0_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2987047408/1423125316",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:22 +0000 2015",
			"id": 564968335272472600,
			"id_str": "564968335272472578",
			"text": "RT @mmichaelkohler: There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://tweetadder.com\" rel=\"nofollow\">TweetAdder v4</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 3009025024,
				"id_str": "3009025024",
				"name": "Мина Ипатовцев",
				"screen_name": "yuonne53648",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 0,
				"listed_count": 0,
				"created_at": "Sun Feb 01 01:30:56 +0000 2015",
				"favourites_count": 0,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 16,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://abs.twimg.com/sticky/default_profile_images/default_profile_5_normal.png",
				"profile_image_url_https": "https://abs.twimg.com/sticky/default_profile_images/default_profile_5_normal.png",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": true,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:05:18 +0000 2015",
				"id": 564968318042640400,
				"id_str": "564968318042640385",
				"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 2263367802,
					"id_str": "2263367802",
					"name": "Michael Koehler",
					"screen_name": "mmichaelkohler",
					"location": "",
					"profile_location": null,
					"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
					"url": "http://t.co/jO6YhLp3We",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jO6YhLp3We",
									"expanded_url": "http://michaelkoehler.co.uk",
									"display_url": "michaelkoehler.co.uk",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/C6x1LKF9EG",
									"expanded_url": "http://vimeo.com/80792364",
									"display_url": "vimeo.com/80792364",
									"indices": [
										133,
										155
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 141207,
					"friends_count": 11986,
					"listed_count": 67,
					"created_at": "Thu Dec 26 21:45:54 +0000 2013",
					"favourites_count": 1418,
					"utc_offset": 3600,
					"time_zone": "Amsterdam",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 8407,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 39,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "mmichaelkohler",
						"name": "Michael Koehler",
						"id": 2263367802,
						"id_str": "2263367802",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:21 +0000 2015",
			"id": 564968329564024800,
			"id_str": "564968329564024833",
			"text": "RT @JohnCena: Never fear failure, fear never learning from failure. #nevergiveup https://t.co/f0ZYMe2sku",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2982153340,
				"id_str": "2982153340",
				"name": "Matt Jackson",
				"screen_name": "MattJackson13R",
				"location": "Rancho Cucamonga, CA",
				"profile_location": null,
				"description": "I\'m Matt & I wrestle in a tag team called The Young Bucks. (RP for ROBLOX)",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 44,
				"friends_count": 40,
				"listed_count": 0,
				"created_at": "Sat Jan 17 04:05:09 +0000 2015",
				"favourites_count": 17,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 95,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "000000",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/556336404062404608/4bHM832x_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/556336404062404608/4bHM832x_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2982153340/1421476743",
				"profile_link_color": "89C9FA",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "000000",
				"profile_text_color": "000000",
				"profile_use_background_image": false,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Sat Feb 07 19:24:08 +0000 2015",
				"id": 564142587674894340,
				"id_str": "564142587674894336",
				"text": "Never fear failure, fear never learning from failure. #nevergiveup https://t.co/f0ZYMe2sku",
				"source": "<a href=\"http://vine.co\" rel=\"nofollow\">Vine - Make a Scene</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 141664648,
					"id_str": "141664648",
					"name": "John Cena",
					"screen_name": "JohnCena",
					"location": "West Newbury, MA",
					"profile_location": null,
					"description": "The Champ is Here on Twitter! Leader of WWE\'s Cenation and 15-time World Champion, in 140 characters or less. IG: http://t.co/xj6TkjZhND",
					"url": "https://t.co/eGsSnoXGm5",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "https://t.co/eGsSnoXGm5",
									"expanded_url": "https://vine.co/JohnCena",
									"display_url": "vine.co/JohnCena",
									"indices": [
										0,
										23
									]
								}
							]
						},
						"description": {
							"urls": [
								{
									"url": "http://t.co/xj6TkjZhND",
									"expanded_url": "http://www.instagram.com/johncena",
									"display_url": "instagram.com/johncena",
									"indices": [
										114,
										136
									]
								}
							]
						}
					},
					"protected": false,
					"followers_count": 6825978,
					"friends_count": 2195,
					"listed_count": 32331,
					"created_at": "Sat May 08 17:43:50 +0000 2010",
					"favourites_count": 0,
					"utc_offset": -18000,
					"time_zone": "Eastern Time (US & Canada)",
					"geo_enabled": false,
					"verified": true,
					"statuses_count": 3680,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": true,
					"profile_background_color": "000000",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/722971585/1b563075c6f6e8a8c19c95d0c45a453a.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/722971585/1b563075c6f6e8a8c19c95d0c45a453a.jpeg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/558435037461635073/3Jlz36n7_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/558435037461635073/3Jlz36n7_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/141664648/1348254711",
					"profile_link_color": "0A1169",
					"profile_sidebar_border_color": "FFFFFF",
					"profile_sidebar_fill_color": "F7D7D7",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1527,
				"favorite_count": 2424,
				"entities": {
					"hashtags": [
						{
							"text": "nevergiveup",
							"indices": [
								54,
								66
							]
						}
					],
					"symbols": [],
					"user_mentions": [],
					"urls": [
						{
							"url": "https://t.co/f0ZYMe2sku",
							"expanded_url": "https://vine.co/v/OUZ1anv03U3",
							"display_url": "vine.co/v/OUZ1anv03U3",
							"indices": [
								67,
								90
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 1527,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "nevergiveup",
						"indices": [
							68,
							80
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "JohnCena",
						"name": "John Cena",
						"id": 141664648,
						"id_str": "141664648",
						"indices": [
							3,
							12
						]
					}
				],
				"urls": [
					{
						"url": "https://t.co/f0ZYMe2sku",
						"expanded_url": "https://vine.co/v/OUZ1anv03U3",
						"display_url": "vine.co/v/OUZ1anv03U3",
						"indices": [
							81,
							104
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:18 +0000 2015",
			"id": 564968320278233100,
			"id_str": "564968320278233089",
			"text": "Many successful PPL have found opportunities in failure &amp; adversity that they could not recognize in more favorable circumstances.\n- N Hill",
			"source": "<a href=\"http://www.hootsuite.com\" rel=\"nofollow\">Hootsuite</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 399589312,
				"id_str": "399589312",
				"name": "JC Gonzalez",
				"screen_name": "JCgonzalezmusic",
				"location": "LA LA Land",
				"profile_location": null,
				"description": "#Colombian Singer & Rapper\nJuan Camilo Gonzalez AKA JC. My #HipHop Debut #AwakIN on #ValentinesDay\n#rest4now",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 2621,
				"friends_count": 2215,
				"listed_count": 9,
				"created_at": "Thu Oct 27 18:42:33 +0000 2011",
				"favourites_count": 106,
				"utc_offset": -28800,
				"time_zone": "Pacific Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 934,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "D3E0DE",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/497830412333244416/1bE4ZLIe.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/497830412333244416/1bE4ZLIe.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/559748631910035456/To3Czam5_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/559748631910035456/To3Czam5_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/399589312/1422292649",
				"profile_link_color": "05FCD3",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 1,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:18 +0000 2015",
			"id": 564968320055537660,
			"id_str": "564968320055537664",
			"text": "RT @fubunker: Result #35: Because I was just as interested in #testing @rosettastone as I was in #learning #Dutch.\n\nhttp://t.co/Qho7VL8pWC",
			"source": "<a href=\"http://spinabell.com\" rel=\"nofollow\">spinabell</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2485341174,
				"id_str": "2485341174",
				"name": "vikash prasad",
				"screen_name": "vikashprasad21",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 181,
				"friends_count": 265,
				"listed_count": 77,
				"created_at": "Fri May 09 12:55:29 +0000 2014",
				"favourites_count": 189,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 3901,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/490033924777594881/LEYa7Ix9_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/490033924777594881/LEYa7Ix9_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:40:56 +0000 2015",
				"id": 564962186619932700,
				"id_str": "564962186619932672",
				"text": "Result #35: Because I was just as interested in #testing @rosettastone as I was in #learning #Dutch.\n\nhttp://t.co/Qho7VL8pWC",
				"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 126969392,
					"id_str": "126969392",
					"name": "TheWickerBreaker",
					"screen_name": "fubunker",
					"location": "Seattle",
					"profile_location": null,
					"description": "I\'m going to make a resolution a day for an entire year then allow one year to accomplish said goal. Follow my progress here.",
					"url": "http://t.co/GzI0SzJeuP",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/GzI0SzJeuP",
									"expanded_url": "http://thewickerbreaker.com/about-365-days-of-resolution/",
									"display_url": "thewickerbreaker.com/about-365-days…",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 656,
					"friends_count": 1082,
					"listed_count": 8,
					"created_at": "Sat Mar 27 16:02:05 +0000 2010",
					"favourites_count": 538,
					"utc_offset": -28800,
					"time_zone": "Pacific Time (US & Canada)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 3669,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "353837",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/762246182/e2f633cf2f483913c44327be3a602b07.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/762246182/e2f633cf2f483913c44327be3a602b07.jpeg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/3100236834/8a359e826fdf15bd647d23079c9b1874_normal.png",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/3100236834/8a359e826fdf15bd647d23079c9b1874_normal.png",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/126969392/1398308078",
					"profile_link_color": "634516",
					"profile_sidebar_border_color": "000000",
					"profile_sidebar_fill_color": "C0DFEC",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 0,
				"entities": {
					"hashtags": [
						{
							"text": "testing",
							"indices": [
								48,
								56
							]
						},
						{
							"text": "learning",
							"indices": [
								83,
								92
							]
						},
						{
							"text": "Dutch",
							"indices": [
								93,
								99
							]
						}
					],
					"symbols": [],
					"user_mentions": [
						{
							"screen_name": "rosettastone",
							"name": "Rosetta Stone",
							"id": 14501065,
							"id_str": "14501065",
							"indices": [
								57,
								70
							]
						}
					],
					"urls": [
						{
							"url": "http://t.co/Qho7VL8pWC",
							"expanded_url": "http://thewickerbreaker.com/1-the-failure-that-started-it-all/2015/2/9/result-35-sending-this-one-to-redemption-until-i-get-my-hands-on-rosetta-stone",
							"display_url": "thewickerbreaker.com/1-the-failure-…",
							"indices": [
								102,
								124
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "testing",
						"indices": [
							62,
							70
						]
					},
					{
						"text": "learning",
						"indices": [
							97,
							106
						]
					},
					{
						"text": "Dutch",
						"indices": [
							107,
							113
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "fubunker",
						"name": "TheWickerBreaker",
						"id": 126969392,
						"id_str": "126969392",
						"indices": [
							3,
							12
						]
					},
					{
						"screen_name": "rosettastone",
						"name": "Rosetta Stone",
						"id": 14501065,
						"id_str": "14501065",
						"indices": [
							71,
							84
						]
					}
				],
				"urls": [
					{
						"url": "http://t.co/Qho7VL8pWC",
						"expanded_url": "http://thewickerbreaker.com/1-the-failure-that-started-it-all/2015/2/9/result-35-sending-this-one-to-redemption-until-i-get-my-hands-on-rosetta-stone",
						"display_url": "thewickerbreaker.com/1-the-failure-…",
						"indices": [
							116,
							138
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:18 +0000 2015",
			"id": 564968318042640400,
			"id_str": "564968318042640385",
			"text": "There are no secrets to success. It is the result of preparation, hard work and learning from failure.",
			"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2263367802,
				"id_str": "2263367802",
				"name": "Michael Koehler",
				"screen_name": "mmichaelkohler",
				"location": "",
				"profile_location": null,
				"description": "#SocialMedia | #Entrepreneur | #Success | #Business | #DigitalMarketing | Watch my famous video on how to get 100,000 Real Followers http://t.co/C6x1LKF9EG",
				"url": "http://t.co/jO6YhLp3We",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/jO6YhLp3We",
								"expanded_url": "http://michaelkoehler.co.uk",
								"display_url": "michaelkoehler.co.uk",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": [
							{
								"url": "http://t.co/C6x1LKF9EG",
								"expanded_url": "http://vimeo.com/80792364",
								"display_url": "vimeo.com/80792364",
								"indices": [
									133,
									155
								]
							}
						]
					}
				},
				"protected": false,
				"followers_count": 141207,
				"friends_count": 11986,
				"listed_count": 67,
				"created_at": "Thu Dec 26 21:45:54 +0000 2013",
				"favourites_count": 1418,
				"utc_offset": 3600,
				"time_zone": "Amsterdam",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 8407,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/543552021505138688/Kt9jPURG.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/554613532897972225/es_i7xar_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2263367802/1418338952",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 39,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:17 +0000 2015",
			"id": 564968314594529300,
			"id_str": "564968314594529280",
			"text": "@TerryNatureBag Hi! Thanks for your message, I just sent you an email but I got a failure notice,,, Can you dm me your m",
			"source": "<a href=\"https://mobile.twitter.com\" rel=\"nofollow\">Mobile Web (M2)</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": 2230261975,
			"in_reply_to_user_id_str": "2230261975",
			"in_reply_to_screen_name": "TerryNatureBag",
			"user": {
				"id": 2187829382,
				"id_str": "2187829382",
				"name": "Nozomi McFarland",
				"screen_name": "balacyviquxu",
				"location": "United Kingdom",
				"profile_location": null,
				"description": "Management firm est. 2008 by CEO @KINGJAH357 Artists: @BozzLaydee1 @HENNYWHYTE @EurickaDiva @Kilo504",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 0,
				"friends_count": 57,
				"listed_count": 0,
				"created_at": "Mon Nov 11 06:40:14 +0000 2013",
				"favourites_count": 6,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 111,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/538518503477620737/sFHrUP7b.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/538518503477620737/sFHrUP7b.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/538506493088129024/npL0opBg_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/538506493088129024/npL0opBg_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2187829382/1417227771",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "TerryNatureBag",
						"name": "Terry",
						"id": 2230261975,
						"id_str": "2230261975",
						"indices": [
							0,
							15
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:14 +0000 2015",
			"id": 564968302255304700,
			"id_str": "564968302255304704",
			"text": "RT @MrxOpportunity: FAILURE is not the opposite of success its is PART of success",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 378854064,
				"id_str": "378854064",
				"name": "rayy",
				"screen_name": "Rayyyy____",
				"location": "",
				"profile_location": null,
				"description": "MTSU \'18 •",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 690,
				"friends_count": 371,
				"listed_count": 1,
				"created_at": "Fri Sep 23 22:57:45 +0000 2011",
				"favourites_count": 3132,
				"utc_offset": -21600,
				"time_zone": "Central Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 43578,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "131516",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/597686429/i64737krqkcvi6m582s5.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/597686429/i64737krqkcvi6m582s5.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564674044960587777/qUQE-8dF_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564674044960587777/qUQE-8dF_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/378854064/1416423708",
				"profile_link_color": "009999",
				"profile_sidebar_border_color": "A3A3A3",
				"profile_sidebar_fill_color": "080808",
				"profile_text_color": "43A9E0",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:42:48 +0000 2015",
				"id": 564962654880792600,
				"id_str": "564962654880792577",
				"text": "FAILURE is not the opposite of success its is PART of success",
				"source": "<a href=\"http://www.socialoomph.com\" rel=\"nofollow\">SocialOomph</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 40096229,
					"id_str": "40096229",
					"name": "Snapchat : TW.CO",
					"screen_name": "MrxOpportunity",
					"location": "Pdx",
					"profile_location": null,
					"description": "Terrell • Vipassana #ArtofLiving",
					"url": "http://t.co/g2sqPHk4pd",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/g2sqPHk4pd",
									"expanded_url": "http://www.terrellwallace.co",
									"display_url": "terrellwallace.co",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 83865,
					"friends_count": 2049,
					"listed_count": 96,
					"created_at": "Thu May 14 21:57:12 +0000 2009",
					"favourites_count": 467,
					"utc_offset": -28800,
					"time_zone": "Pacific Time (US & Canada)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 127818,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "000000",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/378800000169617605/4kgtSxh_.png",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/378800000169617605/4kgtSxh_.png",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/562806499454746627/dQrw8Av__normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/562806499454746627/dQrw8Av__normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/40096229/1423018499",
					"profile_link_color": "0EA8F0",
					"profile_sidebar_border_color": "FFFFFF",
					"profile_sidebar_fill_color": "EFEFEF",
					"profile_text_color": "333333",
					"profile_use_background_image": false,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 4,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 4,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "MrxOpportunity",
						"name": "Snapchat : TW.CO",
						"id": 40096229,
						"id_str": "40096229",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:13 +0000 2015",
			"id": 564968298576879600,
			"id_str": "564968298576879618",
			"text": "\"As soon as you mess up, fess up. Fix your failure with the Blood of Jesus.\" http://t.co/AKvSMq4xF2",
			"source": "<a href=\"http://bufferapp.com\" rel=\"nofollow\">Buffer</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 112045979,
				"id_str": "112045979",
				"name": "EmeryHorvath",
				"screen_name": "EmeryHorvath",
				"location": "Oklahoma",
				"profile_location": null,
				"description": "Jesus is the most wonderful friend ever. Passionate about knowing Him and helping others grow in Him.\nhttp://t.co/YVKVfw2y93",
				"url": "http://t.co/4YhCuDi4Sk",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/4YhCuDi4Sk",
								"expanded_url": "http://www.emeryhorvath.com/about/",
								"display_url": "emeryhorvath.com/about/",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": [
							{
								"url": "http://t.co/YVKVfw2y93",
								"expanded_url": "http://emeryhorvath.com",
								"display_url": "emeryhorvath.com",
								"indices": [
									102,
									124
								]
							}
						]
					}
				},
				"protected": false,
				"followers_count": 15416,
				"friends_count": 8330,
				"listed_count": 87,
				"created_at": "Sun Feb 07 02:45:50 +0000 2010",
				"favourites_count": 19,
				"utc_offset": -21600,
				"time_zone": "Central Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 5036,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "DBE9ED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/534129090400247808/xQkcOFrU.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/534129090400247808/xQkcOFrU.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/490269915274694656/kgPC5m7F_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/490269915274694656/kgPC5m7F_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/112045979/1416180802",
				"profile_link_color": "3B94D9",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "95E8EC",
				"profile_text_color": "3C3940",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": [
					{
						"url": "http://t.co/AKvSMq4xF2",
						"expanded_url": "http://buff.ly/1zhMWE4",
						"display_url": "buff.ly/1zhMWE4",
						"indices": [
							77,
							99
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:11 +0000 2015",
			"id": 564968290888736800,
			"id_str": "564968290888736768",
			"text": "It was my fear of failure that first kept me from attempting the Master Work.",
			"source": "<a href=\"https://luufy.com/\" rel=\"nofollow\">paulocoelhok</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 312099479,
				"id_str": "312099479",
				"name": "Paulo Coelho",
				"screen_name": "paulocoelhok",
				"location": "",
				"profile_location": null,
				"description": "Brazilian lyricist and novelist. He is the recipient of numerous international awards, amongst them the Crystal Award by the World Economic Forum.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 28,
				"friends_count": 28,
				"listed_count": 1,
				"created_at": "Mon Jun 06 15:46:09 +0000 2011",
				"favourites_count": 0,
				"utc_offset": -25200,
				"time_zone": "Chihuahua",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 680,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "ACDED6",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme18/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme18/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/555515882059739136/i22N1SYU_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/555515882059739136/i22N1SYU_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/312099479/1421280265",
				"profile_link_color": "038543",
				"profile_sidebar_border_color": "EEEEEE",
				"profile_sidebar_fill_color": "F6F6F6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:11 +0000 2015",
			"id": 564968289211023360,
			"id_str": "564968289211023360",
			"text": "[Watch] The OUTRAGEOUS Holder \'Failure\' That Americans Are Glad He Didn\'t Get Done ⋆ Dc Gazette http://t.co/DgE8CXKvR3",
			"source": "<a href=\"http://www.facebook.com/twitter\" rel=\"nofollow\">Facebook</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 75864150,
				"id_str": "75864150",
				"name": "Sonny Thomas",
				"screen_name": "SpringboroTea",
				"location": "Springboro, Ohio",
				"profile_location": null,
				"description": "Where Li\'Boro-Tea Is Brewing! tm - Jeffersonian Republican & Talkshow Host - Go to http://t.co/t8PHpJCkfX as well. #tcot #tlot #WR",
				"url": "http://t.co/VnoNwpWVhQ",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/VnoNwpWVhQ",
								"expanded_url": "http://www.SpringboroTeaParty.com",
								"display_url": "SpringboroTeaParty.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": [
							{
								"url": "http://t.co/t8PHpJCkfX",
								"expanded_url": "http://www.SonnyThomas.com",
								"display_url": "SonnyThomas.com",
								"indices": [
									83,
									105
								]
							}
						]
					}
				},
				"protected": false,
				"followers_count": 1188,
				"friends_count": 1276,
				"listed_count": 47,
				"created_at": "Sun Sep 20 20:06:01 +0000 2009",
				"favourites_count": 4109,
				"utc_offset": -18000,
				"time_zone": "Quito",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 113089,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "022330",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/411515686/STP_logo.gif",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/411515686/STP_logo.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/3154423439/ed1199dfca66aa66d1fede9ca1cd5f30_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/3154423439/ed1199dfca66aa66d1fede9ca1cd5f30_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/75864150/1358988105",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "A8C7F7",
				"profile_sidebar_fill_color": "C0DFEC",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": [
					{
						"url": "http://t.co/DgE8CXKvR3",
						"expanded_url": "http://fb.me/3VmHVWlIj",
						"display_url": "fb.me/3VmHVWlIj",
						"indices": [
							96,
							118
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:06 +0000 2015",
			"id": 564968270613475300,
			"id_str": "564968270613475328",
			"text": "Every failure made me more confident. Because I wanted even more to achieve as revenge to show that I could. Roman Polanski no",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2442742723,
				"id_str": "2442742723",
				"name": "1D OTRA VIP",
				"screen_name": "qawahegenubi",
				"location": "Indianapolis",
				"profile_location": null,
				"description": "On The Road Again Tour Giveaway",
				"url": "http://t.co/Tdr6yTWPwW",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/Tdr6yTWPwW",
								"expanded_url": "http://is.gd/lJMuQW",
								"display_url": "is.gd/lJMuQW",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 3,
				"friends_count": 21,
				"listed_count": 0,
				"created_at": "Sun Apr 13 21:47:29 +0000 2014",
				"favourites_count": 5,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 204,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "EDECE9",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme3/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme3/bg.gif",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564516948667420672/jIfLXZ0-_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564516948667420672/jIfLXZ0-_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2442742723/1423426296",
				"profile_link_color": "088253",
				"profile_sidebar_border_color": "D3D2CF",
				"profile_sidebar_fill_color": "E3E2DE",
				"profile_text_color": "634047",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:06 +0000 2015",
			"id": 564968270533365760,
			"id_str": "564968270533365762",
			"text": "Tinder has a 90% failure rate. Enjoy that stat.",
			"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 902507994,
				"id_str": "902507994",
				"name": "Mitch Charlton",
				"screen_name": "MitchCharles97",
				"location": "Now You See Me, Now You Don\'t",
				"profile_location": null,
				"description": "You have to be continually drunk. But on what? Wine, poetry or virtue, as you wish. But be drunk.  Shad U Sask 2014!! OHS Senior M.C. SRC Co-Prez w/ @kgass6",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 407,
				"friends_count": 388,
				"listed_count": 0,
				"created_at": "Wed Oct 24 20:06:20 +0000 2012",
				"favourites_count": 10428,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 8358,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "D80000",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme15/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme15/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/532019430725664769/MKrT-Hrb_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/532019430725664769/MKrT-Hrb_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/902507994/1420481636",
				"profile_link_color": "000000",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": false,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 2,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:05 +0000 2015",
			"id": 564968266524008450,
			"id_str": "564968266524008448",
			"text": "RT @DanMcGowan: \"It is better to say no comment than to mislead the press.\" Failure to respond to basic questions is just as bad, @Jorge_El…",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 416766656,
				"id_str": "416766656",
				"name": "J Aaron Sencer",
				"screen_name": "JeremySencer",
				"location": "Rhode Island",
				"profile_location": null,
				"description": "Father, Husband, Teacher, Musician, Fernando",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 34,
				"friends_count": 59,
				"listed_count": 1,
				"created_at": "Sun Nov 20 03:48:28 +0000 2011",
				"favourites_count": 28,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 121,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/2831441210/ccf07172e9e46374495ac6c480985e02_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/2831441210/ccf07172e9e46374495ac6c480985e02_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Mon Feb 09 21:11:11 +0000 2015",
				"id": 564894303345201150,
				"id_str": "564894303345201152",
				"text": "\"It is better to say no comment than to mislead the press.\" Failure to respond to basic questions is just as bad, @Jorge_Elorza.",
				"source": "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 16685301,
					"id_str": "16685301",
					"name": "Dan McGowan",
					"screen_name": "DanMcGowan",
					"location": "Providence",
					"profile_location": null,
					"description": "Digital reporter for @wpri12 covering Providence, education and politics. Things I love: baseball, steak, chocolate cake. Contact: dmcgowan@wpri.com",
					"url": "http://t.co/MdqmoLGiQo",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/MdqmoLGiQo",
									"expanded_url": "http://wpri.com/category/local-news/dan-mcgowan-local-news/",
									"display_url": "wpri.com/category/local…",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 4135,
					"friends_count": 755,
					"listed_count": 142,
					"created_at": "Fri Oct 10 16:32:20 +0000 2008",
					"favourites_count": 2006,
					"utc_offset": -18000,
					"time_zone": "Eastern Time (US & Canada)",
					"geo_enabled": true,
					"verified": false,
					"statuses_count": 12647,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "709397",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/106235929/ProvidenceSkylinePanoramic1.jpg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/106235929/ProvidenceSkylinePanoramic1.jpg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/3404750552/d26401f0367d639dcd13ab9d5eee447a_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/3404750552/d26401f0367d639dcd13ab9d5eee447a_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/16685301/1401388811",
					"profile_link_color": "000000",
					"profile_sidebar_border_color": "86A4A6",
					"profile_sidebar_fill_color": "A0C5C7",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 5,
				"favorite_count": 3,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [
						{
							"screen_name": "Jorge_Elorza",
							"name": "Jorge Elorza",
							"id": 1000783368,
							"id_str": "1000783368",
							"indices": [
								114,
								127
							]
						}
					],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 5,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "DanMcGowan",
						"name": "Dan McGowan",
						"id": 16685301,
						"id_str": "16685301",
						"indices": [
							3,
							14
						]
					},
					{
						"screen_name": "Jorge_Elorza",
						"name": "Jorge Elorza",
						"id": 1000783368,
						"id_str": "1000783368",
						"indices": [
							130,
							140
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:04 +0000 2015",
			"id": 564968258994847740,
			"id_str": "564968258994847746",
			"text": "RT @InspowerBooks: Success is not final, failure is not fatal: it is the courage to continue that counts. - Winston Churchill",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2507967788,
				"id_str": "2507967788",
				"name": "Apryl",
				"screen_name": "aprylastillo",
				"location": "",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 12,
				"friends_count": 60,
				"listed_count": 0,
				"created_at": "Mon May 19 17:21:12 +0000 2014",
				"favourites_count": 14,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 55,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/468441919295475712/TJbLAtMG_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/468441919295475712/TJbLAtMG_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2507967788/1400520229",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:30:09 +0000 2015",
				"id": 564959471093706750,
				"id_str": "564959471093706752",
				"text": "Success is not final, failure is not fatal: it is the courage to continue that counts. - Winston Churchill",
				"source": "<a href=\"http://bufferapp.com\" rel=\"nofollow\">Buffer</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 125854580,
					"id_str": "125854580",
					"name": "Motivational Quotes",
					"screen_name": "InspowerBooks",
					"location": "",
					"profile_location": null,
					"description": "Great motivational quotes to cheer you up. We share wisdom from famous authors and amazing people. A quote a day keeps sadness away. Gonzalo Arzuaga",
					"url": "http://t.co/jYnLeOmfCG",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/jYnLeOmfCG",
									"expanded_url": "http://bit.ly/inspowerbe",
									"display_url": "bit.ly/inspowerbe",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 427045,
					"friends_count": 315,
					"listed_count": 4701,
					"created_at": "Wed Mar 24 02:35:39 +0000 2010",
					"favourites_count": 3,
					"utc_offset": -21600,
					"time_zone": "Central Time (US & Canada)",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 36824,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "EBEBEB",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/518056792622768128/adclXyB4.jpeg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/518056792622768128/adclXyB4.jpeg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/1171979080/Book1_500x500_normal.jpg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/1171979080/Book1_500x500_normal.jpg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/125854580/1358144736",
					"profile_link_color": "7B9600",
					"profile_sidebar_border_color": "FFFFFF",
					"profile_sidebar_fill_color": "F7F1CA",
					"profile_text_color": "000000",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 32,
				"favorite_count": 28,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 32,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "InspowerBooks",
						"name": "Motivational Quotes",
						"id": 125854580,
						"id_str": "125854580",
						"indices": [
							3,
							17
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:01 +0000 2015",
			"id": 564968248546836500,
			"id_str": "564968248546836481",
			"text": "Everyone owns an air guitar!!! Failure to admit it makes you a rock star!!! Js",
			"source": "<a href=\"http://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2860124201,
				"id_str": "2860124201",
				"name": "ANG3L!CA",
				"screen_name": "Lynn2Angelica",
				"location": "wherever I choose to be!!",
				"profile_location": null,
				"description": "",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 61,
				"friends_count": 115,
				"listed_count": 0,
				"created_at": "Tue Nov 04 08:24:30 +0000 2014",
				"favourites_count": 585,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 254,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/555937097857523712/0TElEnlW_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/555937097857523712/0TElEnlW_normal.jpeg",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:05:00 +0000 2015",
			"id": 564968244155801600,
			"id_str": "564968244155801601",
			"text": "RT @StevetheMormon: I attempted to do some early studying for the AP calc test tonight, I quickly figured out it was useless and I should j…",
			"source": "<a href=\"http://twitter.com/#!/download/ipad\" rel=\"nofollow\">Twitter for iPad</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 427890973,
				"id_str": "427890973",
				"name": "Nicole Nazar",
				"screen_name": "nicole_nazar",
				"location": "EDBasic • Dive",
				"profile_location": null,
				"description": "Toronto, Canada | Medina, Ohio",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 412,
				"friends_count": 309,
				"listed_count": 0,
				"created_at": "Sun Dec 04 03:06:17 +0000 2011",
				"favourites_count": 4389,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 7747,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/378800000159921904/-nLXbLli.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/378800000159921904/-nLXbLli.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564466114546384897/kryZev2y_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564466114546384897/kryZev2y_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/427890973/1422886457",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:59:59 +0000 2015",
				"id": 564966981309562900,
				"id_str": "564966981309562880",
				"text": "I attempted to do some early studying for the AP calc test tonight, I quickly figured out it was useless and I should just accept failure",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 1561034892,
					"id_str": "1561034892",
					"name": "Steven Stenquist",
					"screen_name": "StevetheMormon",
					"location": "",
					"profile_location": null,
					"description": "What\'s that on the road? Is it a truck? Is it a motorcycle? No it\'s a Kia Soul",
					"url": null,
					"entities": {
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 400,
					"friends_count": 420,
					"listed_count": 0,
					"created_at": "Mon Jul 01 17:31:52 +0000 2013",
					"favourites_count": 4788,
					"utc_offset": null,
					"time_zone": null,
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 1297,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/559088360413986816/II2qbaPf_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/559088360413986816/II2qbaPf_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/1561034892/1413684342",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": true,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 5,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "StevetheMormon",
						"name": "Steven Stenquist",
						"id": 1561034892,
						"id_str": "1561034892",
						"indices": [
							3,
							18
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:58 +0000 2015",
			"id": 564968237079613440,
			"id_str": "564968237079613440",
			"text": "When your bestfriend in the hospital woth kidney failure and is like im not getting surgey😴😴",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1027497601,
				"id_str": "1027497601",
				"name": "net.porn",
				"screen_name": "trippytriptrip",
				"location": "Alaska",
				"profile_location": null,
				"description": "Sleep on me",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 484,
				"friends_count": 496,
				"listed_count": 2,
				"created_at": "Sat Dec 22 01:08:52 +0000 2012",
				"favourites_count": 14968,
				"utc_offset": -28800,
				"time_zone": "Pacific Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 14020,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": true,
				"profile_background_color": "F5ABB5",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/467623306095382528/2p1fjJTY.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/467623306095382528/2p1fjJTY.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/562814973932736513/RCpphztv_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/562814973932736513/RCpphztv_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1027497601/1423533175",
				"profile_link_color": "F5ABB5",
				"profile_sidebar_border_color": "000000",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": false,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:58 +0000 2015",
			"id": 564968233846190100,
			"id_str": "564968233846190080",
			"text": "Cation with or something . I just didn\'t and couldn\'t accept the fact of failure I always put myself before everybody and anything and never",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 626967823,
				"id_str": "626967823",
				"name": "Shyheem B",
				"screen_name": "SBarthel6",
				"location": "",
				"profile_location": null,
				"description": "Alyssa Is The Wifey 08.24.14 ❤️College Bound Future Homicide Detective",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 302,
				"friends_count": 614,
				"listed_count": 1,
				"created_at": "Thu Jul 05 02:04:36 +0000 2012",
				"favourites_count": 448,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 1670,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/624932437/opyeo2hg5her2fw0h8e5.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/624932437/opyeo2hg5her2fw0h8e5.jpeg",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/564853803699412993/e8GFlOAQ_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/564853803699412993/e8GFlOAQ_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/626967823/1423441793",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:58 +0000 2015",
			"id": 564968233623912450,
			"id_str": "564968233623912448",
			"text": "RT @9and10News: About 5,900 Consumers Energy customers are without power in several #NoMI counties due to a power line failure http://t.co/…",
			"source": "<a href=\"http://twitter.com/download/android\" rel=\"nofollow\">Twitter for Android</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 207219685,
				"id_str": "207219685",
				"name": "Jennifer V. Aiken",
				"screen_name": "LadyJ5569",
				"location": "Michigan",
				"profile_location": null,
				"description": "Scentsy  Certified  Independent Consultant.  I am a voice for all animals and our environment. Protect nature & earth.  God Bless America ♡☆♡",
				"url": "http://t.co/BB8YCtthQm",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/BB8YCtthQm",
								"expanded_url": "http://www.jenniferv55.scentsy.us",
								"display_url": "jenniferv55.scentsy.us",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1300,
				"friends_count": 1998,
				"listed_count": 54,
				"created_at": "Sun Oct 24 20:30:58 +0000 2010",
				"favourites_count": 70895,
				"utc_offset": -18000,
				"time_zone": "Eastern Time (US & Canada)",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 69237,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "642D8B",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme10/bg.gif",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/561928701462736896/9H_S4xNt_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/561928701462736896/9H_S4xNt_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/207219685/1419801186",
				"profile_link_color": "FF0000",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "7AC3EE",
				"profile_text_color": "3D1957",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:04:13 +0000 2015",
				"id": 564968047727763460,
				"id_str": "564968047727763457",
				"text": "About 5,900 Consumers Energy customers are without power in several #NoMI counties due to a power line failure http://t.co/Q9hblVl2h7",
				"source": "<a href=\"http://www.socialnewsdesk.com\" rel=\"nofollow\">SocialNewsDesk</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 21036370,
					"id_str": "21036370",
					"name": "9 & 10 News",
					"screen_name": "9and10News",
					"location": "Northern Michigan",
					"profile_location": null,
					"description": "Northern Michigan\'s News Leader bringing you the latest in #nwmi news, weather, sports and much more. #cadillacmi #traversecity #northernmichigan",
					"url": "http://t.co/WeQjwsxdBC",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/WeQjwsxdBC",
									"expanded_url": "http://www.9and10news.com",
									"display_url": "9and10news.com",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 18548,
					"friends_count": 3458,
					"listed_count": 398,
					"created_at": "Mon Feb 16 22:25:07 +0000 2009",
					"favourites_count": 161,
					"utc_offset": -18000,
					"time_zone": "Eastern Time (US & Canada)",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 56747,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "9AE4E8",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/4734712/bg.jpg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/4734712/bg.jpg",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/2552225800/image_normal.jpg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/2552225800/image_normal.jpg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/21036370/1366819896",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "BDDCAD",
					"profile_sidebar_fill_color": "DDFFCC",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 1,
				"entities": {
					"hashtags": [
						{
							"text": "NoMI",
							"indices": [
								68,
								73
							]
						}
					],
					"symbols": [],
					"user_mentions": [],
					"urls": [
						{
							"url": "http://t.co/Q9hblVl2h7",
							"expanded_url": "http://bit.ly/1uxBsAE",
							"display_url": "bit.ly/1uxBsAE",
							"indices": [
								111,
								133
							]
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": false,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [
					{
						"text": "NoMI",
						"indices": [
							84,
							89
						]
					}
				],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "9and10News",
						"name": "9 & 10 News",
						"id": 21036370,
						"id_str": "21036370",
						"indices": [
							3,
							14
						]
					}
				],
				"urls": [
					{
						"url": "http://t.co/Q9hblVl2h7",
						"expanded_url": "http://bit.ly/1uxBsAE",
						"display_url": "bit.ly/1uxBsAE",
						"indices": [
							139,
							140
						]
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": true,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:55 +0000 2015",
			"id": 564968224509677600,
			"id_str": "564968224509677568",
			"text": "RT @curtislepore: At the ER, doing tests RN to make sure he isn\'t going into congestive heart failure. He\'s a strong pup I\'m just glad we\'r…",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 973174394,
				"id_str": "973174394",
				"name": "Joss Lopez",
				"screen_name": "JoselineLopez8",
				"location": "Anaheim, CA",
				"profile_location": null,
				"description": "Let yourself be silently drawn by the stronger pull of what you really love.",
				"url": "http://t.co/jN8M8SKbw6",
				"entities": {
					"url": {
						"urls": [
							{
								"url": "http://t.co/jN8M8SKbw6",
								"expanded_url": "http://www.Joseline133.tumblr.com",
								"display_url": "Joseline133.tumblr.com",
								"indices": [
									0,
									22
								]
							}
						]
					},
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 726,
				"friends_count": 651,
				"listed_count": 4,
				"created_at": "Tue Nov 27 03:22:41 +0000 2012",
				"favourites_count": 13169,
				"utc_offset": -28800,
				"time_zone": "Pacific Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 9036,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "73F0B6",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/841984708/56a20599c5debf761a11cedbf267cf44.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/841984708/56a20599c5debf761a11cedbf267cf44.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/559902781884997633/xsYW0695_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/559902781884997633/xsYW0695_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/973174394/1422326200",
				"profile_link_color": "64ECB3",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "89EDBC",
				"profile_text_color": "7CEEC9",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 01:03:34 +0000 2015",
				"id": 564952781249716200,
				"id_str": "564952781249716224",
				"text": "At the ER, doing tests RN to make sure he isn\'t going into congestive heart failure. He\'s a strong pup I\'m just glad we\'re here 🙏",
				"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 410186746,
					"id_str": "410186746",
					"name": "Curtis Lepore",
					"screen_name": "curtislepore",
					"location": "LA",
					"profile_location": null,
					"description": "I vine sometimes. add me on snapchat @CURTLEPORE",
					"url": "http://t.co/godKK3whPK",
					"entities": {
						"url": {
							"urls": [
								{
									"url": "http://t.co/godKK3whPK",
									"expanded_url": "http://www.vine.co/curtislepore",
									"display_url": "vine.co/curtislepore",
									"indices": [
										0,
										22
									]
								}
							]
						},
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 399761,
					"friends_count": 20316,
					"listed_count": 587,
					"created_at": "Fri Nov 11 19:16:57 +0000 2011",
					"favourites_count": 7595,
					"utc_offset": -25200,
					"time_zone": "Arizona",
					"geo_enabled": true,
					"verified": true,
					"statuses_count": 8457,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "C0DEED",
					"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
					"profile_background_tile": false,
					"profile_image_url": "http://pbs.twimg.com/profile_images/511379757649231872/DCL4Zh5V_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/511379757649231872/DCL4Zh5V_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/410186746/1421208850",
					"profile_link_color": "0084B4",
					"profile_sidebar_border_color": "C0DEED",
					"profile_sidebar_fill_color": "DDEEF6",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": true,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 160,
				"favorite_count": 687,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [],
					"urls": []
				},
				"favorited": false,
				"retweeted": false,
				"lang": "en"
			},
			"retweet_count": 160,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "curtislepore",
						"name": "Curtis Lepore",
						"id": 410186746,
						"id_str": "410186746",
						"indices": [
							3,
							16
						]
					}
				],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:55 +0000 2015",
			"id": 564968221816938500,
			"id_str": "564968221816938496",
			"text": "Failure is always an option, but it\'s also a choice.”",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 559436467,
				"id_str": "559436467",
				"name": "That buzuboi",
				"screen_name": "jmadawa",
				"location": "",
				"profile_location": null,
				"description": "Respect is earned, honesty is appreciated, love is gained &loyalty is returned.Trust is a word u seldom hear 4rm us hustlers we don\'t sleep, we rst one eye up!!",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 268,
				"friends_count": 522,
				"listed_count": 0,
				"created_at": "Sat Apr 21 11:10:05 +0000 2012",
				"favourites_count": 198,
				"utc_offset": -28800,
				"time_zone": "Pacific Time (US & Canada)",
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 5792,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/525479146911440896/81xggwxz_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/525479146911440896/81xggwxz_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/559436467/1414118965",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:49 +0000 2015",
			"id": 564968197741641700,
			"id_str": "564968197741641728",
			"text": "#Success consists of going from failure to failure without loss of enthusiasm, Winston Churchill #quotes #motivational",
			"source": "<a href=\"https://mobile.twitter.com\" rel=\"nofollow\">Mobile Web (M2)</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2187904596,
				"id_str": "2187904596",
				"name": "Altman Gibbs",
				"screen_name": "josefisidoma",
				"location": "27/03/2014 21/07/2014",
				"profile_location": null,
				"description": "Resources supporting student achievement based on cognitive science research: R&D:",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 3,
				"friends_count": 59,
				"listed_count": 0,
				"created_at": "Mon Nov 11 07:41:46 +0000 2013",
				"favourites_count": 19,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 109,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/538517642512855040/QItkp0oy.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/538517642512855040/QItkp0oy.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/538506138065440768/J1A_p8Tk_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/538506138065440768/J1A_p8Tk_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2187904596/1417227557",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 1,
			"entities": {
				"hashtags": [
					{
						"text": "Success",
						"indices": [
							0,
							8
						]
					},
					{
						"text": "quotes",
						"indices": [
							97,
							104
						]
					},
					{
						"text": "motivational",
						"indices": [
							105,
							118
						]
					}
				],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:44 +0000 2015",
			"id": 564968177730191360,
			"id_str": "564968177730191361",
			"text": "i am a failure lol",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 2615630050,
				"id_str": "2615630050",
				"name": "Ashlyn",
				"screen_name": "pizzashlyn_",
				"location": "",
				"profile_location": null,
				"description": "I have absolutely lost my mind. and i love it.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 127,
				"friends_count": 356,
				"listed_count": 3,
				"created_at": "Mon Jun 16 23:44:52 +0000 2014",
				"favourites_count": 1071,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 1002,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/496922856693825536/6BWWfAvD.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/496922856693825536/6BWWfAvD.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/555153058053632000/X37f5Vpc_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/555153058053632000/X37f5Vpc_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/2615630050/1419673110",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:41 +0000 2015",
			"id": 564968164896014340,
			"id_str": "564968164896014336",
			"text": "RT @theLARGEpicture: That nigga face just screams \"failure\". RT @ToreMyACL: X_____x http://t.co/LNZ63kK3eh",
			"source": "<a href=\"https://about.twitter.com/products/tweetdeck\" rel=\"nofollow\">TweetDeck</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1014441517,
				"id_str": "1014441517",
				"name": "James Harden",
				"screen_name": "ToreMyACL",
				"location": "",
				"profile_location": null,
				"description": "Halharl Infigare",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 1023,
				"friends_count": 488,
				"listed_count": 36,
				"created_at": "Sun Dec 16 03:53:22 +0000 2012",
				"favourites_count": 1247,
				"utc_offset": -25200,
				"time_zone": "Arizona",
				"geo_enabled": false,
				"verified": false,
				"statuses_count": 97763,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/740270838/f7d8ad2fdb26fbc0b97c4505da11c106.jpeg",
				"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/740270838/f7d8ad2fdb26fbc0b97c4505da11c106.jpeg",
				"profile_background_tile": true,
				"profile_image_url": "http://pbs.twimg.com/profile_images/560279861227302913/i884m2oN_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/560279861227302913/i884m2oN_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1014441517/1402616103",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "FFFFFF",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": false,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweeted_status": {
				"metadata": {
					"iso_language_code": "en",
					"result_type": "recent"
				},
				"created_at": "Tue Feb 10 02:04:12 +0000 2015",
				"id": 564968041465667600,
				"id_str": "564968041465667585",
				"text": "That nigga face just screams \"failure\". RT @ToreMyACL: X_____x http://t.co/LNZ63kK3eh",
				"source": "<a href=\"http://www.echofon.com/\" rel=\"nofollow\">Echofon</a>",
				"truncated": false,
				"in_reply_to_status_id": null,
				"in_reply_to_status_id_str": null,
				"in_reply_to_user_id": null,
				"in_reply_to_user_id_str": null,
				"in_reply_to_screen_name": null,
				"user": {
					"id": 27968329,
					"id_str": "27968329",
					"name": "Jay Sherman",
					"screen_name": "theLARGEpicture",
					"location": "Rock On My Left. Hard Place On My Right.",
					"profile_location": null,
					"description": "Social Introvert.",
					"url": null,
					"entities": {
						"description": {
							"urls": []
						}
					},
					"protected": false,
					"followers_count": 1494,
					"friends_count": 325,
					"listed_count": 38,
					"created_at": "Tue Mar 31 21:32:15 +0000 2009",
					"favourites_count": 1074,
					"utc_offset": -21600,
					"time_zone": "Central Time (US & Canada)",
					"geo_enabled": false,
					"verified": false,
					"statuses_count": 25865,
					"lang": "en",
					"contributors_enabled": false,
					"is_translator": false,
					"is_translation_enabled": false,
					"profile_background_color": "E69AA1",
					"profile_background_image_url": "http://pbs.twimg.com/profile_background_images/548507640/shoeaddict.jpg",
					"profile_background_image_url_https": "https://pbs.twimg.com/profile_background_images/548507640/shoeaddict.jpg",
					"profile_background_tile": true,
					"profile_image_url": "http://pbs.twimg.com/profile_images/564940610499395584/g3AT4Llb_normal.jpeg",
					"profile_image_url_https": "https://pbs.twimg.com/profile_images/564940610499395584/g3AT4Llb_normal.jpeg",
					"profile_banner_url": "https://pbs.twimg.com/profile_banners/27968329/1420074422",
					"profile_link_color": "B30000",
					"profile_sidebar_border_color": "BDDCAD",
					"profile_sidebar_fill_color": "DDFFCC",
					"profile_text_color": "333333",
					"profile_use_background_image": true,
					"default_profile": false,
					"default_profile_image": false,
					"following": null,
					"follow_request_sent": null,
					"notifications": null
				},
				"geo": null,
				"coordinates": null,
				"place": null,
				"contributors": null,
				"retweet_count": 1,
				"favorite_count": 0,
				"entities": {
					"hashtags": [],
					"symbols": [],
					"user_mentions": [
						{
							"screen_name": "ToreMyACL",
							"name": "James Harden",
							"id": 1014441517,
							"id_str": "1014441517",
							"indices": [
								43,
								53
							]
						}
					],
					"urls": [],
					"media": [
						{
							"id": 564967266727776260,
							"id_str": "564967266727776256",
							"indices": [
								63,
								85
							],
							"media_url": "http://pbs.twimg.com/media/B9cqvFsIUAAKHt3.jpg",
							"media_url_https": "https://pbs.twimg.com/media/B9cqvFsIUAAKHt3.jpg",
							"url": "http://t.co/LNZ63kK3eh",
							"display_url": "pic.twitter.com/LNZ63kK3eh",
							"expanded_url": "http://twitter.com/ToreMyACL/status/564967283479814144/photo/1",
							"type": "photo",
							"sizes": {
								"small": {
									"w": 340,
									"h": 604,
									"resize": "fit"
								},
								"thumb": {
									"w": 150,
									"h": 150,
									"resize": "crop"
								},
								"large": {
									"w": 576,
									"h": 1024,
									"resize": "fit"
								},
								"medium": {
									"w": 576,
									"h": 1024,
									"resize": "fit"
								}
							},
							"source_status_id": 564967283479814140,
							"source_status_id_str": "564967283479814144",
							"source_user_id": 1014441517,
							"source_user_id_str": "1014441517"
						}
					]
				},
				"favorited": false,
				"retweeted": false,
				"possibly_sensitive": true,
				"lang": "en"
			},
			"retweet_count": 1,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [
					{
						"screen_name": "theLARGEpicture",
						"name": "Jay Sherman",
						"id": 27968329,
						"id_str": "27968329",
						"indices": [
							3,
							19
						]
					},
					{
						"screen_name": "ToreMyACL",
						"name": "James Harden",
						"id": 1014441517,
						"id_str": "1014441517",
						"indices": [
							64,
							74
						]
					}
				],
				"urls": [],
				"media": [
					{
						"id": 564967266727776260,
						"id_str": "564967266727776256",
						"indices": [
							84,
							106
						],
						"media_url": "http://pbs.twimg.com/media/B9cqvFsIUAAKHt3.jpg",
						"media_url_https": "https://pbs.twimg.com/media/B9cqvFsIUAAKHt3.jpg",
						"url": "http://t.co/LNZ63kK3eh",
						"display_url": "pic.twitter.com/LNZ63kK3eh",
						"expanded_url": "http://twitter.com/ToreMyACL/status/564967283479814144/photo/1",
						"type": "photo",
						"sizes": {
							"small": {
								"w": 340,
								"h": 604,
								"resize": "fit"
							},
							"thumb": {
								"w": 150,
								"h": 150,
								"resize": "crop"
							},
							"large": {
								"w": 576,
								"h": 1024,
								"resize": "fit"
							},
							"medium": {
								"w": 576,
								"h": 1024,
								"resize": "fit"
							}
						},
						"source_status_id": 564967283479814140,
						"source_status_id_str": "564967283479814144",
						"source_user_id": 1014441517,
						"source_user_id_str": "1014441517"
					}
				]
			},
			"favorited": false,
			"retweeted": false,
			"possibly_sensitive": false,
			"lang": "en"
		},
		{
			"metadata": {
				"iso_language_code": "en",
				"result_type": "recent"
			},
			"created_at": "Tue Feb 10 02:04:40 +0000 2015",
			"id": 564968159774400500,
			"id_str": "564968159774400512",
			"text": "If you push past your limit everyday and in your mind you\'re still a failure then your on your way to becoming a champion",
			"source": "<a href=\"http://twitter.com/download/iphone\" rel=\"nofollow\">Twitter for iPhone</a>",
			"truncated": false,
			"in_reply_to_status_id": null,
			"in_reply_to_status_id_str": null,
			"in_reply_to_user_id": null,
			"in_reply_to_user_id_str": null,
			"in_reply_to_screen_name": null,
			"user": {
				"id": 1110165354,
				"id_str": "1110165354",
				"name": "THE GREAT KAHUNA",
				"screen_name": "Steven__Jones97",
				"location": "",
				"profile_location": null,
				"description": "If swag is for boys and class is for men, then aesthetics is for gods. Arsenal till I die.",
				"url": null,
				"entities": {
					"description": {
						"urls": []
					}
				},
				"protected": false,
				"followers_count": 339,
				"friends_count": 548,
				"listed_count": 0,
				"created_at": "Mon Jan 21 22:16:01 +0000 2013",
				"favourites_count": 17405,
				"utc_offset": null,
				"time_zone": null,
				"geo_enabled": true,
				"verified": false,
				"statuses_count": 7729,
				"lang": "en",
				"contributors_enabled": false,
				"is_translator": false,
				"is_translation_enabled": false,
				"profile_background_color": "C0DEED",
				"profile_background_image_url": "http://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_image_url_https": "https://abs.twimg.com/images/themes/theme1/bg.png",
				"profile_background_tile": false,
				"profile_image_url": "http://pbs.twimg.com/profile_images/532673882835402752/p5wFmA_7_normal.jpeg",
				"profile_image_url_https": "https://pbs.twimg.com/profile_images/532673882835402752/p5wFmA_7_normal.jpeg",
				"profile_banner_url": "https://pbs.twimg.com/profile_banners/1110165354/1421601122",
				"profile_link_color": "0084B4",
				"profile_sidebar_border_color": "C0DEED",
				"profile_sidebar_fill_color": "DDEEF6",
				"profile_text_color": "333333",
				"profile_use_background_image": true,
				"default_profile": true,
				"default_profile_image": false,
				"following": null,
				"follow_request_sent": null,
				"notifications": null
			},
			"geo": null,
			"coordinates": null,
			"place": null,
			"contributors": null,
			"retweet_count": 0,
			"favorite_count": 0,
			"entities": {
				"hashtags": [],
				"symbols": [],
				"user_mentions": [],
				"urls": []
			},
			"favorited": false,
			"retweeted": false,
			"lang": "en"
		}
	],
	"search_metadata": {
		"completed_in": 0.057,
		"max_id": 564968816388493300,
		"max_id_str": "564968816388493312",
		"next_results": "?max_id=564968159774400511&q=failure&count=100&include_entities=1&result_type=recent",
		"query": "failure",
		"refresh_url": "?since_id=564968816388493312&q=failure&result_type=recent&include_entities=1",
		"count": 100,
		"since_id": 0,
		"since_id_str": "0"
	}
}';

}
