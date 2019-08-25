<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListCarLocation
 * 
 * @property int $id
 * @property string $country
 * @property string $location
 * @property string $latitude
 * @property string $longitude
 * @property int $status
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * @property int $creator
 * @property int $modifier
 * 
 * @property \Illuminate\Database\Eloquent\Collection $car_locations
 *
 * @package App\Models
 */
class ListCarLocation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'creator' => 'int',
		'modifier' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'country',
		'location',
		'latitude',
		'longitude',
		'status',
		'created',
		'modified',
		'creator',
		'modifier'
	];

	public function car_locations()
	{
		return $this->hasMany(\App\Models\CarLocation::class, 'list_dropoff_location_id');
	}
}
