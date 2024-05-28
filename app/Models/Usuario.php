<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre_usuario', 'nombre', 'apellido_paterno', 'apellido_materno',
        'correo', 'contrasena', 'telefono'
    ];

    protected $hidden = [
        'contrasena'
    ];

    public function administradorSistema()
    {
        return $this->hasOne(AdministradorSistema::class, 'id_administrador_sistema');
    }

    public function cajero()
    {
        return $this->hasOne(Cajero::class, 'id_cajero');
    }
}
