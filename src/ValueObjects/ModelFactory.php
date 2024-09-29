<?php

namespace VodafoneNZRestApiClient\ValueObjects;

use stdClass;
use Throwable;
use VodafoneNZRestApiClient\Models\DataLastUsage;
use VodafoneNZRestApiClient\Models\ServiceProvision;
use VodafoneNZRestApiClient\Models\Subscription;

/**
 * Class ModelFactory
 * @package VodafoneNZRestApiClient\ValueObjects
 */
class ModelFactory
{
	/**
	 * @param $model
	 * @param $data
	 * @return mixed
	 */
	public static function create($model, $data)
	{
		foreach ($data as $key => $value) {
			if ($value instanceof stdClass) {
				try {
					$modelClass = '\\VodafoneNZRestApiClient\\Models\\' . str_replace('_', '', ucwords($key, '_'));
					if (class_exists($modelClass)) {
						$model->$key = self::create(new $modelClass(), $value);
					} else {
						$model->$key = $value;
					}
				} catch (Throwable $e) {
					echo $e->getMessage();
				}
			} else if (is_array($value)) {
				$model->$key = [];
				foreach ($value as $item) {
					switch ($key) {
						case 'Subscription':
							$newModel = new Subscription();
							break;
						case 'listOfServicesProvisioned':
							$newModel = new ServiceProvision();
							break;
						case 'DataLastUsage':
							$newModel = new DataLastUsage();
							break;
						default:
							$newModel = new stdClass();
							break;
					}
					try {
						$model->$key[] = self::create($newModel, $item);
					} catch (Throwable $e) {
					}
				}
			} else {
				$model->$key = $value;
			}
		}
		return $model;
	}
}