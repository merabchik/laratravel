<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListTourType
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tour_type_links
 * @property \Illuminate\Database\Eloquent\Collection $tours
 *
 * @package App\Models
 */
class ListTourType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function tour_type_links()
	{
		return $this->hasMany(\App\Models\TourTypeLink::class);
	}

	public function tours()
	{
		return $this->hasMany(\App\Models\Tour::class);
	}
}
