<?php

namespace VodafoneNZRestApiClient\Responses\Network\Sim;

use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\Models\StopSimSession;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class StopSimSessionResponse
 * @package VodafoneNZRestApiClient\Responses\Network\Sim
 */
class StopSimSessionResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'stopSIMSessionResponse';
	/*** @var mixed */
	protected $result;
	/*** @var mixed */
	protected $model;

	/*** @param $result */
	public function __construct($result)
	{
		parent::__construct($result);
		$responseObjectName = $this->responseClass;
		$this->model        = ModelFactory::create(new StopSimSession(), $this->result->$responseObjectName->return);
	}

	/**
	 * @return StopSimSession
	 * @throws NotFoundException
	 */
	public function get(): StopSimSession
	{
		if ( ! empty($this->model)) {
			return $this->model;
		}
		throw new NotFoundException();
	}
}