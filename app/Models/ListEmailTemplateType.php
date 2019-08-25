<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListEmailTemplateType
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $email_templates
 *
 * @package App\Models
 */
class ListEmailTemplateType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function email_templates()
	{
		return $this->hasMany(\App\Models\EmailTemplate::class);
	}
}
