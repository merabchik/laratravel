<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TourMap
 * 
 * @property int $id
 * @property int $tour_id
 * @property string $city_name
 * @property string $city_lat
 * @property string $city_long
 * @property string $city_type
 * @property int $order
 * 
 * @property \App\Models\Tour $tour
 *
 * @package App\Models
 */
class TourMap extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tour_id' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'tour_id',
		'city_name',
		'city_lat',
		'city_long',
		'city_type',
		'order'
	];

	public function tour()
	{
		return $this->belongsTo(\App\Models\Tour::class);
	}
}
