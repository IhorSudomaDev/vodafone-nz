<?php

namespace VodafoneNZRestApiClient\ValueObjects;

/**
 * Class ApiRoute
 * @package VodafoneNZRestApiClient\ValueObjects
 */
class ApiRoute
{
	/*** @var string */
	public const BASE_URI_NETWORK_V1 = 'https://api.m2m.vodafone.com/m2m/rest/v1/network/';
	/*** @var string */
	public const BASE_URI_NETWORK_V2 = 'https://api.m2m.vodafone.com/m2m/rest/v2/network/';
	/*** @var string */
	public const BASE_URI_DEVICES_V1 = 'https://api.m2m.vodafone.com/m2m/v1/devices/';
	/*** @var string */
	public const BASE_URI_UTILITY_V1 = 'https://api.m2m.vodafone.com/m2m/rest/v1/utility/';
	/*** @var string */
	public const TOKEN = 'https://api.m2m.vodafone.com/m2m/v2/oauth2/access-token';
	/*** @var string */
	public const REFRESH_TOKEN = 'https://api.m2m.vodafone.com/m2m/v2/oauth2/refresh';
}