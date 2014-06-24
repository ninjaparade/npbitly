<?php namespace Ninjaparade\Npbitly;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class NpbitlyServiceProvider extends ServiceProvider {


	public function register() {}
	
	public function boot()
    {
        $this->package('ninjaparade/npbitly');

        AliasLoader::getInstance()
        	->alias('NPBitly', 'Ninjaparade\Npbitly\Bitly');
    }

}