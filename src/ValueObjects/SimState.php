<?php

namespace VodafoneNZRestApiClient\ValueObjects;

use RuntimeException;

/**
 * Class SimState
 * @package VodafoneNZRestApiClient\ValueObjects
 */
class SimState
{
	/*** @var string */
	public const ACTIVE_LIVE = 'A';
	/*** @var string */
	public const INACTIVE_NEW = 'B';
	/*** @var string */
	public const INACTIVE_SLEEP = 'C';
	/*** @var string */
	public const INACTIVE_STOPPED = 'D';
	/*** @var string */
	public const MIGRATED_FROM = 'I';
	/*** @var string */
	public const NOT_PROVISIONED = 'N';
	/*** @var string */
	public const MIGRATED_TO = 'O';
	/*** @var string */
	public const ACTIVE_READY = 'R';
	/*** @var string */
	public const ACTIVE_SUSPEND = 'S';
	/*** @var string */
	public const ACTIVE_TEST = 'T';
	/*** @var string */
	public const ACTIVE_STANDBY = 'U';
	/*** @var string */
	public const INACTIVE_TRANSFORMED = 'V';
	/*** @var string */
	public const SUSPEND_REGULATORY = 'W';
	/*** @var string */
	public const INACTIVE = 'X';
	/*** @var string */
	public const TERMINATED = 'Z';

	/**
	 * @param string $state
	 * @return string
	 */
	public static function getStateDescription(string $state): string
	{
		switch ($state) {
			case self::ACTIVE_LIVE:
				return 'ACTIVE_LINE';
			case self::INACTIVE_NEW:
				return 'INACTIVE_NEW';
			case self::INACTIVE_SLEEP:
				return 'INACTIVE_SLEEP';
			case self::INACTIVE_STOPPED:
				return 'INACTIVE_STOPPED';
			case self::MIGRATED_FROM:
				return 'MIGRATED_FROM';
			case self::NOT_PROVISIONED:
				return 'NOT_PROVISIONED';
			case self::MIGRATED_TO:
				return 'MIGRATED_TO';
			case self::ACTIVE_READY:
				return 'ACTIVE_READY';
			case self::ACTIVE_SUSPEND:
				return 'ACTIVE_SUSPEND';
			case self::ACTIVE_TEST:
				return 'ACTIVE_TEST';
			case self::ACTIVE_STANDBY:
				return 'ACTIVE_STANDBY';
			case self::INACTIVE_TRANSFORMED:
				return 'INACTIVE_TRANSFORMED';
			case self::SUSPEND_REGULATORY:
				return 'SUSPEND_REGULATORY';
			case self::INACTIVE:
				return 'INACTIVE';
			case self::TERMINATED:
				return 'TERMINATED';
			default:
				throw new RuntimeException('Unknown state: ' . $state);
		}
	}
}