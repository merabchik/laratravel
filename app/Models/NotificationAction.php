<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NotificationAction
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $notifications
 *
 * @package App\Models
 */
class NotificationAction extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function notifications()
	{
		return $this->hasMany(\App\Models\Notification::class, 'action_id');
	}
}
