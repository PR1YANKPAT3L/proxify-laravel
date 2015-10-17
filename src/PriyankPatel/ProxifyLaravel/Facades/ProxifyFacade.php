<?php

namespace PriyankPatel\ProxifyLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ProxifyFacade extends Facade {
	/**
	 * Get registered name of the component
	 * @return string 
	 */
	protected static function getFacadeAccessor() {
		return 'proxify';
	}
}