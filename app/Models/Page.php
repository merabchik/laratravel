<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Page
 * 
 * @property int $id
 * @property int $seq_id
 * @property int $lang_id
 * @property string $title
 * @property string $content
 * @property string $meta_keywords
 * @property string $meta_description
 * @property \Carbon\Carbon $create_date
 * @property \Carbon\Carbon $modify_date
 * @property int $modifier_id
 * 
 * @property \Illuminate\Database\Eloquent\Collection $page_images
 *
 * @package App\Models
 */
class Page extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'seq_id' => 'int',
		'lang_id' => 'int',
		'modifier_id' => 'int'
	];

	protected $dates = [
		'create_date',
		'modify_date'
	];

	protected $fillable = [
		'seq_id',
		'lang_id',
		'title',
		'content',
		'meta_keywords',
		'meta_description',
		'create_date',
		'modify_date',
		'modifier_id'
	];

	public function page_images()
	{
		return $this->hasMany(\App\Models\PageImage::class, 'key_id', 'seq_id');
	}
}
