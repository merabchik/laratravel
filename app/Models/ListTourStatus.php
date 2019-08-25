<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 11 Aug 2019 12:11:59 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListTourStatus
 * 
 * @property int $id
 * @property int $seq_id
 * @property int $lang_id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tours
 *
 * @package App\Models
 */
class ListTourStatus extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'seq_id' => 'int',
		'lang_id' => 'int'
	];

	protected $fillable = [
		'seq_id',
		'lang_id',
		'name'
	];

	public function tours()
	{
		return $this->hasMany(\App\Models\Tour::class, 'list_tour_status_id', 'seq_id');
	}
}
