<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CarLocation
 * 
 * @property int $id
 * @property int $car_id
 * @property int $position
 * @property int $list_pickup_location_id
 * @property int $list_dropoff_location_id
 * @property float $price
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * @property int $creator
 * @property int $modifier
 * 
 * @property \App\Models\Car $car
 * @property \App\Models\ListCarLocation $list_car_location
 *
 * @package App\Models
 */
class CarLocation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'car_id' => 'int',
		'position' => 'int',
		'list_pickup_location_id' => 'int',
		'list_dropoff_location_id' => 'int',
		'price' => 'float',
		'creator' => 'int',
		'modifier' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'car_id',
		'position',
		'list_pickup_location_id',
		'list_dropoff_location_id',
		'price',
		'created',
		'modified',
		'creator',
		'modifier'
	];

	public function car()
	{
		return $this->belongsTo(\App\Models\Car::class);
	}

	public function list_car_location()
	{
		return $this->belongsTo(\App\Models\ListCarLocation::class, 'list_dropoff_location_id');
	}
}
