<?php

namespace VodafoneNZRestApiClient\Responses\Abstracts;

/**
 * Class AResponse
 * @package VodafoneNZRestApiClient\Responses\Abstracts
 */
class AResponse
{
	/*** @var mixed */
	protected $result;

	/*** @param $result */
	public function __construct($result)
	{
		$this->result = $result;
	}
}