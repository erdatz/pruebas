<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdministradorSistema extends Model
{
    protected $table = 'administrador_sistema';
    protected $primaryKey = 'id_administrador_sistema';
    protected $fillable = ['id_administrador_sistema'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_administrador_sistema');
    }
}

