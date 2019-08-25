<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListUserStatus
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class ListUserStatus extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'user_status_id');
	}
}
