<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TourPositionLink
 * 
 * @property int $id
 * @property int $tour_id
 * @property int $list_position_id
 * 
 * @property \App\Models\Tour $tour
 * @property \App\Models\ListPosition $list_position
 *
 * @package App\Models
 */
class TourPositionLink extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tour_id' => 'int',
		'list_position_id' => 'int'
	];

	protected $fillable = [
		'tour_id',
		'list_position_id'
	];

	public function tour()
	{
		return $this->belongsTo(\App\Models\Tour::class);
	}

	public function list_position()
	{
		return $this->belongsTo(\App\Models\ListPosition::class);
	}
}
