<?php

namespace App\Models\Twitter;

class Timeline extends OAuthClient
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getTimeline()
	{
		$params = [
			'count' => '3',
			'exclude_replies' => 'true',
		];

		// Send a request with it
		$result = json_decode($this->service->request('https://api.twitter.com/1.1/statuses/home_timeline.json?'.http_build_query($params),'GET'), true);

		return $result;
	}
}
