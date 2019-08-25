<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Setting
 * 
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $value
 * @property string $comment
 *
 * @package App\Models
 */
class Setting extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'name',
		'value',
		'comment'
	];
}
