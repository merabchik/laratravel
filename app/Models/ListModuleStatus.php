<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListModuleStatus
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modules
 *
 * @package App\Models
 */
class ListModuleStatus extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function modules()
	{
		return $this->hasMany(\App\Models\Module::class);
	}
}
