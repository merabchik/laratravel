<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Booking
 * 
 * @property int $id
 * @property int $list_payment_status_id
 * @property int $invoice_id
 * @property int $module_id
 * @property \Carbon\Carbon $created
 * @property int $creator
 * @property \Carbon\Carbon $modified
 * @property int $modifier
 * 
 * @property \App\Models\ListPaymentStatus $list_payment_status
 *
 * @package App\Models
 */
class Booking extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_payment_status_id' => 'int',
		'invoice_id' => 'int',
		'module_id' => 'int',
		'creator' => 'int',
		'modifier' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'list_payment_status_id',
		'invoice_id',
		'module_id',
		'created',
		'creator',
		'modified',
		'modifier'
	];

	public function list_payment_status()
	{
		return $this->belongsTo(\App\Models\ListPaymentStatus::class);
	}
}
