<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
 * @package App\Http\Controllers\Admin
 */

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'regipaddr',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'create_date' => 'datetime',
        'modify_date' => 'datetime'
    ];
}
