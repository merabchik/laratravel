<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PageImage
 * 
 * @property int $id
 * @property int $key_id
 * @property string $filename
 * @property int $primary
 * 
 * @property \App\Models\Page $page
 *
 * @package App\Models
 */
class PageImage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'key_id' => 'int',
		'primary' => 'int'
	];

	protected $fillable = [
		'key_id',
		'filename',
		'primary'
	];

	public function page()
	{
		return $this->belongsTo(\App\Models\Page::class, 'key_id', 'seq_id');
	}
}
