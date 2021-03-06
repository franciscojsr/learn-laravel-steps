<?php namespace Illuminate\Auth;

use Illuminate\Contracts\Auth\User as UserContract;

interface UserProviderInterface {

	/**
	 * Retrieve a user by their unique identifier.
	 *
	 * @param  mixed  $identifier
	 * @return \Illuminate\Contracts\Auth\User|null
	 */
	public function retrieveById($identifier);

	/**
	 * Retrieve a user by by their unique identifier and "remember me" token.
	 *
	 * @param  mixed   $identifier
	 * @param  string  $token
	 * @return \Illuminate\Contracts\Auth\User|null
	 */
	public function retrieveByToken($identifier, $token);

	/**
	 * Update the "remember me" token for the given user in storage.
	 *
	 * @param  \Illuminate\Contracts\Auth\User  $user
	 * @param  string  $token
	 * @return void
	 */
	public function updateRememberToken(UserContract $user, $token);

	/**
	 * Retrieve a user by the given credentials.
	 *
	 * @param  array  $credentials
	 * @return \Illuminate\Contracts\Auth\User|null
	 */
	public function retrieveByCredentials(array $credentials);

	/**
	 * Validate a user against the given credentials.
	 *
	 * @param  \Illuminate\Contracts\Auth\User  $user
	 * @param  array  $credentials
	 * @return bool
	 */
	public function validateCredentials(UserContract $user, array $credentials);

}
