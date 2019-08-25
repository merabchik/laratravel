<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListProductStatus
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tours
 *
 * @package App\Models
 */
class ListProductStatus extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function tours()
	{
		return $this->hasMany(\App\Models\Tour::class, 'list_tour_status_id');
	}
}
