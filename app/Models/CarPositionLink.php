<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CarPositionLink
 * 
 * @property int $id
 * @property int $car_id
 * @property int $list_position_id
 * 
 * @property \App\Models\Car $car
 * @property \App\Models\ListPosition $list_position
 *
 * @package App\Models
 */
class CarPositionLink extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'car_id' => 'int',
		'list_position_id' => 'int'
	];

	protected $fillable = [
		'car_id',
		'list_position_id'
	];

	public function car()
	{
		return $this->belongsTo(\App\Models\Car::class);
	}

	public function list_position()
	{
		return $this->belongsTo(\App\Models\ListPosition::class);
	}
}
