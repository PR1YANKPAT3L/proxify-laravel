<?php

namespace PriyankPatel\ProxifyLaravel;

use Illuminate\Support\ServiceProvider;

class ProxifyLaravelServiceProvider extends ServiceProvider {

	/**
	 * Perform post-registration booting of service
	 * @return void 
	 */
	public function boot()
	{
		// Publih the config
		$this->publishes([
			__DIR__ . '/../../config/proxify.php' => config_path('proxify.php'),
		], 'config');
	}


	/**
	 * Register bindings in the container
	 * @return void
	 */
	public function register()
	{
		// Merge proxify.php config with the application's config
		$this->mergeConfigFrom(
			__DIR__ . '/../../config/proxify.php', 'proxify'
		);

		// Share Proxify Class with the service
		$this->app['proxify'] = $this->app->share(function ($app) {

			// Create Proxify Instance
			$proxify = new Proxify($app['configi']->get('proxify'));

			// return newly created Proxify Instance
			return $proxify;
		});

		// Bind the app
		$this->app->bind('PriyankPatel\ProxifyLaravel\Proxify', function ($app) {
			return $app['proxify'];
		});
	}
}