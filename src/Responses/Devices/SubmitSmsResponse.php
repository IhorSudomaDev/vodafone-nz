<?php

namespace VodafoneNZRestApiClient\Responses\Devices;

use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\Models\SubmitSms;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class SubmitSmsResponse
 * @package VodafoneNZRestApiClient\Responses\Devices
 */
class SubmitSmsResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'submitSMSv3Response';
	/*** @var mixed */
	protected $result;
	/*** @var mixed */
	protected $model;

	/*** @param $result */
	public function __construct($result)
	{
		parent::__construct($result);
		$responseObjectName = $this->responseClass;
		$this->model = ModelFactory::create(new SubmitSms(), $this->result->$responseObjectName->return);
	}

	/**
	 * @return SubmitSms
	 * @throws NotFoundException
	 */
	public function get(): SubmitSms
	{
		if ( ! empty($this->model)) {
			return $this->model;
		}
		throw new NotFoundException();
	}
}