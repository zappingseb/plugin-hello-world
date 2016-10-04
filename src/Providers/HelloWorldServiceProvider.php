<?php
namespace HelloWorld\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class HelloWorldServiceProvider
 * @package HelloWorld\Providers
 */
class HelloWorldServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register():void
	{
		$this->getApplication()->register(HelloWorldRouteServiceProvider::class);
	}
}
