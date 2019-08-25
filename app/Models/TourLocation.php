<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TourLocation
 * 
 * @property int $id
 * @property int $tour_id
 * @property int $location_id
 * @property int $position
 *
 * @package App\Models
 */
class TourLocation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tour_id' => 'int',
		'location_id' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'tour_id',
		'location_id',
		'position'
	];
}
