<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id_producto
 * @property string $nombre
 * @property string $descripcion
 * @property int $precio
 * @property int $id_cliente
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'id_producto';
	public $timestamps = false;

	protected $casts = [
		'precio' => 'int',
		'id_cliente' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'precio',
		'id_cliente'
	];
}
