<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SessionScope
 * @property DataSession[]|NULL  DataSession
 * @property SmsSession[]|NULL   SMS
 * @property VoiceSession[]|NULL Voice
 * @package VodafoneNZRestApiClient\Models
 */
class SessionScope
{
	/*** @return DataSession[]|NULL */
	public function getDataSession(): ?array
	{
		return $this->DataSession ?? NULL;
	}

	/*** @param array|NULL $DataSession */
	public function setDataSession(?array $DataSession): void
	{
		$this->DataSession = $DataSession;
	}

	/*** @return SmsSession[]|NULL */
	public function getSMS(): ?array
	{
		return $this->SMS ?? NULL;
	}

	/*** @param array|NULL $SMS */
	public function setSMS(?array $SMS): void
	{
		$this->SMS = $SMS;
	}

	/*** @return VoiceSession[]|NULL */
	public function getVoice(): ?array
	{
		return $this->Voice ?? NULL;
	}

	/*** @param array|NULL $Voice */
	public function setVoice(?array $Voice): void
	{
		$this->Voice = $Voice;
	}
}