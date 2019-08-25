<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Lang
 * 
 * @property int $id
 * @property string $lang_code
 * @property string $icon
 * @property int $default
 * @property int $status
 * @property string $currency
 * @property float $currency_rate
 * @property int $pos
 * 
 * @property \Illuminate\Database\Eloquent\Collection $car_details
 * @property \Illuminate\Database\Eloquent\Collection $langs_words
 * @property \Illuminate\Database\Eloquent\Collection $list_tour_type_translates
 * @property \Illuminate\Database\Eloquent\Collection $menu_translates
 * @property \Illuminate\Database\Eloquent\Collection $seos
 * @property \Illuminate\Database\Eloquent\Collection $tour_details
 *
 * @package App\Models
 */
class Lang extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'default' => 'int',
		'status' => 'int',
		'currency_rate' => 'float',
		'pos' => 'int'
	];

	protected $fillable = [
		'lang_code',
		'icon',
		'default',
		'status',
		'currency',
		'currency_rate',
		'pos'
	];

	public function car_details()
	{
		return $this->hasMany(\App\Models\CarDetail::class);
	}

	public function langs_words()
	{
		return $this->hasMany(\App\Models\LangsWord::class);
	}

	public function list_tour_type_translates()
	{
		return $this->hasMany(\App\Models\ListTourTypeTranslate::class);
	}

	public function menu_translates()
	{
		return $this->hasMany(\App\Models\MenuTranslate::class);
	}

	public function seos()
	{
		return $this->hasMany(\App\Models\Seo::class);
	}

	public function tour_details()
	{
		return $this->hasMany(\App\Models\TourDetail::class);
	}
}
