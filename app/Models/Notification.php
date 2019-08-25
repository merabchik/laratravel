<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Notification
 * 
 * @property int $id
 * @property int $user_id
 * @property int $notification_type_id
 * @property int $offer_user_id
 * @property int $app_offer_id
 * @property string $title
 * @property string $description
 * @property string $goto_url_segment
 * @property \Carbon\Carbon $fire_time
 * @property int $executed
 * @property int $action_id
 * @property \Carbon\Carbon $create_date
 * @property \Carbon\Carbon $executed_date
 * 
 * @property \App\Models\NotificationType $notification_type
 * @property \App\Models\NotificationAction $notification_action
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Notification extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'notification_type_id' => 'int',
		'offer_user_id' => 'int',
		'app_offer_id' => 'int',
		'executed' => 'int',
		'action_id' => 'int'
	];

	protected $dates = [
		'fire_time',
		'create_date',
		'executed_date'
	];

	protected $fillable = [
		'user_id',
		'notification_type_id',
		'offer_user_id',
		'app_offer_id',
		'title',
		'description',
		'goto_url_segment',
		'fire_time',
		'executed',
		'action_id',
		'create_date',
		'executed_date'
	];

	public function notification_type()
	{
		return $this->belongsTo(\App\Models\NotificationType::class);
	}

	public function notification_action()
	{
		return $this->belongsTo(\App\Models\NotificationAction::class, 'action_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
