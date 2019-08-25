<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListInvoiceStatus
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 *
 * @package App\Models
 */
class ListInvoiceStatus extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function invoices()
	{
		return $this->hasMany(\App\Models\Invoice::class);
	}
}
