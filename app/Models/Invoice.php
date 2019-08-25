<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Invoice
 * 
 * @property int $id
 * @property int $list_invoice_status_id
 * @property string $pdf_filename
 * @property \Carbon\Carbon $created
 * @property int $creator
 * 
 * @property \App\Models\ListInvoiceStatus $list_invoice_status
 *
 * @package App\Models
 */
class Invoice extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_invoice_status_id' => 'int',
		'creator' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'list_invoice_status_id',
		'pdf_filename',
		'created',
		'creator'
	];

	public function list_invoice_status()
	{
		return $this->belongsTo(\App\Models\ListInvoiceStatus::class);
	}
}
