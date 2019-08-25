<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EmailsQueue
 * 
 * @property int $id
 * @property int $template_id
 * @property string $to
 * @property string $subject
 * @property string $body
 * @property \Carbon\Carbon $add_date
 * @property \Carbon\Carbon $execute_date
 * @property int $executed
 * 
 * @property \App\Models\EmailTemplate $email_template
 *
 * @package App\Models
 */
class EmailsQueue extends Eloquent
{
	protected $table = 'emails_queue';
	public $timestamps = false;

	protected $casts = [
		'template_id' => 'int',
		'executed' => 'int'
	];

	protected $dates = [
		'add_date',
		'execute_date'
	];

	protected $fillable = [
		'template_id',
		'to',
		'subject',
		'body',
		'add_date',
		'execute_date',
		'executed'
	];

	public function email_template()
	{
		return $this->belongsTo(\App\Models\EmailTemplate::class, 'template_id');
	}
}
