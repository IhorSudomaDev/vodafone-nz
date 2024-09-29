<?php

namespace VodafoneNZRestApiClient\Authorization;

/**
 * Class Credentials
 * @package VodafoneNZRestApiClient\Authorization
 */
class Credentials
{
	/*** @var string */
	private string $appKey;
	/*** @var string */
	private string $appSecret;
	/*** @var string */
	private string $username;
	/*** @var string */
	private string $password;

	/**
	 * @param string $appKey
	 * @param string $appSecret
	 * @param string $username
	 * @param string $password
	 */
	public function __construct(string $appKey, string $appSecret, string $username, string $password)
	{
		$this->setAppKey($appKey);
		$this->setAppSecret($appSecret);
		$this->setUsername($username);
		$this->setPassword($password);
	}

	/*** @return string */
	public function getAppKey(): string
	{
		return $this->appKey;
	}

	/*** @param string $appKey */
	public function setAppKey(string $appKey): void
	{
		$this->appKey = $appKey;
	}

	/*** @return string */
	public function getAppSecret(): string
	{
		return $this->appSecret;
	}

	/*** @param string $appSecret */
	public function setAppSecret(string $appSecret): void
	{
		$this->appSecret = $appSecret;
	}

	/*** @return string */
	public function getUsername(): string
	{
		return $this->username;
	}

	/*** @param string $username */
	public function setUsername(string $username): void
	{
		$this->username = $username;
	}

	/*** @return string */
	public function getPassword(): string
	{
		return $this->password;
	}

	/*** @param string $password */
	public function setPassword(string $password): void
	{
		$this->password = $password;
	}

	/*** @return string */
	public function getEncodedCredentials(): string
	{
		return base64_encode($this->getAppKey() . ':' . $this->getAppSecret());
	}
}