<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BookingExtra
 * 
 * @property int $id
 * @property int $booking_id
 * @property int $extra_id
 * @property float $price
 *
 * @package App\Models
 */
class BookingExtra extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'extra_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'booking_id',
		'extra_id',
		'price'
	];
}
