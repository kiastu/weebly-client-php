<?php

namespace Weebly;

class WeeblyClient 
{
	/**
	 * Weebly User Id
	 */
	public $user_id;

	/**
	 * Weebly Site Id
	 */
	public $site_id;

	/**
	 * Weebly User's API Access token
	 */
	private $access_token;

	/**
	 * Application Client Id
	 */
	private $client_id;

	/**
	 * Application Client Secret
	 */
	private $client_secret;


	/**
	 * Creates a new API interaction object.
	 *
	 * @param string $client_id                Your application client_id
	 * @param string $client_secret            Your application client_secret
	 * @param int $user_id                     The Weebly User Id
	 * @param (optional) int $site_id          The Weebly Site Id
	 * @param (optional) string $access_token  The Weebly User's API access token used for accessing
	 *                                         data from already permitted users
	 *
	 * @return instance
	 */
	public function __construct($client_id, $client_secret, $user_id, $site_id=null, $access_token=null)
	{
		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
		$this->user_id = $user_id;
		$this->site_id = $site_id;
		$this->access_token = $access_token;
	}

	/**
	 * Returns the url to redirect to for oauth authentication (Step 1 in OAuth flow)
	 *
	 * @param (optional) array $scope           An array of the permissions your application is 
	 *                                          requesting i.e (read:user, read:commerce)
	 * @param (optional) string $redirect_uri   The url weebly will redirect to upon user's grant of 
	 *                                          permissions. Defaults to application callback url
	 *
	 *
	 * @return string $authorization_url
	 */
	public function getAuthorizationUrl($scope=array(), $redirect_uri=null)
	{

	}

	/**
	 * Exchanges a temporary authorization code for a permanent access_token
	 *
	 * @param string $authorization_code   The authorization_code sent from weebly after the user has 
	 *                                     granted the application access to their data.
	 *
	 *
	 * @return string $access_token
	 */
	public function getAccessToken($authorization_code)
	{

	}
}