<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $id
 * @property Carbon $fecha
 * @property int $id_cliente
 * @property int $id_empleado
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'id_cliente' => 'int',
		'id_empleado' => 'int'
	];

	protected $fillable = [
		'fecha',
		'id_cliente',
		'id_empleado'
	];
}
