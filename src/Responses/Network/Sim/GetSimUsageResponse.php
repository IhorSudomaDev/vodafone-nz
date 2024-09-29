<?php

namespace VodafoneNZRestApiClient\Responses\Network\Sim;

use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\Models\DataSession;
use VodafoneNZRestApiClient\Models\SessionScope;
use VodafoneNZRestApiClient\Models\SimUsage;
use VodafoneNZRestApiClient\Models\SmsSession;
use VodafoneNZRestApiClient\Models\VoiceSession;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class GetSimUsageResponse
 * @package VodafoneNZRestApiClient\Responses\Network\Sim
 */
class GetSimUsageResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'getSIMUsageResponse';
	/*** @var mixed */
	protected $result;
	/*** @var mixed */
	protected $model;

	/*** @param $result */
	public function __construct($result)
	{
		parent::__construct($result);
		$responseObjectName = $this->responseClass;
		$return             = $this->result->$responseObjectName->return;
		if (property_exists($return, 'SessionScope')) {
			if (property_exists($return->SessionScope, 'DataSession')) {
				$dataSessionList  = [];
				$sessionScopeData = $return->SessionScope->DataSession;
				unset($return->SessionScope);
				$this->model  = ModelFactory::create(new SimUsage(), $this->result->$responseObjectName->return);
				$sessionScope = new SessionScope();
				foreach ($sessionScopeData as $data) {
					$dataSessionList[] = ModelFactory::create(new DataSession(), $data);
				}
				$sessionScope->setDataSession($dataSessionList);
				$this->model->setSessionScope($sessionScope);
			} else if (property_exists($return->SessionScope, 'SMS')) {
				$smsList          = [];
				$sessionScopeData = $return->SessionScope->SMS;
				unset($return->SessionScope);
				$this->model  = ModelFactory::create(new SimUsage(), $this->result->$responseObjectName->return);
				$sessionScope = new SessionScope();
				foreach ($sessionScopeData as $data) {
					$smsList[] = ModelFactory::create(new SmsSession(), $data);
				}
				$sessionScope->setSMS($smsList);
				$this->model->setSessionScope($sessionScope);
			} else if (property_exists($return->SessionScope, 'Voice')) {
				$voiceList        = [];
				$sessionScopeData = $return->SessionScope->Voice;
				unset($return->SessionScope);
				$this->model  = ModelFactory::create(new SimUsage(), $this->result->$responseObjectName->return);
				$sessionScope = new SessionScope();
				foreach ($sessionScopeData as $data) {
					$voiceList[] = ModelFactory::create(new VoiceSession(), $data);
				}
				$sessionScope->setVoice($voiceList);
				$this->model->setSessionScope($sessionScope);
			}
		}
	}

	/**
	 * @return SimUsage
	 * @throws NotFoundException
	 */
	public function get(): SimUsage
	{
		/*** @var SimUsage $simUsage */
		$simUsage = $this->model;
		if (empty($simUsage) || $simUsage->getReturnCode()->getMinorReturnCode() === '5926') {
			throw new NotFoundException();
		}
		return $this->model;
	}
}