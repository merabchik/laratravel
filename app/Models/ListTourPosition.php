<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 11 Aug 2019 18:46:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListTourPosition
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tour_position_links
 *
 * @package App\Models
 */
class ListTourPosition extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function tour_position_links()
	{
		return $this->hasMany(\App\Models\TourPositionLink::class);
	}
}
