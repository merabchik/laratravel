<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NotificationType
 * 
 * @property int $id
 * @property string $title
 * @property string $formAction
 * 
 * @property \Illuminate\Database\Eloquent\Collection $notifications
 *
 * @package App\Models
 */
class NotificationType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'formAction'
	];

	public function notifications()
	{
		return $this->hasMany(\App\Models\Notification::class);
	}
}
