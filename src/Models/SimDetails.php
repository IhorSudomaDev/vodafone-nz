<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SimDetails
 * @property string                simId
 * @property string                simIdType
 * @property string                customerServiceProfile
 * @property string                state
 * @property string                baseCountry
 * @property DeviceInformationList deviceInformationList
 * @property ApnList               apnList
 * @property ReturnCode            returnCode
 * @package VodafoneNZRestApiClient\Models
 */
class SimDetails
{
	/*** @return string */
	public function getSimId(): string
	{
		return $this->simId;
	}

	/*** @return string */
	public function getSimIdType(): string
	{
		return $this->simIdType;
	}

	/*** @return string */
	public function getCustomerServiceProfile(): string
	{
		return $this->customerServiceProfile;
	}

	/*** @return string */
	public function getState(): string
	{
		return $this->state;
	}

	/*** @return string */
	public function getBaseCountry(): string
	{
		return $this->baseCountry;
	}

	/*** @return DeviceInformationList */
	public function getDeviceInformationList(): DeviceInformationList
	{
		return $this->deviceInformationList;
	}

	/*** @param DeviceInformationList $deviceInformationList */
	public function setDeviceInformationList(DeviceInformationList $deviceInformationList): void
	{
		$this->deviceInformationList = $deviceInformationList;
	}

	/*** @return ApnList */
	public function getApnList(): ApnList
	{
		return $this->apnList;
	}

	/*** @return ReturnCode */
	public function getReturnCode(): ReturnCode
	{
		return $this->returnCode;
	}
}