<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesVentum
 * 
 * @property int $id
 * @property int $id_producto
 * @property int $cantidad
 * @property int $precio
 * @property int $descuento
 *
 * @package App\Models
 */
class DetallesVentum extends Model
{
	protected $table = 'detalles_venta';
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'cantidad' => 'int',
		'precio' => 'int',
		'descuento' => 'int'
	];

	protected $fillable = [
		'id_producto',
		'cantidad',
		'precio',
		'descuento'
	];
}
