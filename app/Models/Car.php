<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Car
 * 
 * @property int $id
 * @property int $list_product_status_id
 * @property int $stars_count
 * @property int $order_no
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * @property int $creator
 * @property int $modifier
 * 
 * @property \Illuminate\Database\Eloquent\Collection $car_details
 * @property \Illuminate\Database\Eloquent\Collection $car_locations
 * @property \Illuminate\Database\Eloquent\Collection $car_position_links
 *
 * @package App\Models
 */
class Car extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_product_status_id' => 'int',
		'stars_count' => 'int',
		'order_no' => 'int',
		'creator' => 'int',
		'modifier' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'list_product_status_id',
		'stars_count',
		'order_no',
		'created',
		'modified',
		'creator',
		'modifier'
	];

	public function car_details()
	{
		return $this->hasMany(\App\Models\CarDetail::class);
	}

	public function car_locations()
	{
		return $this->hasMany(\App\Models\CarLocation::class);
	}

	public function car_position_links()
	{
		return $this->hasMany(\App\Models\CarPositionLink::class);
	}
}
