<?php

namespace VodafoneNZRestApiClient\Responses\UtilityAPIs;

use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\Models\HttpPing;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class HttpPingResponse
 * @package VodafoneNZRestApiClient\Responses\UtilityAPIs
 */
class HttpPingResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'httpPingResponse';
	/*** @var mixed */
	protected $result;
	/*** @var mixed */
	protected $model;

	/*** @param $result */
	public function __construct($result)
	{
		parent::__construct($result);
		$responseObjectName = $this->responseClass;
		$this->model        = ModelFactory::create(new HttpPing(), $this->result->$responseObjectName->return);
	}

	/**
	 * @return HttpPing
	 * @throws NotFoundException
	 */
	public function get(): HttpPing
	{
		if ( ! empty($this->model)) {
			return $this->model;
		}
		throw new NotFoundException();
	}
}