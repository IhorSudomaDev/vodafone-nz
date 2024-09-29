<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SimStatus
 * @property string|NULL    eID
 * @property string         customerName
 * @property string         customerId
 * @property string         parentName
 * @property string         parentId
 * @property Subscription[] Subscription
 * @property ReturnCode     returnCode
 * @package VodafoneNZRestApiClient\Models
 */
class SimStatus
{
	/*** @return string|NULL */
	public function getEID(): ?string
	{
		return $this->eID ?? NULL;
	}

	/*** @return string */
	public function getCustomerName(): string
	{
		return $this->customerName;
	}

	/*** @return string */
	public function getCustomerId(): string
	{
		return $this->customerId;
	}

	/*** @return string */
	public function getParentName(): string
	{
		return $this->parentName;
	}

	/*** @return string */
	public function getParentId(): string
	{
		return $this->parentId;
	}

	/*** @return Subscription[] */
	public function getSubscription(): array
	{
		return $this->Subscription;
	}

	/*** @return ReturnCode */
	public function getReturnCode(): ReturnCode
	{
		return $this->returnCode;
	}
}