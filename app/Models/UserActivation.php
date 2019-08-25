<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserActivation
 * 
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property \Carbon\Carbon $activate_date
 * @property \Carbon\Carbon $lifedate
 * @property int $activated
 * @property string $ipaddr
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserActivation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'activated' => 'int'
	];

	protected $dates = [
		'activate_date',
		'lifedate'
	];

	protected $fillable = [
		'user_id',
		'code',
		'activate_date',
		'lifedate',
		'activated',
		'ipaddr'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
