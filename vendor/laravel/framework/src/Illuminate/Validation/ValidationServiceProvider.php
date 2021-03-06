<?php namespace Illuminate\Validation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class ValidationServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerValiationResolverHook();

		$this->registerPresenceVerifier();

		$this->registerValidationFactory();
	}

	/**
	 * Register the "ValidatesWhenResolved" container hook.
	 *
	 * @return void
	 */
	protected function registerValiationResolverHook()
	{
		$this->app->afterResolvingAny(function($resolved)
		{
			if ($resolved instanceof ValidatesWhenResolved)
			{
				$resolved->validate();
			}
		});
	}

	/**
	 * Register the validation factory.
	 *
	 * @return void
	 */
	protected function registerValidationFactory()
	{
		$this->app->bindShared('validator', function($app)
		{
			$validator = new Factory($app['translator'], $app);

			// The validation presence verifier is responsible for determining the existence
			// of values in a given data collection, typically a relational database or
			// other persistent data stores. And it is used to check for uniqueness.
			if (isset($app['validation.presence']))
			{
				$validator->setPresenceVerifier($app['validation.presence']);
			}

			return $validator;
		});
	}

	/**
	 * Register the database presence verifier.
	 *
	 * @return void
	 */
	protected function registerPresenceVerifier()
	{
		$this->app->bindShared('validation.presence', function($app)
		{
			return new DatabasePresenceVerifier($app['db']);
		});
	}

}
