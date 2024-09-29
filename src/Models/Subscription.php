<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class Subscription
 * @property string              IMSI
 * @property string              ICCID
 * @property string|NULL         IMEI
 * @property string              customerServiceProfileName
 * @property string              customerServiceProfileId
 * @property string|NULL         tariffRatePlan
 * @property string              provisioningProfile
 * @property ServiceProvision[]  listOfServicesProvisioned
 * @property string|NULL         euiccProfileStatus
 * @property string|NULL         euiccProfileStatusTimestamp
 * @property string              state
 * @property string|NULL         firstRegistrationTimestamp
 * @property string              provisioningStatus
 * @property string|NULL         lastDetectedImeiTimestamp
 * @property string|NULL         eCallProfile
 * @property string|NULL         firstUsedTimestamp
 * @property string|NULL         dataStatus
 * @property string              csStatus
 * @property string|NULL         registrationStatusHLR
 * @property string|NULL         registrationStatusHLRTimestamp
 * @property string|NULL         registrationStatusHLRLastRefresh
 * @property bool|NULL           registrationStatusHLRUpdatePending
 * @property string|NULL         registrationStatusHSS
 * @property string|NULL         registrationStatusHSSTimestamp
 * @property string|NULL         registrationStatusHSSLastRefresh
 * @property bool|NULL           registrationStatusHSSUpdatePending
 * @property DataSession[]       DataLastUsage
 * @property SmsLastUsage|NULL   SMSLastUsage
 * @property VoiceLastUsage|NULL VoiceLastUsage
 * @package VodafoneNZRestApiClient\Models
 */
class Subscription
{
	/*** @return string */
	public function getIMSI(): string
	{
		return $this->IMSI;
	}

	/*** @return string */
	public function getICCID(): string
	{
		return $this->ICCID;
	}

	/*** @return string|NULL */
	public function getIMEI(): ?string
	{
		return $this->IMEI ?? NULL;
	}

	/*** @return string */
	public function getCustomerServiceProfileName(): string
	{
		return $this->customerServiceProfileName;
	}

	/*** @return string */
	public function getCustomerServiceProfileId(): string
	{
		return $this->customerServiceProfileId;
	}

	/*** @return string|NULL */
	public function getTariffRatePlan(): ?string
	{
		return $this->tariffRatePlan ?? NULL;
	}

	/*** @return string */
	public function getProvisioningProfile(): string
	{
		return $this->provisioningProfile;
	}

	/*** @return ServiceProvision[] */
	public function getListOfServicesProvisioned(): array
	{
		return $this->listOfServicesProvisioned;
	}

	/*** @return string|NULL */
	public function getEuiccProfileStatus(): ?string
	{
		return $this->euiccProfileStatus ?? NULL;
	}

	/*** @return string|NULL */
	public function getEuiccProfileStatusTimestamp(): ?string
	{
		return $this->euiccProfileStatusTimestamp ?? NULL;
	}

	/*** @return string */
	public function getState(): string
	{
		return $this->state;
	}

	/*** @return string|NULL */
	public function getFirstRegistrationTimestamp(): ?string
	{
		return $this->firstRegistrationTimestamp ?? NULL;
	}

	/*** @return string */
	public function getProvisioningStatus(): string
	{
		return $this->provisioningStatus;
	}

	/*** @return string|NULL */
	public function getLastDetectedImeiTimestamp(): ?string
	{
		return $this->lastDetectedImeiTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getECallProfile(): ?string
	{
		return $this->eCallProfile ?? NULL;
	}

	/*** @return string|NULL */
	public function getFirstUsedTimestamp(): ?string
	{
		return $this->firstUsedTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getDataStatus(): ?string
	{
		return $this->dataStatus ?? NULL;
	}

	/*** @return string */
	public function getCsStatus(): string
	{
		return $this->csStatus;
	}

	/*** @return string|NULL */
	public function getRegistrationStatusHLR(): ?string
	{
		return $this->registrationStatusHLR ?? NULL;
	}

	/*** @return string|NULL */
	public function getRegistrationStatusHLRTimestamp(): ?string
	{
		return $this->registrationStatusHLRTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getRegistrationStatusHLRLastRefresh(): ?string
	{
		return $this->registrationStatusHLRLastRefresh ?? NULL;
	}

	/*** @return bool|NULL */
	public function getRegistrationStatusHLRUpdatePending(): ?bool
	{
		return $this->registrationStatusHLRUpdatePending ?? NULL;
	}

	/*** @return string|NULL */
	public function getRegistrationStatusHSS(): ?string
	{
		return $this->registrationStatusHSS ?? NULL;
	}

	/*** @return string|NULL */
	public function getRegistrationStatusHSSTimestamp(): ?string
	{
		return $this->registrationStatusHSSTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getRegistrationStatusHSSLastRefresh(): ?string
	{
		return $this->registrationStatusHSSLastRefresh ?? NULL;
	}

	/*** @return bool|NULL */
	public function getRegistrationStatusHSSUpdatePending(): ?bool
	{
		return $this->registrationStatusHSSUpdatePending ?? NULL;
	}

	/*** @return DataSession[] */
	public function getDataLastUsage(): array
	{
		return $this->DataLastUsage;
	}

	/*** @return SmsLastUsage|NULL */
	public function getSMSLastUsage(): ?SmsLastUsage
	{
		return $this->SMSLastUsage ?? NULL;
	}

	/*** @return VoiceLastUsage|NULL */
	public function getVoiceLastUsage(): ?VoiceLastUsage
	{
		return $this->VoiceLastUsage ?? NULL;
	}
}