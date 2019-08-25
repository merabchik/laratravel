<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Module
 * 
 * @property int $id
 * @property int $list_module_status_id
 * @property string $name
 * 
 * @property \App\Models\ListModuleStatus $list_module_status
 *
 * @package App\Models
 */
class Module extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_module_status_id' => 'int'
	];

	protected $fillable = [
		'list_module_status_id',
		'name'
	];

	public function list_module_status()
	{
		return $this->belongsTo(\App\Models\ListModuleStatus::class);
	}
}
