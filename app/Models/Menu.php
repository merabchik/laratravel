<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Menu
 * 
 * @property int $id
 * @property int $list_menu_type_id
 * @property string $menu_link
 * @property int $is_active
 * @property int $position
 * 
 * @property \App\Models\ListMenuType $list_menu_type
 * @property \Illuminate\Database\Eloquent\Collection $menu_translates
 *
 * @package App\Models
 */
class Menu extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'list_menu_type_id' => 'int',
		'is_active' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'list_menu_type_id',
		'menu_link',
		'is_active',
		'position'
	];

	public function list_menu_type()
	{
		return $this->belongsTo(\App\Models\ListMenuType::class);
	}

	public function menu_translates()
	{
		return $this->hasMany(\App\Models\MenuTranslate::class);
	}
}
