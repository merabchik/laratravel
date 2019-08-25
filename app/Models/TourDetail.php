<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TourDetail
 * 
 * @property int $id
 * @property int $tour_id
 * @property int $lang_id
 * @property int $is_featured
 * @property int $days
 * @property int $nights
 * @property string $title
 * @property string $description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $policy
 * @property string $thumbnail_image
 * 
 * @property \App\Models\Tour $tour
 * @property \App\Models\Lang $lang
 *
 * @package App\Models
 */
class TourDetail extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tour_id' => 'int',
		'lang_id' => 'int',
		'is_featured' => 'int',
		'days' => 'int',
		'nights' => 'int'
	];

	protected $fillable = [
		'tour_id',
		'lang_id',
		'is_featured',
		'days',
		'nights',
		'title',
		'description',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'policy',
		'thumbnail_image'
	];

	public function tour()
	{
		return $this->belongsTo(\App\Models\Tour::class);
	}

	public function lang()
	{
		return $this->belongsTo(\App\Models\Lang::class);
	}
}
