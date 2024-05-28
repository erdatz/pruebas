<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cajero extends Model
{
    protected $table = 'cajero';
    protected $primaryKey = 'id_cajero';
    protected $fillable = ['id_cajero'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_cajero');
    }
}
