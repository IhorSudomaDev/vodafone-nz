<?php

namespace VodafoneNZRestApiClient\Responses\Network\Sim;

use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\Models\SimStatus;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class GetSimStatusResponse
 * @package VodafoneNZRestApiClient\Responses\Network\Sim
 */
class GetSimStatusResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'getSIMStatusResponse';
	/*** @var mixed */
	protected $result;
	/*** @var mixed */
	protected $model;

	/*** @param $result */
	public function __construct($result)
	{
		parent::__construct($result);
		$responseObjectName = $this->responseClass;
		$this->model        = ModelFactory::create(new SimStatus(), $this->result->$responseObjectName->return);
	}

	/**
	 * @return SimStatus
	 * @throws NotFoundException
	 */
	public function get(): SimStatus
	{
		/*** @var SimStatus $simStatus */
		$simStatus = $this->model;
		if (empty($simStatus) || $simStatus->getReturnCode()->getMinorReturnCode() === '5926') {
			throw new NotFoundException();
		}
		return $this->model;
	}
}