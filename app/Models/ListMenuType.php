<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListMenuType
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $menus
 *
 * @package App\Models
 */
class ListMenuType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function menus()
	{
		return $this->hasMany(\App\Models\Menu::class);
	}
}
