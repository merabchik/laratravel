<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TourTypeLink
 * 
 * @property int $id
 * @property int $tour_id
 * @property int $list_tour_type_id
 * 
 * @property \App\Models\Tour $tour
 * @property \App\Models\ListTourType $list_tour_type
 *
 * @package App\Models
 */
class TourTypeLink extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tour_id' => 'int',
		'list_tour_type_id' => 'int'
	];

	protected $fillable = [
		'tour_id',
		'list_tour_type_id'
	];

	public function tour()
	{
		return $this->belongsTo(\App\Models\Tour::class);
	}

	public function list_tour_type()
	{
		return $this->belongsTo(\App\Models\ListTourType::class);
	}
}
