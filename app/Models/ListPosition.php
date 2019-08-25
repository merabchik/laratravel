<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListPosition
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $car_position_links
 * @property \Illuminate\Database\Eloquent\Collection $tour_position_links
 *
 * @package App\Models
 */
class ListPosition extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function car_position_links()
	{
		return $this->hasMany(\App\Models\CarPositionLink::class);
	}

	public function tour_position_links()
	{
		return $this->hasMany(\App\Models\TourPositionLink::class);
	}
}
