<?php

namespace VodafoneNZRestApiClient\Authorization;

use Carbon\Carbon;

/**
 * Class Token
 * @property string|NULL access_token
 * @property string      token_type
 * @property int         expires_in
 * @property string|NULL refresh_token
 * @property int         refresh_token_expires_in
 * @package VodafoneNZRestApiClient\Authorization
 */
class Token
{
	/*** @var Carbon|NULL */
	private ?Carbon $tokenExpiredAt;
	/*** @var Carbon|NULL */
	private ?Carbon $refreshTokenExpiredAt;

	/**
	 * @param string|NULL $accessToken
	 * @param Carbon|NULL $tokenExpiredAt
	 * @param string|NULL $refreshToken
	 * @param Carbon|NULL $refreshTokenExpiredAt
	 */
	public function __construct(?string $accessToken, ?Carbon $tokenExpiredAt, ?string $refreshToken, ?Carbon $refreshTokenExpiredAt)
	{
		$this->setAccessToken($accessToken);
		$this->setTokenExpiredAt($tokenExpiredAt);
		$this->setRefreshToken($refreshToken);
		$this->setRefreshTokenExpiredAt($refreshTokenExpiredAt);
	}

	/*** @return string|NULL */
	public function getAccessToken(): ?string
	{
		return $this->access_token;
	}

	/*** @param string|NULL $accessToken */
	public function setAccessToken(?string $accessToken): void
	{
		$this->access_token = $accessToken;
	}

	/*** @return string */
	public function getTokenType(): string
	{
		return $this->token_type;
	}

	/*** @param string $tokenType */
	public function setTokenType(string $tokenType): void
	{
		$this->token_type = $tokenType;
	}

	/*** @return int */
	public function getExpiresIn(): int
	{
		return $this->expires_in;
	}

	/*** @param int $expiresIn */
	public function setExpiresIn(int $expiresIn): void
	{
		$this->expires_in = $expiresIn;
	}

	/*** @return string|NULL */
	public function getRefreshToken(): ?string
	{
		return $this->refresh_token;
	}

	/*** @param string|NULL $refreshToken */
	public function setRefreshToken(?string $refreshToken): void
	{
		$this->refresh_token = $refreshToken;
	}

	/*** @return int */
	public function getRefreshTokenExpiresIn(): int
	{
		return $this->refresh_token_expires_in;
	}

	/*** @param int $refreshTokenExpiresIn */
	public function setRefreshTokenExpiresIn(int $refreshTokenExpiresIn): void
	{
		$this->refresh_token_expires_in = $refreshTokenExpiresIn;
	}

	/*** @return Carbon|NULL */
	public function getTokenExpiredAt(): ?Carbon
	{
		return $this->tokenExpiredAt;
	}

	/*** @param Carbon|NULL $tokenExpiredAt */
	public function setTokenExpiredAt(?Carbon $tokenExpiredAt): void
	{
		$this->tokenExpiredAt = $tokenExpiredAt;
	}

	/*** @return Carbon|NULL */
	public function getRefreshTokenExpiredAt(): ?Carbon
	{
		return $this->refreshTokenExpiredAt;
	}

	/*** @param Carbon|NULL $refreshTokenExpiredAt */
	public function setRefreshTokenExpiredAt(?Carbon $refreshTokenExpiredAt): void
	{
		$this->refreshTokenExpiredAt = $refreshTokenExpiredAt;
	}

	/*** @return bool */
	public function isValid(): bool
	{
		$expiredAt = $this->getTokenExpiredAt();
		return ! empty($this->getAccessToken()) && $expiredAt !== NULL && Carbon::createFromFormat('Y-m-d H:i:s', $expiredAt, 'UTC') > Carbon::now('UTC');
	}

	/*** @return bool */
	public function isNeedToAuth(): bool
	{
		return $this->getAccessToken() === NULL && $this->getTokenExpiredAt() === NULL;
	}
}