<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListPaymentStatus
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $bookings
 *
 * @package App\Models
 */
class ListPaymentStatus extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function bookings()
	{
		return $this->hasMany(\App\Models\Booking::class);
	}
}
