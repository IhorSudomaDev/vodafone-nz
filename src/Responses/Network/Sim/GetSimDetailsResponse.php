<?php

namespace VodafoneNZRestApiClient\Responses\Network\Sim;

use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\Models\DeviceInformationList;
use VodafoneNZRestApiClient\Models\SimDetails;
use VodafoneNZRestApiClient\Responses\Abstracts\AResponse;
use VodafoneNZRestApiClient\ValueObjects\ModelFactory;

/**
 * Class GetSimDetailsResponse
 * @package VodafoneNZRestApiClient\Responses\Network\Sim
 */
class GetSimDetailsResponse extends AResponse
{
	/*** @var string */
	protected string $responseClass = 'getSimDetailsv2Response';
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
		if (property_exists($return, 'deviceInformationList')) {
			$itemList = $return->deviceInformationList->deviceInformationItem;
			unset($return->deviceInformationList->deviceInformationItem);
			$this->model = ModelFactory::create(new SimDetails(), $this->result->$responseObjectName->return);
			foreach ($itemList as $item) {
				$deviceInformationList                  = new DeviceInformationList();
				$deviceInformationItem[$item->itemName] = $item->itemValue ?? NULL;
				$deviceInformationList->setDeviceInformationItem($deviceInformationItem);
				$this->model->setDeviceInformationList($deviceInformationList);
			}
		}
	}

	/**
	 * @return SimDetails
	 * @throws NotFoundException
	 */
	public function get(): SimDetails
	{
		/*** @var SimDetails $simDetails */
		$simDetails = $this->model;
		if (empty($simDetails) || $simDetails->getReturnCode()->getMinorReturnCode() === '5926') {
			throw new NotFoundException();
		}
		return $this->model;
	}
}