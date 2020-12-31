<?php

namespace App\Models\Twitter;

class Tweet
{
	protected	$id	= 0;
	protected	$screen_name	= "";

	public function __construct( array $tw = [] )
	{
		$this->id	= $tw['id'] ?: 0;
		if( is_array($tw['user']) )
			$this->screen_name	=  $tw['user']['screen_name'] ?: "";
	}

	public function getStatusUrl(): string
	{
		return ( $this->id != 0 && $this->screen_name !== "")? "https://twitter.com/{$this->screen_name}/status/{$this->id}" : "";
	}
}
