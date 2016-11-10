<?php

namespace Zoomyboy\InitIcheck;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider {
	public function boot() {}

	public function register() {
		$this->publishes([base_path('vendor/zoomyboy/init-icheck').'/assets/icheck/' => resource_path('assets/vendor/icheck')]);
		$this->publishes([base_path('vendor/zoomyboy/init-icheck').'/assets/js/icheck.init.js' => resource_path('assets/vendor/icheck/icheck.init.js')]);
	}
}
