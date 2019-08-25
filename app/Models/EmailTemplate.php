<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EmailTemplate
 * 
 * @property int $id
 * @property int $list_email_template_type_id
 * @property string $template_name
 * @property string $template_body
 * @property \Carbon\Carbon $add_date
 * 
 * @property \App\Models\ListEmailTemplateType $list_email_template_type
 * @property \Illuminate\Database\Eloquent\Collection $emails_queues
 *
 * @package App\Models
 */
class EmailTemplate extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_email_template_type_id' => 'int'
	];

	protected $dates = [
		'add_date'
	];

	protected $fillable = [
		'list_email_template_type_id',
		'template_name',
		'template_body',
		'add_date'
	];

	public function list_email_template_type()
	{
		return $this->belongsTo(\App\Models\ListEmailTemplateType::class);
	}

	public function emails_queues()
	{
		return $this->hasMany(\App\Models\EmailsQueue::class, 'template_id');
	}
}
