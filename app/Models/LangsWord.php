<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LangsWord
 * 
 * @property int $id
 * @property int $langs_words_group_id
 * @property string $word
 * @property string $define_word
 * @property int $lang_id
 * 
 * @property \App\Models\Lang $lang
 *
 * @package App\Models
 */
class LangsWord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'langs_words_group_id' => 'int',
		'lang_id' => 'int'
	];

	protected $fillable = [
		'langs_words_group_id',
		'word',
		'define_word',
		'lang_id'
	];

	public function lang()
	{
		return $this->belongsTo(\App\Models\Lang::class);
	}
}
