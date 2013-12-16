<?php namespace Ninjaparade\Npbitly;

use Config;

class Bitly{

	 /**
     * Instance
     *
     * @var Way\Form\FormField
     */
    protected static $instance;

	public static function shorten($url)
	{
		 



		 $login = Config::get('npbitly::bitly_login');
		 $appkey = Config::get('npbitly::bitly_appkey');
		 $format = Config::get('npbitly::format');
		 $version = Config::get('npbitly::version');
		

		$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;
		$response = file_get_contents($bitly);
		$json = @json_decode($response,true);
		return $json['results'][$url]['shortUrl'];
		
		// if(strtolower($format) == 'json')
		// {
			
		// }
	}

}