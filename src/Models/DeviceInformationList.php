<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class DeviceInformationList
 * @property array deviceInformationItem
 * @package VodafoneNZRestApiClient\Models
 */
class DeviceInformationList
{
	/*** @return array */
	public function getDeviceInformationItem(): array
	{
		return $this->deviceInformationItem;
	}

	/*** @param array $deviceInformationItem */
	public function setDeviceInformationItem(array $deviceInformationItem): void
	{
		$this->deviceInformationItem = $deviceInformationItem;
	}
}