<?php

namespace VodafoneNZRestApiClient\Exceptions;

use Exception;

/**
 * Class ForbiddenException
 * @package VodafoneNZRestApiClient\Exceptions
 */
class ForbiddenException extends Exception
{
	/*** @var string */
	protected $message = 'Forbidden (403)';
}