<?php

namespace VodafoneNZRestApiClient\Responses\Network\Sim;

use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\Models\ReturnCode;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class SetSimDetailsResponse
 * @package VodafoneNZRestApiClient\Responses\Network\Sim
 */
class SetSimDetailsResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'setSimDetailsv2Response';
	/*** @var mixed */
	protected $result;
	/*** @var mixed */
	protected $model;

	/*** @param $result */
	public function __construct($result)
	{
		parent::__construct($result);
		$responseObjectName = $this->responseClass;
		$this->model        = ModelFactory::create(new ReturnCode(), $this->result->$responseObjectName->return->returnCode);
	}

	/**
	 * @return ReturnCode
	 * @throws NotFoundException
	 */
	public function get(): ReturnCode
	{
		if ( ! empty($this->model)) {
			return $this->model;
		}
		throw new NotFoundException();
	}
}