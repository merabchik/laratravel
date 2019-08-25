<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Versioning
 * 
 * @property int $id
 * @property string $currentversion
 * @property string $description
 * @property \Carbon\Carbon $create_date
 *
 * @package App\Models
 */
class Versioning extends Eloquent
{
	protected $table = 'versioning';
	public $timestamps = false;

	protected $dates = [
		'create_date'
	];

	protected $fillable = [
		'currentversion',
		'description',
		'create_date'
	];
}
