<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property int|null $id_empleado
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $telefono
 * @property int $id_cliente
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleados';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_empleado' => 'int',
		'id_cliente' => 'int'
	];

	protected $fillable = [
		'id_empleado',
		'nombre',
		'apellido',
		'correo',
		'telefono',
		'id_cliente'
	];
}
