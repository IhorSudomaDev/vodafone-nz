<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SmsSession
 * @property string      messageDirection
 * @property string      state
 * @property string|NULL dataCoding
 * @property string      source
 * @property string      destination
 * @property string      eventId
 * @property string      eventStatus
 * @property string      eventType
 * @property string|NULL failureReason
 * @property string      messageType
 * @property string      messageBody
 * @property string      eventTimestamp
 * @property string|NULL bearer
 * @package VodafoneNZRestApiClient\Models
 */
class SmsSession
{
	/*** @return string */
	public function getMessageDirection(): string
	{
		return $this->messageDirection;
	}

	/*** @return string */
	public function getState(): string
	{
		return $this->state;
	}

	/*** @return string|NULL */
	public function getDataCoding(): ?string
	{
		return $this->dataCoding ?? NULL;
	}

	/*** @return string */
	public function getSource(): string
	{
		return $this->source;
	}

	/*** @return string */
	public function getDestination(): string
	{
		return $this->destination;
	}

	/*** @return string */
	public function getEventId(): string
	{
		return $this->eventId;
	}

	/*** @return string */
	public function getEventStatus(): string
	{
		return $this->eventStatus;
	}

	/*** @return string */
	public function getEventType(): string
	{
		return $this->eventType;
	}

	/*** @return string|NULL */
	public function getFailureReason(): ?string
	{
		return $this->failureReason ?? NULL;
	}

	/*** @return string */
	public function getMessageType(): string
	{
		return $this->messageType;
	}

	/*** @return string */
	public function getMessageBody(): string
	{
		return $this->messageBody;
	}

	/*** @return string */
	public function getEventTimestamp(): string
	{
		return $this->eventTimestamp;
	}

	/*** @return string|NULL */
	public function getBearer(): ?string
	{
		return $this->bearer ?? NULL;
	}
}