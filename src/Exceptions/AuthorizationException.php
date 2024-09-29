<?php

namespace VodafoneNZRestApiClient\Exceptions;

use Exception;

/**
 * Class AuthorizationException
 * @package VodafoneNZRestApiClient\Exceptions
 */
class AuthorizationException extends Exception
{
	/*** @var string */
	protected $message = 'Authorization was failed';
}