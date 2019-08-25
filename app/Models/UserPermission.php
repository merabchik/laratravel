<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserPermission
 * 
 * @property int $id
 * @property int $role_id
 * @property string $name
 * @property string $router
 * 
 * @property \App\Models\ListUserRole $list_user_role
 *
 * @package App\Models
 */
class UserPermission extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'name',
		'router'
	];

	public function list_user_role()
	{
		return $this->belongsTo(\App\Models\ListUserRole::class, 'role_id');
	}
}
