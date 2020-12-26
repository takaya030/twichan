<?php

namespace App\Models\Twitter;

use OAuth\OAuth1\Token\StdOAuth1Token;

class OAuthClient
{
	protected $servive;

	public function __construct()
	{
		$this->service = $this->getOauthService();
	}

	protected function getOauthService()
	{
        $token = new StdOAuth1Token();
        $token->setRequestToken( env("TWITTER_ACCESS_TOKEN") );
        $token->setRequestTokenSecret( env("TWITTER_ACCESS_TOKEN_SECRET") );
        $token->setAccessToken( env("TWITTER_ACCESS_TOKEN") );
        $token->setAccessTokenSecret( env("TWITTER_ACCESS_TOKEN_SECRET") );

		$service = app('oauth')->consumer('Twitter');
		$service->getStorage()->storeAccessToken('Twitter', $token);

		return $service;
	}
}
