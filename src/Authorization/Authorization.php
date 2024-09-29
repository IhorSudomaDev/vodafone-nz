<?php

namespace VodafoneNZRestApiClient\Authorization;

use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use RuntimeException;
use Throwable;
use VodafoneNZRestApiClient\Exceptions\AuthorizationException;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;
use VodafoneNZRestApiClient\ValueObjects\Scope;

/**
 * Class Authorization
 * @package VodafoneNZRestApiClient\Authorization
 */
class Authorization
{
	/*** @var Credentials */
	private Credentials $credentials;
	/*** @var Token */
	private Token $token;

	/**
	 * @param Credentials $credentials
	 * @param string|NULL $accessToken
	 * @param Carbon|NULL $tokenExpiredAt
	 * @param string|NULL $refreshToken
	 * @param Carbon|NULL $refreshTokenExpiredAt
	 * @throws Throwable
	 */
	public function __construct(
		Credentials $credentials,
		?string     $accessToken = NULL,
		?Carbon     $tokenExpiredAt = NULL,
		?string     $refreshToken = NULL,
		?Carbon     $refreshTokenExpiredAt = NULL
	) {
		$this->setCredentials($credentials);
		$this->setToken(new Token($accessToken, $tokenExpiredAt, $refreshToken, $refreshTokenExpiredAt));
		if ($this->getToken()->isNeedToAuth()) {
			$this->auth();
		} else if ( ! $this->getToken()->isValid()) {
			$this->refreshToken();
		}
	}

	/*** @return Credentials */
	public function getCredentials(): Credentials
	{
		return $this->credentials;
	}

	/*** @param Credentials $credentials */
	public function setCredentials(Credentials $credentials): void
	{
		$this->credentials = $credentials;
	}

	/*** @return Token */
	public function getToken(): Token
	{
		return $this->token;
	}

	/*** @param Token $token */
	public function setToken(Token $token): void
	{
		$this->token = $token;
	}

	/**
	 * @return void
	 * @throws Throwable
	 */
	protected function auth(): void
	{
		try {
			$client        = new Client();
			$tokenResponse = $client->request(
				HttpMethod::POST,
				ApiRoute::TOKEN,
				[
					'headers'     => [
						'Content-Type'  => 'application/x-www-form-urlencoded',
						'Accept'        => 'application/json',
						'Authorization' => 'Basic ' . $this->getCredentials()->getEncodedCredentials(),
					],
					'form_params' => [
						'grant_type' => 'password',
						'username'   => $this->getCredentials()->getUsername(),
						'password'   => $this->getCredentials()->getPassword(),
						'scope'      => Scope::M2M_BASECOUNTRY_ALL . ' ' .
							Scope::M2M_CUSTOMERS_ALL . ' ' .
							Scope::M2M_DEVICES_ALL . ' ' .
							Scope::M2M_NETWORK_ALL . ' ' .
							Scope::M2M_UTILITY_ALL,
					],
				]
			);
			$tokenContent  = json_decode($tokenResponse->getBody()->getContents(), FALSE, 512, JSON_THROW_ON_ERROR);
			$this->checkAndCreateToken($tokenContent);
		} catch (RequestException $e) {
			switch ($e->getCode()) {
				case 401:
					throw new AuthorizationException();
				default:
					throw new RuntimeException($e->getMessage(), $e->getCode());
			}
		} catch (Throwable $e) {
			throw new RuntimeException($e->getMessage(), $e->getCode());
		}
	}

	/*** @throws Throwable */
	protected function refreshToken(): void
	{
		try {
			$client        = new Client();
			$tokenResponse = $client->request(
				HttpMethod::POST,
				ApiRoute::REFRESH_TOKEN,
				[
					'headers'     => [
						'Content-Type'  => 'application/x-www-form-urlencoded',
						'Accept'        => 'application/json',
						'Authorization' => 'Basic ' . $this->getCredentials()->getEncodedCredentials(),
					],
					'form_params' => [
						'grant_type'    => 'refresh_token',
						'refresh_token' => $this->getToken()->getRefreshToken(),
						'scope'         => Scope::M2M_BASECOUNTRY_ALL . ' ' .
							Scope::M2M_CUSTOMERS_ALL . ' ' .
							Scope::M2M_DEVICES_ALL . ' ' .
							Scope::M2M_NETWORK_ALL . ' ' .
							Scope::M2M_UTILITY_ALL,
					],
				]
			);
			$tokenContent  = json_decode($tokenResponse->getBody()->getContents(), FALSE, 512, JSON_THROW_ON_ERROR);
			$this->checkAndCreateToken($tokenContent);
		} catch (RequestException $e) {
			switch ($e->getCode()) {
				case 401:
					throw new AuthorizationException();
				default:
					throw new RuntimeException($e->getMessage(), $e->getCode());
			}
		} catch (Throwable $e) {
			throw new RuntimeException($e->getMessage(), $e->getCode());
		}
	}

	/**
	 * @param $tokenContent
	 * @throws AuthorizationException
	 */
	private function checkAndCreateToken($tokenContent): void
	{
		if (property_exists($tokenContent, 'access_token')) {
			$this->setToken(new Token(
				$tokenContent->access_token,
				Carbon::now('UTC')->addSeconds($tokenContent->expires_in),
				$tokenContent->refresh_token,
				Carbon::now('UTC')->addSeconds($tokenContent->refresh_token_expires_in)
			));
		} else {
			throw new AuthorizationException();
		}
	}
}