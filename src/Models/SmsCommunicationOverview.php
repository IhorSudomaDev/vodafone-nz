<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SmsCommunicationOverview
 * @property ReturnCode              returnCode
 * @property SmsCommunication[]|NULL smsCommunicationList
 * @property int                     smsCommunicationListLength
 * @property int                     smsCommunicationTableLength
 * @package VodafoneNZRestApiClient\Models
 */
class SmsCommunicationOverview
{
	/*** @return ReturnCode */
	public function getReturnCode(): ReturnCode
	{
		return $this->returnCode;
	}

	/*** @return SmsCommunication[]|NULL */
	public function getSmsCommunicationList(): ?array
	{
		return $this->smsCommunicationList ?? NULL;
	}

	/*** @param SmsCommunication[]|NULL $smsCommunicationList */
	public function setSmsCommunicationList(?array $smsCommunicationList): void
	{
		$this->smsCommunicationList = $smsCommunicationList ?? NULL;
	}

	/*** @return int */
	public function getSmsCommunicationListLength(): int
	{
		return $this->smsCommunicationListLength;
	}

	/*** @return int */
	public function getSmsCommunicationTableLength(): int
	{
		return $this->smsCommunicationTableLength;
	}
}