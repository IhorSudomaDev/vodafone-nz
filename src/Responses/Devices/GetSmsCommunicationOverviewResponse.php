<?php

namespace VodafoneNZRestApiClient\Responses\Devices;

use stdClass;
use VodafoneNZRestApiClient\Models\SmsCommunication;
use VodafoneNZRestApiClient\Models\SmsCommunicationOverview;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class GetSmsCommunicationOverviewResponse
 * @package VodafoneNZRestApiClient\Responses\Devices
 */
class GetSmsCommunicationOverviewResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'getSmsCommunicationOverviewv2Response';
	/*** @var mixed */
	protected $result;
	/*** @var mixed */
	protected $model;

	/*** @param $result */
	public function __construct($result)
	{
		parent::__construct($result);
		$responseObjectName         = $this->responseClass;
		$return                     = $this->result->$responseObjectName->return;
		$formedSmsCommunicationList = [];
		$this->model                = ModelFactory::create(new SmsCommunicationOverview(), $this->result->$responseObjectName->return);
		if (property_exists($return, 'smsCommunicationList')) {
			$smsCommunicationList = $return->smsCommunicationList;
			unset($return->smsCommunicationList);
			if ($smsCommunicationList instanceof stdClass) {
				$formedSmsCommunicationList[] = ModelFactory::create(new SmsCommunication(), $smsCommunicationList);
			} else {
				foreach ($smsCommunicationList as $smsCommunication) {
					$formedSmsCommunicationList[] = ModelFactory::create(new SmsCommunication(), $smsCommunication);
				}
			}
			$this->model->setSmsCommunicationList($formedSmsCommunicationList);
		} else {
			$this->model->setSmsCommunicationList(NULL);
		}
	}

	/*** @return SmsCommunicationOverview */
	public function get(): SmsCommunicationOverview
	{
		return $this->model;
	}
}