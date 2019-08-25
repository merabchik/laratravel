<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CarDetail
 * 
 * @property int $id
 * @property int $car_id
 * @property int $lang_id
 * @property string $title
 * @property string $description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $policy
 * @property string $thumbnail_image
 * 
 * @property \App\Models\Lang $lang
 * @property \App\Models\Car $car
 *
 * @package App\Models
 */
class CarDetail extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'car_id' => 'int',
		'lang_id' => 'int'
	];

	protected $fillable = [
		'car_id',
		'lang_id',
		'title',
		'description',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'policy',
		'thumbnail_image'
	];

	public function lang()
	{
		return $this->belongsTo(\App\Models\Lang::class);
	}

	public function car()
	{
		return $this->belongsTo(\App\Models\Car::class);
	}
}
