<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SmsCommunication
 * @property string|NULL associatedUserId
 * @property string|NULL customerProfileDescription
 * @property string|NULL dataCoding
 * @property string|NULL destination
 * @property int|NULL    eventId
 * @property string|NULL eventStatus
 * @property string|NULL eventTimestamp
 * @property string|NULL eventType
 * @property string|NULL failureReason
 * @property string|NULL imsi
 * @property string|NULL messageBody
 * @property string|NULL messageType
 * @property string|NULL msisdn
 * @property string|NULL reportTimestamp
 * @property string|NULL tableFlag
 * @property string|NULL source
 * @property string|NULL timState
 * @property string|NULL udhIndicator
 * @property string|NULL uniqueId
 * @property string|NULL simIdentifier
 * @package VodafoneNZRestApiClient\Models
 */
class SmsCommunication
{
	/*** @return string|NULL */
	public function getAssociatedUserId(): ?string
	{
		return $this->associatedUserId ?? NULL;
	}

	/*** @return string|NULL */
	public function getCustomerProfileDescription(): ?string
	{
		return $this->customerProfileDescription ?? NULL;
	}

	/*** @return string|NULL */
	public function getDataCoding(): ?string
	{
		return $this->dataCoding ?? NULL;
	}

	/*** @return string|NULL */
	public function getDestination(): ?string
	{
		return $this->destination ?? NULL;
	}

	/*** @return int|NULL */
	public function getEventId(): ?int
	{
		return $this->eventId ?? NULL;
	}

	/*** @return string|NULL */
	public function getEventStatus(): ?string
	{
		return $this->eventStatus ?? NULL;
	}

	/*** @return string|NULL */
	public function getEventTimestamp(): ?string
	{
		return $this->eventTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getEventType(): ?string
	{
		return $this->eventType ?? NULL;
	}

	/*** @return string|NULL */
	public function getFailureReason(): ?string
	{
		return $this->failureReason ?? NULL;
	}

	/*** @return string|NULL */
	public function getImsi(): ?string
	{
		return $this->imsi ?? NULL;
	}

	/*** @return string|NULL */
	public function getMessageBody(): ?string
	{
		return $this->messageBody ?? NULL;
	}

	/*** @return string|NULL */
	public function getMessageType(): ?string
	{
		return $this->messageType ?? NULL;
	}

	/*** @return string|NULL */
	public function getMsisdn(): ?string
	{
		return $this->msisdn ?? NULL;
	}

	/*** @return string|NULL */
	public function getReportTimestamp(): ?string
	{
		return $this->reportTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getTableFlag(): ?string
	{
		return $this->tableFlag ?? NULL;
	}

	/*** @return string|NULL */
	public function getSource(): ?string
	{
		return $this->source ?? NULL;
	}

	/*** @return string|NULL */
	public function getTimState(): ?string
	{
		return $this->timState ?? NULL;
	}

	/*** @return string|NULL */
	public function getUdhIndicator(): ?string
	{
		return $this->udhIndicator ?? NULL;
	}

	/*** @return string|NULL */
	public function getUniqueId(): ?string
	{
		return $this->uniqueId ?? NULL;
	}

	/*** @return string|NULL */
	public function getSimIdentifier(): ?string
	{
		return $this->simIdentifier ?? NULL;
	}
}