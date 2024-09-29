<?php

namespace VodafoneNZRestApiClient\Exceptions;

use Exception;

/**
 * Class NotFoundException
 * @package VodafoneNZRestApiClient\Exceptions
 */
class NotFoundException extends Exception
{
	public function __construct()
	{
		parent::__construct('Not Found');
	}
}