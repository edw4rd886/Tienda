<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Almacen
 * 
 * @property int $id_producto
 * @property Carbon $fecha
 * @property int $stock
 *
 * @package App\Models
 */
class Almacen extends Model
{
	protected $table = 'almacen';
	protected $primaryKey = 'id_producto';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'stock' => 'int'
	];

	protected $fillable = [
		'fecha',
		'stock'
	];
}
