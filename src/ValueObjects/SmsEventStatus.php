<?php

namespace VodafoneNZRestApiClient\ValueObjects;

/**
 * Class SmsEventStatus
 * @package VodafoneNZRestApiClient\ValueObjects
 */
class SmsEventStatus
{
	/*** @var string */
	public const DELIVERY = 'Delivery';
	/*** @var string */
	public const FAILED = 'Failed';
	/*** @var string */
	public const SUBMITTED = 'Submitted';
}