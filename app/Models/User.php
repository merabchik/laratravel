<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use \Illuminate\Contracts\Auth\Authenticatable as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property int $user_type_id
 * @property int $user_status_id
 * @property int $user_gender_id
 * @property string $full_name
 * @property int $phone
 * @property string $email
 * @property string $password
 * @property \Carbon\Carbon $create_date
 * @property \Carbon\Carbon $modify_date
 * @property string $regipaddr
 * 
 * @property \App\Models\ListUserType $list_user_type
 * @property \App\Models\ListUserStatus $list_user_status
 * @property \Illuminate\Database\Eloquent\Collection $notifications
 * @property \Illuminate\Database\Eloquent\Collection $tours
 * @property \Illuminate\Database\Eloquent\Collection $user_activations
 * @property \Illuminate\Database\Eloquent\Collection $user_tokens
 *
 * @package App\Models
 */
class User extends Eloquent
{

	public $timestamps = false;

	protected $casts = [
		'user_type_id' => 'int',
		'user_status_id' => 'int',
		'user_gender_id' => 'int',
		'phone' => 'int'
	];

	protected $dates = [
		'create_date',
		'modify_date'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user_type_id',
		'user_status_id',
		'user_gender_id',
		'full_name',
		'phone',
		'email',
		'password',
		'create_date',
		'modify_date',
		'regipaddr'
	];

	public function list_user_type()
	{
		return $this->belongsTo(\App\Models\ListUserType::class, 'user_type_id');
	}

	public function list_user_status()
	{
		return $this->belongsTo(\App\Models\ListUserStatus::class, 'user_status_id');
	}

	public function notifications()
	{
		return $this->hasMany(\App\Models\Notification::class);
	}

	public function tours()
	{
		return $this->hasMany(\App\Models\Tour::class, 'creator');
	}

	public function user_activations()
	{
		return $this->hasMany(\App\Models\UserActivation::class);
	}

	public function user_tokens()
	{
		return $this->hasMany(\App\Models\UserToken::class);
	}

}
