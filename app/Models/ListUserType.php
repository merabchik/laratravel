<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListUserType
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class ListUserType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'user_type_id');
	}
}
