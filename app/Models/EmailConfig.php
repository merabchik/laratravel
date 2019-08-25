<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EmailConfig
 * 
 * @property int $id
 * @property string $address
 * @property string $params
 *
 * @package App\Models
 */
class EmailConfig extends Eloquent
{
	protected $table = 'email_config';
	public $timestamps = false;

	protected $fillable = [
		'address',
		'params'
	];
}
