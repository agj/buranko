<?php

require_once 'vendor/autoload.php';
require_once 'lib/lambelo.php';

$client = new Freebird\Services\freebird\Client();

$client->init_bearer_token('St1tlRrUKUevgZqtm2Z5LYUFL', 'rYTOPDTjCJGYpYuCLCbLpKufDl4r6oayGFA3tXSiOh3EwzogkF');

$tweets = $client->api_request('search/tweets.json', array('q' => '無理だ'));
$tweets = json_decode($tweets);
$tweets = objectToArray($tweets);

$getText = L::map(L::prop('text'));

var_export($getText($tweets['statuses']));





function objectToArray($d) {
	if (is_object($d)) {
		$d = get_object_vars($d);
	}
	if (is_array($d)) {
		return array_map(__FUNCTION__, $d);
	} else {
		return $d;
	}
}

