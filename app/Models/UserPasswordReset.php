<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserPasswordReset
 * 
 * @property int $id
 * @property int $user_id
 * @property string $temp_token
 * @property \Carbon\Carbon $created
 * @property string $ipaddr
 * @property string $request_log
 *
 * @package App\Models
 */
class UserPasswordReset extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $hidden = [
		'temp_token'
	];

	protected $fillable = [
		'user_id',
		'temp_token',
		'created',
		'ipaddr',
		'request_log'
	];
}
