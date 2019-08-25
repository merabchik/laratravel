<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Component
 * 
 * @property int $id
 * @property int $list_component_status_id
 * @property string $name
 * 
 * @property \App\Models\ListComponentStatus $list_component_status
 *
 * @package App\Models
 */
class Component extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_component_status_id' => 'int'
	];

	protected $fillable = [
		'list_component_status_id',
		'name'
	];

	public function list_component_status()
	{
		return $this->belongsTo(\App\Models\ListComponentStatus::class);
	}
}
