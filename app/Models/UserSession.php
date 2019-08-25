<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 11 Aug 2019 19:34:38 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserSession
 * 
 * @property int $id
 * @property int $user_id
 * @property string $token
 * @property string $ipaddr
 * @property string $client_info
 * @property \Carbon\Carbon $create_date
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserSession extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'create_date'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'user_id',
		'token',
		'ipaddr',
		'client_info',
		'create_date'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
