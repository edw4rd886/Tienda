<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id_cliente
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $correo
 * @property int $id_empleado
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	protected $primaryKey = 'id_cliente';
	public $timestamps = false;

	protected $casts = [
		'id_empleado' => 'int'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'telefono',
		'correo',
		'id_empleado'
	];
}
