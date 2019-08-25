<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Aug 2019 12:27:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListCurrency
 * 
 * @property int $id
 * @property int $name
 * @property float $rate
 * @property string $symbol
 * @property string $code
 * @property int $decimals
 * @property string $symbol_position
 * @property int $order_position
 * @property int $default
 * @property int $is_active
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * @property int $creator
 * @property int $modifier
 *
 * @package App\Models
 */
class ListCurrency extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'name' => 'int',
		'rate' => 'float',
		'decimals' => 'int',
		'order_position' => 'int',
		'default' => 'int',
		'is_active' => 'int',
		'creator' => 'int',
		'modifier' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'name',
		'rate',
		'symbol',
		'code',
		'decimals',
		'symbol_position',
		'order_position',
		'default',
		'is_active',
		'created',
		'modified',
		'creator',
		'modifier'
	];
}
