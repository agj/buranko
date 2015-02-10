<?php

$queries = array(
	'failure',
);


require_once 'vendor/autoload.php';
require_once 'lib/lambelo.php';

$twitter = new Freebird\Services\freebird\Client();
$twitter->init_bearer_token('St1tlRrUKUevgZqtm2Z5LYUFL', 'rYTOPDTjCJGYpYuCLCbLpKufDl4r6oayGFA3tXSiOh3EwzogkF');


$query = $queries[array_rand($queries)];

$tweets = $twitter->api_request('search/tweets.json', array('q' => $query));

echo $tweets;

