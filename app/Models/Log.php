<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Log
 * 
 * @property int $id
 * @property string $route
 * @property string $ipaddr
 * @property \Carbon\Carbon $create_date
 * @property string $log
 *
 * @package App\Models
 */
class Log extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'create_date'
	];

	protected $fillable = [
		'route',
		'ipaddr',
		'create_date',
		'log'
	];
}
