<?php

namespace VodafoneNZRestApiClient\Traits;

/*** Trait WithPagination */
trait WithPagination
{
	/**
	 * @param int $pageSize
	 * @return $this
	 */
	public function withPageSize(int $pageSize): self
	{
		$this->requestParameters['pageSize'] = $pageSize;
		return $this;
	}

	/**
	 * @param int $pageNumber
	 * @return $this
	 */
	public function withPageNumber(int $pageNumber): self
	{
		$this->requestParameters['pageNumber'] = $pageNumber;
		return $this;
	}
}