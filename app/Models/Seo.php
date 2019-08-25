<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Seo
 * 
 * @property int $id
 * @property int $lang_id
 * @property string $route
 * @property string $keywords
 * @property string $descriptions
 * @property string $title
 * 
 * @property \App\Models\Lang $lang
 *
 * @package App\Models
 */
class Seo extends Eloquent
{
	protected $table = 'seo';
	public $timestamps = false;

	protected $casts = [
		'lang_id' => 'int'
	];

	protected $fillable = [
		'lang_id',
		'route',
		'keywords',
		'descriptions',
		'title'
	];

	public function lang()
	{
		return $this->belongsTo(\App\Models\Lang::class);
	}
}
