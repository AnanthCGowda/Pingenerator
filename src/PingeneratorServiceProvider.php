<?php

	namespace Ananth\Pingenerator;

	use Illuminate\Support\ServiceProvider;

	/**
	 * 
	 */
	class PingeneratorServiceProvider extends ServiceProvider
	{
		
		public function boot()
		{
			$this->loadRoutesFrom(__DIR__.'/routes/web.php');

			$this->loadViewsFrom(__DIR__.'/views','pingenerator');

		}

	}

?>