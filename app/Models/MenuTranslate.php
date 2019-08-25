<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenuTranslate
 * 
 * @property int $id
 * @property int $menu_id
 * @property int $lang_id
 * @property string $title
 * 
 * @property \App\Models\Menu $menu
 * @property \App\Models\Lang $lang
 *
 * @package App\Models
 */
class MenuTranslate extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'menu_id' => 'int',
		'lang_id' => 'int'
	];

	protected $fillable = [
		'menu_id',
		'lang_id',
		'title'
	];

	public function menu()
	{
		return $this->belongsTo(\App\Models\Menu::class);
	}

	public function lang()
	{
		return $this->belongsTo(\App\Models\Lang::class);
	}
}
