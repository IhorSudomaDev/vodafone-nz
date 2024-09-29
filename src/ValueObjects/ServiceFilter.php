<?php

namespace VodafoneNZRestApiClient\ValueObjects;

/**
 * Class ServiceFilter
 * @package VodafoneNZRestApiClient\ValueObjects
 */
class ServiceFilter
{
	/*** @var string */
	public const DATA = 'DATA';
	/*** @var string */
	public const SMS = 'SMS';
	/*** @var string */
	public const VOICE = 'VOICE';

	/*** @return string[] */
	public static function getList(): array
	{
		return [
			self::DATA,
			self::SMS,
			self::VOICE,
		];
	}
}