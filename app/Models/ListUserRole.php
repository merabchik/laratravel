<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListUserRole
 * 
 * @property int $id
 * @property string $name
 * @property int $is_active
 * 
 * @property \Illuminate\Database\Eloquent\Collection $user_permissions
 *
 * @package App\Models
 */
class ListUserRole extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'is_active' => 'int'
	];

	protected $fillable = [
		'name',
		'is_active'
	];

	public function user_permissions()
	{
		return $this->hasMany(\App\Models\UserPermission::class, 'role_id');
	}
}
