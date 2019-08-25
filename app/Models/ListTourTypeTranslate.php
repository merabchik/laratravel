<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListTourTypeTranslate
 * 
 * @property int $id
 * @property int $tour_id
 * @property int $lang_id
 * @property string $title
 * 
 * @property \App\Models\Tour $tour
 * @property \App\Models\Lang $lang
 *
 * @package App\Models
 */
class ListTourTypeTranslate extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tour_id' => 'int',
		'lang_id' => 'int'
	];

	protected $fillable = [
		'tour_id',
		'lang_id',
		'title'
	];

	public function tour()
	{
		return $this->belongsTo(\App\Models\Tour::class);
	}

	public function lang()
	{
		return $this->belongsTo(\App\Models\Lang::class);
	}
}
