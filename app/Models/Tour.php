<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tour
 * 
 * @property int $id
 * @property int $list_tour_type_id
 * @property int $list_tour_status_id
 * @property int $stars_count
 * @property int $order_no
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * @property int $creator
 * @property int $modifier
 * 
 * @property \App\Models\ListTourType $list_tour_type
 * @property \App\Models\User $user
 * @property \App\Models\ListProductStatus $list_product_status
 * @property \Illuminate\Database\Eloquent\Collection $list_tour_type_translates
 * @property \Illuminate\Database\Eloquent\Collection $tour_details
 * @property \Illuminate\Database\Eloquent\Collection $tour_maps
 * @property \Illuminate\Database\Eloquent\Collection $tour_photos
 * @property \Illuminate\Database\Eloquent\Collection $tour_position_links
 * @property \Illuminate\Database\Eloquent\Collection $tour_type_links
 *
 * @package App\Models
 */
class Tour extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_tour_type_id' => 'int',
		'list_tour_status_id' => 'int',
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
		'list_tour_type_id',
		'list_tour_status_id',
		'stars_count',
		'order_no',
		'created',
		'modified',
		'creator',
		'modifier'
	];

	public function list_tour_type()
	{
		return $this->belongsTo(\App\Models\ListTourType::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'creator');
	}

	public function list_product_status()
	{
		return $this->belongsTo(\App\Models\ListProductStatus::class, 'list_tour_status_id');
	}

	public function list_tour_type_translates()
	{
		return $this->hasMany(\App\Models\ListTourTypeTranslate::class);
	}

	public function tour_details()
	{
		return $this->hasMany(\App\Models\TourDetail::class);
	}

	public function tour_maps()
	{
		return $this->hasMany(\App\Models\TourMap::class);
	}

	public function tour_photos()
	{
		return $this->hasMany(\App\Models\TourPhoto::class);
	}

	public function tour_position_links()
	{
		return $this->hasMany(\App\Models\TourPositionLink::class);
	}

	public function tour_type_links()
	{
		return $this->hasMany(\App\Models\TourTypeLink::class);
	}
}
