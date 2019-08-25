<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LangsWordsGroup
 * 
 * @property int $id
 * @property string $name
 * @property string $module
 * @property string $controller
 * @property string $action
 *
 * @package App\Models
 */
class LangsWordsGroup extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'module',
		'controller',
		'action'
	];
}
