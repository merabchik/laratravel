<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 11 Aug 2019 19:34:38 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserStatus
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class UserStatus extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class);
	}
}
