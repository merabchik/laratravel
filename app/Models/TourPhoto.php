<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TourPhoto
 * 
 * @property int $id
 * @property int $tour_id
 * @property string $tour_photo_filename
 * @property int $tour_photo_primary
 * 
 * @property \App\Models\Tour $tour
 *
 * @package App\Models
 */
class TourPhoto extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tour_id' => 'int',
		'tour_photo_primary' => 'int'
	];

	protected $fillable = [
		'tour_id',
		'tour_photo_filename',
		'tour_photo_primary'
	];

	public function tour()
	{
		return $this->belongsTo(\App\Models\Tour::class);
	}
}
